<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    public function maill(){
        return view('users.maill');
    }

    public function satu(){
        return view('artikel.artikel1');
    }

    public function dua(){
        return view('artikel.artikel2');
    }

    public function tiga(){
        return view('artikel.artikel3');
    }

    public function empat(){
        return view('artikel.artikel4');
    }

    public function lima(){
        return view('artikel.artikel5');
    }

    public function enam(){
        return view('artikel.artikel6');
    }
}
