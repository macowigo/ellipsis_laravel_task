<?php

include_once("CONFIG/Reg.php");

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>ElipsisTask</title>
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
                <li><a href="register">Register <i class="material-icons ">person_add</i></a></li>
            </ul>
            <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons white-text">menu</i></a>
        </div>
    </nav>
    <div class="container">
        <h6 class="card-title center">Register Your Account</h6>
        <span class="materialize-red-text"><?php echo $member_exit; ?></span>
        <form method="post" enctype="multipart/form-data">
            <div class="row">
                <div class="input-field col l6 m9 s12">
                    <i class="material-icons prefix">account_circle</i>
                    <input id="firstname" name="fName" type="text" class="validate"minlength="3" required>
                    <label for="firstname">First Name</label>
                    <span class="helper-text" data-error="Please enter valid first name" data-success="good"></span>
                </div>

                <div class="input-field col l6 m9 s12">
                    <i class="material-icons prefix">account_circle</i>
                    <input id="lastname" name="lName" type="text" class="validate" minlength="3" required>
                    <label for="lastname">Last Name</label>
                    <span class="helper-text" data-error="Please enter valid last name" data-success="good"></span>
                </div>
                <div class="input-field col l6 m9 s12">
                    <i class="material-icons prefix">lock</i>
                    <input id="password" type="password" class="validate" name="pass"
                  pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[!@#$%^&*?]).{5,}" required>
                  <label for="password">Password</label>
                    <span toggle="#password" class="field-icon toggle-password"></span>
                    <span class="helper-text" data-error="Please password must be more than 5 Characters contains Upper
                                            case, number and special caharacter example @ # $" data-success="Good"></span>
                </div>
                <div class="input-field col l6 m9 s12">
                    <i class="material-icons prefix">email</i>
                    <input id="email" name="email" type="email" class="validate"required>
                    <label for="email">Email</label>
                    <span class="helper-text" data-error="Please enter valid email" data-success="good"></span>
                </div>
                <button class="btn right maroon" type="submit" name="register">REGISTER</button>

            </div>
            <a href="login">Already Have Account? Login</a>
        </form>
    </div>

    </div>

    <!--  Scripts-->
    <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script src="JS/app.js"></script>
    <script src="JS/material.js"></script>

</body>

</html>