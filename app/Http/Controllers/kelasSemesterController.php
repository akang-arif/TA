<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class kelasSemesterController extends Controller
{
    public function index()
    {
        return view('akademik.kelas_semester.index');
    }
}
