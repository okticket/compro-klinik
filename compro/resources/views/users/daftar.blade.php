@extends('paralax')
@section('isi')

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
          
@endsection  