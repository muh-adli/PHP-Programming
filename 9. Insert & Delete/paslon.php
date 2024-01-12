<?php
require 'query.php';
$datapaslon = query("SELECT * FROM paslon_db");
?>

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
    foreach ($datapaslon as $paslon) :
        ?>
    <tr>
        <td><?= $i; ?></td>
        <td>
            <a href="">Ubah</a>
            |
            <a href="">Hapus</a>
        </td>
        <td><?= $paslon["calon_presiden"] ?></td>
        <td><?= $paslon["calon_wakil_presiden"] ?></td>
        <td><?= 0+$paslon["nomor_urut"] ?></td>
        <td><img src="<?= $paslon["gambar"] ?>" width="150px"></td>
    </tr>
    <?php
    $i++;
    endforeach;
    ?>
</table>

</body>
</html>