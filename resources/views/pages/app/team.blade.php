@extends('layouts.app')

@section('title', "Team - " . config('app.name'))

@push('css')
<link rel="stylesheet" href="{{ asset('css/customer/teams.css') }}" />
@endpush

@section('content')
<x-partials.app.header title="My Team" />
<div class="container mt-3 bg-white">
  <div class="row">
    <div class="col-12">
      <x-table>
        <slot name="thead">
          <tr>
            <th>ID</th>
            <th>Name</th>
          </tr>
        </slot>
        <tr>
          <td>ID</td>
          <td>Name</td>
        </tr>
      </x-table>
    </div>
  </div>
</div>
@endsection