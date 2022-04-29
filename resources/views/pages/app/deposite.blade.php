@extends('layouts.app')

@section('title', 'Deposites - ' . config('app.name'))

@push('css')
<link rel="stylesheet" href="{{ asset('css/customer/deposite.css') }}" />
@endpush

@section('content')
<x-partials.app.header title="Deposites" />
<h1>deposite</h1>
@endsection