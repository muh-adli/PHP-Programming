<img style="display: block;
           margin-left: auto;
           margin-right: auto;"
           src="./img/php.png" alt="PHP Logo">
</img>

# Syntax PHP Dasar

Pembelajaran Syntax PHP untuk menggunakan PHP Dasar.

Referensi pembelajaran didapatkan dari kanal Youtube Web Programming UNPAS, yang diambil dari [tautan](https://www.youtube.com/watch?v=XTrU0GzMfCk&list=PLFIM0718LjIUqXfmEIBE3-uzERZPh3vp6&index=4) ini.

## Konten

### Output PHP

<table style="margin-left: auto; margin-right: auto;">

<tr> <th>sintaks</th> <th>fungsi</th> </tr>
<tr> <td><b>echo</b></td> <td> standart output untuk menampilkan sesuatu ke layar. Dapat digunakan untuk angka atau integer dan boolean, tetapi untuk <b>boolean false</b> akan menghasilkan kosong. </td> </tr>
<tr> <td><b>print</b></td> <td>sama dengan echo</td> </tr>
<tr> <td><b>print_r()</b></td> <td>sama dengan echo</td> </tr>
<tr> <td><b>var_dump()</b></td> <td>menampilkan didepan output terdapat tipe data dan panjang data</td> </tr>

</table>

### Pengunaan tanda kutip satu (') dan tanda kutip dua (")

digunakan pada saat adanya tanda kutip pada kode, contohnya adalah `Jum'at`. Pada kata tersebut harus menggunakan tanda kutip dua (") menjadi
` "Jum'at" `

### Penulisan PHP pada HTML dan sebaliknya

- `PHP di dalam HTML`

```html
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Ini adalah HTML di dalam <?php echo "PHP."; ?></h1>
</body>
</html>

```

- `HTML di dalam PHP`

```php

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        echo "<h1> Ini adalah PHP di dalam HTML. </h1>";
     ?>
</body>
</html>

```

tidak disarankan agar dapat memisahkan HTML dan PHP

### Variable dan tipe data

- Tidak boleh diawali dengan angka tapi boleh mengandung angka

```php
$var = "variable";
$angka1 = 1;
```

- Terdapat interpolasi pada PHP, jadi harus menggunakan tanda kutip dua (') untuk memasukan variable

```php
$angka = 1;

echo 'ini adalah $angka, yang salah';
echo "ini adalah $angka, yang benar";
```

### Operator

- `Penggabung string`, `Concatenation`, `concat`

menggunakan tanda titik (.) untuk menggabungkan variable dan lainnya.

```php
$nama_depan = "depan";
$nama_belakang = "belakang;
echo $nama_depan." ".$nama_belakang;
```

- `Assignment`

<table style="margin-left: auto; margin-right: auto;">
<tr> <th>Operator</th> <th>fungsi</th> </tr>
<tr> <td><b>=</b></td> <td> Mengeluarkan hasil </td> </tr>
<tr> <td><b>+=</b></td> <td> Menambahkan data </td> </tr>
<tr> <td><b>-=</b></td> <td> Mengurangi data </td> </tr>
<tr> <td><b>*=</b></td> <td> mengkalikan data </td> </tr>
<tr> <td><b>/=</b></td> <td> membagi data </td> </tr>
<tr> <td><b>%=</b></td> <td> Habis dibagi </td> </tr>
<tr> <td><b>.=</b></td> <td> Menambahkan pada akhir data </td> </tr>
</table>

```php
$x = 1;

// Melakukan penjumlahan 2 dari x sebelumnya
$x += 2; // menghasilkan x = 3

// Melakukan pengurangan 3 dari x sebelumnya
$x -= 3; // menghasilkan x = 0

// dapat digunakan sebagai berikut
$y = "untuk";
$y .= " ";
$y .= "string";
echo $y; // menghasilkan "untuk string"
```

- `Perbandingan`

<table style="margin-left: auto; margin-right: auto;">
<tr> <th>Operator</th> <th>fungsi</th> </tr>
<tr> <td><b><</b></td> <td> lebih kecil </td> </tr>
<tr> <td><b>></b></td> <td> lebih besar </td> </tr>
<tr> <td><b><=</b></td> <td> lebih kecil sama dengan </td> </tr>
<tr> <td><b>>=</b></td> <td> lebih besar sama dengan </td> </tr>
<tr> <td><b>==</b></td> <td> sama degan </td> </tr>
</table>

```php
var_dump( 1 < 2 );
var_dump( 1 > 2 );
var_dump( 1 <= 2 );
var_dump( 1 >= 2 );

// akan menghasilkan true karena tidak melihat tipe data
var_dump( 1 == "1" );

// identitas
// untuk mengecek perbandingan serta tipe data dari variable tersebut
// ===, !==
var_dump(1 === "1");
```

- `Logika`

<table style="margin-left: auto; margin-right: auto;">
<tr> <th>Operator</th> <th>fungsi</th> </tr>
<tr> <td><b>&&</b></td> <td> AND </td> </tr>
<tr> <td><b>||</b></td> <td> OR </td> </tr>
<tr> <td><b>!</b></td> <td> NOT </td> </tr>
</table>

```php
// contoh penggunaan AND
var_dump($z < 20 && $z % 2 == 0);
// menghasilkan boolean(true)
```
