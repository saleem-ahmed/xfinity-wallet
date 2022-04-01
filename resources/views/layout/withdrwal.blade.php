@extends('layout.dashboard')
@section('content')
    <div class="withdrwal">
        <div class="withdrawl-content">
            <div class="user">
                <div class="user-img">
                    <i class="fa fa-user"></i>
                    <span> <h2>Withdrawl</h2></span>
                </div>
                <div class="user-name">
                    <p>User</p>
                    <p>@user123</p>
                </div>
                <div class="user-balance">
                    <span>$500</span>
                </div>
            </div>
            <div class="amount" style="margin-bottom: 30px">
                <h2>$Amount</h2>
                <input type="number" placeholder="$" >
            </div>
            <hr>
            <h3 align="center">Select Payment Method</h3>
            <div class="payment" style="margin-top: 30px">
                <input list="browsers" name="browser" id="browser">
                <datalist id="browsers">
                    <option value="bank">
                    <option value="paypal">
                    <option value="strip">
                </datalist>
            </div>
            <div class="btn">
                    <a href="">process</a>
            </div>
        </div>
    </div>

@endsection
