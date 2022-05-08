@extends('layouts.app')

@section('title', "Change Password - " . config('app.name'))

@push('css')
<link rel="stylesheet" href="{{ asset('css/customer/profile.css') }}" />
@endpush

@section('content')
<x-partials.app.header title="Password Change" />
<div class="container">
  <div class="row">
    <div class="col-12">
      <x-profile.changePassword />
    </div>
  </div>
</div>
@endsection