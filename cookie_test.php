<?php


if (isset($_REQUEST["name"])) {
    $name = $_REQUEST["name"];
     
   setcookie("nam",$name , time()+225 );

    if (isset($_COOKIE["nam"]) ) {
       
    }
    header("location:profile.php");
}else{
    header("location:cookie_users_form.php");
    }
