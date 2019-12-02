<!DOCTYPE html>
<html>
<head>
  <title>Klinik Liliput Official</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">
  <link rel="shortcut icon" href="{{ asset('images/favicon.ico') }}">
</head>

<body class="img img-fluid background-image bgi container-fluid" style=" height: 100%; width: 100%;">

<style type="text/css">
    .bgi{
      background-image: url('img/5.jpg'); 
      background-repeat: no-repeat; 
      background-size: cover;
      background-color: #8dc53c;
    }
</style>
    
    <nav class="navbar bg-white row" id="ftco-navbar">
    <img class="row background-image navbar img img-fluid py-5 px-0 text-center" style="background-image: url('img/navbar logo.jpg'); background-size: cover; background-repeat: no-repeat; width: 100%; height: 70%" href="{{'/'}}">
    </nav>

  <div class="container-fluid">  
    <div class="row">
      <div class="col-md-6 col-xs-6 offset-3 py-1">
        <br>
        <br>
        <div class="card col-md-12 col-xs-12 bg-white">
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

    @yield('isi')  

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
    