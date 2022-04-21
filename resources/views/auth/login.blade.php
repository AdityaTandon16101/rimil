@extends('layouts.guest')

@section('title', 'Login to ' . config('app.name'))

@push('css')
<link rel="stylesheet" href="{{ asset('css/guest/login.css') }}" />
@endpush

@section('content')
<div class="login-content">

  <div class="content-section">

    <div class="login-text">
      <label for="" class="text">Login</label>
    </div>
    <div class="input-data">
      <form class="form-input" action="{{ route('login') }}" method="POST">
        @csrf
        <div class="email-section">
          <div class="email-sec-div">
            <label class="email-label">Email Address</label>
          </div>
          <div class="email-input">
            <input class="email-intext" type="email" name="email" />
          </div>
        </div>

        <div class="pass-section">
          <div class="pass-sec-div">
            <label class="password-label">Password</label>
          </div>
          <div class="pass-input">
            <input class="pass-intext" type="password" name="password" />
          </div>
        </div>

        <div class="login">
          <button class="login-btn">Login</button>
        </div>
      </form>
    </div>

  </div>
</div>
</div>
@endsection