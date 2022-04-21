@extends('layouts.app')

@push('css')
    <style>
      .header-heading{
          background-color: cornflowerblue;
          height: 80px;
          width: 100%;
          display: flex;
      }
      .container{
          background-color: blueviolet;

      }
    </style>
@endpush

@section('content')
<div class="content">
  <div class="heading-section">

    <div class="head-sec-1">
    </div>

    <div class="head-sec-2">
    </div>

  </div>


  <div class="login-content">

    <div class="content-section">
      <div class="content-section-2">
        <div class="content-section-3">
          <div class="content-section-4">
            <div class="login-text">Login</div>
          </div>
          <div class="input-data">
            <form>
              <label>Email Address</label>
              <div>
                <input type="email" name="" >
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>

  </div>
</div>
@endsection
