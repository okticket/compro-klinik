@extends('paralax')
@section('isi')

          <form class="form-horizontal" action="{{url('/logg')}}" method="post">
            @csrf
            <div class="box-body">
              <div class="row">
                <div class="col-xs-7 col-md-12">
                    <div class="form-group">
                      <label class="col-sm-12 py-3 text-center"><h3>LOG IN</h3><hr></label>
                    </div>
                </div>
              </div>
              <div class="row">
                <div class="form-group d-md-inline-flex col-md-12">
                  <label class="control-label col-md-5 px-5 text-left">Username</label>
                  <input type="text" class="form-control col-md-6 text-left" name="username" required>
                </div>
              </div> 
              <div class="row">
                <div class="form-group d-md-inline-flex col-md-12">
                  <label class="control-label col-md-5 px-5 text-left">Password</label>
                  <input type="password" class="form-control col-md-6 text-left" name="password" required>
                </div>
              </div>
              <br>
              <button class="btn btn-success col-md-10 offset-1">Sign In</button>
              <div class="col-md-12 d-md-inline-flex">
                <p class="text-center col-md-6 pl-4" style="font-size: 13px">
                  <a href="{{url('/reg')}}">Haven't registered yet? <strong>Sign Up</strong></a>
                </p>
                <p class="text-center col-md-6 pl-5" style="font-size: 13px">
                  <a href="{{url('/reset')}}">Forgot Password?</a>
                </p>
              </div>
            </div>
            <br>
          </form>
        
@endsection  