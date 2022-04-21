@extends('layouts.app')

@section('title', "Team - " . config('app.name'))

@push('css')
<link rel="stylesheet" href="{{ asset('css/customer/teams.css') }}" />
@endpush

@section('content')
<x-partials.app.header title="My Team" />
<h1>Teams Page</h1>

@endsection