<?php

// menambahkan function query.php
require 'query.php';

echo $_GET["id"];

// menangkap partai_id pada data yang akan dihapus
$id = $_GET["id"];

echo $id;

// membuat pengkondisian untuk mengecek error pada proses
if( hapus_partai($id) > 0) {
    echo"
        <script>
            alert('data berhasil dihapus!');
            document.location.href= 'partai.php';
        </script>
    ";
} else {
    echo "
    <script>
        alert('data gagal dihapus!');
        document.location.href= 'partai.php';
    </script>
    ";
};
?>