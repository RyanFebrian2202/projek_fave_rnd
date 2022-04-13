<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:wght@700&family=Poppins:ital,wght@0,400;0,700;1,400;1,900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/login&register.css')}}">
    <title>Log In</title>
</head>

<body>
    <section id="Register">
        <div class="login-bg"></div>
        <div class="login-content">
            <div class="login-heading">
                <h1>Hello Again!</h1>
            </div>
            <form action="{{route('login')}}" method="POST" enctype="multipart/form-data">
                <div class="register-form">
                    <div class="register-input">
                        <label for="username">Username</label>
                        <br>
                        <input id="username" type="text" name="username" required>
                    </div>
                    <div class="register-input">
                        <label for="password">Password</label>
                        <br>
                        <input id="password" type="password" name="password" required>
                    </div>
                    <div class="register-bottom">
                        <p>Haven't registered yet? <span><a href="register.html">Create Account</a></span></p>
                        <button class="submitBtn" type="" submit>Login</button>
                    </div>
                </div>
            </form>
        </div>
    </section>
</body>

</html>
