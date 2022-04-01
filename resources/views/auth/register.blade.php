@extends('layout.app')
 @section('content')
    <div class="Register-box">
        <div class="logo">
            <img src="{{ asset('assets/images/logo.png') }}" alt="">
        </div>
        <h2>Registeration Form</h2>
        <form>
         <div class="row ">
            <div class="user-box">
                <input type="text" name="" required="">
                <label>first name</label>
              </div>
              <div class="user-box">
                <input type="text" name="" required="">
                <label>last name</label>
              </div>
            </div>
            <div class="user-box">
              <input type="text" name="" required="">
              <label>Mobile Number</label>
            </div>
            <div class="user-box">
              <input type="text" name="" required="">
              <label>Email address</label>
            </div>
            <div class="user-box">
              <input type="text" name="" required="">
              <label>Select Club</label>
            </div>
            <div class="user-box">
              <input type="text" name="" required="">
              <label>Sponser</label>
            </div>
          <div class="row">
            <div class="user-box">
                <input type="password" name="" required="">
                <label>Password</label>
              </div>
            <div class="user-box">
                <input type="password" name="" required="">
                <label>Confirm Password</label>
            </div>
        </div>
        <p>your password should be atleast 6 digits</p>
          <div class="btn">
            <a href="#">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                Submit
              </a>
          </div>
        </form>
      </div>
      @endsection