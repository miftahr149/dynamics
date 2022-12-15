<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $data['menu'] = 'home';
        return view('Home/ViewIndex', $data);

        // return view('welcome_message');
    }
}
