<?php

require 'query.php';

// Pengecekan tombol data yang dimasukkan
if( isset($_POST["submit"])) {

    // // define variable untuk koneksi mysqli
    // $conn = mysqli_connect("localhost","root","","paslon");

    // // menyiapkan variable untuk memasukan data pada mysqli
    // $nama_partai = $_POST["nama_partai"];
    // $singkatan = $_POST["singkatan"];

    // // query insert data form
    // $query = "INSERT INTO partai_id VALUES ('','$nama_partai','$singkatan')";
    // mysqli_query($conn, $query);

    // // pengkondisian apakah data berhasil ditambahkan atau tidak masuk dari output fungsi mysqli_affected_rows
    // if( mysqli_affected_rows($conn) > 0) {
    //     echo "Success";
    // } else {
    //     // pengkodisian jika memasukan data error
    //     echo "Failed";
    //     echo "<br>";
    //     echo mysqli_error($conn);
    // }

    // mengecek data berhasil masuk atau tidak
    if( tambah_partai($_POST) > 0) {
        echo "
            <script>
                alert('data berhasil ditambahkan!');
                document.location.href= 'partai.php';
            </script>
        ";
    } else {
        echo "
        <script>
            alert('data gagal ditambahkan!');
            document.location.href= 'partai.php';
        </script>
    ";
    }
}

// output isi jika isi post kosong
else {var_dump($_POST);}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1> Tambah Data Paslon </h1>

    <!-- membuat form untuk menginput data partai -->
    <form action="" method="post">
        <ul>
            <li>
                <label for="nama_partai">Nama Partai : </label>
                <input type="text" name="nama_partai" id="nama_partai" required>
            </li>
            <li>
                <label for="singkatan">Singkatan : </label>
                <input type="text" name="singkatan" id="singkatan" required>
            </li>
            <li>
                <label for="gambar">URL Gambar : </label>
                <input type="text" name="gambar" id="gambar">
            </li>
            <button type="submit" name="submit">
                Tambah Data
            </button>
        </ul>
    </form>
</body>
</html>

<?php

?>