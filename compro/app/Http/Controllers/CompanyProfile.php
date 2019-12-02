<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use App\m_daftarpasien;
use App\m_daftar;
use Mail;
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
        ->select('email')
        ->where(['email'=>$user])->first();

        $dataa=DB::table('h_pasien')
        ->select('email')->get();

        $data1=[
            'password' =>$pass
        ];

        //if(count((array)$data)==0){ 
           //return redirect('reset')->with('alert','Reset password failed, Your email is nothing!');
        //}else if($pass==$pass2){
               //$apa=m_daftarpasien::where('email', $user);
               //$apa->update($data1);
               //return redirect('reset')->with('alert-success','Kamu berhasil Register');
        //}else{
                //alert('alert', 'password not same');
        //}

        if(count((array)$data)==0){ 
            return redirect('reset')->with('alert','Reset password failed, Your email is nothing!');
        }else if($dataa==$user){
            return redirect('reset')->with('alert','Reset password failed, Your email is nothing!');
        }else if($pass==$pass2){
            $apa=m_daftarpasien::where('email', $user);
            $apa->update($data1);
            return redirect('reset')->with('alert-success','Success Reset Password');
        }else{
            return redirect('reset')->with('alert', 'password not same');
        }
        //m_daftarpasien::insert($data1); //simpan ke tabel h_pasien
        //m_daftar::insert($data3); // simpan ke tabel daftar
    }

    public function assesnew(Request $request){
        $now=date('ymd');

        $idd = $request->input('idd');
        //$namad = $request->input('namad');
        //$emaild = $request->input('emaild');

        $ambil=m_daftarpasien::where('id_pasien', $idd)->first();
        $namad = $ambil->username;
        $emaild = $ambil->email;

        $data=[
            'tgl' => $now,
            'id_pasien' => $idd,
            'nama' => $namad,
            'email' => $emaild,
            'keterangan' => 'Asses',
            'Status' => 'Request'
        ];

        $apa=DB::table('request_dash');
        $apa->insert($data);
        return redirect('isi')->with('alert-successs','Success Request New Asses');
    }

    public function reqdownload(Request $request){
        $now=date('ymd');

        $idd = $request->input('idd');
        //$nam = $request->input('nam');
        $a = $request->input('nam');
        $b = $request->input('nbm');
        $c = $request->input('ncm');
        $nam = $a+$b+$c;

        $ambil=m_daftarpasien::where('id_pasien', $idd)->first();
        $namad = $ambil->username;
        $emaild = $ambil->email;

        $dataa=[
            'tgl' => $now,
            'id_pasien' => $idd,
            'nama' => $namad,
            'email' => $emaild,
            'keterangan' => 'Kuesioner',
            'jenis_terapi' => $a+$b+$c,
            'Status' => 'Request'
        ];

        $new=DB::table('request_dash');
        $new->insert($dataa);
        return view('users.isi')->with('alert-success','Success Request Kuesioner');
    }

    public function kirim(Request $request){
        $now=date('ymd');

        $id_pasien = $request->input('id_pasien');
        $email = $request->input('email');
        $username = $request->input('username');
        $password = md5($request->input('password'));

        $ambil=DB::table('h_pasien')->select('email')
        ->where(['email'=>$email])->first();

        $data=DB::table('h_pasien')->select('email')->first();

        $data1=[
            'id_pasien' => $id_pasien,
            'email' => $email,
            'username' => $username,
            'password' => $password,
            'konfirmasi' => 'Belum'
        ];

        $data2=DB::table('h_pasien')
        ->select('email')
        ->where(['email'=>$email])->first();

        $data3=[
            'id_pasien' => $id_pasien,
            'tgl' => $now,
            'status' => 0
        ];


        if(count((array)$data2)==1){ 
                return redirect('reg')->with('alert','Registration Failed, Your e-mail already exists');
        }else{
                //Mail::to($ambil)->send(new ActivationEmail($user));
                Mail::send('users.maill', compact('id_pasien'), function($message) use($data1, $id_pasien){
                set_time_limit(300);
                $message->priority('importance');
                $message->to($data1['email'])->subject('Email Verification');
                //$message->attachData($output, 'Your Payroll '.date('d-m-Y').'.pdf');
                });

                m_daftarpasien::insert($data1); //simpan ke tabel h_pasien
                m_daftar::insert($data3); // simpan ke tabel daftar
                return redirect('reg')->with('alert-success','Registration Success');
        }  
    }

    public function konfirmasi($id){
        $id = $id;
        return  view('users.konfirm',[
            'id' => $id
        ]);
    }

    public function submit($id){
        $id=$id;

        $data=[
            'konfirmasi'=>'Sudah'
        ];

        //$apa=m_daftarpasien::where('id_pasien', $id);
        //$apa->update($data);
        m_daftarpasien::update(['konfirmasi'=>'Sudah']);

        return redirect('/isi')->with('alert-success','Registration Success');
    }

}
