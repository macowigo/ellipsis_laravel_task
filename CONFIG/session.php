<?php
include("CONFIG/db.php");
extract($_SESSION); 
$User=$DB_con->prepare("SELECT * FROM  users WHERE email=:user");
$User->execute(array(':user'=>$Users));
$User_result = $User->fetch(PDO::FETCH_ASSOC);
extract($User_result);


?>