<!Doctype html>
<html>
<head>
    <title>DASBOARD</title>
<?php
include "../control/header.php";
include "../control/check_session.php";
include "../database/data_select.php";
?>
    <script>
    (function($){
        $(function(){
            $('input.timepicker').timepicker();
        });
    })(jQuery);
    </script>
</head>
    <body class="rows">
        <div class="header"><div class="wellcome">Wellcome! <?php echo selecting("nama_lengkap"); ?></div><div class="group_menu"><a href="../dasboard/index.php"><div class="menu_header">Beranda</div></a><a href="../profile/index.php"><div class="menu_header profile">Profile</div></a><a href="../control/logout.php"><div class="menu_header logout">Logout</div></a></div></div>
        <div class="form dasboard span3">
            <div class="menu menu-head">MENU</div>
<form action="../database/data_insert.php" method="post">
<div><input type="text" name="event_name" placeholder="nama acara"/></div>
<div><input type="text" name="date" placeholder="tanggal di selenggarakan" id="datepicker"/></div>
<div><input type="text" class="timepicker" name="jam_mulai" placeholder="jam mulai"/></div>
<div><input type="text" class="timepicker" name="jam_berakhir" placeholder="jam berakhir"/></div>
<div><textarea name="description" placeholder="Deskripsi"></textarea></div>
<div><select name="place">
    <option value="Halaman Sport Center">HALAMAN Sport Center</option>
    <option value="Ruang Sidang">RUANG SIDANG</option>
    </select></div>
<div><button type="submit" class="btn">Submit</button><button type="reset" class="btn">Reset</button></div>
</form>
            </div>
        <div class="tbl tbl-dasboard offset3">
            <table class="table table-hover">
                <tr class="table_header"><td>No</td><td>Nama</td><td>Tanggal Acara</td><td>Tanggal Pesan</td><td>Jam Mulai</td><td>Jam Berakhir</td><td>Deskripsi Acara</td><td>Tempat</td><td>Status</td></tr>
<?php 
include "../database/table_data_dasboard.php";

?>
                </table>
            </div>
    </body>
</html>




