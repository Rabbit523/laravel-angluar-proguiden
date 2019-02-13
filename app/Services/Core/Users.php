<?php

namespace App\Services\Core;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

use App\Models\Core\User;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class Users
{

    public static function init()
    {
        $users = array();
        // $admin = ['first_name' => "Maforsikring",'last_name' => "Admin",'role_id' => 1,'email' => "admin@maforsikring.no",'password' => "123456"];
        $admin = ['first_name' => "Maforsikring",'last_name' => "Admin",'role_id' => 1,'email' => "maforsikring@maforsikring.no",'password' => "KRgXD59tu@@hcSF*"];
        array_push($users, self::create($admin));
        return  $users;
    }
    

    public static function create($data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password'])
        ]);
    }

    public static function authenticate($email, $password)
    {
        $data = ["error" => "Wrong Crendetials"];
        if (Auth::attempt(['email' => $email, 'password' => $password])) {
            $data = ["user" => Auth::user(), "redirect" => route("home")]; 
        }
        return $data;
    }
}
