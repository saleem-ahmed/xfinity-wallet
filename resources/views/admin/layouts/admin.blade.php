@extends('admin.layouts.dashboard')
@section('content')
<div class="container">
            <div class="row">
                <div class="card" style="background-color: red">
                <a href="{{ route('withdraw.index')}}">
                    <div class="card-body">
                        <div class="icon">
                            <i class="fa-solid fa-arrow-down"></i>
                        </div>
                        <h5 class="card-title">Withdrawl</h5>
                    </div>
                    </a>
                </div>
                <div class="card" style="background-color: rgb(140, 209, 10)">
                <a href="{{ route('transfer.index')}}">
                    <div class="card-body">
                        <div class="icon">
                            {{-- <i class="fa fa-bell"></i> --}}
                            <i class="fa-solid fa-arrow-right-arrow-left"></i>
                        </div>
                        <h5 class="card-title">Transfer</h5>
                    </div>
                    </a>
                </div>
                <div class="card" style="background-color: rgb(7, 253, 7)">
                    <div class="card-body">
                        <div class="icon">
                            <i class="fa-solid fa-gift"></i>    
                        </div>
                        <h5 class="card-title">Voucher</h5>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="card" style="background-color: rgb(13, 177, 169)">
                    <div class="card-body">
                        <div class="icon">
                            <i class="fa-solid fa-wifi"></i>
                        </div>
                        <h5 class="card-title">Internet</h5>
                    </div>
                </div>
                <div class="card" style="background-color: rgb(11, 155, 221)">
                    <div class="card-body">
                        <div class="icon">
                            <i class="fa-solid fa-ticket"></i>
                        </div>
                        <h5 class="card-title">Ticket</h5>
                    </div>
                </div>
                <div class="card" style="background-color: rgb(138, 8, 199)">
                    <div class="card-body">
                        <div class="icon">
                            <i class="fa-solid fa-calendar-days"></i>
                        </div>
                        <h5 class="card-title">Events</h5>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="card" style="background-color: rgb(248, 60, 223)">
                    <div class="card-body">
                        <div class="icon">
                            <i class="fa-solid fa-circle-dollar-to-slot"></i>
                        </div>
                        <h5 class="card-title">Donations</h5>
                    </div>
                </div>
               
    
            </div>
        </div>
    </div>
    @endsection