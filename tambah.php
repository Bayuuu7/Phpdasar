<?php
//cek apakah submit sudah ditekan atau belum
if( isset($_post["submit"]) ) {

//cek apakah data berhasil di tambahkan atau tidak
if( tambah($_post) > 0 ) {
    echo "
    <script>
        alert('data gagal ditambahkan!');
        document.location.href = 'index.php';
    </script>
    ";
} else {
    echo "
    <script>
        alert(data gagal ditambahkan!)
        document.location.href = 'index.php';
    </script>";
}

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Mahasiswa</title>
</head>
<body>
    <h1>Tambah Data Mahasiswa</h1>

    <form action="" method="post">
    <ul>
        <li>
            <label for="nrp">nrp : </label>
            <input type="text" name="nrp" id="nrp">
        </li>
        <li>
            <label for="nama">nama : </label>
            <input type="text" name="nama" id="nama">
        </li>
        <li>
            <label for="email">emal : </label>
            <input type="text" name="email" id="email">
        </li>
        <li>
            <label for="jurusan">jurusan : </label>
            <input type="text" name="jurusan" id="jurusan">
        </li>
        <li>
            <label for="gambar">gambar : </label>
            <input type="text" name="gambar" id="gambar">
        </li>
        <li>
            <button type="text" name="submit">Tambah Data</button>
        </li>
    </ul>

</form>
    
</body>
</html>