<?php
include("CONFIG/db.php");
session_start();
$member_exit=" ";
$error=" ";
echo getcwd();
if(isset($_POST['register']))
{
$userid=random_int(10000000, 99999999);  
$user_firstname = $_POST['fName'];
$user_lastname = $_POST['lName'];
$user_email = $_POST['email'];
$user_password=password_hash($_POST['pass'], PASSWORD_DEFAULT);


$check_member=$DB_con->prepare("SELECT email FROM users WHERE email=:mail");
$check_member->bindParam(':mail',$user_email,PDO::PARAM_STR);
$check_member->execute();
if($check_member->rowCount()>0)
{
$member_exit="Sorry user with email:-  $user_email,  already exist please user another email or login";

}
else
{
    $add_Acount = $DB_con->prepare("INSERT INTO users(userid,email,password,fname,lname) 
     VALUES(:userid,:email,:pass,:fName,:lName)");     
      $add_Acount->bindParam(':userid', $userid,PDO::PARAM_INT);
      $add_Acount->bindParam(':email', $user_email,PDO::PARAM_STR);
      $add_Acount->bindParam(':pass', $user_password,PDO::PARAM_STR);
      $add_Acount->bindParam(':fName', $user_firstname,PDO::PARAM_STR);
      $add_Acount->bindParam(':lName', $user_lastname,PDO::PARAM_STR);
      if($add_Acount->execute())
       {
            header("location:dashboard");
            $_SESSION['Users']=$user_email;
         
       }
       
       else
       {
      $error=" Sorry There is problem in your registration please try again";
   
       }
 }  
}


if(isset($_POST['Login']))
{
    $Email=$_POST['email'];
    $password=$_POST['password'];   
    $loginCheck = $DB_con->prepare("SELECT email,password FROM users WHERE email=:user");    
    $loginCheck->bindParam(':user', $Email, PDO::PARAM_STR);
    $loginCheck->execute();
    $result=$loginCheck->fetch(PDO::FETCH_BOTH);
    if($result && password_verify($password,$result['password']))
   {
      header("location:dashboard");
            $_SESSION['Users']=$Email;     
            
    }

    else
    {
     $error="Sorry you entered incorrect username,Password or both please reenter correct details to login";
     
     
    }
}

  
     ?>
