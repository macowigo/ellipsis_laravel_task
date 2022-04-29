<?php
$error=" ";
$http='https://';
$tes="ln.";
$time=date("Y-m-d H:i:s");
$now=time();
$endtime = date("Y-m-d H:i:s",strtotime('+5 minutes',$now));
$n=6;
$characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
$randomString = '';
    for ($i = 0; $i < $n; $i++) {
        $index = rand(0, strlen($characters) - 1);
        $randomString .= $characters[$index];
    }
  

$link=$http.$tes.$randomString;
if(isset($_POST['generateUrl']))
{
    
    $long_url=$_POST['link'];
    $url_id=random_int(10000000,99999999);
    if (filter_var($long_url, FILTER_VALIDATE_URL) === FALSE) {
        $error="Sorry this link  ($long_url) is not valid";
    }
    else{
        $add_url = $DB_con->prepare("INSERT INTO url(urlid,long_url,short_url,added_time,expire_time) 
        VALUES(:id,:long,:short,:tm,:ex)");     
         $add_url->bindParam(':id', $url_id,PDO::PARAM_INT);
         $add_url->bindParam(':long', $long_url,PDO::PARAM_STR);
         $add_url->bindParam(':short', $link,PDO::PARAM_STR);
         $add_url->bindParam(':tm', $time,PDO::PARAM_STR);
         $add_url->bindParam(':ex', $endtime,PDO::PARAM_STR);
         if($add_url->execute()){
             header("location:dashboard");
   
         }
    }
    
   
}

$get_link=$DB_con->prepare("SELECT short_url,long_url,urlid FROM url");
$get_link->execute();

$get_linkexpiredate=$DB_con->prepare("SELECT expire_time FROM url");
$get_linkexpiredate->execute();
$expiretime=$get_linkexpiredate->fetch();
$result=date_diff(date_create($expiretime['expire_time']),date_create($time));
$inteval=$result->format('%a');

if(isset($_GET['edit']))
{
 $url_id=$_GET['edit'];
$get_linkedit=$DB_con->prepare("SELECT long_url FROM url WHERE urlid=:id");
$get_linkedit->bindParam(':id',$url_id,PDO::PARAM_INT);
$get_linkedit->execute();
$linkresult=$get_linkedit->fetch();
}

if(isset($_POST['editlink']))
{
$long_url=$_POST['link'];
if (filter_var($long_url, FILTER_VALIDATE_URL) === FALSE) {
    $error="Sorry this link  ($long_url) is not valid";
}
else{
    $linkedit=$DB_con->prepare("UPDATE url SET long_url=:long,short_url=:short WHERE urlid=:id");
    $linkedit->bindParam(':long',$long_url,PDO::PARAM_INT);
    $linkedit->bindParam(':short',$link,PDO::PARAM_INT);
    $linkedit->bindParam(':id',$url_id,PDO::PARAM_INT);
    if($linkedit->execute()){
        header("location:dashboard");
    }
}

}


if(isset($_GET['delete']))
{
 $url_id=$_GET['delete'];
$delete_link=$DB_con->prepare("DELETE FROM url WHERE urlid=:id");
$delete_link->bindParam(':id',$url_id,PDO::PARAM_INT);
if($delete_link->execute()){
    header("location:dashboard");
}

}