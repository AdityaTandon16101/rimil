@extends('layouts.app')

@section('title', "Team - " . config('app.name'))

@push('css')
<link rel="stylesheet" href="{{ asset('css/customer/teams.css') }}" />
<style>
  .team-sec{
    background-color: blueviolet;
    height: 600px;
    width: 100%;
  }
</style>
@endpush

@section('content')
<x-partials.app.header title="My Team" />
<div class="team-sec">
  <div></div>
</div>
@endsection