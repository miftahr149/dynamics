<?php

namespace App\Controllers;

class nfll extends BaseController
{
    public function index()
    {
        $data['menu'] = 'nfll';
        return view('Nfll/ViewIndex',$data);
    }
}
