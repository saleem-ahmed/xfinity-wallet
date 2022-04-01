@extends('admin.layouts.app')
@section('content')
<div class="login-box">
    <div class="logo">
        <img src="{{ asset('assets/images/logo.png') }}" alt="">
    </div>
   
    <h2>Admin Login</h2>
    <form action="{{ route('admin.store')}}" method="POST">
    @csrf
        <div class="user-box">
            <input type="text" name="user" required="">
            <label>Username</label>
        </div>
        <div class="user-box">
            <input type="password" name="password" required="">
            <p><marquee behavior="scroll" direction="right">your password should be atleast 6 digits</marquee></p>
            <label>Password</label>
        </div>
        <!-- <a href="#">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            Submit
        </a> -->
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection