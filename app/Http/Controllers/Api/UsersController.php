<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;

use App\Services\Core\Users;


class UsersController extends ApiController
{
    
    public function init() {
        return $this->json(
            Users::init()
        );
    }
    
    public function authenticate(Request $request) {
        $auth = Users::authenticate($request->input("email"), $request->input("password"));
        if (!isset($auth["error"])) {
            return redirect('/cashback/profil/');
        } else {
            return redirect('/logg-inn');
        }
    }

    public function create(Request $request) {
        $data = [
            'name' => null !== $request->input('name') ? $request->input('name') : $request->input('email'),
            'email' => $request->input('email'),
            'password' => $request->input('password')
        ];
        $user = Users::create($data);
        if (!isset($user["error"])) {
            $auth = Users::authenticate($request->input("email"), $request->input("password"));
            if (!isset($auth["error"])) {
                return redirect('/cashback/profil/');
            }
            return redirect('/hjem');
        } else {
            return redirect('/bli-medlem');
        }
    }
}
