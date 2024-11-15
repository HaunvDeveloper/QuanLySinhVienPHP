<?php

namespace App\Controllers;

class Course extends BaseController
{

    public function list()
    {
        return view('Course/list');
    }

    public function create()
    {
        return view('Course/create');
    }

    public function detail()
    {
        return view('Course/detail');
    }

    public function delete()
    {
        return view('Course/delete');
    }
}
