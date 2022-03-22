<?php
$error="";
if(isset($_POST['changepass']))
{    
    $CurentPass=$_POST['current'];
    $NewPass=password_hash( $_POST['pass1'],PASSWORD_DEFAULT);
    $verifyPass=$DB_con->prepare("SELECT password FROM users WHERE userid=:user");
    $verifyPass->bindParam(':user',$userid,PDO::PARAM_STR);
    $verifyPass->execute();
    $result=$verifyPass->fetch(PDO::FETCH_ASSOC);
        if(password_verify($CurentPass,$result['password']))
        {
            $ChangePass=$DB_con->prepare("UPDATE users SET password=:pass WHERE userid=:user");
            $ChangePass->bindParam(':pass',$NewPass,PDO::PARAM_STR);
            $ChangePass->bindParam(':user',$userid,PDO::PARAM_STR);
            if($ChangePass->execute())
            {
                header("location:logout");    
            }
            else{
                 $error ="Something wrong with your inputs";
                }
        }
        else
        {
            $error="Your Current Password is not Correct Please Enter Corrent Password and Continue ...";
                
        }
}

if(isset($_POST['updatedetails']))
{
    $user_firstname = $_POST['fName'];
    $user_lastname = $_POST['lName'];
    
    $update_details = $DB_con->prepare("UPDATE users SET fname=:fName,lname=:lName WHERE userid=:id ");     
    $update_details->bindParam(':fName', $user_firstname,PDO::PARAM_STR);
    $update_details->bindParam(':lName', $user_lastname,PDO::PARAM_STR);
    $update_details->bindParam(':id', $userid,PDO::PARAM_STR);
    if($update_details->execute())
    {

    header("location:profile");  
    }

    else
    {
    $error=" Sorry There is problem in your registration please try again";

    }
 } 


  

     
     ?>