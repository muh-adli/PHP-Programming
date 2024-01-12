<?php
require 'query.php';
$datapartai = query("SELECT * FROM partai_id");
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
        <th>Nama Partai</th>
        <th>Singkatan</th>
        <th>Gambar</th>
    </tr>
    <?php
    $i = 1;
    foreach ($datapartai as $partai) :
        ?>
    <tr>
        <td><?= $i; ?></td>
        <td>
            <a href=""> Ubah </a>
            |
            <a href="hapus.php?id=<?= $partai["partai_id"] ?>"> Hapus </a>
        </td>
        <td><?= $partai["nama_partai"] ?> </td>
        <td><?= $partai["singkatan"] ?></td>
        <td>
            <img src="<?= $partai["gambar"]; ?>" onerror="<?= $partai["nama_partai"] ?>" width="150px">
        </td>
    </tr>
    <?php
    $i++;
    endforeach;
    ?>
</table>

</body>
</html>