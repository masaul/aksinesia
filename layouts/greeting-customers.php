<?php 
    require "../../controller/database.php";
    $hasil = mysqli_query($databaseConn, "SELECT * FROM tbl_admin");
    $waktu=gmdate("H:i",time()+7*3600);
    $t=explode(":",$waktu);
    $jam=$t[0];
    $menit=$t[1];

    if ($jam >= 00 and $jam < 10 ){
        if ($menit >00 and $menit<60){
            $ucapan="Selamat Pagi";
        }
    }else if ($jam >= 10 and $jam < 15 ){
        if ($menit >00 and $menit<60){
            $ucapan="Selamat Siang";
        }
    }else if ($jam >= 15 and $jam < 18 ){
        if ($menit >00 and $menit<60){
            $ucapan="Selamat Sore";
        }
    }else if ($jam >= 18 and $jam <= 24 ){
        if ($menit >00 and $menit<60){
            $ucapan="Selamat Malam";
        }
    }else {
        $ucapan="Error";
    }
?>
<div class="navbar-nav align-items-center">
    <?php foreach ($hasil as $data) : ?>
        <div class="nav-item d-flex align-items-center">
            <h4 class="mt-3"><marquee direction="right"><?= $ucapan; ?>, Customers !</marquee></h4>
        </div>
    <?php endforeach; ?>
</div>