<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BantuanController extends Controller
{
    public function admin()
    {
        return view('bantuan.admin');
    }

    public function walikelas()
    {
       return view('bantuan.walikelas');
    }
}
