@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="">
                <div class="userlogin">
                    <label>HOTEL</label>
                        <a href="#" style="color: #FFD800;"><B>NABASA</B></a>
                    <h4 style="color: #000000">Silahkan masuk kedalam akun kamu</h4>
                </div>
                <div class="card-body">
                    <label style="margin-top: 5%;color: #000000">Belum punya akun?</label>
                      <a href="/register" style="color: #FFD800">Daftar disini</a>
                    <form method="post" action="{{ route('login') }}">
                      @csrf
                      <div class="form-group">
                        <!-- <label for="exampleInputEmail1">Email address</label> -->
                        <input type="email" name="email" class="form-control {{ $errors->has('email') ? ' is-invalid' : '' }}" aria-describedby="emailHelp" placeholder="Email or Username" required="">
                        @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                        <small id="emailHelp" class="form-text text-muted"></small>   
                      </div>
                      <div class="form-group">
                        <!-- <label for="exampleInputPassword1">Password</label> -->
                        <input type="password" name="password" class="form-control {{ $errors->has('password') ? ' is-invalid' : '' }}" id="exampleInputPassword1" placeholder="Password" required>
                         @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                      </div>
                      <div class="custom-control custom-checkbox">
                          <input type="checkbox" class="custom-control-input" id="customCheck1" {{ old('remember') ? 'checked' : '' }}>
                          <label class="custom-control-label" for="customCheck1">Ingat saya</label>
                        </div>
                      <button type="submit" class="btn btn-primary">Login</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
