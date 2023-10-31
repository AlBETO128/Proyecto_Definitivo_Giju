<?php
include("./config.php");

// cek apa tombol daftar udah di klik blom
if (isset($_POST['tambah'])) {
    // ambil data dari form
    $nombre = $_POST['nombre'];
    $Contenido = $_POST['Contenido'];
    $Via_de_admin = $_POST['Via_de_admin'];
    $presentacion = $_POST['presentacion'];
    $laboratorio = $_POST['laboratorio'];
    $Precio = $_POST['Precio'];
    $dosis = $_POST['dosis'];

    // query
    $sql = "INSERT INTO medicamento(nombre, Contenido, Via_de_admin, presentacion, laboratorio, Precio, dosis)
    VALUES('$nombre', '$Contenido', '$Via_de_admin', '$presentacion', '$laboratorio', '$Precio','$dosis')";
    $query = mysqli_query($db, $sql);

    // cek apa query berhasil disimpan?
    if ($query)
        header('Location: ./index.php?status=sukses');
    else
        header('Location: ./index.php?status=gagal');
} else
    die("No cargo");

    