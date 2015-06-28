<?php

include "db_control.php";

$sql = mysql_query("SELECT * FROM acara");
while($rows=mysql_fetch_array($sql)){
    if($rows[7]==0){
        $rows[7]="belum di setujui";
        $namatombol="Setujui";
    }else if($rows[7]==1){
    $rows[7]="telah di setujui";
        $namatombol="Batal";
    }
echo "<tr><td>".$rows[0]."</td><td>".$rows[1]."</td><td>".$rows[2]."</td><td>".$rows[3]."</td><td>".$rows[4]."</td><td>".$rows[5]."</td><td>".$rows[7]."</td><td><a href='?update=$rows[0]&submit=$namatombol'><button class='btn btn-primary'>$namatombol</button></a></td><td><a href='?delete=$rows[0]'><button class='btn btn-warning'>Delete</button></a></td></tr>";   
}
?>