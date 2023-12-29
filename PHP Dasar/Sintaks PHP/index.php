<?php
// Standart output yang digunakan untuk menampilkan sesuatu ke layar menggunakan "echo" atau "print"
// untuk mencetak isi array digunakan "print_r"
// untuk menampilkan isi dari variable digunakan "var_dump"
echo "Ini Echo.";

print "Ini Print.";

print_r("Ini print_r");

var_dump("ini var_dump()");

// untuk echo dapat digunakan angka dan boolean
// untuk echo boolean false, akan kosong
echo 123;
echo true;
echo false;

// Untuk penggunaan tanda kutip satu (') atau dua (") yang membedakan adalah
// penggunakan tanda kutip didalam kode, misalnya Jum'at
// terdapat tanda kutip didalam kode, maka yang digunakan adalah tanda kutip dua (")
echo "Jum'at.";

// Penulisan sintaks PHP
// 1. PHP di dalam HTML
?>
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
<?php
// 2. HTML di dalam PHP
// tidak disarankan karena untuk memisahkan PHP dan HTML
?>
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

<?php
// Variable dan tipe data
// diawali dengan tanda dolar ($)
$var = "variable";

// tidak boleh diawali dengan angka, tapi boleh mengandung angka
$angka1 = 1;

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>ini menggunakan <?php echo $var ?></p>
    <p>ini menggunakan <?php echo $angka1 ?></p>
</body>
</html>

<?php
// Terdapat interpolasi pada PHP
// harus menggunakan tanda kutip dua (') untuk memasukan variable

$angka = 1;
echo 'ini adalah $angka, yang salah';
echo "ini adalah $angka, yang benar";

// Operator
// Penggabung string, Concatenation, concat
// menggunakan tanda titik (.)

$nama_depan = "depan";
$nama_belakang = "belakang";
echo $nama_depan." ".$nama_belakang;

// Assignment
// =, +=, -+, *=, /=, %=, .=
$x = 1;

// Melakukan penjumlahan 2 dari x sebelumnya
$x += 2;

// Melakukan pengurangan 3 dari x sebelumnya
$x -= 3;

// dapat digunakan sebagai berikut
$y = "untuk";
$y .= " ";
$y .= "string";
echo $y;

// Perbandingan
// <, >, <=, >=, ==
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

// logika
// && = AND
// || = OR
// !  = NOT
$z = 10;

// contoh penggunaan AND
var_dump($z < 20 && $z % 2 == 0);

?>