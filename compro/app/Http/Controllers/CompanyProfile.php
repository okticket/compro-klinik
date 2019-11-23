<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use App\m_daftarpasien;
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

    public function Reset(){
        return view('users.reset');
    }

    public function Umum(){
        return view('kuesioner.umum');
    }

    public function resett(Request $request){

        //$apa=alat_terapi::where('id_barang', $id_barang);
        //$apa->update($dataat);
        
        $user = $request->input('mail');
        $pass = md5($request->input('pass1'));
        $pass2 = md5($request->input('pass2'));
        //$idd=Session::get('id_pasien');

        $data=DB::table('h_pasien')
        ->select('*')
        ->where(['email'=>$user])->get();

        $data1=[
            'email' => $user,
            'password' =>$pass
        ];

        if(count((array)$data)==0){
           return redirect('reset')->with('alert','Reset password failed');
        }else if($pass==$pass2){
               $apa=m_daftarpasien::where('email', $user);
               $apa->update($data1);
        }else{
                alert('alert', 'password not same');
        }
        //m_daftarpasien::insert($data1); //simpan ke tabel h_pasien
        //m_daftar::insert($data3); // simpan ke tabel daftar
        return redirect('reset')->with('alert-success','Kamu berhasil Register');
    }
}
