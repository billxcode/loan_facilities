<!Doctype html>
<html>
	<head>
		<title>Print Detail</title>
        <?php include "../control/check_session.php"; ?>
	</head>
<body>
<div>Yth Bpk/Ibu</div>
<div></div>
<p>Dengan adanya surat ini kami selaku UKM pramuka ingin meminjam ruang sidang yang nantinya akan digunakan untuk keperluan acara sebagai berikut :</p>
<p>Nama     : <?php echo $_GET['nama']; ?></p>
<p>Tempat   : <?php echo $_GET['tempat']; ?></p>
<p>tanggal  : <?php echo $_GET['tanggal_acara']; ?></p>
<p>Jam      : <?php echo $_GET['jam_mulai']; ?> sampai <?php echo $_GET['jam_berakhir']; ?></p>
<p>Peminjam : <?php echo $_GET['username']; ?></p>
<p>dengan adanya surat ini kami mohon izin untuk meminjam , sekian trimakasih atas perhatiannya, wassalamualaikum wr wb</p>

<p>Mengetahui</p>
<br>
<br>
<br>
<br>
<br>
<p>______________________________</p>
<p>Kemahasiswaan</p>

<button onclick="window.print()">Print</button>




</body>
</html>