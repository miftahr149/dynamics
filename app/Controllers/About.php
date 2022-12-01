<?php

namespace App\Controllers;

class About extends BaseController
{
    public function index()
    {
        $data['menu'] = 'about';
        $data['title'] = 'ABOUT';
        return view('About/ViewIndex', $data);
    }
}
