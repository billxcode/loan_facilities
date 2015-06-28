<?php

include "../database/db_control.php";
include "../control/check_session.php";
include "../database/data_select.php";


?>
<!Doctype html>
<html>
<head><title>Profile</title>
    <?php include "../control/header.php";?>
</head>
    <body class="rows">
         <div class="header"><div class="wellcome">Wellcome! <?php
$nama = selecting("nama_lengkap");echo $nama; ?></div><div class="group_menu"><a href="../dasboard/index.php"><div class="menu_header">Beranda</div></a><a href="../profile/index.php"><div class="menu_header profile">Profile</div></a><a href="../control/logout.php"><div class="menu_header logout">Logout</div></a></div></div>
    <div class="myprofile">
    <div class="span2 photo-profile"><img src="../file/hack460.jpg"/></div>
    <div class="note offset2">
    <table>
        <tr><td>Nama</td><td>:  <?php echo $nama;?></td></tr>
        <tr><td>Tanggal Lahir</td><td>:  <?php echo selecting("tanggal");?></td></tr>
        <tr><td>Keterangan</td><td>:  <?php echo selecting("deskripsi");?></td></tr>
        <tr><td colspan="2"><a href="?control=setting" class="btn btn-warning">Setting</a></td></tr>
    </table>
        
    </div>
    </div>


        <div class="tbl tbl-dasboard offset3">

        <?php
        if(!empty($_GET['control'])){
            $control = $_GET['control'];
            switch ($control) {
            case 'setting':
                include "../database/data_setting.php";
                break;
            default:
                ?>
            <table class="table table-hover">
                <tr class="table_header"><td>No</td><td>Nama</td><td>Tanggal Acara</td><td>Tanggal Pesan</td><td>Jam Mulai</td><td>Jam Berakhir</td><td>Deskripsi Acara</td><td>Tempat</td><td>Status</td></tr>
            <?php include "../database/table_data_profile.php";?>
            </table>

                <?php
                break;
        }
    }else{
?>
<table class="table table-hover">
                <tr class="table_header"><td>No</td><td>Nama</td><td>Tanggal Acara</td><td>Tanggal Pesan</td><td>Jam Mulai</td><td>Jam Berakhir</td><td>Deskripsi Acara</td><td>Tempat</td><td>Status</td><td>Detail</td></tr>
            <?php include "../database/table_data_profile.php";?>
            </table>
<?php

        
        }
        
        ?>
           
                </div>
    </body>
</html>