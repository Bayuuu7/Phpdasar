<?php 
require 'functions.php';    
$id = $_GET["id"];

if ( hapus($id) > 0 ) {
    echo "
      <script>
          alert('data berhsil dihapus!');
          document.location.href = 'index.php';
    </script>
    ";
} else {
    echo "
      <script>
          alert('data gagal ditambahkan!');
          document.location.href = 'index.php';
    </script>
    ";
}


function hapus($id) {
     global $conn;
     mysqli_query($conn,"DELETE FROM mahasiswa WHERE id = $id");

     return mysqli_affceted_rows($conn);
}

?>