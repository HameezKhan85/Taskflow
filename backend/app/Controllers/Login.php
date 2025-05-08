<?php
namespace App\Controllers;
use App\Models\HomeModel;
use CodeIgniter\Controller;
use CodeIgniter\RESTful\ResourceController;
use App\Libraries\LoginUser;
class Login extends ResourceController
{
    protected $db;
    public function __construct()
    {
        $this->db = \Config\Database::connect();
        $this->homeModel = new HomeModel();    
    }
    public function index()
    {
        $post_data = $this->request->getPost();
        $rules = ['email'=>'required|valid_email', 'password' => 'required|min_length[6]'];
        if (!$this->validate($rules)) {
            return $this->respond(['status'  => false,'message' => $this->validator->getErrors(), ]);
        }
        $user = $this->homeModel->getLogindetail($post_data['email'], $post_data['password']);
        if($user){
           $token = bin2hex(random_bytes(32));
           $expiry = date('Y-m-d H:i:s', strtotime('+2 hours'));
           $this->db->table('users')->where('id', $user['id'])->set('token', $token)->set('token_expiry', $expiry)->update();
           return $this->respond([
            'status'  => true,
            'data'    => [
                'Usertoken'   => $token,
                'id'    => $user['id'],
                'username'  => $user['username'],
                'email' => $user['email'],
            ]
        ]);
        }
        return $this->respond([
            'status'  => false,
            'message' => 'Invalid credentials',
        ]);
          
    }
    public function create_account(){
        $user_data = LoginUser::get();
        $post_data = $this->request->getPost();
        $rules = [
            'username' => 'required|min_length[3]|is_unique[users.username]',
            'email' => 'required|valid_email|is_unique[users.email]',
            'password' => 'required|min_length[6]',
            'confirm_password' => 'required|matches[password]'
        ];
        if (!$this->validate($rules)) {
            return $this->respond(['status'  => false,'message' => $this->validator->getErrors(), ]);
        }
        $data['username'] = $post_data['username'];
        $data['email'] = $post_data['email'];
        $data['password'] = $post_data['password'];
        $data['password_backup'] = $post_data['password'];
         $userID = $this->homeModel->insertData('users',$data);
         if($userID){
           return $this->respond(['status'=>true,'message'=>'Account Create Successful']);
         }else{
            return $this->respond(['status'=>false,'message'=>'Account Create failed!']);
         }
    }
    public function logout()
    {
        $userToken = $this->request->getHeaderLine('Usertoken');
        $user = $this->db->table('users')->where('token',$userToken)->get()->getRowArray();
        if(!$user){
            return $this->respond(['status' => false,'message'=>'Invalid token',]);
        }
        $this->db->table('users')->where('id',$user['id'])->update(['token'=>null, 'token_expiry'=>null]);
        return $this->respond(['status'=>true,'message'=>'Logout successful']);  
    }
   
}