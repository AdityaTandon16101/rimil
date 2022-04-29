@extends('layouts.app')

@section('title', 'Dashboard - ' . config('app.name'))

@push('css')
<link rel="stylesheet" href="{{ asset('css/customer/dashboard.css') }}" />
<style>
    .row{
			height: 200px;
			width: 100%;
			/*background: red;*/
			padding-top: 30px;
			display: flex;
			padding-left: 30px;
		}
		.row .colum-1{
			height: 150px;
			width: 200px;
			background-color: red;
			border-radius: 6px;
		}
		.data{
			text-align: center;
			padding-top: 45px;
			color: white;

		}
		.data h4{
			padding-top: 10px;
		}
		.row .colum-2{
			height: 150px;
			width: 200px;
			background-color: blue;
			border-radius: 6px;
			margin-left: 35px;
		}
		.row .colum-3{
			height: 150px;
			width: 200px;
			background-color: #20c997;
			border-radius: 6px;
			margin-left: 35px;
		}
		.row .colum-4{
			height: 150px;
			width: 200px;
			background-color: green;
			border-radius: 6px;
			margin-left: 35px;
		}

	
</style>
@endpush

@section('content')
<x-partials.app.header />
<div class="row">
    <div class="colum-1">
        <div class="data">
            <h1>STATUS</h1>
            <h4>ACTIVE</h4>
        </div>
    </div>

    <div class="colum-2">
        <div class="data">
            <h1>DEPOSIT AMOUNT</h1>
            <h4>Rs 500.00</h4>
        </div>
    </div>

    <div class="colum-3">
        <div class="data">
            <h1>YOUR ID NO.</h1>
            <h4>01</h4>
        </div>
    </div>

    <div class="colum-4">
        <div class="data">
            <h2>REFERRAL INCOME</h2>
            <h4>Rs 0000.00</h4>
        </div>
    </div>
</div>

<div class="row">
    <div class="colum-1">
        <div class="data">
            <h1>TOTAL MEMBER</h1>
            <h4>00</h4>
        </div>
    </div>

    <div class="colum-2">
        <div class="data">
            <h1>TOTAL ACTIVE IDs</h1>
            <h4>00</h4>
        </div>
    </div>

    <div class="colum-3">
        <div class="data">
            <h1>TOTAL EARNING</h1>
            <h4>Rs 0000.00</h4>
        </div>
    </div>

    <div class="colum-4">
        <div class="data">
            <h2>TOTAL WIDTHDRAW</h2>
            <h4>Rs 0000.00</h4>
        </div>
    </div>
</div>

<div class="row">
    
    <div class="colum-1">
        <div class="data">
            <h1>PACKAGE</h1>
            <h4>Rs 5000.00</h4>
        </div>
    </div>

    <div class="colum-2">
        <div class="data">
            <h1>WINNERS</h1>
            <h4>00</h4>
        </div>
    </div>

    <div class="colum-3">
        <div class="data">
            <h1>PHASE 1</h1>
            <h4>00</h4>
        </div>
    </div>

    <div class="colum-4">
        <div class="data">
            <h1>PHASE 2</h1>
            <h4>00</h4>
        </div>
    </div>

</div>

<div class="row">
    
    <div class="colum-1">
        <div class="data">
            <h1>PHASE 3</h1>
            <h4>00</h4>
        </div>
    </div>

    <div class="colum-2">
        <div class="data">
            <h1>PHASE 4</h1>
            <h4>00</h4>
        </div>
    </div>

    <div class="colum-3">
        <div class="data">
            <h1>PHASE 5</h1>
            <h4>00</h4>
        </div>
    </div>

    <div class="colum-4">
        <div class="data">
            <h1>REWARD INCOME</h1>
            <h4>Rs 0000.00</h4>
        </div>
    </div>
@endsection