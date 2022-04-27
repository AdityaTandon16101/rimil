@extends('layouts.app')

@section('title', 'Dashboard - ' . config('app.name'))

@push('css')
<link rel="stylesheet" href="{{ asset('css/customer/dashboard.css') }}" />
@endpush

@section('content')
<x-partials.app.header />
<x-dashboard.referral />
<h1>Customer Dashboard</h1>
@endsection