<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <link href="css/login.css" type="text/css" rel="stylesheet" />
    </head>
    <style>
        body {
            background-image: url(./gambar/backbaru.jpg);
            background-repeat: no-repeat;
            background-size: cover;
            background-position: 0 -350px;
        }
    </style>
    <body>
        <div class="loginform">
            <h1>Login form</h1>
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <p>Email</p>
                <input
                    type="text"
                    name="email"
                    id="name"
                    placeholder="Enter Email"
                />
                <p>Password</p>
                <input
                    type="Password"
                    name="password"
                    id="Password"
                    placeholder="Enter Password"
                    value=""
                />
                <input type="submit" name="" value="login" />
                <a href="/register"> No Account? </a>
            </form>
        </div>
    </body>
</html>
