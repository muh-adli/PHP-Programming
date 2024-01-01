<img style="display: block;
           margin-left: auto;
           margin-right: auto;"
           src="../img/php.png" alt="PHP Logo">
</img>

# Function PHP

Pembelajaran Function atau fungsi pada bahasa pemograman PHP.

Referensi pembelajaran didapatkan dari kanal Youtube Web Programming UNPAS, yang diambil dari [Function pada Javascript](https://www.youtube.com/watch?v=6-UqHXBtYkg), [Parameter dan Argument](https://www.youtube.com/watch?v=MIn5CZhFqKo), dan [Function pada PHP](https://www.youtube.com/watch?v=R5C70w2MOkE&list=PLFIM0718LjIUqXfmEIBE3-uzERZPh3vp6&index=6).

## Function

Adalah sebuah sub-program / sub-routine yang dapat dipanggil di bagian lain pada program.

### Kenapa Function?

- Reusability ( Don't Repeat Yourself )
- Dekomposisi / Abstraksi
- Modularitas

### Kategori Function

1. Built-in Function

Fungsi yang sudah disediakan oleh bahasa pemograman maupun library.

Kegunaan untuk setiap fungsi dapat dilihat pada dokumentasi setiap bahasa pemograman maupun library yang digunakan. contoh yang dapat dilihat dari php adalah [disini](https://www.php.net/manual/en/funcref.php).

contoh:

- `alert()`;
- `confirm()`;
- `prompt()`;

```php
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <h1>
        <?php
        // Contoh penggunaan Built-in Function dari Date
        echo date('l jS \of F Y h:i:s A');
        ?>
    </h1>

</body>
</html>

```

1. User-Defined Function

Fungsi yang kita buat sendiri, menggunakan keyword `function` dan dapat memiliki parameter atau argument yang disimpan dalam `( )`. Jika parameter atau argument lebih dari satu dipisahkan oleh tanda koma `( x, y)`. Lalu function body dibungkus dengan kurung kurawal `{ }`. Dan dapa mengembalikan nilai atau tidak.

contoh :

```php

function NamaVariable( $Parameter) {

    $Parameter = $IsiFungsi
    echo $IsiFungsi;

    return $IsiFungsi;
}


// atau pengaplikasian langsung seperti dibawah ini

<?php
   function Greetings( $waktu, $nama) {

       return "Selamat $waktu, $nama!";
   }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <h1>
        <?= Greetings("Pagi", "Kamu") ?>
    </h1>

</body>
</html>

```
