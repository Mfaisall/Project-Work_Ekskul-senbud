<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('assets/css/login.css') }}">
    
</head>
<body>
    <div class="login">
        <h1>Login</h1>
        <form action="{{ route('auth') }}" method="POST">
            @csrf
            <input type="email" name="email" placeholder="Masukkan email">
            <input type="password" name="password" placeholder="Masukkan password">
            <button type="submit" class="btn btn-primary btn-block btn-large">Log In</button>
        </form>
    </div>
</body>
</html>
