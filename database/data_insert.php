<?php
include "db_control.php";
$nama = $_POST['event_name'];
$tanggal = $_POST['date'];
$jammulai = $_POST['jam_mulai'];
$jamberakhir = $_POST['jam_berakhir'];
$deskripsi = $_POST['description'];
$tempat = $_POST['place'];
$count = mysql_query("select * from acara");
$count = mysql_num_rows($count);
$count++;
$sql = mysql_query("INSERT INTO acara values('$count', '$nama', '$tanggal', current_date, '$jammulai','$jamberakhir','$deskripsi', '$tempat', 1, false)") or die(mysql_error());
if($sql){
 echo "berhasil input";  
 header("location:../dasboard/index.php");
}else{
 echo "gagal input";
}


?>