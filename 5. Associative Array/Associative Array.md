<img style="display: block;
           margin-left: auto;
           margin-right: auto;"
           src="../img/php.png" alt="PHP Logo">
</img>

# Associative Array

Pembelajaran Associative Array atau multi-dimensi Array pada bahasa pemograman PHP. Dalam pembelajaran ini diperlukan pemahaman mengenai array pada PHP terlebih dahulu, dapat dilihat [disini](../4.%20Array/Array.md)

Untuk multidimensi array pada php tidak dapat mengerluarkan data dengan `variable[]`.
Cara untuk mengeluarkan data yang diinginkan adalah melihat data tersebut.

`Variable[dimensi 1][dimensi 2]`

```php
echo $angka[0][0];
``` 
menghasilkan variable dimensi 1 data 1

```php
echo $angka[1][2];
```

menghasilkan variable dimensi 2 data 3

contoh penggunaan ada pada kode dibawah ini :

```php
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .kotak {
            width: 30px;
            height: 30px;
            background-color: #BADA55;
            text-align: center;
            line-height: 30px;
            margin: 3px;
            float: left;
            transition: 0.5s;
        }
        .kotak:hover {
            transform: rotate(360deg);
            border-radius: 50%;
        }
        .clear {
            clear: both;
        }
    </style>
</head>
<body>

    <?php

    $angka = [
        [1,2,3],
        [4,5,6],
        [7,8,9]
    ];
    foreach( $angka as $a) :
        foreach( $a as $b): ?>
            <div class="kotak">
                <?= $b; ?>
            </div>
        <?php endforeach; ?>
        <div class="clear"></div>
    <?php endforeach; ?>
</body>
</html>
```

## Array associative adalah array yang key-nya adalah string yang kita buat sendiri

dapat dibuat menggunakan tanda `=>` untuk mendefinisikan key dan value yang dibuat.
Berbeda dengan array numerik, array associative tidak dapat dipanggil dengan `Variable[dimensi][dimensi]`,
tapi dapat dipanggil dengan `Variable[dimensi][key]` atau `Variable[key][key]` tergantung dengan isi array yang akan dipanggil.

```php
<?php
$Paslon = [
    [
        "Calon Presiden" => "Anies Baswedan",
        "Wakil Presiden" => "Muhaimin Iskandar",
        "Nomor Urut" => 01,
        "Array iseng" => [
            "Bandung", "Jogja"
            ]
        ],
    [
        "Calon Presiden" => "Prabowo Subianto",
        "Wakil Presiden" => "Gibram Rakabuming Raka",
        "Nomor Urut" => 02,
        "Array iseng" => ["Jakarta", "Bekasi"]
        ],
    [
        "Calon Presiden" => "Ganjar Pranowo",
        "Wakil Presiden" => "Mahfud Md",
        "Nomor Urut" => 03,
        "Array iseng" => [
            "Palembang", "Lampung"
            ]
        ],
    ]
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
        .bulet{
            text-align: center;
            margin: 3px;
        }
    </style>
</head>
<body>
    <?php foreach( $Paslon as $p ) : ?>
        <li class="capres">
            <ul>
                <p>Nama Calon Presiden <?= $p["Calon Presiden"]; ?></p>
            </ul>
            <ul>
                <p>Nama Calon Wakil Presiden <?= $p["Wakil Presiden"]; ?></p>
            </ul>
            <ul>
                <p>Nomor Urut <?= $p["Nomor Urut"]; ?></p>
            </ul>
            <?php foreach($p["Array iseng"] as $i) : ?>
                <ul>
                    <p>akan ada acara di <?= $i; ?></p>
                </ul>
            <?php endforeach; ?>
        </li>
    <?php endforeach;?>
</body>
</html>

```
