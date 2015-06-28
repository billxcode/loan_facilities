<?php
include "db_control.php";

function selecting($param){
$user = $_SESSION['username'];
$sql = mysql_query("SELECT * FROM profile WHERE username='$user'");
$select = mysql_fetch_array($sql);
switch($param){
case "username":return $select['username'];
case "nama_lengkap":return $select['nama_lengkap'];
case "deskripsi": return $select['deskripsi'];
case "tanggal":return $select['tanggal_lahir'];
case "photo":return $select['photo'];
case "password":return $select['password'];
case "email":return $select['email'];
default: return "Wrong!!!";

}
}
?>