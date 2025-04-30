<?php
namespace App\Controllers;
use App\Models\HomeModel;
use CodeIgniter\Controller;
use CodeIgniter\RESTful\ResourceController;
class Login extends ResourceController
{
    protected $db;
    public function __construct()
    {
        $this->db = \Config\Database::connect();
        $this->homeModel = new HomeModel();
        $session = \Config\Services::session();
       
    }
    // public function index(): string
    // {
    //     error_reporting(E_ALL);
    //     ini_set('display_errors', true);
    //     $post_data = $this->request->getPost();

    //     $user = $this->homeModel->getLogindetail($post_data['email'], $post_data['password']);
    //     if($user){
    //        $token = bin2hex(random_bytes(32));
    //        $expir
    //     }


       
    // }
   public function logout()
    {
        // Start the session
        $session = session();
        // Destroy the session
        $session->destroy();
        // Set flashdata for logout message
        $session->setFlashdata('logout', 'You have been logged out.');
        // Redirect to admin URL
         echo "<script>window.location.replace('".base_url('login')."');</script>";
    }
}