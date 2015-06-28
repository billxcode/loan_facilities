<?php

include "db_control.php";
$user = $_SESSION['username'];
$i=1;
$sql = mysql_query("SELECT * FROM acara,profile where id_profile=profile_id_profile and username='$user'");
while($rows=mysql_fetch_array($sql)){
    if($rows[9]==0)$rows[9]="belum di setujui";else $rows[9]="telah di setujui";
echo "<tr><td>".$i."</td><td>".$rows[1]."</td><td>".$rows[2]."</td><td>".$rows[3]."</td><td>".$rows[4]."</td><td>".$rows[5]."</td><td>".$rows[6]."</td><td>".$rows[7]."</td><td>".$rows[9]."</td><td><a href='../print/index.php?nama=".$rows[1]."&tanggal_acara=".$rows[2]."&tanggal_pesan=".$rows[3]."&jam_mulai=".$rows[4]."&jam_berakhir=".$rows[5]."&deskripsi=".$rows[6]."&tempat=".$rows[7]."&username=".$_SESSION['username']."' class='btn btn-success'>Detail</a></td></tr>";   
$i++;
}
?>