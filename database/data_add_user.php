<?php


include "db_control.php";

$namalengkap = $_POST['namalengkap'];
$pass = $_POST['password'];
$email = $_POST['email'];
$deskripsi = $_POST['deskripsi'];
$tanggal = $_POST['tanggal'];
$username = $_POST['username'];
$row = mysql_query("select * from profile");
$count = mysql_num_rows($row);
$count++;
$sql = mysql_query("INSERT INTO `profile`(`id_profile`, `nama_lengkap`, `email`, `username`, `password`, `tanggal_lahir`, `deskripsi`) VALUES ('$count','$namalengkap','$email', '$username', '$pass', '$tanggal', '$deskripsi')") or die(mysql_error());
if($sql){
    $_SESSION['username']=$username;
    $_SESSION['password']=$pass;
	header("location:../profile/");
}else{
	echo "gagal update";
}

?>