<?php
$koneksi=mysqli_connect("localhost","root","","barbershop");
function rupiah($angka){

    $hasil_rupiah = "Rp " . number_format($angka,2,',','.');
    return $hasil_rupiah;
 
    }
?>