@extends('layouts.app')

@section('title', 'Dashboard - ' . config('app.name'))

@push('css')
<link rel="stylesheet" href="{{ asset('css/customer/dashboard.css') }}" />
@endpush

@section('content')
<h1>User Dashboard</h1>
@endsection