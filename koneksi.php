<?php
$koneksi = new mysqli('localhost', 'root', '', 'vaksin_gandi')
    or die(mysqli_error($koneksi));


if (isset($_POST['simpan'])) {
    $idPasien = $_POST['idPasien'];
    $nmPasien = $_POST['nmPasien'];
    $jk = $_POST['jk'];
    $alamat = $_POST['alamat'];
    $status = $_POST['status'];

    $koneksi->query("INSERT INTO pasien VALUES ('$idPasien','$nmPasien','$jk','$alamat','$status')");

    header("location:pasien.php");
}


if (isset($_GET['idPasien'])) {
    $idPasien = $_GET['idPasien'];
    $koneksi->query("DELETE FROM pasien where idPasien = '$idPasien'");
    header("location:pasien.php");
}

if (isset($_POST['edit'])) {
    $idPasien = $_POST['idPasien'];
    $nmPasien = $_POST['nmPasien'];
    $jk = $_POST['jk'];
    $alamat = $_POST['alamat'];
    $status = $_POST['status'];

    $koneksi->query("UPDATE pasien SET nmPasien = '$nmPasien', jk = '$jk', alamat='$alamat', status= '$status' WHERE idPasien = '$idPasien'");
    header("location:pasien.php");
}
if (isset($_POST['users'])) {
    $id = $_POST['id'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $role = $_POST['role'];

    $koneksi->query("INSERT INTO user (username, password, role) VALUES ('$username','$password','$role')");

    header("location:user.php");
}
