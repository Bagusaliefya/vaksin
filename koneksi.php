<?php
$koneksi = new mysqli('localhost', 'root', '', 'vaksinasi');
if ($koneksi->connect_error) {
    die("Koneksi Gagal :" . $koneksi->connect_error);
}
if (isset($_POST['simpan'])) {
    $idPasien = $_POST['idPasien'];
    $nmPasien = $_POST['nmPasien'];
    $jk = $_POST['jk'];
    $alamat = $_POST['alamat'];
    $koneksi->query("INSERT INTO pasien (idPasien, nmPasien, jk, alamat) values ('$idPasien','$nmPasien','$jk','$alamat')");

    header('location:dashboard.php');
}
if (isset($_GET['idPasien'])) {
    $idPasien = $_GET['idPasien'];
    $koneksi->query("DELETE FROM pasien where idPasien = '$idPasien'");
    header("location:dashboard.php");
}


if (isset($_POST['edit'])) {
    $idPasien = $_POST['idPasien'];
    $nmPasien = $_POST['nmPasien'];
    $jk = $_POST['jk'];
    $alamat = $_POST['alamat'];

    $koneksi->query("UPDATE pasien SET idPasien='$idPasien',nmPasien='$nmPasien',jk='$jk',alamat='$alamat'WHERE idPasien=$idPasien");
    header("location:dashboard.php");
}
