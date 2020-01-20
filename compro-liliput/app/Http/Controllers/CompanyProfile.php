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
    
    public function index()
    {
        $semua = DB::table('d_pegawai')->select('d_pegawai.*', 'jenis_terapi.terapi')->join('jenis_terapi', 'd_pegawai.id_terapi', '=', 'jenis_terapi.id_terapi')->orderBy('nama', 'asc')->get();
        $terapis_wicara = DB::table('d_pegawai')->select('d_pegawai.*', 'jenis_terapi.terapi')->join('jenis_terapi', 'd_pegawai.id_terapi', '=', 'jenis_terapi.id_terapi')->where('d_pegawai.id_terapi', 'TW')->orderBy('nama', 'asc')->get();
        $terapis_okupasi = DB::table('d_pegawai')->select('d_pegawai.*', 'jenis_terapi.terapi')->join('jenis_terapi', 'd_pegawai.id_terapi', '=', 'jenis_terapi.id_terapi')->where('d_pegawai.id_terapi', 'OT')->orderBy('nama', 'asc')->get();
        $terapis_fisio = DB::table('d_pegawai')->select('d_pegawai.*', 'jenis_terapi.terapi')->join('jenis_terapi', 'd_pegawai.id_terapi', '=', 'jenis_terapi.id_terapi')->where('d_pegawai.id_terapi', 'FT')->orderBy('nama', 'asc')->get();
        return view('home',[
            'semua' => $semua,
            'terapis_wicara' => $terapis_wicara,
            'terapis_okupasi' => $terapis_okupasi,
            'terapis_fisio' => $terapis_fisio
        ]);
    }

    public function ahli()
    {
    
        $semua = DB::table('d_pegawai')->select('d_pegawai.*', 'jenis_terapi.terapi')->join('jenis_terapi', 'd_pegawai.id_terapi', '=', 'jenis_terapi.id_terapi')->orderBy('jenis_terapi.id_terapi', 'ASC')->orderBy('nama', 'ASC')->get();
        $terapis_wicara = DB::table('d_pegawai')->select('d_pegawai.*', 'jenis_terapi.terapi')->join('jenis_terapi', 'd_pegawai.id_terapi', '=', 'jenis_terapi.id_terapi')->where('d_pegawai.id_terapi', 'TW')->orderBy('nama', 'ASC')->get();
        $terapis_okupasi = DB::table('d_pegawai')->select('d_pegawai.*', 'jenis_terapi.terapi')->join('jenis_terapi', 'd_pegawai.id_terapi', '=', 'jenis_terapi.id_terapi')->where('d_pegawai.id_terapi', 'OT')->orderBy('nama', 'ASC')->get();
        $terapis_fisio = DB::table('d_pegawai')->select('d_pegawai.*', 'jenis_terapi.terapi')->join('jenis_terapi', 'd_pegawai.id_terapi', '=', 'jenis_terapi.id_terapi')->where('d_pegawai.id_terapi', 'FT')->orderBy('nama', 'ASC')->get();
        $terapis_edukasi = DB::table('d_pegawai')->select('d_pegawai.*', 'jenis_terapi.terapi')->join('jenis_terapi', 'd_pegawai.id_terapi', '=', 'jenis_terapi.id_terapi')->where('d_pegawai.id_terapi', 'OP')->orderBy('nama', 'ASC')->get();
        return view('ahli',[
            'semua' => $semua,
            'terapis_wicara' => $terapis_wicara,
            'terapis_okupasi' => $terapis_okupasi,
            'terapis_fisio' => $terapis_fisio,
            'terapis_edukasi' => $terapis_edukasi
        ]);
    }

    public function Login(){
        return view('login.login');
    }

    public function Kuisioner(){
        return view('kuisioner.umum');
    }

    public function Regist(){
        return view('daftar');
    }

    public function Artikel($id){
        return view('artikel.artikel', [
        	'id' => $id
        ]);
    }

    public function Reset(){
        return view('reset_password');
    }

    public function sendKuisioner(Request $request)
    {

            $id = $request->id;
            $namaA = $request->namaA;
            $jk = $request->jk;
            $tempatA = $request->tempatA;
            $tglA = $request->tglA;
            $agamaA = $request->agamaA;
            $alamatsekolah = $request->alamatsekolah;
            $alamatrumah = $request->alamatrumah;
            $keluhan = $request->keluhan;
            //foto
            if ($request->file('foto')=='') {
              $Nfoto=$id;
            }else{
            $foto=$request->file('foto');
            $size=$foto->getSize();
            $tipe=$foto->getClientOriginalExtension();
            if ($size>=1024000) {
              return redirect('/pass'.'/'.$id)->with('alert','file foto tidak boleh melebihi dari 1MB');
            }
            $Nfoto=$id;
            $idfoto=$request->$Nfoto;
              if ($idfoto==$id) {

              }elseif($idfoto!=$id) {
                  $data=DB::table('d_pasien')->select('foto')->where('id_pasien',$id)->first();
                  //File::delete('/foto'.$data->foto);
                  $pict=$request->file('foto');
                  $pict->move(public_path().'/foto',$Nfoto);
                  return redirect('/pass'.'/'.$id)->with('alert','done');
              }
            }
            $tlp = $request->tlp;
            $namaayah= $request->namaayah;
            $nikayah= $request->nikayah;
            $agamaayah= $request->agamaayah;
            $alamatayah= $request->alamatayah;
            $kerjaayah= $request->kerjaayah;
            $pendidikanayah= $request->pendidikanayah;
            $tlpayah= $request->tlpayah;
            $emailayah= $request->emailayah;
            $namaibu= $request->namaibu;           
            $nikibu= $request->nikibu;
            $agamaibu= $request->agamaibu;
            $alamatibu = $request->alamatibu;
            $kerjaibu = $request->kerjaibu;
            $pendidikanibu = $request->pendidikanibu;
            $tlpibu = $request->tlpibu;
            $emailibu = $request->emailibu;
            $iq = $request->iq;
            $mapel = $request->mapel;
            $kelas = $request->kelas;
            $nama = $request->nama;
            $selaku = $request->selaku;
            $pendidikan = $request->pendidikan;
            $kerja = $request->kerja;
            $alamat = $request->alamat;

        $datad=[
            'id_pasien'=> $id,
            'nama'=> $namaA,
            'jk'=> $jk,
            'tempat_lahir'=> $tempatA,
            'tgl_lahir'=> $tglA,
            'agama'=> $agamaA,
            'alamatsekolah'=> $alamatsekolah,
            'alamat'=> $alamatrumah,
            'keluhan'=> $keluhan,
            'foto'=> $Nfoto,
            'tlp'=> $tlp,
            'nama_ayah'=> $namaayah,
            'nik_ayah'=> $nikayah,
            'agama_ayah'=> $agamaayah,
            'alamat_ayah'=> $alamatayah,
            'pekerjaan'=> $kerjaayah,
            'pend_ayah'=> $pendidikanayah,
            'tlp_ayah'=> $tlpayah,
            'email_ayah'=> $emailayah,
            'nama_ibu'=> $namaibu,
            'nik_ibu'=> $nikibu,
            'agama_ibu'=> $agamaibu,
            'alamat_ibu'=> $alamatibu,
            'pekerjaan_ibu'=> $kerjaibu,
            'pend_ibu'=> $pendidikanibu,
            'tlp_ibu'=> $tlpibu,
            'email_ibu'=> $emailibu,
            'total_iq'=> $iq,
            'mapel'=> $mapel,
            'kelas'=> $kelas,
            'namapengisi'=> $nama,
            'selaku'=> $selaku,
            'pendidikan'=> $pendidikan,
            'kerja'=> $kerja,
            'alamatpengisi'=> $alamat
        ];

        $now = date('ymd');
        $dataakhir = \App\m_daftarpasien::max('id_pasien');
        $no = $dataakhir;
        $noo = $no++;
        $lama = substr($no, 0, 6);
        $rplc = str_replace($lama, $now, $noo);
        $idasses=$rplc;

        $asses=[
            'id_pasien'=> $id,
            'id_asses'=> $idasses,
            'status_pasien'=> 'Daftar'
        ];

        $recstatus=[       
            'id_pasien'=> $id,
            'id_asses'=> $idasses,
            'keterangan' => 'Daftar',
            'tgl' => $now
        ];

        //m_kuesiumum::insert($datad);
        DB::table('d_pasien')->insert($datad);
        DB::table('assessment')->insert($asses);
        DB::table('record_status_pasien')->insert($recstatus);
        return redirect('/');
    }

    public function DaftarPasien(Request $request)
    {
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

        $dataa=DB::table('h_pasien')
        ->join('d_pasien','d_pasien.id_pasien','=','h_pasien.id_pasien')->get();
        

        if(count((array)$data2)==1){ 
                return redirect('daftar')->with('alert','Registration Failed, Your e-mail already exists');
        }else{
                //Mail::to($ambil)->send(new ActivationEmail($user));
                //Mail::send('users.maill', compact('id_pasien'), function($message) use($data1, $id_pasien){
                //set_time_limit(300);
                //$message->priority('importance');
                //$message->to($data1['email'])->subject('Email Verification');
                //$message->attachData($output, 'Your Payroll '.date('d-m-Y').'.pdf');
                //});

                m_daftarpasien::insert($data1); //simpan ke tabel h_pasien
                m_daftar::insert($data3); // simpan ke tabel daftar
                return redirect('daftar')->with('alert-success','Registration Success');
        }
    }
    public function requestKuisioner(Request $request){
        $abc = $request->ks;

        if (!empty($abc)) {
        	$now=date('ymd');
        

	        $ambil=DB::table('h_pasien')->where('id_pasien', Session::get('id_pasien'))->first();
	        $nama = $ambil->username;
	        $email = $ambil->email;

	        foreach ($abc as $a) {
		        $dataa=[
		            'tgl' => $now,
		            'id_pasien' => Session::get('id_pasien'),
		            'nama' => $nama,
		            'email' => $email,
		            'keterangan' => 'Kuesioner',
		            'jenis_terapi' => $a,
		            'status' => 'Request'
		        ];

		        $new=DB::table('request_dash');
		        $new->insert($dataa);
		    }
        }
        return redirect('/')->with('alert-success','Success Send Request Kuesioner');
    }

    public function assesBaru(Request $request){
        $now=date('ymd');

        //$namad = $request->input('namad');
        //$emaild = $request->input('emaild');

        $ambil=m_daftarpasien::where('id_pasien', Session::get('id_pasien'))->first();
        $namad = $ambil->username;
        $emaild = $ambil->email;

        $data=[
            'tgl' => $now,
            'id_pasien' => Session::get('id_pasien'),
            'nama' => $namad,
            'email' => $emaild,
            'keterangan' => 'Asses',
            'status' => 'Request'
        ];

        $apa=DB::table('request_dash');
        $apa->insert($data);
        return redirect('/')->with('alert-success','Success Request New Asses');
    }


    public function resetPassword(Request $request){

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
            return redirect('/reset_password')->with('alert','Reset password failed, Your email is nothing!');
        }else if($dataa==$user){
            return redirect('/reset_password')->with('alert','Reset password failed, Your email is nothing!');
        }else if($pass==$pass2){
            $apa=m_daftarpasien::where('email', $user);
            $apa->update($data1);
            return redirect('/reset_password')->with('alert-success','Success Reset Password');
        }else{
            return redirect('/reset_password')->with('alert', 'password not same');
        }
        //m_daftarpasien::insert($data1); //simpan ke tabel h_pasien
        //m_daftar::insert($data3); // simpan ke tabel daftar
    }
}
