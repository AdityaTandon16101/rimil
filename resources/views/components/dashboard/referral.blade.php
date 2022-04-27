@php
$isDepositedUpto500 = auth()->user()->memberDetail->total_deposites >= 500; @endphp

<div class="container">
  <div class="row">
    <div class="col-lg-12 referral">
      <div class="input-group mb-3">
        @if ($isDepositedUpto500)
        <div class="input-group-prepend">
          <span class="input-group-text">Your Referral Link</span>
        </div>
        @endif
        <input type="text" @class(["form-control", 'text-danger'=> !$isDepositedUpto500]) value="
        {!! $isDepositedUpto500
        ? route('register', ['referral'=> auth()->user()->referral_id])
        : __(" You havn't referral ID, To get your New Referral ID and link, Deposit upto &#8377;500") !!} "
        placeholder="
        Referral ID" aria-describedby="basic-addon2" readonly />
        @if ($isDepositedUpto500)
        <div class="input-group-append">
          <button class="btn" type="button">Copy</button>
        </div>
        @endif
      </div>
    </div>
  </div>
</div>