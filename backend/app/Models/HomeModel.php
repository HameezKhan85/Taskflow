<?php
namespace App\Models;
use CodeIgniter\Model,
DataTables\Editor,
DataTables\Editor\Field,
DataTables\Editor\Format,
DataTables\Editor\Mjoin,
DataTables\Editor\Options,
DataTables\Editor\Upload,
DataTables\Editor\Validate,
DataTables\Editor\ValidateOptions;
use Config\Services;
use App\Libraries\LoginUser;
class HomeModel extends Model
{

    public function insertData($table = false,$data = false){
        $query = $this->db->table($table);
        $query->insert($data);
        return $this->db->insertID();
        
    }
    public function updateData($table = false,$data = false,$where = false){
        $query = $this->db->table($table)->where($where)->update($data);
        return $query;
    }
    public function softDelete($table = false,$data = false,$where = false){
        $query = $this->db->table($table)->where($where)->update($data);
        return $query;
    }
    public function getData($table = false, $type = false, $where = '',$select = '*'){
        if(empty($table)){
            return false;
        }
        $query = $this->db->table($table);
        if(!empty($where)){
           $query->where($where);
        }
        if($type == 'row'){
           return $query->select($select)->get()->getRowArray();
        }
        if($type == 'result'){
            return $query->select($select)->get()->getResultArray();
        }
    }
    public function getLogindetail($email = '', $password = ''){
        $query = $this->db->table('users')->select('*')->where('email',$email)->where('password',$password)->get()->getRowArray();
        return $query;
    }

}