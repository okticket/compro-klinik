<!DOCTYPE html>
<html>
<head>
  <title>Klinik Liliput Official</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">
  <link rel="stylesheet" href="{{ asset('fonts/style.css') }}">
  <link rel="shortcut icon" href="{{ asset('images/favicon.ico') }}">
</head>

<body style="overflow-y: hidden; background-image: linear-gradient(90deg, #edb658 13%, #e8a145, #e97659) !important;">

  <div class="container-fluid hero-wrap_login banner_liliput">  
    <div class="row pt-3 pt-lg-5">
      <div class="col-lg-5 col-md-6 col-xs-6 mt-xl-5 pt-5 pt-xl-5 py-5 offset-1">
        <div class="card col-md-12 col-xs-12 bg-login">
          <form class="form-horizontal" action="{{url('/reset')}}" method="post">
            @csrf
            <div class="box-body">
              <div class="row">
                <div class="col-xs-7 col-md-12">
                    <div class="form-group">
                      <label class="col-sm-12 py-2 text-center"><h3>RESET PASSWORD</h3><hr></label>
                    </div>
                </div>
              </div>
              @if (\Session::has('alert'))
              <div class="alert alert-danger text-center">
                <strong> Warning! </strong> {{Session::get('alert')}}
              </div>
              @endif
              @if(\Session::has('alert-success'))
              <div class="alert alert-success">
                <strong> Success! </strong> {{Session::get('alert-success')}}
              </div>
              @endif

              <div class="row">
                <div class="form-group d-md-inline-flex col-md-12">
                  <label class="control-label col-md-5 pl-5 text-left">Your E-Mail</label>
                  <input type="text" class="form-control col-md-6 pr-5 text-left" name="mail" required>
                </div>
              </div>

              <div class="row">
                <div class="form-group d-md-inline-flex col-md-12">
                  <label class="control-label col-md-5 pl-5 text-left">New Password</label>
                  <input type="password" class="form-control col-md-6 pr-5 text-left" name="pass1" required>
                </div>
              </div> 

              <div class="row">
                <div class="form-group d-md-inline-flex col-md-12">
                  <label class="control-label col-md-5 pl-5 text-left">Re-Type New Password</label>
                  <input type="password" class="form-control col-md-6 pr-5 text-left" name="pass2" required>
                </div>
              </div> 

              <button class="btn btn-success col-md-10 offset-1" href="#">Save</button>
              <p class="text-center col-md-6 offset-3"><a href="{{url('/login')}}" class="text-center col-md-12" style="font-size: 14px"> Back to <strong>Log In</strong></a></p>
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
    