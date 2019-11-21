<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use DB;

class CompanyProfile extends Controller
{
    public function index(){
        return view('users.home');
    }

    public function indexx(){
        return view('users.isi');
    }

    public function Regist(){
        return view('users.daftar');
    }

    public function Login(){
        return view('users.login');
    }

    public function Umum(){
        return view('kuesioner.umum');
    }

}
