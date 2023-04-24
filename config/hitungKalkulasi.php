<?php
include "pages/petani/kalkulatorPupuk.php";
$luasLahan = $_GET['luasLahan'];

if(isset($_GET['persegi'])){
    echo "<input type='submit' name='persegiSisi_1' value='0.0'>";
    $persegiSisi_1 = $_GET['persegiSisi_1'];
}

if(isset($_GET['segitiga'])){
    echo "<input type='submit' name='segitigaSisi_1' value='0.0'>";
    echo "<input type='submit' name='segitigaSisi_2' value='0.0'>";
}

if(isset($_GET['persegiPanjang'])){
    echo "<input type='submit' name='P_panjangSisi_1' value='0.0'>";
    echo "<input type='submit' name='P_panjangSisi_2' value='0.0'>";

}

?>