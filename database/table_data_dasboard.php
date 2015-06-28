<?php

include "db_control.php";
$i=1;
$sql = mysql_query("SELECT * FROM acara");
while($rows=mysql_fetch_array($sql)){
    if($rows[9]==0)$rows[9]="belum di setujui";else $rows[9]="telah di setujui";
echo "<tr><td>".$i."</td><td>".$rows[1]."</td><td>".$rows[2]."</td><td>".$rows[3]."</td><td>".$rows[4]."</td><td>".$rows[5]."</td><td>".$rows[6]."</td><td>".$rows[7]."</td><td>".$rows[9]."</td></tr>";   
$i++;
}
?>