<?php
// mengecek apakah ada array yang kosong
if( !isset( $_GET["pres"] ) ||
    !isset( $_GET["wapres"] ) ||
    !isset( $_GET["norut"] ) ) {
        // melakukan redirect ke laman awal
        header("Location: Index.php");
        exit;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .capres {
        }
        .bulet{
            text-align: center;
            margin: 3px;
        }
    </style>
</head>
<body>
    <li class="capres">
        <ul>
            <p>Nama Calon Presiden : <?= $_GET["pres"]; ?></p>
        </ul>
        <ul>
            <p>Nama Calon Wakil Presiden : <?= $_GET["wapres"]; ?></p>
        </ul>
        <ul>
            <p>Nomor Urut <?= $_GET["norut"]; ?></p>
        </ul>
    </li>
    <a href="/6. Get & Post/index.php">
        Kembali ke menu awal
    </a>
</body>
</html>