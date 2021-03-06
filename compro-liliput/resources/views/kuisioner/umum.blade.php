@if (!Session::has('id_pasien'))
  <script>window.location = "{{url('/logout')}}";</script>
@endif
<!DOCTYPE html>
<html>
<head>
  <title>Kuesioner Umum</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="{{asset('css/kuisioner/style.css')}}">
  <link rel="stylesheet" href="{{asset('css/kuisioner/pict.css')}}">
  <link rel="stylesheet" href="{{asset('js/kuisioner/jquery-ui.css')}}">
  <script type="text/javascript" src="{{asset('js/kuisioner/pict.js')}}"></script>
  <script type="text/javascript" src="{{asset('js/kuisioner/jquery.js')}}"></script>
  <script type="text/javascript" src="{{asset('js/kuisioner/jquery-ui.js')}}"></script>
  
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="{{url('css/style.css')}}">
  <link rel="stylesheet" href="{{url('css/pict.css')}}">
  <link rel="stylesheet" href="{{url('js/jquery-ui.css')}}">
  <script type="text/javascript" src="{{url('js/pict.js')}}"></script>
  <script type="text/javascript" src="{{url('js/jquery.js')}}"></script>
  <script type="text/javascript" src="{{url('js/jquery-ui.js')}}"></script>
  
  <script type="text/javascript">
    $(function() {
        $("#datepicker").datepicker();
    });
  </script>

  <script type="text/javascript">
    window.onload=function(){
        $("#datepicker").on("change", function() {
            var dob = new Date(this.value);
            var today = new Date();
            var age = Math.floor((today-dob)/(365.25 * 24 * 60 * 60 * 1000));
            $("#umur").val(age+" tahun");
        });
        $('#alamatrumah').on('change', function() {
            var alamat = document.getElementById("alamatrumah").value;
            $('#alamatayah').val(alamat);
            $('#alamatibu').val(alamat);
        });
    }
  </script>

<!--
<script type="text/javascript">
    function alamatayah(){
        var alamati = document.getElementById("alamatayah");
        var alamatp = document.getElementById("alamatrumah").value;

    if(document.getElementById("cekboxa").checked == true){
      alamati.readOnly = true;
      alamati.innerHTML = alamatp;
      $('#alamatayah').val(alamatp);
    }else{
      alamati.readOnly = false;
      alamati.innerHTML = " ";
    }
    }
</script>
<script type="text/javascript">
    function alamatibu(){
        var alamati = document.getElementById("alamatibu");
        var alamatp = document.getElementById("alamatrumah").value;

    if(document.getElementById("cekboxb").checked == true){
      alamati.readOnly = true;
      alamati.innerHTML = alamatp;
      $('#alamatibu').val(alamatp);
    }else{
      alamati.readOnly = false;
      alamati.innerHTML = " ";
    }
    }
</script>
-->
</head>

<body class="vh-100" style="background: linear-gradient(45deg, #ffd800, #ff6666);">

  <div class="space-60"></div>
  <div class="container-fluid">  
    <div class="row">
      <div class="col-md-12 px-5 py-4">
        <br>
        <div class="card col-bg-12 bg-white">
          <form class="form-horizontal" action="{{url('kirim_kuisioner')}}" method="post">
            @csrf
            <div class="box-body">
              <div class="row">
                <div class="col-xs-8 col-md-12">
                    <div class="form-group">
                      <br>
                      <label class="col-sm-12 py-8 text-center"><h3>KUESIONER UMUM</h3></label>
                    </div>
                </div>
              </div>
              <div class="row">  
                <div class="col-xs-8 col-md-12">
                  <div class="form-group">
                    <br>
                    <label class="col-sm-12 py-8 text-left"><h5>I. IDENTITAS</h5><hr></label>
                  </div>
                </div>
              </div>
              <div class="col-md-12 d-md-inline-flex">
              <div class="col-md-6">
              <div class="row">
                <div class="form-group d-md-inline-flex col-md-11">
                  <label class="control-label col-md-4 text-left"><u>DATA ANAK:</u></label>
                </div>
              </div>
              <div class="row">
                <div class="form-group d-md-inline-flex col-md-11">
                  <label class="control-label col-md-4 text-left">ID Pasien</label>
                  <input type="text" class="form-control col-md-8 text-left" readonly name="id" value="{{Session::get('id_pasien')}}">
                </div>
              </div> 
              <div class="row">
                <div class="form-group d-md-inline-flex col-md-11">
                  <label class="control-label col-md-4 text-left">Nama  Anak</label>
                  <input type="text" class="form-control col-md-8 text-left" required name="namaA">
                </div>
              </div> 
              <div class="row">
                <div class="form-group d-md-inline-flex col-md-11">
                  <label class="control-label col-md-4 text-left">Jenis Kelamin</label>
                  <select class="form-control col-md-8 text-left select2" style="width: 100%;" name="jk" required>
                    <option value="Pilih">Pilih</option>
                    <option value="Laki-laki">Laki - Laki</option>
                    <option value="Perempuan">Perempuan</option>
                  </select>
                </div>
              </div>
              <div class="row">
                <div class="form-group d-md-inline-flex col-md-11">
                  <label class="control-label col-md-4 text-left">Tempat Lahir</label>
                  <input type="text" class="form-control col-md-8 text-left" required name="tempatA">
                </div>
              </div>
              <div class="row">
                <div class="form-group d-md-inline-flex col-md-11">
                  <label class="control-label col-md-4 text-left">Tanggal Lahir</label>
                  <input type="date" name="tglA" id="datepicker" class="input-tanggal">
                </div>
              </div>
              <div class="row">
                <div class="form-group d-md-inline-flex col-md-11">
                  <label class="control-label col-md-4 text-left">Umur</label>
                  <input type="text" class="form-control col-md-8 text-left" readonly name="umur" id="umur">
                </div>
              </div>
              <div class="row">
                <div class="form-group d-md-inline-flex col-md-11">
                  <label class="control-label col-md-4 text-left">Agama</label>
                  <select class="form-control col-md-8 text-left select2" required name="agamaA" value=" ">
                    <option value="Pilih">Pilih</option>
                    <option value="Islam">Islam</option>
                    <option value="Kristen">Kristen</option>
                    <option value="Protestan">Protestan</option>
                    <option value="Katolik">Katolik</option>
                    <option value="Hindu">Hindu</option>
                    <option value="Buddha">Buddha</option>
                  </select>
                </div>
              </div> 
              <div class="row">
                <div class="form-group d-md-inline-flex col-md-11">
                  <label class="control-label col-md-4 text-left">Alamat Sekolah</label>
                  <textarea class="form-control col-md-8" rows="3" required name="alamatsekolah"></textarea>
                </div>
              </div>
              <div class="row">
                <div class="form-group d-md-inline-flex col-md-11">
                  <label class="control-label col-md-4 text-left">Alamat Rumah</label>
                  <textarea class="form-control col-md-8" rows="3" required name="alamatrumah" id="alamatrumah"></textarea>
                </div>
              </div>
              <div class="row">
                <div class="form-group d-md-inline-flex col-md-11">
                  <label class="control-label col-md-4 text-left">Keluhan</label>
                  <textarea class="form-control col-md-8" rows="3" required name="keluhan"></textarea>
                </div>
              </div> 
              <div class="row">
                <div class="form-group d-md-inline-flex col-md-12">
                  <div class="col-sm-3 col-md-3">
                    <label class="control-label" style="text-align: left;">Foto</label>
                    <br>
                    <label class="control-label" style="text-align: left; font-size: 10px;">*Foto berformat (png,jpg,jpeg) max 1MB</label>
                  </div>
                  <div class="col-sm-8 col-md-8 pl-4">
                      <span class="input-group-btn">
                        <span class="btn btn-default btn-file btn-success" style="margin-left: 10px">
                          Browse… <input type="file" id="imgInp" value="" name="foto">
                        </span>
                          <input type="text" class="pl-4" value="{{Request::is('umum') ? $data->foto:''}}" name="Nfoto" id="Nfoto" readonly />{{Request::is('umum') ? $data->foto:''}}
                          <br>
                          <img class="pl-3" id='img-upload' src="{{asset('foto')}}/{{Request::is('umum') ? $data->foto:''}}" hidden />
                      </span>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="form-group d-md-inline-flex col-md-11">
                  <label class="control-label col-md-4 text-left">No. Telepon/HP</label>
                  <input type="text" class="form-control col-md-8 text-left" required name="tlp">
                </div>
              </div> 
              <div class="row">
                <div class="form-group d-md-inline-flex col-md-11">
                  <label class="control-label col-md-4 text-left">Tanggal Daftar</label>
                  <input type="text" class="form-control col-md-8 text-left" readonly name="tgldaftar" value="{{date('d-m-Y')}}">
                </div>
              </div> 
              </div>

              <div class="col-md-6">
              <div class="row">
                <div class="form-group d-md-inline-flex col-md-11">
                  <label class="control-label col-md-4 text-left"><u>DATA ORANG TUA:</u></label>
                </div>
              </div>
              <div class="row">
                <div class="form-group d-md-inline-flex col-md-12">
                  <label class="control-label col-md-4 ml-1 text-left">Nama Ayah</label>
                  <input type="text" class="form-control col-md-7 text-left" required name="namaayah">
                </div>
              </div> 
              <div class="row">
                <div class="form-group d-md-inline-flex col-md-12">
                  <label class="control-label col-md-4 ml-1 text-left">NIK</label>
                  <input type="text" class="form-control col-md-7 text-left" required name="nikayah">
                </div>
              </div>
              <div class="row">
                <div class="form-group d-md-inline-flex col-md-12">
                  <label class="control-label col-md-4 ml-1 text-left">Agama</label>
                  <select class="form-control col-md-7 text-left select2" required name="agamaayah" value=" ">
                    <option value="Pilih">Pilih</option>
                    <option value="Islam">Islam</option>
                    <option value="Kristen">Kristen</option>
                    <option value="Protestan">Protestan</option>
                    <option value="Katolik">Katolik</option>
                    <option value="Hindu">Hindu</option>
                    <option value="Buddha">Buddha</option>
                  </select>
                </div>
              </div> 
              <div class="row">
                <div class="form-group d-md-inline-flex col-md-12">
                  <label class="control-label col-md-4 ml-1 text-left">Alamat</label>
                  <textarea class="form-control col-md-7 text-left" id="alamatayah" rows="3" name="alamatayah" value="alamatrumah">
                  </textarea>
                </div>
              </div>
              <div class="row">
                <div class="form-group d-md-inline-flex col-md-12">
                  <label class="control-label col-md-4 ml-1 text-left">Pekerjaan</label>
                  <input type="text" class="form-control col-md-7 text-left" required name="kerjaayah">
                </div>
              </div> 
              <div class="row">
                <div class="form-group d-md-inline-flex col-md-12">
                  <label class="control-label col-md-4 ml-1 text-left">Pendidikan</label>
                  <!--input type="text" class="form-control col-md-7 text-left" required name="pendidikanayah"-->
                  <select class="form-control col-md-7 text-left select2" style="width: 100%;" name="pendidikanayah" required>
                    <option value="Pilih">Pilih</option>
                    <option value="Laki-laki">SMA</option>
                    <option value="Perempuan">S1</option>
                    <option value="Perempuan">S2</option>
                    <option value="Perempuan">S3</option>
                    <option value="Perempuan">Other</option>
                  </select>
                </div>
              </div>
              <div class="row">
                <div class="form-group d-md-inline-flex col-md-12">
                  <label class="control-label col-md-4 ml-1 text-left">No. Telpon/Hp</label>
                  <input type="text" class="form-control col-md-7 text-left" required name="tlpayah">
                </div>
              </div>
              <div class="row">
                <div class="form-group d-md-inline-flex col-md-12">
                  <label class="control-label col-md-4 ml-1 text-left">E-mail</label>
                  <input type="email" class="form-control col-md-7 text-left" required="email" name="emailayah">
                </div>
              </div>
              <hr>
              <br>
              <div class="row">
                <div class="form-group d-md-inline-flex col-md-12">
                  <label class="control-label col-md-4 ml-1 text-left">Nama Ibu</label>
                  <input type="text" class="form-control col-md-7 text-left" required name="namaibu">
                </div>
              </div> 
              <div class="row">
                <div class="form-group d-md-inline-flex col-md-12">
                  <label class="control-label col-md-4 ml-1 text-left">NIK</label>
                  <input type="text" class="form-control col-md-7 text-left" required name="nikibu">
                </div>
              </div>
              <div class="row">
                <div class="form-group d-md-inline-flex col-md-12">
                  <label class="control-label col-md-4 ml-1 text-left">Agama</label>
                  <select class="form-control col-md-7 text-left select2" required name="agamaibu">
                    <option value="Pilih">Pilih</option>
                    <option value="Islam">Islam</option>
                    <option value="Kristen">Kristen</option>
                    <option value="Protestan">Protestan</option>
                    <option value="Katolik">Katolik</option>
                    <option value="Hindu">Hindu</option>
                    <option value="Buddha">Buddha</option>
                  </select>
                </div>
              </div> 
              <div class="row">
                <div class="form-group d-md-inline-flex col-md-12">
                  <label class="control-label col-md-4 ml-1 text-left">Alamat</label>
                  <textarea class="form-control col-md-7 text-left" id="alamatibu" rows="3" name="alamatibu" value="alamatrumah">
                  </textarea>
                </div>
              </div>
              <div class="row">
                <div class="form-group d-md-inline-flex col-md-12">
                  <label class="control-label col-md-4 ml-1 text-left">Pekerjaan</label>
                  <input type="text" class="form-control col-md-7 text-left" required name="kerjaibu">
                </div>
              </div> 
              <div class="row">
                <div class="form-group d-md-inline-flex col-md-12">
                  <label class="control-label col-md-4 ml-1 text-left">Pendidikan</label>
                  <!--input type="text" class="form-control col-md-7 text-left" required name="pendidikanibu"-->
                  <select class="form-control col-md-7 text-left select2" style="width: 100%;" name="pendidikanibu" required>
                    <option value="Pilih">Pilih</option>
                    <option value="Laki-laki">SMA</option>
                    <option value="Perempuan">S1</option>
                    <option value="Perempuan">S2</option>
                    <option value="Perempuan">S3</option>
                    <option value="Perempuan">Other</option>
                  </select>
                </div>
              </div>
              <div class="row">
                <div class="form-group d-md-inline-flex col-md-12">
                  <label class="control-label col-md-4 ml-1 text-left">No. Telpon/Hp</label>
                  <input type="text" class="form-control col-md-7 text-left" required name="tlpibu">
                </div>
              </div>
              <div class="row">
                <div class="form-group d-md-inline-flex col-md-12">
                  <label class="control-label col-md-4 ml-1 text-left">E-mail</label>
                  <input type="email" class="form-control col-md-7 text-left" required="email" name="emailibu">
                </div>
              </div>
              </div>
              </div>
              <div class="row">  
                <div class="col-xs-8 col-md-12">
                  <div class="form-group">
                    <br>
                    <label class="col-sm-12 py-8 text-left"><h5>II. DATA PELENGKAP</h5><hr></label>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="form-group d-md-inline-flex col-md-12">
                  <label class="control-label col-md-2 ml-5 text-left">Hasil Tes IQ</label>
                  <input type="text" class="form-control col-md-4 text-left" required name="iq">
                </div>
              </div> 
              <div class="row">
                <div class="form-group d-md-inline-flex col-md-12">
                  <label class="control-label col-md-2 ml-5 text-left">Nilai Mapel (-)</label>
                  <input type="text" class="form-control col-md-4 text-left" required name="mapel">
                </div>
              </div>
              <div class="row">
                <div class="form-group d-md-inline-flex col-md-12">
                  <label class="control-label col-md-2 ml-5 text-left">Mengulang Kelas</label>
                  <input type="text" class="form-control col-md-4 text-left" required name="kelas">
                </div>
              </div> 
              <div class="row">  
                <div class="col-xs-8 col-md-12">
                  <div class="form-group">
                    <br>
                    <label class="col-sm-12 py-8 text-left"><h5>III. PENGISI KUESIONER</h5><hr></label>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="form-group d-md-inline-flex col-md-12">
                  <label class="control-label col-md-2 ml-5 text-left">Nama</label>
                  <input type="text" class="form-control col-md-4 text-left" required name="nama">
                </div>
              </div> 
              <div class="row">
                <div class="form-group d-md-inline-flex col-md-12">
                  <label class="control-label col-md-2 ml-5 text-left">Selaku</label>
                  <input type="text" class="form-control col-md-4 text-left" required name="selaku">
                </div>
              </div>
              <div class="row">
                <div class="form-group d-md-inline-flex col-md-12">
                  <label class="control-label col-md-2 ml-5 text-left">Pendidikan</label>
                  <input type="text" class="form-control col-md-4 text-left" required name="pendidikan">
                </div>
              </div> 
              <div class="row">
                <div class="form-group d-md-inline-flex col-md-12">
                  <label class="control-label col-md-2 ml-5 text-left">Pekerjaan</label>
                  <input type="text" class="form-control col-md-4 text-left" required name="kerja">
                </div>
              </div>
              <div class="row">
                <div class="form-group d-md-inline-flex col-md-12">
                  <label class="control-label col-md-2 ml-5 text-left">Alamat</label>
                  <textarea class="form-control col-md-4" rows="3" required name="alamat"></textarea>
                </div>
              </div> 
              <br>
              <div class="row">
                <div class="form-group d-md-inline-flex col-md-12 text-right">
                <button type="submit" class="btn btn-success col-md-10 offset-1">Save</button>
                </div>
              </div>
            <br>
          </form>
        </div>
      </div>      
    </div>
  </div>

  <script src="//ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js" type='text/javascript'></script>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script> 
</body>
</html>