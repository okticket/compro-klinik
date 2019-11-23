<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use App\m_daftarpasien;
use DB;


class LoginController extends Controller
{

    public function loginn(Request $request){
      //$this->validate($request,['username'=>'required'],['password'=>'required']);
 
      $user = $request->input('username');
      $pass = md5($request->input('password'));
      $idd=Session::get('id_pasien');
      $ambil=DB::table('d_pasien')->select('id_pasien')
      ->where(['id_pasien'=>$idd])->first();
           
      //$users = DB::table('h_pasien')
      //->join('d_pasien','d_pasien.id_pasien','=','h_pasien.id_pasien')
     // ->select('*','d_pasien.id_pasien')
      //->where(['username'=>$user, 'password'=>$pass])->first();

      $userlain = DB::table('h_pasien')
      ->where(['username'=>$user, 'password'=>$pass])->first();

        if(count((array)$userlain)==0){
           return redirect('log')->with('alert','Login gagal');
        }else if($user == $userlain->username AND $pass == $userlain->password){
           Session::put('login', 'Selamat anda berhasil login');
           Session::put('id_pasien',$userlain->id_pasien);
           //$cek=count((array)$ambil)==1;
           //$cekk=$userlain->id_pasien;
           if (count((array)$ambil)==0) {
              return redirect('pass')->with('alert','Data gaada');
           }else if($idd == $ambil->id_pasien){
              return redirect('isi')->with('alert-success','Login berhasil');
           }
        } else { 
           return redirect('log')->with('alert','Login failed, username or password is wrong! Try Again');
        }
    }

    public function logout(){
        Auth::logout();
        Session::unset();
        return redirect('/')->with('alert-success','Kamu sudah logout');
    }
}