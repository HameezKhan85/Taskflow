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
class HomeModel extends Model
{

public function getdatabyslug($slug =''){
    $builder = $this->db->table('ci_data');
    $query = $builder->select('*')
        ->where('slug', $slug)
        ->where('status', 1)
        ->where('deleted_by <=', 0)
        ->get();

    return $query->getRowArray();
}
public function getLogindetail($email = '', $password = ''){
    $query = $this->db->table('users')->select('*')->where('email',$email)->where('password',$password)->get()->getRowArray();
    return $query;
}

}