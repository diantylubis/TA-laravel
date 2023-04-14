@extends('layouts.auth.app')

@section('title')
<title>Register</title>
@endsection

@section('content')
<div class="section-login">
    <div class="container-fluid mb-5">
      <div class="row-lg d-xl-flex mb-5 centerr">
        <div class="col-lg-12 col-xl-6 col-md-12 d-flex justify-content-end">
          <div class="login"></div>
        </div>
        <div class="col-lg-12 col-xl-6 col-md-12 borderr">
          <div>
              <label for="email" class="form-label mt-3 text-white">Register new traveler</label>
              <input type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="email">
          </div>
          <div>
              <label for="username" class="form-label mt-3 text-white"></label>
              <input type="username" class="form-control" id="username" placeholder="username">
          </div>
          <div>
              <label for="text" class="form-label"></label>
              <input type="text" class="form-control" id="number" placeholder="Phone number">
          </div>
          <div>
              <label for="password" class="form-label"></label>
              <input type="password" class="form-control" id="password" placeholder="Password">
          </div>
          <div>
              <label for="text" class="form-label"></label>
              <input type="text" class="form-control" id="re-password" placeholder="Re-type your password">
          </div>
          <div class="d-grid gap-2">
              <a href="{{url('login')}}"><button class="btn mt-3" type="button" width="100%" style="background-color: #FD7B38;">Register</button></a>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
