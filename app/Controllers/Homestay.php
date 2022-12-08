<?php

namespace App\Controllers;

class Homestay extends BaseController
{
    public function index()
    {
        $data['homestay'] = 'homestay';
        return view('Homestay/ViewIndex',$data);
    }
}