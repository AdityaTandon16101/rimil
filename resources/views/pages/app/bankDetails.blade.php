@extends('layouts.app')

@section('title', "Bank Information - " . config('app.name'))

@push('css')
<link rel="stylesheet" href="{{ asset('css/customer/profile.css') }}" />
@endpush

@section('content')
<x-partials.app.header title="Bank Details" />
<div class="container">
  <div class="row">
    <div class="col-12">
      <x-profile.bankDetail />
    </div>
  </div>
</div>
@endsection