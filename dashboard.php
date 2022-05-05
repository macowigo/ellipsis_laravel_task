<?php
session_start();
include_once("CONFIG/session.php");
include_once("CONFIG/url.php");
if(!$_SESSION['Users'])
{

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
                <li><a href="generateurl">Generate Link</a></li>
                <li><a href="logout">Logout</a></li>
            </ul>
            <ul id="nav-mobile" class="side-nav">
                <li><a class="maroon-text">MACOWIGO TECH</a></li>
                <li><a href="dashboard">Dashboard<i class="material-icons ">home</i></a></li>
                <li><a href="profile">Profile <i class="material-icons ">account_circle</i></a></li>
                <li><a href="generateurl">Generate Link<i class="material-icons ">add_link</i></a></li>
                <li><a href="logout">Logout<i class="material-icons ">logout</i></a></li>
            </ul>
            <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons white-text">menu</i></a>
        </div>
    </nav>

    <div class="container">
        <table>
            <thead>
                <tr>
                <th>Generated Link</th>
                <th>View Link</th>
                <th>Edit Link</th>
                <th>Delete Link</th>
                </tr>
            </thead>
            <?php
            while($link=$get_link->fetch())
            {
                ?>
                <tr>
                <td><?php echo $link['short_url']?></td>
                <td>
                    <a  class=" btn-floating btn-small maroon " href="<?php echo $link['long_url']?>"
                    tittle="Click to view"><i class="material-icons">visibility</i></a>
               </td>
                  <td>

                    <a  class=" btn-floating btn-small maroon " href="edit_url?edit=<?php echo $link['urlid']?>"
                    tittle="Click to view"><i class="material-icons">edit</i></a>  
             </td>
                  <td>
                    <a  class=" btn-floating btn-small red " href="?delete=<?php echo $link['urlid']?>"
                    tittle="Click to view"><i class="material-icons">delete</i></a>
                 </td>

                </tr>
                <?php
            }
            ?>

        </table>
       
    </div>

    <!--  Scripts-->
    <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script src="JS/app.js"></script>
    <script src="JS/material.js"></script>

</body>

</html>
