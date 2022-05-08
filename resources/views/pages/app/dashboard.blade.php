@extends('layouts.app')

@section('title', 'Dashboard - ' . config('app.name'))

@push('css')
<link rel="stylesheet" href="{{ asset('css/customer/dashboard.css') }}" />
<style>
    .row{
        height: 220px;
		width: 100%;
		/*background: red;*/
		padding-top: 30px;
		display: flex;
		padding-left: 30px;
    }
	.row .colum-1{
		height: 200px;
	    width: 240px;
	    /*background-color: red;*/
        background: red;
	    border-radius: 6px;
	}
	.data{
	    text-align: center;
    	padding-top: 45px;
		color: white;

	}
	.data h5{
		padding-top: 10px;
	}
	.row .colum-2{
		height: 200px;
		width: 240px;
		background-color: blue;
		border-radius: 6px;
		margin-left: 35px;
	}
	.row .colum-3{
		height: 200px;
		width: 240px;
		background-color: #20c997;
		border-radius: 6px;
		margin-left: 35px;
	}
	.row .colum-4{
		height: 200px;
		width: 240px;
		background-color: green;
		border-radius: 6px;
		margin-left: 35px;
	}

	
</style>
@endpush

@section('content')
<x-partials.app.header />
<<<<<<< HEAD
<div class="row">
    <div class="colum-1">
        <div class="data">
            <h2>ACTIVE</h2>
            <h5>STATUS</h5>
        </div>
    </div>

    <div class="colum-2">
        <div class="data">
            <h2>Rs 500.00</h2>
            <h5>DEPOSIT AMOUNT</h5>
        </div>
    </div>

    <div class="colum-3">
        <div class="data">
            <h2>01</h1>
            <h5>YOUR ID NO.</h4>
        </div>
    </div>

    <div class="colum-4">
        <div class="data">
            <h2>Rs 0000.00</h2>
            <h5>REFERRAL INCOME</h4>
        </div>
    </div>
</div>

<div class="row">
    <div class="colum-1">
        <div class="data">
            <h2>00</h1>
            <h5>TOTAL MEMBER</h4>
        </div>
    </div>

    <div class="colum-2">
        <div class="data">
            <h2>00</h1>
            <h5>TOTAL ACTIVE IDs</h4>
        </div>
    </div>

    <div class="colum-3">
        <div class="data">
            <h2>Rs 0000.00</h1>
            <h5>TOTAL EARNING</h4>
        </div>
    </div>

    <div class="colum-4">
        <div class="data">
            <h2>Rs 0000.00</h2>
            <h5>TOTAL WIDTHDRAW</h4>
        </div>
    </div>
</div>

<div class="row">
    
    <div class="colum-1">
        <div class="data">
            <h2>Rs 5000.00</h1>
            <h5>PACKAGE</h4>
        </div>
    </div>

    <div class="colum-2">
        <div class="data">
            <h2>00</h1>
            <h5>WINNERS</h4>
        </div>
    </div>

    <div class="colum-3">
        <div class="data">
            <h5>00</h1>
            <h5>PHASE 1</h4>
        </div>
    </div>

    <div class="colum-4">
        <div class="data">
            <h2>00</h1>
            <h5>PHASE 2</h4>
        </div>
    </div>

</div>

<div class="row">
    
    <div class="colum-1">
        <div class="data">
            <h2>00</h1>
            <h5>PHASE 3</h4>
        </div>
    </div>

    <div class="colum-2">
        <div class="data">
            <h2>00</h1>
            <h5>PHASE 4</h4>
        </div>
    </div>

    <div class="colum-3">
        <div class="data">
            <h2>00</h1>
            <h5>PHASE 5</h4>
        </div>
    </div>

    <div class="colum-4">
        <div class="data">
            <h2>Rs 0000.00</h1>
            <h5>REWARD INCOME</h4>
        </div>
    </div>
=======
<x-dashboard.referral />
<h1>Customer Dashboard</h1>
>>>>>>> 7346467a7a40824303b284637deb22dfde09c586
@endsection