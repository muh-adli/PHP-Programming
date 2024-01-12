<?php
// menghubungkan dan mengecek query database
$conn = mysqli_connect("localhost","root","","paslon");

function query($query) {
    // mendefinisikan $conn global variable
    global $conn;


    $data = mysqli_query($conn, $query);
    $rows = [];
    while ($row = mysqli_fetch_array($data)) {
        $rows[] = $row;
    };
    return $rows;
};

// menambahkan data partai
function tambah_partai($data) {

    // mendefinisikan $conn global variable
    global $conn;

    // menyiapkan variable untuk memasukan data pada mysqli
    $nama_partai = htmlspecialchars($data["nama_partai"]);
    $singkatan = htmlspecialchars($data["singkatan"]);

    // query insert data form
    $query = "INSERT INTO partai_id VALUES ('','$nama_partai','$singkatan')";
    mysqli_query($conn, $query);

    // mengembalikan data dengan function mysqli_affected_rows
    return mysqli_affected_rows($conn);
};

// menghapus data
function hapus_partai($id) {

    // mendefinisikan $conn global variable
    global $conn;
    echo $id;
    mysqli_query($conn, "DELETE FROM partai_id WHERE partai_id = $id");

    // mengembalikan data dengan function mysqli_affected_rows
    return mysqli_affected_rows($conn);
};
?>