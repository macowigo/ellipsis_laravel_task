<?php
session_start();
include_once("CONFIG/session.php");
include_once("CONFIG/account.php");
if (!$_SESSION['Users']) {

    header("Location:login");
}

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
                <li class="white-text"><a href="dashboard">Dashboard</a></li>
                <li><a href="profile">Profile</a></li>
                <li><a href="logout">Logout</a></li>
            </ul>
            <ul id="nav-mobile" class="side-nav">
                <li><a class="maroon-text">MACOWIGO TECH</a></li>
                <li><a href="dashboard">Dashboard<i class="material-icons ">home</i></a></li>
                <li><a href="register">Profile <i class="material-icons ">user</i></a></li>
            </ul>
            <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons white-text">menu</i></a>
        </div>
    </nav>

    <div class="container">
    <h6 class="maroon-text center" ><i class="material-icons">sync</i> Update Details</h6>
               <form method="post">
               <div class="input-field col l6 m9 s12">
                <i class="material-icons prefix">account_circle</i>
                    <input id="firstname" name="fName" type="text" class="validate" minlength="3" 
                    value="<?php echo  $User_result['fname']?>" placeholder=" First Name" required>
                    <span class="helper-text" data-error="Please enter valid first name" data-success="good"></span>
                </div>
                <div class="input-field col l6 m9 s12">
                <i class="material-icons prefix">account_circle</i>
                    <input id="lastname" name="lName" type="text" class="validate" minlength="3" 
                    value="<?php echo $User_result['lname']?>" placeholder=" Last Name"required>
                    <span class="helper-text" data-error="Please enter valid last name" data-success="good"></span>
                    </div>
         
                <div  class="col s12" >
                <button class="btn right maroon" type="submit" name="updatedetails">UPDATE</button>
                </div>
               </form>
    </div>

    <!--  Scripts-->
    <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script src="../js/app.js"></script>
    <script src="../js/material.js"></script>

</body>

</html>