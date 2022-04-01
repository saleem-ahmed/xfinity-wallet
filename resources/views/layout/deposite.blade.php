@extends('layout.dashboard')
@section('content')
    <div class="withdrwal">
        <!-- <div class="title">
                <h2>Transfer</h2>
            </div> -->
        <div class="withdrawl-content">
            <div class="user">
                <div class="user-img">
                    {{-- <i class="fa fa-user"></i> --}}
                    <span>
                        <h2>Deposite</h2>
                    </span>
                </div>
                {{-- <div class="user-name">
                    <p>User</p>
                    <p>@user123</p>
                </div> --}}
                <div class="user-balance">
                    <span>$500</span>
                </div>
            </div>

            <div class="amount">
                <h2>$Amount</h2>
                <input type="number" placeholder="$">
            </div>
            <h3 align="center">Deposite with</h3>
            <div class="payment">
                <input list="browsers" name="browser" id="browser">
                <datalist id="browsers">
                    <option value="bank">
                    <option value="paypal">
                    <option value="strip">
                    {{-- <option value="Opera">
                    <option value="Safari"> --}}
                </datalist>
                {{-- <select name="" id="">
                    <option value="">Deposite with</option>
                    <option value="">
                    <p>bank</p>
                    </option>
                    <option value="">
                            <p>paypal</p>
                
                    </option>
                    <option value="">
                        <p>strip</p>
                    </option>
                </select> --}}
                {{-- <div class="card">
                    
                </div> --}}
            </div>
            <hr>

            {{-- <div class="amount transfer">
                <h2>Transfer to</h2>
                <input type="text" placeholder="email/username" >
            </div> --}}

            <div class="btn">
                <a href="">process</a>
            </div>
        </div>
    </div>
@endsection
