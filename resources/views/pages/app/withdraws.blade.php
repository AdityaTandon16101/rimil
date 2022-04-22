@extends('layouts.app')

@section('title', "Withdraw - " . config('app.name'))

@push('css')
<link rel="stylesheet" href="{{ asset('css/customer/withdraw.css') }}" />
@endpush

@section('content')
<x-partials.app.header title="My Withdraws" />
<h1>Withdraw History Page</h1>
@endsection