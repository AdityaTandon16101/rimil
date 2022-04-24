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
            @error('name') {{ $message }} @enderror
          </div>
        </div>


        <div class="email-section">
          <div class="email-label">
            <label class="label-text">Email</label>
          </div>
          <div class="email-input">
            <input class="email-text-input" type="email" name="email" />
            @error('email') {{ $message }} @enderror
          </div>
        </div>

        <div class="number-section">
          <div class="number-label">
            <label class="label-text">Number</label>
          </div>
          <div class="number-input">
            <input class="number-text-input" type="number" name="phone" />
            @error('phone') {{ $message }} @enderror
          </div>
        </div>

        <div class="password-section">
          <div class="password-label">
            <label class="label-text">Password</label>
          </div>
          <div class="password-input">
            <input class="password-text-input" type="password" name="password" />
            @error('password') {{ $message }} @enderror
          </div>
        </div>

        <div class="refferal-section">
          <div class="refferal-label">
            <label class="label-text">Refferal ID</label>
          </div>
          <div class="refferal-input">
            <input class="refferal-text-input" type="text" name="referral" />
          </div>
        </div>

        <div class="sponsor-section">
          <div class="sponsor-label">
            <label class="label-text">Sponsor Name</label>
          </div>
          <div class="sponsor-input">
            <input class="sponsor-text-input" type="text" disabled />
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