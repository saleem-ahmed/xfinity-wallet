@extends('layout.dashboard')
@section('content')
    <div class="withdrwal">
        <!-- <div class="title">
            <h2>Transfer</h2>
        </div> -->
        <div class="withdrawl-content">
            <div class="user">
                <div class="user-img">
                    <i class="fa fa-user"></i>
                    <span> <h2>Transfer</h2></span>
                </div>
                <div class="user-name">
                    <p>User</p>
                    <p>@user123</p>
                </div>
                <div class="user-balance">
                    <span>$500</span>
                </div>
            </div>
            <div class="amount">
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
                    {{-- <option value="Opera">
                    <option value="Safari"> --}}
                </datalist>
            </div>
            <hr>
            <div class="amount transfer">
                <h2>Transfer to</h2>
                {{-- <input type="number" placeholder="$" > --}}
                <input type="text" placeholder="email/username" >
            </div>
            {{-- <div class="payment">
                <div class="card">
                    <i class="fa-solid fa-building-columns"></i>
                    <p>bank</p>
                </div>
                <div class="card">
                    <i class="fa-brands fa-cc-paypal"></i>
                    <p>paypal</p>
                </div>
            </div> --}}
            <div class="btn">
                    <a href="">Send</a>
            </div>
        </div>
    </div>
    @endsection
