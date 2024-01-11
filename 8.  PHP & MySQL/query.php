<?php
// menghubungkan dan mengecek query database
$conn = mysqli_connect("localhost","root","","paslon");

function query($query) {
    // mendefinisikan global variable
    global $conn;
    $data = mysqli_query($conn, $query);
    $rows = [];
    while ($row = mysqli_fetch_array($data)) {
        $rows[] = $row;
    };
    return $rows;
};
?>