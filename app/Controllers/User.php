<?php

namespace App\Controllers;

class User extends BaseController
{
    public function login(): string
    {
        return view('User/login');
    }

    public function forgetpassword(){
        return view('User/forgetpassword');
    }
    public function resetpassword(): string
    {
        return view('User/resetpassword');
    }
    public function checkotp(): string
    {
        return view('User/checkotp');
    }

}
