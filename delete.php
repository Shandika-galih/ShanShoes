<?php
require('function.php');

$br_id = $_GET["br_id"];

if(hapus($br_id) > 0){
    echo "
        <script>
            alert('Data berhasil dihapus');
            document.location.href = 'admin.php';
        </script>
    ";
} else {
    echo "
        <script>
            alert('Data gagal dihapus');
            document.location.href = 'admin.php';
        </script>
   ";
}
?>