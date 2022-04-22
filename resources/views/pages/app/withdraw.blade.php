@extends('layouts.app')

@section('title', "Withdraw - " . config('app.name'))

@push('css')
<link rel="stylesheet" href="{{ asset('css/customer/withdraw.css') }}" />
@endpush

@section('content')
<x-partials.app.header title="Withdraw" />
<h1>Withdraw Page</h1>

<a href="{{ route('withdraws') }}">All Withdraws</a>
@endsection