<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Withdrawl</title>
    <link rel="stylesheet" href="{{ asset('assets/style.css') }}">
    <link rel="stylesheet"
        href="{{ asset('assets/library/fontawesome-free-6.1.0-web/fontawesome-free-6.1.0-web/css/all.css') }}">
</head>

<body>
    <div class="withdrwal">
        <div class="title">
            <h2>Transfer</h2>
        </div>
        <div class="withdrawl-content">
            <div class="user">
                <div class="user-img">
                    <i class="fa fa-user"></i>
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
</body>

</html>
