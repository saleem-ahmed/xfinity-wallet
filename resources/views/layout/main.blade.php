@extends('layout.dashboard')
@section('content')
    <div class="container">
        <div class="row">
            <div class="card" style="background-color: red">
                <a href="{{ route('withdraw.index') }}">
                    <div class="card-body">
                        <div class="icon">
                            <i class="fa-solid fa-arrow-down"></i>
                        </div>
                        <h5 class="card-title">Withdrawl</h5>
                    </div>
                </a>
            </div>
            <div class="card" style="background-color: rgb(140, 209, 10)">
                <a href="{{ route('transfer.index') }}">
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
                <a href="{{ route('deposite.index') }}">
                    <div class="card-body">
                        <div class="icon">
                            <i class="fa-solid fa-gift"></i>
                        </div>
                        <h5 class="card-title">Deposite</h5>
                    </div>
                </a>
            </div>
        </div>
        <div class="row">
            <div class="card" style="background-color: rgb(13, 177, 169)">
                <a href="{{ route('history.index') }}">
                    <div class="card-body">
                        <div class="icon">
                            <i class="fa-solid fa-wifi"></i>
                        </div>
                        <h5 class="card-title">History</h5>
                    </div>
                </a>
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
            <div class="card" style="background-color: rgb(65, 231, 236)">
                <div class="card-body">
                    <div class="icon">
                        {{-- <i class="fa fa-bell"></i> --}}
                        <i class="fa-solid fa-bars"></i>
                    </div>
                    <h5 class="card-title">All Pages</h5>
                </div>
            </div>

        </div>
    </div>
    </div>
@endsection
