<?php
include "../database/db_control.php";
$user = $_POST['username'];
$pass = $_POST['password'];
$level = $_POST['level'];
session_start();
switch($level){
    case "user":
    $sql = mysql_query("SELECT username,password FROM profile where username='$user' and password='$pass'");
    break;
    case "admin": 
    $sql = mysql_query("SELECT username,password FROM admin where username='$user' and password='$pass'");
    break;
    default : echo "salah pilih";
}

$num = mysql_num_rows($sql);
if($num){
    $_SESSION['username'] = $user;
    $_SESSION['password'] = $pass;
    switch($level){
    case "user":header("location:../dasboard/index.php");break;
        case "admin":header("location:../admin/index.php");break;
        default: echo "wrong!!!";
    }
 
}else{
 header("location:../index.php");   
}



?>