<?php 
require 'functions.php';
$mahasiswa = query("SELECT * FROM mahasiswa");  
?>

<!DOCTYPE html>
<html>
<head>
    <title>Halaman admin</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>

    <a href="Tambah.php">Tamabah Data Mahasiswa</a>
    <br><br>

        <table border="1" cellpedding="10" cellspacing="0">
            <tr>
            <th>NO</th>
            <th>AKSI</th>
            <th>GAMBAR</th>
            <th>NRP</th>
            <th>NAMA</th>
            <th>EMAIL</th>
            <th>JURUSAN</th>
            </tr>

            <tr>
                <td>1</td>
                <td>
                    <a href="ubah.php">ubah</a>
                    <a href="hapus.php?id=<?= $row["id"]; ?>">hapus</a>
                </td>
                <td><img src="img/p.JPG" width="50"></td>
                <td>0123456789</td>
                <td>Muh.Rifat.H</td>
                <td>rifatherdiansyah@gmail.com</td>
                <td>PPLG</td>
            </tr>
            <tr>
                <td>2</td>
                <td>
                    <a href="">ubah</a>
                    <a href="">hapus</a>
                </td>
                <td><img src="img/b.JPG" width="50"></td>
                <td>1234567898</td>
                <td>Bayu.Saputra</td>
                <td>bayusaputra@smk.belajar.id</td>
                <td>PPLG</td>
            </tr>
</body>
</html>