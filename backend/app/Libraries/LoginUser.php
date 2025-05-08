<?php 
namespace App\Libraries;
class LoginUser
{
    protected static $user = null;

    public static function set($user){
        self::$user = $user;
    }
    public static function get(){
        return self:: $user;
    }
}