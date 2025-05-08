<?php 
namespace App\Controllers;
use App\Models\HomeModel;
use CodeIgniter\Controller;
use App\Libraries\LoginUser;
use CodeIgniter\RESTful\ResourceController;
class HomeController extends ResourceController{
    public function __construct()
    {
        $this->db = \Config\Database::connect();
        $this->homeModel = new HomeModel();
        
        
    }
    //*************************** Handling Request ************************************ */
    public function action(){
        $action = $this->request->getPost('action');
        switch($action){
            case 'create-workspace':
                return $this->create_workspace($action);
            case 'update-workspace':
                return $this->update_workspace($action);
            case 'delete-workspace':
                return $this->delete_workspace();
            default:
                return $this->respond(['status' => false, 'message' => 'Invalid action']);
        }
    }
    //*************************** Handling WorkSpace  ********************************* */
    public function view_workspaces(){
        $userData = LoginUser::get();
        $WorkspaceIDs = $this->homeModel->getData('workspace_members','result',['invite_user_id' => $userData->id],'workspace_id'); 
        $workspaceIds = array_column($WorkspaceIDs, 'workspace_id');
        $where  = 'deleted_on = 0 AND owner_id ='.$userData->id;
        if(!empty($workspaceIds)){
            $where .= ' OR id IN ('.implode(',',$workspaceIds).')';
        }
        $allworkspaces = $this->homeModel->getData('workspaces','result',$where);
        if($allworkspaces){
            return $this->respond(['status'  => true,'data' => $allworkspaces]);
       }else{
           return $this->respond(['status'  => false,'message' => 'data not found']);
       }
    }
    private function create_workspace(){
        $userData = LoginUser::get();
        $post_data = $this->request->getPost();
        $rules = ['name'=>'required'];
        if (!$this->validate($rules)) {
            return $this->respond(['status'  => false,'message' => $this->validator->getErrors(), ]);
        }
        $slug = url_title($post_data['name'] . '-' . random_string('numeric', 8), '-', true);
        $data['name']         = $post_data['name'];
        $data['slug']         = $slug;
        $data['owner_id']     = $userData->id;
        $data['content']      = $post_data['content'];
        $data['invite_token'] = bin2hex(random_bytes(16));
        $data['created_at']   = time();
        $data['updated_at']   = time();
        $data['created_by']   = $userData->id;
        $data['updated_by']   = $userData->id;

        $workspaceID = $this->homeModel->insertData('workspaces',$data);

        $user_data['workspace_id ']  = $workspaceID ;
        $user_data['user_id']        = $userData->id;
        $user_data['role']           = 'admin';
        $user_data['join_at']        = time();
        $user_data['created_by']     = $userData->id;
        $user_data['updated_by']     = $userData->id;
        $user_data['updated_at']     = time();
        $user_data['created_at']     = time();

        $workspace_membersID = $this->homeModel->insertData('workspace_members',$user_data);

        if($workspaceID && $workspace_membersID){
             return $this->respond(['status'  => true,'message' => 'Create WorkSpace Successfully']);
        }else{
            return $this->respond(['status'  => false,'message' => 'Failed to Create WorkSpace']);
        }
    }
    private function update_workspace(){
        $userData = LoginUser::get();
        $post_data = $this->request->getPost();
        $rules = ['name'=>'required'];
        if (!$this->validate($rules)) {
            return $this->respond(['status'  => false,'message' => $this->validator->getErrors(), ]);
        }
        $data['name']       = $post_data['name'];
        $data['content']    = $post_data['content'];
        $data['updated_at'] = time();
        $data['updated_by'] = $userData->id;
         $where = "id = ".$post_data['workspaceID'];
        $updateWorkspaceID = $this->homeModel->updateData('workspaces',$data,$where);
        if($updateWorkspaceID){
             return $this->respond(['status'  => true,'message' => 'Update WorkSpace Successfully']);
        }else{
            return $this->respond(['status'  => false,'message' => 'Failed to Update WorkSpace']);
        }
    }
    private function delete_workspace(){
        $userData = LoginUser::get();
        $post_data = $this->request->getPost();
        $where = "id = ".$post_data['workspaceID'];
        $data['deleted_on'] = 1;
        $data['deleted_by'] = $userData->id;
        $data['deleted_at'] = time();
        $workspaceDeleteID = $this->homeModel->softDelete('workspaces',$data,$where);
        if($workspaceDeleteID){
            return $this->respond(['status'  => true,'message' => 'Delete WorkSpace Successfully']);
        }else{
            return $this->respond(['status'  => false,'message' => 'Failed to Delete WorkSpace']);
        }
    }
    //*************************** Handling WorkSpace User Invite Link Generating  ********************************* */
    public function generateInviteLink(){
        $userData = LoginUser::get();
        $UserID = $userData->id;
        $token = '';
        $workspaceID = $this->request->getPost('workspace_id');
        if(!$workspaceID){
            return respond(['status'=>false, 'message'=>'workspace_id is required']);
        }
        $workspace =  $this->db->table('workspaces')->where('owner_id',$UserID)->where('id',$workspaceID)->get()->getRow();
        if ($workspace->invite_token == 0) {
            $token = $workspace->invite_token;
            $inviteLink = URL.'invite/' . $token;
            return $this->respond(['status' => true,'message' => 'Invite link generated successfully','invite_link' => $inviteLink ]);
        } else {
             $token = bin2hex(random_bytes(16));
             $data['invite_token'] = $token;
             $data['token_status'] = 0;
             $this->homeModel->updateData('workspaces',$data,['id'=>$workspaceID]);
             $inviteLink = URL.'invite/' . $token;
             return $this->respond(['status' => true,'message' => 'Invite link generated successfully','invite_link' => $inviteLink ]);
        }
        
    }
    public function acceptInvite($token){
        $userData = LoginUser::get()??'';
        $workspace =  $this->db->table('workspaces')->where('invite_token',$token)->get()->getRow();
        if($workspace->token_status == 0){
            if(!$userData){
                return $this->respond(['status' => false, 'message' => 'Please log in or register.']);
            }
            $already = $this->db->table('workspace_members')->where('invite_user_id',$userData->id)->where('workspace_id',$workspace->id)->countAllResults();
            if($already>0){
                return $this->respond(['status' => true, 'message' => 'You are already a member of this workspace']);
            }
            $data['workspace_id ']  = $workspace->id;
            $data['user_id']        = $workspace->owner_id;
            $data['invite_user_id'] = $userData->id;
            $data['role']           = 'viewer';
            $data['join_at']        = time();
            $data['created_by']     = $workspace->owner_id;
            $data['created_by']     = $workspace->owner_id;
            $data['updated_at']     = time();
            $data['created_at']     = time();
            $memberInviteID = $this->homeModel->insertData('workspace_members',$data);
            if($memberInviteID){ 
                return $this->respond(['status' => true, 'message' => 'You have joined the workspace']);
            }else{
                return $this->respond(['status'=>false, 'message'=>'Somthing Want Wrong']);
            }
         }else{
            return $this->respond(['status' =>false, 'message' => 'This Linked is Not available for longer']);
         }
    }
    public function disableInviteLink(){
        $workspaceID = $this->request->getPost('workspace_id');
        $data['token_status'] = 1;
        $this->homeModel->updateData('workspaces',$data,['id'=>$workspaceID]);
        return $this->respond(['status' => true, 'message' => 'Disable Invite Link']);

    }
      //*************************** Handling WorkSpace Users  ********************************* */
    public function getInviteUsers(){
        $userData = LoginUser::get()??'';
        $workspaceID = $this->request->getGet('workspace_id');
        $where = ['workspace_id' => $workspaceID,'deleted_on' => 0,'user_id' => $userData->id];
        $InvitedUser = $this->homeModel->getData('workspace_members','result',$where);
        if($InvitedUser){
            return $this->respond(['status'=>true ,'data'=>$InvitedUser]);
        }else{
            return $this->respond(['status'=>true ,'message'=> 'User Not Found']); 
        }
    }
    private function updateInviteUsers(){
        $userData = LoginUser::get();
        $post_data = $this->request->getPost();
        if($post_data['role'] == 'admin'){
            $data['role']      = $post_data['role'];
            $data['team_lead'] = $post_data['team_lead'];

            $updateUser = $this->homeModel->updateData('workspace_members',$data,['id'=>$post_data['id']]);
            if($InvitedUser){
                return $this->respond(['status'=>true ,'message'=>'Update User Successfully.']);
            }else{
                return $this->respond(['status'=>false ,'message'=> 'Somthing Want Wrong']); 
            }
        }else{
            return $this->respond(['status'=>false ,'message'=> 'Somthing Want Wrong']); 
        }
    }
    private function deleteIviteUsers(){
        $userData = LoginUser::get();
        $post_data = $this->request->getPost();
            if($post_data['role'] == 'admin'){
            $where = "id = ".$post_data['id'];
            $data['deleted_on'] = 1;
            $data['deleted_by'] = $userData->id;
            $data['deleted_at'] = time();
            $workspaceDeleteID = $this->homeModel->softDelete('workspace_members',$data,$where);
            if($workspaceDeleteID){
                return $this->respond(['status'  => true,'message' => 'Delete User Successfully']);
            }else{
                return $this->respond(['status'  => false,'message' => 'Failed to Delete User']);
            }
        }else{
            return $this->respond(['status'=>false ,'message'=> 'Somthing Want Wrong']); 
        }
    }
}