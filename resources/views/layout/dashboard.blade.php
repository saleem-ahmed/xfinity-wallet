<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>dashboard</title>
    
    <link rel="stylesheet" href="{{ asset('assets/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/library/fontawesome-free-6.1.0-web/fontawesome-free-6.1.0-web/css/all.css') }}">
</head>

<div class="Sidebar">
    <div class="section">
  
    @include('navbar.navbar')
    @yield('content')   
    @include('sidebar.sidebar')

</div>
<script>
    var hamburger = document.querySelector(".hamburger");
    hamburger.addEventListener("click", function() {
        document.querySelector("body").classList.toggle("active");
    })
</script>
<!-- @include('auth.footer') -->
