@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="col-md-12">
                <div>
                    <div class=""><!-- {{ __('Register') }} --></div>

                      <div class="">

                          <form action="/registerUser" method="POST">
                              @csrf
                            <div class="form-group">
                              <label for="exampleInputEmail1">Nama</label>
                              <input type="text" name="nama" class="form-register" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder=" Nama" required="">
                              <!-- <small id="emailHelp" class="form-text text-muted"></small> -->
                            </div>
                            <div class="form-group">
                              <label for="exampleInputEmail1">Hp/Telepon</label>
                              <input type="text" name="no_telp" class="form-register" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Your Phone" required="">
                              <small id="emailHelp" class="form-text text-muted"></small>
                            </div>
                            <div class="form-group">
                              <label for="exampleInputEmail1">E-mail</label>
                              <input type="email" name="email" class="form-register" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email" required="">
                              <small id="emailHelp" class="form-text text-muted"></small>
                            </div>
                            <div class="form-group">
                              <label for="exampleInputPassword1">Password</label>
                              <input type="password" name="password" class="form-register" id="exampleInputPassword1" placeholder="Password" required="">
                            </div>
                            <!-- <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="customCheck1">
                                <label class="custom-control-label" for="customCheck1">Ingat saya</label>
                              </div> -->
                            <button type="submit" class="btn btn-primary">Daftar</button>
                          </form>
                      </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
