<?php

namespace App\Controllers;

class Contact extends BaseController
{
    public function index()
    {
        $data['menu'] = 'contact';
        return view('Contact/ViewIndex',$data);
    }
}
