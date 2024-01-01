<?php
echo "array adalah variable yang dapat memiliki banyak nilai. <br>
Elemen pada Array boleh memiliki tipe data yang berbeda. <br><br>";

$ContohArray = ["ini", "adalah", "contoh", "array"];

print_r($ContohArray);
echo("<br>");
var_dump($ContohArray);

echo "<br><br> Cara lama sebelum PHP 5.4 <br>";
$CaraLama = array("ini", "adalah", "cara", "lama");
print_r($CaraLama);

echo "<br><br>Cara baru <br>";
$CaraBaru = ["Ini", "adalah", "cara", "baru"];
$BanyakTipe = [2, "dari", "banyak", "tipe", "data"];
print_r($CaraBaru);
var_dump($BanyakTipe);

echo "<br><br>Untuk melakukan pengambilan value tertentu pada array, menggunakan sintaks `echo Variable[0]`<br>";
echo ($CaraBaru[0]);

echo "<br><br> Untuk melakukan penambahan value pada array menggunakan cara <br>";
$ArrayTambah = [1, 2, 3];
$ArrayTambah[] = "Bertambah";
print_r($ArrayTambah);
echo "<br><br>";
// Pengulangan pada array
// for / foreach
$angka = [3,2,15,20,11,77,89]
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .kotak {
            width: 50px;
            height: 50px;
            background-color: salmon;
            text-align: center;
            line-height: 50px;
            margin: 3px;
            float: left;
        }
        .clear {
            clear: both;
        }
    </style>
</head>
<body>
    <?php for( $i = 0; $i < count($angka); $i++ ) { ?>
        <div class="kotak">
            <?php echo $angka[$i] ?>
        </div>
    <?php } ?>
</body>
</html>

<?php
$huruf = ["a", "b", "c", "d", "e", "f", "g"]
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .kotak {
            width: 50px;
            height: 50px;
            background-color: salmon;
            text-align: center;
            line-height: 50px;
            margin: 3px;
            float: left;
        }
    </style>
</head>
<body>
    <div class="clear"></div>
    <?php foreach( $huruf as $h ) { ?>
        <div class="kotak">
            <?php echo $h ?>
        </div>
    <?php } ?>
    <p><br>atau<br></p>
    <div class="clear"></div>
    <?php foreach ( $huruf as $hrf ) : ?>
        <div class="kotak">
            <?php echo $h ?>
        </div>
    <?php endforeach ?>
</body>
</html>

<?php
// ini adalah array dalam array atau multi-dimensi array
$CalonPresiden = [
    ["Anies Baswedan", "Muhaimin Iskandar", 01],
    ["Prabowo Subianto", "Gibram Rakabuming Raka", 2],
    ["Ganjar Pranowo", "Mahfud Md", 03],
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
            margin-top: 100px;
        }
    </style>
</head>
<body>
    <?php foreach($CalonPresiden as $Paslon) : ?>
        <li class="capres">
            <ul>
                <p>Nama Calon Presiden <?= $Paslon[0]; ?></p>
            </ul>
            <ul>
                <p>Nama Calon Wakil Presiden <?= $Paslon[1]; ?></p>
            </ul>
            <ul>
                <p>Nomor Urut <?= $Paslon[2]; ?></p>
            </ul>
        </li>
    <?php endforeach;?>
</body>
</html>

