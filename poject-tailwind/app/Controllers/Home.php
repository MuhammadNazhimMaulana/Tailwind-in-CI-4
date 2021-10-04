<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        return view('Admin_View/home_admin');
    }
}
