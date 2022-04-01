@extends('layout.app')
@section('content')
<div class="login-box">
    <div class="logo">
        <img src="{{ asset('assets/images/logo.png') }}" alt="">
    </div>
    <h2>Login</h2>
    <form   action="{{ route('store')}}" method="POST">
    @csrf
        <div class="user-box">
            <input type="text" name="username" required="">
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
        <button type="submit" class="btn btn-primary">  <span></span>
            <span></span>
            <span></span>
            <span></span>
            Submit</button>
    </form>
</div>
@endsection