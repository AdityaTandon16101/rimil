@extends('layouts.app')

@section('title', "Profile - " . config('app.name'))

@push('css')
<link rel="stylesheet" href="{{ asset('css/customer/profile.css') }}" />
@endpush

@section('content')
<x-partials.app.header title="My Profile" />
<h1>Profile Page</h1>
@endsection