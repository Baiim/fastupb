@extends('layouts.page')
@section('title')
    Pendaftaran lomba | FAST UPB 2021
@endsection
@section('content')
<section class="breadcrumbs-custom bg-image context-dark" style="background-image: url(images/bg-breadcrumbs-01-1894x424.jpg);">
    <div class="container">
      <h3 class="breadcrumbs-custom-title">Form pendaftaran lomba FAST UPB</h3>
    </div>
  </section>
  <!--Forms-->
  <section class="section section-lg bg-default text-center">
    <div class="container">
      <div class="row justify-content-md-center">
        <div class="col-md-9 col-lg-7 col-xl-5">
          <!--RD Mailform-->
          <form class="rd-form rd-mailform rd-form-centered">
            <div class="form-wrap">
              <input class="form-input" id="email" type="email" name="email" data-constraints="@Email @Required">
              <label class="form-label" for="login-email">E-mail</label>
            </div>
            <div class="form-wrap">
              <input class="form-input" id="login-password" type="password" name="password" data-constraints="@Required">
              <label class="form-label" for="login-password">Password</label>
            </div>
            <div class="form-wrap">
                <input class="form-input" id="login-password" type="password" name="password" data-constraints="@Required">
                <label class="form-label" for="login-password">Password</label>
              </div>
              <div class="form-wrap">
                <input class="form-input" id="login-password" type="password" name="password" data-constraints="@Required">
                <label class="form-label" for="login-password">Password</label>
              </div>
              <div class="form-wrap">
                <input class="form-input" id="login-password" type="password" name="password" data-constraints="@Required">
                <label class="form-label" for="login-password">Password</label>
              </div>
              <div class="form-wrap">
                <input class="form-input" id="login-password" type="password" name="password" data-constraints="@Required">
                <label class="form-label" for="login-password">Password</label>
              </div>
            <button class="button button-block button-round-1 button-primary" type="submit" data-triangle=".button-overlay"><span>Daftar</span><span class="button-overlay"></span></button>
          </form>
        </div>
      </div>
    </div>
  </section>
@endsection
