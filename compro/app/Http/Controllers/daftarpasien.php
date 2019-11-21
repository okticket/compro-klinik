<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\m_daftarpasien;
use App\m_daftar;
use App\m_kuesiumum;
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
        $user =  User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);

        $verificationUser = ActivationUser::create([
            'user_id' => $user->id,
            'token' => str_random(40)
        ]);

        Mail::to($user->email)->send(new ActivationEmail($user));

        return $user;
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

        $data1=[
            'id_pasien' => $request->id_pasien,
            'email' => $request->email,
            'username' => $request->username,
            'password' => md5($request->password)
        ];

        $data3=[
            'id_pasien' => $request->id_pasien,
            'tgl' => $now,
            'status' => 0
        ];

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

    public function Activation($token)
    {
        $verificationUser = ActivationUser::where('token', $token)->first();
        if(isset($verificationUser) ){
            $user = $verificationUser->user;
            if(!$user->verified) {
                $verificationUser->user->is_verified = 1;
                $verificationUser->user->save();
                $status = "Email Kamu Terlah Terverifikasi. Silahkan login sekarang juga.";
            }else{
                $status = "Email Kamu Terlah Terverifikasi Sebelumnya. Silahkan login sekarang juga.";
            }
        }else{
            return redirect('/login')->with('warning', "Maaf Email Tidak dapat di identifikasi.");
        }
 
        return redirect('/login')->with('status', $status);
    }

    protected function registered(Request $request, $user)
    {
        $this->guard()->logout();
        return redirect('/login')->with('status', 'Kami Mengirimkan Code Konfirmasi. Cek Email Kamu dan Ikuti Link Verify Email.');
    }
}
