<?php

$vt_sunucu="localhost";
$vt_kullanici = "root";
$vt_sifre="";
$vt_dbadi="aspirate";

$baglan=mysqli_connect($vt_sunucu, $vt_kullanici, $vt_sifre,$vt_dbadi);


    if(!$baglan){
        die("Veritabanına bağlantı işlemi başarısız".mysqli_connect());
    }



?>