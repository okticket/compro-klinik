<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\m_daftarpasien;
use App\m_kuesiumum;
use App\m_daftar;
use App\m_asses;
use DB;

class kuesiumum extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //lahir
        $tgl_lahir=$request->input('tgl_lahir');
        $tahun=$tgl_lahir[0];
        $bulan=$tgl_lahir[1];
        $tahun_now=date('Y');
        $bulan_now=date('m');
        $date_now=date('ymd');
        if ($bulan_now>=$bulan) {
          $diff=$tahun_now-$tahun;
        }else{
          $diff=$tahun_now-$tahun-1;
        }
        $umur=$diff;

        return view('kuesioner.umum', [
            'umur'=>$umur
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
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
            //if ($files = $request->file('fileUpload')) {
               //$destinationPath = 'public/image/'; // upload path
               //$profileImage = date('YmdHis') . "." . $files->getClientOriginalExtension();
               //$files->move($destinationPath, $profileImage);
               //$insert['foto'] = "$profileImage";
            //}
                  $file = $request->file('foto');
               
                  // Mendapatkan Nama File
                  $nama_file = $id;
               
                  // Mendapatkan Extension File
                  $extension = $file->getClientOriginalExtension();
              
                  // Mendapatkan Ukuran File
                  $ukuran_file = $file->getSize();
               
                  // Proses Upload File
                  $destinationPath = 'image';
                  $file->move($destinationPath,$nama_file);
            //return Redirect::to("image")
            //->withSuccess('Great! Image has been successfully uploaded.');
            //endfoto
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
            'foto'=> $insert,
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

          //DB::table('d_pasien')->insert($datad);
          //return view('users.isi')->with('alert-success','Login berhasil');

        m_kuesiumum::insert($datad)->with('alert-success','Login berhasil');
        return view('users.isi')->with('alert-success','Login berhasil');
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
