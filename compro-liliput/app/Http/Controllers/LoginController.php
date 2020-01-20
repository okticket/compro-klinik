<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use App\m_daftarpasien;
use DB;


class LoginController extends Controller
{
    //
    public function login(Request $request){
      //$this->validate($request,['username'=>'required'],['password'=>'required']);
 
      $user = $request->input('username');
      $pass = md5($request->input('password'));
           
      //$users = DB::table('h_pasien')
      //->join('d_pasien','d_pasien.id_pasien','=','h_pasien.id_pasien')
     // ->select('*','d_pasien.id_pasien')
      //->where(['username'=>$user, 'password'=>$pass])->first();

      $userlain = DB::table('h_pasien')
      ->where(['email'=>$user, 'password'=>$pass])->first();

        if(count((array)$userlain)==0){
           return redirect('login')->with('alert','Login Failed, username or password is wrong! Try Again');
        }else if($user==$userlain->email AND $pass==$userlain->password){
           Session::put('login', TRUE);
           Session::put('id_pasien',$userlain->id_pasien);
           //$cek=count((array)$ambil)==1;
           //$cekk=$userlain->id_pasien;
            $idd=Session::get('id_pasien');
            $ambil=DB::table('d_pasien')->select('id_pasien')
            ->where(['id_pasien'=>$idd])->first();
           if (count((array)$ambil)==0) {
              return redirect('kuisioner_umum');
           }else if($idd == $ambil->id_pasien){
              return redirect('/')->with('alert-success','Login Success!');
           }
        } else { 
           return redirect('login')->with('alert','Login failed, username or password is wrong! Try Again');
        }
    }

    public function logout(){
        Session::flush();
        return redirect('/')->with('alert-success','Logout Success!');
    }
}
