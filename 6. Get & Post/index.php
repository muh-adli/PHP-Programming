<br>
<h1> Superglobals</h1>

<?php
// Superglobals
var_dump($_GET);
var_dump($_POST);
var_dump($_SERVER);
var_dump($_ENV);

// contoh memanggil nama server dari superglobals $_SERVER
echo $_SERVER["SERVER_NAME"], "<br>";

var_dump($_GET);

$Paslon = [
    [
        "Gambar" => "/img/paslon 1.jpeg",
        "Calon Presiden" => "Anies Baswedan",
        "Wakil Presiden" => "Muhaimin Iskandar",
        "Nomor Urut" => 01,
        "Array iseng" => [
            "Bandung", "Jogja"
            ]
        ],
    [
        "Gambar" => "/img/paslon 2.jpeg",
        "Calon Presiden" => "Prabowo Subianto",
        "Wakil Presiden" => "Gibram Rakabuming Raka",
        "Nomor Urut" => 02,
        "Array iseng" => ["Jakarta", "Bekasi"]
        ],
    [
        "Gambar" => "/img/paslon 3.jpeg",
        "Calon Presiden" => "Ganjar Pranowo",
        "Wakil Presiden" => "Mahfud Md",
        "Nomor Urut" => 03,
        "Array iseng" => [
            "Palembang", "Lampung"
            ]
        ]
    ];
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
    <br>
    <h1> Metode Get</h1>
    <?php foreach( $Paslon as $p ) : ?>
        <li class="capres">
            <a href="paslon.php?pres=<?= $p["Calon Presiden"] ?>&wapres=<?= $p["Wakil Presiden"] ?>&norut=<?= $p["Nomor Urut"] ?>">
                <img src="<?= $p["Gambar"]?>">
            </a>
        </li>
    <?php endforeach;?>
</body>
</html>

<?php // Contoh penggunaan metode POST pada superglobal $POST ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <br>
    <h1> Metode POST</h1>
    <form action="" method="post">
        Input nama: <input type="text" name="name">
        <br>
        <button type="submit" name="submit">Send</button>
    </form>

    <?php if(isset($_POST["submit"])): ?>
        <h2> Contoh metode post dengan isi variable <?= $_POST["name"] ?> </h2>
    <?php endif; ?>
</body>
</html>