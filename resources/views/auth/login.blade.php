@extends('layouts.guest')

@section('title', 'Login to ' . config('app.name'))

@push('css')
<link rel="stylesheet" href="{{ mix('css/guest/login.css') }}" />
@endpush

@section('content')
<div class="login-content" login>

  <div class="content-section">

    <div class="login-text">
      <label for="" class="text">Login</label>
    </div>
    <div class="input-data">
      <form class="form-input" action="{{ route('login') }}" method="POST">
        @csrf
        <div class="email-section">
          <div class="email-sec-div">
            <label class="email-label">Email / Phone</label>
          </div>
          <div class="email-input">
            <input type="text" name="login" />
            @error('login') {{ $message }} @enderror
          </div>
        </div>

        <div class="pass-section">
          <div class="pass-sec-div">
            <label class="password-label">Password</label>
          </div>
          <div class="pass-input">
            <input class="" type="password" name="password" />
            @error('password') {{ $message }} @enderror
          </div>
        </div>

        <div class="login">
          <button type="submit" class="login-btn">Login</button>
        </div>
      </form>
    </div>

  </div>
</div>
@endsection