@extends('paralax')
@section('isi')

          <form class="form-horizontal" action="{{url('resett')}}" method="post">
            @csrf
            <div class="box-body">
              <div class="row">
                <div class="col-xs-7 col-md-12">
                    <div class="form-group">
                      <label class="col-sm-12 py-2 text-center"><h3>RESET PASSWORD</h3><hr></label>
                    </div>
                </div>
              </div>

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
           
              <br>
              <button class="btn btn-success col-md-10 offset-1" href="#">Save</button>
              <p class="text-center col-md-6 offset-3"><a href="{{url('/log')}}" class="text-center col-md-12"> Back to <strong>Log In</strong></a></p>
            </div>
          </form>

@endsection   