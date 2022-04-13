<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@700&family=Poppins:ital,wght@0,400;0,700;1,400;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/login&register.css')}}">
    <title>Register</title>
</head>
<body>

    <section id="Register">
        <div class="register-bg"></div>
        <div class="register-content">
            <div class="register-heading">
                <h1>Welcome to</h1>
                <h1 id="bottom-heading">InventoryManagement <span>!</span></h1>
            </div>
            <form action="{{route('register')}}" method="POST" enctype="multipart/form-data" onsubmit="validate()">
                @csrf
                <div class="register-form">
                    <div class="register-input">
                        <label for="username">Username</label>
                        <br>
                        <input id="username" type="text" name="username" required>
                    </div>
                    <div class="register-input">
                        <label for="dateofbirth">Date Of Birth</label>
                        <br>
                        <input id="dateofbirth" type="date" name="date_of_birth" required>
                    </div>
                    <div class="register-input">
                        <label for="password">Password</label>
                        <br>
                        <input id="password" type="password" name="password" required>
                    </div>
                    <div class="register-input">
                        <label for="confirmpassword">Confirm Password</label>
                        <br>
                        <input id="confirmpassword" type="password" name="password_confirmation" required>
                    </div>
                    <div class="register-bottom">
                        <p>Already have an account? <span><a href="login.html">Log in</a></span></p>
                        <button class="submitBtn"type=""submit>Create Account</button>
                    </div>
                </div>
            </form>
        </div>
    </section>
    <script>
        function validate(){
            const password = document.getElementById('password').value
            const confirmpassword = document.getElementById('confirmpassword').value

                if (confirmpassword != password) {
                    alert('Confirm password and password must be the same.')
                }
        }
    </script>
</body>
</html>
