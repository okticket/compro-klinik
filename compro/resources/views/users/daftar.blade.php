<!DOCTYPE html>
<html>
<head>
  <title>Sign Up</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body class="img-fluid background-image" style="background-image: url('img/5.jpg'); height: 300px">

  <nav class="navbar bg-white" id="ftco-navbar">
    <div class="container">
      <div class="col-md-6 offset-3 d-md-inline-flex px-1 py-1">
        <img class="col-md-4 offset-4 text-center img-fluid" src="{{ asset('images/logo liliput.png')}}">
      </div>
    </div>
  </nav>
  <div class="container-fluid">  
    <div class="row">
      <div class="col-md-6 offset-3 py-1">
        <br>
        <br>
        <br>
        <br>
        <div class="card col-md-12 bg-white">
          @if (\Session::has('alert'))
          <div class="alert alert-danger text-center">
            <strong> Warning! </strong> {{Session::get('alert')}}
          </div>
          @endif
          @if(\Session::has('alert-success'))
            <div class="alert alert-success">
              <strong> Success </strong> {{Session::get('alert-success')}}
            </div>
          @endif
          <form class="form-horizontal" action="{{url('daftar')}}" method="post">
            @csrf
            <div class="box-body">
              <div class="row">
                <div class="col-xs-7 col-md-12">
                    <div class="form-group">
                      <label class="col-sm-12 py-2 text-center"><h3>REGISTER</h3><hr></label>
                    </div>
                </div>
              </div>

              <?php
                $now = date('dmy');
                $dataakhir = \App\m_daftarpasien::max('id_pasien');
                $no = $dataakhir+1;
                $lama = substr($no, 0, 6);
                $rplc = str_replace($lama, $now, $no);
                $id_pasien=$rplc;
              ?>
              <input type="text" class="form-control col-md-6 text-left" name="id_pasien" value="{{$id_pasien}}" hidden>

              <div class="row">
                <div class="form-group d-md-inline-flex col-md-12">
                  <label class="control-label col-md-5 px-5 text-left">Username</label>
                  <input type="text" class="form-control col-md-6 text-left" name="username" required>
                </div>
              </div> 
              <div class="row">
                <div class="form-group d-md-inline-flex col-md-12">
                  <label class="control-label col-md-5 px-5 text-left">E-mail</label>
                  <input type="email" class="form-control col-md-6 text-left" name="email" required="email|unique:h_pasien">
                </div>
              </div> 
              <div class="row"> 
                <div class="form-group d-md-inline-flex col-md-12">
                  <label class="control-label col-md-5 px-5 text-left">Password</label>
                  <input type="password" class="form-control col-md-6 text-left" name="password" required>
                </div>
              </div>            
              <br>
              <button class="btn btn-success col-md-10 offset-1" href="#">Sign Up</button>
              <p class="text-center col-md-6 offset-3"><a href="{{url('/log')}}" class="text-center col-md-12"> Already registered? <strong>Sign In</strong></a></p>
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