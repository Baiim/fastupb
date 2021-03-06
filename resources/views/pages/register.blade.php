@extends('layouts.auth')
@section('title')
    Register | HIMATIF UPB
@endsection
@section('content')
<div class="container">
    <div class="card o-hidden border-0 shadow-lg my-5">
      <div class="card-body p-0">
        <!-- Nested Row within Card Body -->
        <div class="row">
          <div class="col-lg-5 d-none d-lg-block bg-register-photo"></div>
          <div class="col-lg-7">
            <div class="p-5">
              <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4">Create an Account!</h1>
              </div>
              <form action="{{ route('register') }}" method="post">
                @csrf
                <div class="card-body">
                  @if(session('errors'))
                  <div
                    class="alert alert-danger alert-dismissible fade show"
                    role="alert"
                  >
                    Something it's wrong:
                    <button
                      type="button"
                      class="close"
                      data-dismiss="alert"
                      aria-label="Close"
                    >
                      <span aria-hidden="true">×</span>
                    </button>
                    <ul>
                      @foreach ($errors->all() as $error)
                      <li>{{ $error }}</li>
                      @endforeach
                    </ul>
                  </div>
                  @endif
                  <div class="form-group">
                    <label for=""><strong>Nama Lengkap</strong></label>
                    <input
                      type="text"
                      name="name"
                      class="form-control"
                      placeholder="Nama Lengkap"
                    />
                  </div>
                  <div class="form-group">
                    <label for=""><strong>Email</strong></label>
                    <input
                      type="text"
                      name="email"
                      class="form-control"
                      placeholder="Email"
                    />
                  </div>
                  <div class="form-group">
                    <label for=""><strong>Password</strong></label>
                    <input
                      type="password"
                      name="password"
                      class="form-control"
                      placeholder="Password"
                    />
                  </div>
                  <div class="form-group">
                    <label for=""><strong>Konfirmasi Password</strong></label>
                    <input
                      type="password"
                      name="password_confirmation"
                      class="form-control"
                      placeholder="Password"
                    />
                  </div>
                </div>
                <div class="card-footer" style="background: none">
                  <button type="submit" class="btn btn-primary btn-block">
                    Register
                  </button>
                  <p class="text-center">
                    Sudah punya akun? <a href="{{ route('login') }}">Login</a> sekarang!
                  </p>
                </div>
              </form>
              <hr />
              {{-- <div class="text-center">
                <a class="small" href="forgot-password.html"
                  >Forgot Password?</a
                >
              </div> --}}
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
