<?php
/*$namafile = $_FILE['img']['temp'];
$size = $_FILE['img']['size'];
$destination = "../file/img";
if($size>2){
move_uploaded_file($namafile, $destination);
}else{
echo "File terlalu besar!!";
}*/
include "db_control.php";

$namalengkap = $_POST['namalengkap'];
$pass = $_POST['password'];
$email = $_POST['email'];
$deskripsi = $_POST['deskripsi'];
$tanggal = $_POST['tanggal'];
$user = $_POST['username'];
$sql = mysql_query("UPDATE `profile` SET `nama_lengkap`='$namalengkap',`email`='$email',`password`='$pass',`tanggal_lahir`='$tanggal',`deskripsi`='$deskripsi' WHERE `username`='$user'") or die(mysql_error());
if($sql){
	header("location:../profile/");
}else{
	echo "gagal update";
}
?>