<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Apparel Ideas</title>
    <link rel="icon" href="{{ asset('logo/icon.png') }}" type="image/png" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    @vite('resources/css/style.css')
</head>
<body>

    <div class="box">
        <form action="{{ route('login') }}" method="POST">
            @if(Session::has('error'))
            <div class="alert alert-danger" role="alert">
                {{ Session::get('error') }}
            </div>
            @endif
                    @csrf
        <div class="form">
            <h2>Sign In</h2>
            <div class="inputBox">
                <input type="email" name="email" id="email" required="required">
                <span>username</span>
                <i></i>
            </div>
            <div class="inputBox">
                <input type="password" name="password" id="password" required="required">
                <span>password</span>
                <i></i>
            </div>
            <div class="links">
                <a href="#">Forgot Password</a>
                <a href="/register">Sign Up</a>
            </div>
            <input type="submit" value="Login">
        </div>
        </form>
    </div>

</body>
</html>