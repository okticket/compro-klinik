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
    public function index(Request $id)
    {
        $data=DB::table('h_pasien')
        ->join('d_pasien','d_pasien.id_pasien','=','h_pasien.id_pasien')
        ->where('h_pasien.id_pasien',$id)->first();
        $count=$data->where('id_pasien',$id)->count();
        $tampil=$data->select('foto')->get();

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
            'datta'=>$data,
            'idd'=>$id,
            'tampil'=>$tampil,
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
        return view('users.isi')->with('alert-success','Success');
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
