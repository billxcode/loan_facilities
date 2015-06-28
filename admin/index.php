
<!Doctype html>
<html>
<head>
    <title>ADMIN</title>
<?php
include "../control/header.php";
include "../control/check_session.php";
include "../database/data_select.php";
?>    
</head>
    <body>
         <div class="header"><div class="wellcome">Wellcome! ADMIN </div><div class="group_menu"><a href="index.php"><div class="menu_header">Beranda</div></a><a href="?control=setting"><div class="menu_header">Setting</div></a><a href="../control/logout.php"><div class="menu_header logout">Logout</div></a></div></div>
<div class="tbl tbl-admin">

<?php

if(!empty($_GET['control'])){
	$control = $_GET['control'];
	switch ($control) {
		case 'setting':
			include "../database/data_setting_admin.php";
			break;
		
		default:
			?>
<table class="table table-hover">
<tr class="table_header"><td>No</td><td>Nama</td><td>Tanggal Acara</td><td>Tanggal Pesan</td><td>Deskripsi Acara</td><td>Tempat</td><td>Status</td><td>Persetujuan</td><td>Delete</td></tr>
			<?php
			include "../database/table_data_admin.php";
			?>
</table>
			<?php
			break;
	}
}else{
	?>
<table class="table table-hover">
<tr class="table_header"><td>No</td><td>Nama</td><td>Tanggal Acara</td><td>Tanggal Pesan</td><td>Deskripsi Acara</td><td>Tempat</td><td>Status</td><td>Persetujuan</td><td>Delete</td></tr>
<?php
			include "../database/table_data_admin.php";
			?>
</table>
	<?php
}


?>

    
</div>
<?php

if(!empty($_GET['update'])){
    $nomer = $_GET['update'];
if($_GET['submit']=="Setujui"){
    mysql_query("UPDATE acara SET persetujuan=true where id_acara=$nomer") or die(mysql_error());
}else if($_GET['submit']=="Batal"){
    mysql_query("UPDATE acara SET persetujuan=false where id_acara=$nomer") or die(mysql_error());
}
}else if(!empty($_GET['delete'])){
$nomer = $_GET['delete'];
 mysql_query("DELETE FROM acara WHERE id_acara='$nomer'");    
}
?>
    </body>
    </html>