<?php

namespace App\Controllers;

class Competition extends BaseController
{
    public function index()
    {
        $data['menu'] = 'Competition';
        $data['title'] = 'COMPETITION';
        return view('Competition/ViewIndex', $data);
    }
}
