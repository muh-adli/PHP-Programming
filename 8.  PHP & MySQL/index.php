<?php
// mengkoneksi database paslon
$conn = mysqli_connect("localhost","root","","paslon");

// pemanggilan table
$datapaslon = mysqli_query($conn,"SELECT * FROM paslon_db");
if (!false) {
    echo mysqli_error($conn);
};

// $coba_fetch = mysqli_query($conn,"SELECT * FROM paslon_db");
// if (!false) {
//     echo mysqli_error($conn);
// };
// var_dump($coba_fetch);
// // mysqli_fetch_row()
// $datapaslon_row = mysqli_fetch_row($coba_fetch);
// var_dump($datapaslon_row);
// echo "<br>";
// var_dump($datapaslon_row[1]);
// // output
// // object(mysqli_result)#2 (5) { ["current_field"]=> int(0) ["field_count"]=> int(7) ["lengths"]=> array(7) { [0]=> int(1) [1]=> int(14) [2]=> int(17) [3]=> int(2) [4]=> int(6) [5]=> int(1) [6]=> int(18) } ["num_rows"]=> int(3) ["type"]=> int(0)
// // "Anies Baswedan"
// echo "<br>";echo "<br>";

// // mysqli_fetch_assoc()
// $result_assoc = mysqli_fetch_assoc($coba_fetch);
// var_dump($result_assoc);
// echo "<br>";
// var_dump($result_assoc["calon_presiden"]);
// // array(7) { ["id"]=> string(1) "2" ["calon_presiden"]=> string(16) "Prabowo Subianto" ["calon_wakil_presiden"]=> string(22) "Gibran Rakabuming Raka" ["nomor_urut"]=> string(2) "02" ["partai"]=> string(8) "Gerindra" ["partai_id"]=> string(1) "1" ["gambar"]=> string(18) "/img/paslon 2.jpeg" }
// // "Prabowo Subianto"
// echo "<br>";echo "<br>";

// $result_arr = mysqli_fetch_array($coba_fetch);
// var_dump($result_arr);
// echo "<br>";
// var_dump($result_arr["calon_presiden"]);
// echo "<br>";echo "<br>";


// // mysqli_fetch_row()
// $result_obj = mysqli_fetch_object($coba_fetch);
// var_dump($result_obj);
// echo "<br>";
// var_dump($result_obj->partai);
// echo "<br>";echo "<br>";
// ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Halaman Admin </title>
</head>
<body>

<h1> Daftar Pasangan Calon </h1>

<table border="1" cellpadding="10" cellspacing="0">
    <tr>
        <th>Nomor</th>
        <th>Opsi</th>
        <th>Calon Presiden</th>
        <th>Calon Wakil Presiden</th>
        <th>Nomor Urut</th>
        <th>Gambar</th>
    </tr>
    <?php
    $i = 1;
    while( $row = mysqli_fetch_assoc($datapaslon)) :
        ?>
    <tr>
        <td><?= $i; ?></td>
        <td>
            <a href="">Ubah</a>
            |
            <a href="">Hapus</a>
        </td>
        <td><?= $row["calon_presiden"] ?></td>
        <td><?= $row["calon_wakil_presiden"] ?></td>
        <td><?= 0+$row["nomor_urut"] ?></td>
        <td><img src="<?= $row["gambar"] ?>" width="150px"></td>
    </tr>
    <?php
    $i++;
    endwhile;
    ?>
</table>

</body>
</html>