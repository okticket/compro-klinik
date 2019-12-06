<!DOCTYPE html>
<html>
<head>
  <title>Email Verification</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body class="container-fluid">
  <div class="container-fluid">  
    <div class="row">
      <div class="col-md-6 offset-3 py-1">
        <br>
        <br>
        <div class="card col-md-12 bg-white">
          <form class="form-horizontal">
            <div class="box-body">

              <div class="row">
                <div class="form-group col-md-12">
                  <div class="col-md-12 text-center">
                    <img class="img-fluid" src="{{ asset('images/logo liliput.png')}}" style="height: 50px; width: 100px">
                  </div>
                    <label class="col-md-12 text-center"><h3>File Kuesioner Terapi Klinik Liliput</h3><hr></label>
                </div>
              </div> 

              <div class="row">
                <form class="form-horizontal">
                  @csrf
                    <div class="form-group" style="padding-left: 100px">
                      <div class="col-md-12 text-center" style="padding-left: 140px">
                        <label class="control-label">Dear, Orang tua calon pasien</label><br>
                        <label class="control-label">Berikut adalah file kuesioner yang telah Anda pilih sebelumnya, silahkan di unduh, kemudian di isi.</label>
                        <label class="control-label">Selanjutnya, mohon kuesioner yang telah Anda isi, dibawa ke klinik, ketika Anda mendapat konfirmasi telefon untuk melakukan assessment terapi.</label>
                        <label class="control-label">Terimakasih.</label><br>
                        <label class="control-label">Best Regards,</label><br>
                        <label class="control-label">Admin Klinik Liliput</label><br>
                      </div>
                    </div>
                </form>
              </div>

            </div>
          </form>
        </div>
      </div>      
    </div>
  </div>
  <br>
  <script src="//ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js" type='text/javascript'></script>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB 1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script> 
</body>
</html>