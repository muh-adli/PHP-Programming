<img style="display: block;
           margin-left: auto;
           margin-right: auto;"
           src="../img/php.png" alt="PHP Logo">
</img>

# Array

Pembelajaran Array pada bahasa pemograman PHP.

- Elemen pada Array boleh memiliki tipe data yang berbeda.
- Pasangan antara Key dan Value, dimana Key adalah index yang dimulai dari 0.
- Array adalah variable yang dapat memiliki banyak nilai.
- Array dapat dimunculkan dengan sintaks `var_dump()` dan `print_r()`

```php
$ContohArray = ["ini", "adalah", "contoh", "array"];

print_r($ContohArray);
var_dump($ContohArray);

// output
Array ( [0] => ini [1] => adalah [2] => contoh [3] => array )
array(4) { [0]=> string(3) "ini" [1]=> string(6) "adalah" [2]=> string(6) "contoh" [3]=> string(5) "array" }
```

- Terdapat dua cara untuk memanggil array yaitu :

`Sebelum PHP 5.4`

```php
$CaraLama = array("ini", "adalah", "cara", "lama");

```

`Setelah PHP 5.4`

```php
$CaraBaru = ["Ini", "adalah", "cara", "baru"];
$BanyakTipe = [2, "dari", "banyak", "tipe", "data"];
```

## Pengambilan elemen pada array

untuk pengambilan data dapat menggunakan tanda kurung kotak `[ ]` yang berisikan key pada array tersebut. contohnya adalah `Variable[Key]` atau `echo $Variable[0]`.

```php
echo $CaraBaru[0];
```

## Untuk melakukan penambahan value pada array

untuk melakukan penambahan value atau data pada array menggunakan sintaks `Variable[] = "ValueBaru"`

```php
$ArrayTambah = [1, 2, 3];
$ArrayTambah[] = "Bertambah";
print_r($ArrayTambah);
```

## Pengulangan pada array

### for

untuk pengulangan array dapat menggunakan pengulangan for.
adapun contohnya adalah sebagai berikut :

```php
<?php
$angka = [3,2,15,20,11,77,89]
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        div {
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
    <?php for( $i = 0; $i < count($angka); $i++ ) { ?>
        <div>
            <?php echo $angka[$i] ?>
        </div>
    <?php } ?>
</body>
</html>
```

### foreach

pengulangan foreach mempermudah untuk melakungan pengulangan pada semua array.
foreach menggunakan `as` untuk merepresentasikan array.

```php
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
```

## Case Study

Melakukan pengulangan pada data Calon Presiden 2024 RI

```php
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
```
