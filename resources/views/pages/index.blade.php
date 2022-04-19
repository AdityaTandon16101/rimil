@extends('layouts.guest')

@section('title', "Welcome To Rimil")

@push('css')
<link rel="stylesheet" href="{{ asset('css/guest/index.css') }}" />
@endpush

@section('content')
<h1>Landing Page</h1>
@endsection