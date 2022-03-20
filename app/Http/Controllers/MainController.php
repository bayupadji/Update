<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    //
    public function goHome()
    {
        # code...
        return view('Home');
    }
    public function gologin()
    {
        # code...
        return view('login');
    }

    public function goAdmin()
    {
        # code...
        return view('Admin.detail');
    }

    public function goProfile()
    {
        # code...
        return view('profile');
    }

    public function goDoc()
    {
        # code...
        return view('dokumen');
    }

    public function goStatus()
    {
        # code...
        return view('status');
    }

    public function goPengajuan()
    {
        # code...
        return view('pengajuan');
    }

    public function  goDashboard()
    {
        # code...
        return view('Admin.db');
    }

    public function goAdminDetail()
    {
        # code...
        return view('Admin.detail');
    }
}
