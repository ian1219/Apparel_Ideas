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
    @vite('resources/css/register.css')
</head>
<body>
    
    <div class="box">
        @if(Session::has('success'))
                        <div class="alert alert-success" role="alert">
                            {{ Session::get('success') }}
                        </div>
                    @endif
                    <form action="{{ route('register') }}" method="POST">
                        @csrf
        <div class="form">
            <h2>Sign Up</h2>
            <div class="inputBox">
                <input type="text" name="name" required="required">
                <span>First name</span>
                <i></i>
            </div>
            <div class="inputBox">
                <input type="email" name="email" required="required">
                <span>username</span>
                <i></i>
            </div>
            <div class="inputBox">
                <input type="password" name="password" required="required">
                <span>password</span>
                <i></i>
            </div>
            <div class="inputBox">
                <input type="password" id="password" name="password_confirmation" required="required">
                <span>confirm password</span>
                <i></i>
            </div>
            <div class="links">
                <a href="#">Forgot Password</a>
                <a href="/login">Sign In</a>
            </div>
            <input type="submit" value="Sign Up">
        </div>
        </form>
    </div>

</body>
</html>