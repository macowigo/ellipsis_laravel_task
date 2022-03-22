<?php

include_once("CONFIG/Reg.php");

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>MacowigoTech</title>
    <link rel="shortcut icon" href="../images/logo.png">

    <!-- CSS  -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="CSS/material.css" type="text/css" rel="stylesheet" media="screen,projection" />
    <link href="CSS/app.css" type="text/css" rel="stylesheet" media="screen,projection" />
</head>

<body>
<nav class="maroon " role="navigation">
        <div class="nav-wrapper container parallax ">
            <ul class="right hide-on-med-and-down">
                <li class="white-text"><a href="login">Login</a></li>
                <li><a href="register">Register</a></li>
            </ul>
            <ul id="nav-mobile" class="side-nav">
                <li><a class="maroon-text">MACOWIGO TECH</a></li>
                <li><a href="login">Login<i class="material-icons ">home</i></a></li>
                <li><a href="register">Register <i class="material-icons ">user</i></a></li>
            </ul>
            <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons white-text">menu</i></a>
        </div>
    </nav>



    <div class="container">
        <span class="materialize-red-text"><?php echo $error; ?></span>
        <h6 class="card-title center">Login Your Account</h6>
        <form method="post">
            <div class="input-field">
                <i class="material-icons prefix">account_circle</i>

                <input id="email" name="email" type="email" class="validate" required>
                <label for="email">Username</label>
                <span class="helper-text" data-error="Please enter Valid email Address" data-success="right"></span>
            </div>
            <div class="input-field">
                <i class="material-icons prefix">lock</i>
                <input id="password" name="password" type="password" class="validate" required>
                <label for="password">Password</label>
                <span toggle="#password" class="field-icon toggle-password"></span>
                <span class="helper-text" data-error="please enter your password" data-success="right"></span>
            </div>

            <!-- <a href="ForgotPass">Forgot Password?</a> -->

            <a href="register">Dont Have Account? Register</a>

            <br><br>
            <div>
                <input class="btn right hover maroon" type="submit" name="Login" value="Log In">

            </div>
        </form>
    </div>

    </div>

    <!--  Scripts-->
    <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script src="../js/app.js"></script>
    <script src="../js/material.js"></script>

</body>

</html>