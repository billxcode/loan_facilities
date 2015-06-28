<?php
session_start();
if(empty($_SESSION['username'])){
 header("location:http://localhost/kemahasiswaan.com");      
}
?>