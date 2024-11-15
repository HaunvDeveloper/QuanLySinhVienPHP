<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view('Home/index');
    }

    public function about()
    {
        return view('Home/about');
    }

    public function teacher()
    {
        return view('Home/teacher');
    }
}
