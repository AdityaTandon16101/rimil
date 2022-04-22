@extends('layouts.guest')

@section('title', "Join " . config('app.name') . " Now")

@push('css')
<link rel="stylesheet" href="{{ asset('css/guest/register.css') }}" />
@endpush

@section('content')
<div class="register-content" register>
  <div class="div-content">
    <div class="main-div">
      <form action="{{ route('register') }}" method="POST">
        @csrf
        <div class="reg-label">
          <label class="reg-name-label">Registration</label>
        </div>


        <div class="name-section">
          <div class="name-label">
            <label class="label-text">Name</label>
          </div>
          <div class="name-input">
            <input class="name-text-input" name="name" type="text" />
          </div>
        </div>


        <div class="email-section">
          <div class="email-label">
            <label class="label-text">Email</label>
          </div>
          <div class="email-input">
            <input class="email-text-input" type="email" name="email" />
          </div>
        </div>

        <div class="number-section">
          <div class="number-label">
            <label class="label-text">Number</label>
          </div>
          <div class="number-input">
            <input class="number-text-input" type="number" name="phone" />
          </div>
        </div>

        <div class="password-section">
          <div class="password-label">
            <label class="label-text">Password</label>
          </div>
          <div class="password-input">
            <input class="password-text-input" type="password" name="password" />
          </div>
        </div>

        <div class="re-password-section">
          <div class="re-password-label">
            <label class="label-text">Re-Password</label>
          </div>
          <div class="re-password-input">
            <input class="re-password-text-input" type="password" name="confirm-password" />
          </div>
        </div>

        <div class="submit">
          <div class="submit-btn">
            <button type="submit" class="submit-text">Submit</button>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>
</div>
@endsection