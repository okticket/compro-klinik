<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\m_daftarpasien;
use App\m_daftar;
use App\m_kuesiumum;
use Mail;
use DB;

class daftarpasien extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
     protected function create(array $data)
    {
        //$user =  User::create([
            //'name' => $data['name'],
            //'email' => $data['email'],
            //'password' => Hash::make($data['password']),
        //]);

        //$verificationUser = ActivationUser::create([
            //'user_id' => $user->id,
            //'token' => str_random(40)
        //]);

        //return $user;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $data=DB::table('h_pasien')
        ->join('d_pasien','d_pasien.id_pasien','=','h_pasien.id_pasien')->get();

        $now=date('ymd');

        $id_pasien = $request->input('id_pasien');
        $email = $request->input('email');
        $username = $request->input('username');
        $password = md5($request->input('password'));

        $data1=[
            'id_pasien' => $id_pasien,
            'email' => $email,
            'username' => $username,
            'password' => $password
        ];

        $ambil=DB::table('h_pasien')->select('email')
        ->where(['email'=>$email])->first();

        $data3=[
            'id_pasien' => $id_pasien,
            'tgl' => $now,
            'status' => 0
        ];

        //Mail::to($ambil)->send(new ActivationEmail($user));
        Mail::send('users.maill', compact('data'), function($message) use($ambil){
            set_time_limit(300);

            
            $message->priority('importance');
            $message->from('admin@klinikliliput.com', 'Admin');
            $message->to($ambil)->subject('Email Verification');
            //$message->attachData($output, 'Your Payroll '.date('d-m-Y').'.pdf');
        });

        m_daftarpasien::insert($data1); //simpan ke tabel h_pasien
        m_daftar::insert($data3); // simpan ke tabel daftar
        return redirect('reg')->with('alert-success','Kamu berhasil Register');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
