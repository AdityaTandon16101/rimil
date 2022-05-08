@extends('layouts.app')

@section('title', "Profile - " . config('app.name'))

@push('css')
<link rel="stylesheet" href="{{ asset('css/customer/profile.css') }}" />
<style>
  .col-12{
    height: 70px;
    width: 100%;
    background-color: aquamarine;
  }
  .viewedit-col{
    display: flex;
    background-color: blueviolet;
    display: block;

  }
</style>
@endpush

@section('content')
<x-partials.app.header title="My Profile" />
<div class="container">
  <div class="row">
    <div class="col-12">
      <x-profile.links />
    </div>
  </div>
</div>
<div class="col-12">
  <div class="nav-col">
    <div class="viewedit-col">
      <x-profile.viewEdit />
    </div>
    <div class="bankdet-col">
      <x-profile.bankDetail />
    </div>
    <div class="changepass">
      <x-profile.changePassword />
    </div>
  </div>
@endsection