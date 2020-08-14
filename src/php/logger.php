<?php

$username= $_REQUEST["username"];
$password= $_REQUEST["password"];

if ($username=="IJSE" && $password=="ijse"){
    session_start();
    $_SESSION["username"]="IJSE";
    header("Location:dashboard.php");


}else{
    header("Location:login.php");
}


?>