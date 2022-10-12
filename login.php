<?php

?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Login</title>

  <link rel="shortcut icon" href="favicon.png">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <link rel="stylesheet" href="./css/authentication.css">
    <link rel="stylesheet" href="./css/index.css">
</head>
<body>

    <div class="login-container d-md-flex">
        <div class="login-image"></div>
        <div class="authentication-container">
                <h1 class="title">Sign In</h1>
                <p class="mb-4">Please enter your credentials.</p>

                <form action="#" class="pt-4">
                    <div class="form-floating">
                        <input type="email" class="form-control" id="floatingEmail" placeholder="Please enter your email">
                        <label for="floatingEmail">Email Address</label>
                    </div>

                    <div class="form-floating">
                        <span class="password-show-toggle js-password-show-toggle"><span class="uil"></span></span>
                        <input type="password" class="form-control" id="floatingPassword" placeholder="Please enter your password">
                        <label for="floatingPassword">Password</label>
                    </div>

                    <div class="d-flex justify-content-between">
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="remember">
                            <label for="remember" class="form-check-label">Keep me logged in</label>
                        </div>
                        <div><a href="#">Forgot password?</a></div>
                    </div>
                    
                    <div class="d-grid mb-4">
                        <button type="submit" class="btn btn-primary">Log in</button>
                    </div>

                    <div class="mb-2">Don’t have an account? <a href="signup.html">Sign up</a></div>
                    <div class="mb-2">Return without login <a href="index.php">Home</a></div>

                </form>
        </div>
    </div>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="js/custom.js"></script>


    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.min.js"></script>

    </body>
</html>
