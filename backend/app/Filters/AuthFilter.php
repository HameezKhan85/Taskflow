<?php

namespace App\Filters;

use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\Filters\FilterInterface;
use Config\Services;
use App\Libraries\LoginUser;

class AuthFilter implements FilterInterface
{
    public function before(RequestInterface $request, $arguments = null)
    {
       
        $token = $request->getHeaderLine('Usertoken');
        if (!$token) {
            return Services::response()
                ->setJSON(['status' => false, 'message' => 'Authorization token required'])
                ->setStatusCode(401);
        }
        $db = \Config\Database::connect();
        $builder = $db->table('users');
        $builder->where('token', $token);
        $builder->where('token_expiry >=', date('Y-m-d H:i:s'));
        $user = $builder->get()->getRow();
          
        if (!$user) {
            return Services::response()
                ->setJSON(['status' => false, 'message' => 'Token expired or invalid'])
                ->setStatusCode(401);
        }
        //*********** Login User Data Globally Access like (sessions)**************** */
        LoginUser::set($user);
    }

    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
    {

    }
}
