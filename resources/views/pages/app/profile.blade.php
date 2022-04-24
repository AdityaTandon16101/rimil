@extends('layouts.app')

@section('title', "Profile - " . config('app.name'))

@push('css')
<link rel="stylesheet" href="{{ asset('css/customer/profile.css') }}" />
@endpush

@section('content')
<x-partials.app.header title="My Profile" />
<div class="container">
  <div class="row">
    <div class="col-12">
      <x-profile.links />
    </div>
    <div class="col-12">
      <x-profile.viewEdit />
      <x-profile.bankDetail />
      <x-profile.changePassword />
    </div>
  </div>
</div>
@endsection