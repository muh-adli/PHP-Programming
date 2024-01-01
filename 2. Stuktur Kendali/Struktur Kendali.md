<img style="display: block;
           margin-left: auto;
           margin-right: auto;"
           src="../img/php.png" alt="PHP Logo">
</img>

# Struktur Kendali PHP

Pembelajaran Syntax PHP untuk menggunakan PHP Dasar.

Referensi pembelajaran didapatkan dari kanal Youtube Web Programming UNPAS, yang diambil dari [tautan](https://www.youtube.com/watch?v=9gpAJPWD-xI&list=PLFIM0718LjIUqXfmEIBE3-uzERZPh3vp6&index=5) ini.

## Pengulangan

<table style="margin-left: auto; margin-right: auto;" width="100%">

<tr>
<th style="text-align: center;">Pengulangan</th>
<th style="text-align: center;">Sintaks</th>
<th style="text-align: center;">Fungsi </th>
</tr>
<tr>
<td><b>for</b></td>
<td>
for( $i=0; $i<5; $i++ ) { <br>
&nbsp; echo "Ini for ke $i"; <br>
&nbsp; }
</td>
<td> Melakukan pengulangan dalam batas variable <b>i</b> </td>
</tr>

<tr>
<td><b> while </b></td>
<td>
$a = 1; <br>
while( $a <5 ) { <br>
&nbsp; echo "ini while ke $a"; <br>
&nbsp; $a++; <br>
&nbsp; }
</td>
<td> Melakukan pengulangan menggunakan kondisi <b>True</b> </td>
</tr>

<tr>
<td><b> do.. while </b></td>
<td>
$b =0; <br>
do { <br>
&nbsp; echo "ini do..while ke $b"; <br>
&nbsp; $b++; <br>
} while( $b < 5 );
</td>
<td> Melakukan proses pada <b>do</b> lalu mengecek kondisi</td>
</tr>

<tr>
<td><b> foreach </b></td>
<td> </td>
<td> </td>
</tr>

</table>

### for

Contoh penggunaan Pengulangan untuk table HTML

```php
<table border="1" cellpading="10" cellspacing="0">
    <?php
        for( $c=1; $c<=3; $c++ ) {
            echo "<tr>";
            for( $d=1; $d<=5; $d++ ) {
                echo "<td> $c,$d </td>";
            };
            echo "</tr>";
        }
    ?>
</table>
```

atau dapat ditulis sebagai berikut : <br>
penggunaan kurung kurawal ( {} ) menjadi titik dua ( : ) untuk kurung kurawal buka ( { ) dan endfor untuk kurung kurawal tutup ( } ) <br> dan ini menggunakan code php yang tidak menyambung, karena PHP dapat menyatu dengan HTML

```php
<table border="1" cellpading="10" cellspacing="0">
<?php for( $e=1; $e<=3; $e++ ) : ?>
    <tr>
        <?php for( $f=1; $f<=5; $f++ ) : ?>
            <td>
                <?php echo " $e,$f "; ?>
            </td>
        <?php endfor; ?>
    </tr>
<?php endfor; ?>
</table>
```

### foreach

## Pengkondisian

<table style="margin-left: auto; margin-right: auto;" width="100%">

<tr>
<th style="text-align: center;">Pengulangan</th>
<th style="text-align: center;">Sintaks</th>
<th style="text-align: center;">Fungsi </th>
</tr>
<tr>
<td><b>if.. else</b></td>
<td>
$g = 10; <br>
if( $g < 20 ) { <br>
&nbsp; echo "$g kurang dari 20"; <br>
} else { <br>
&nbsp; echo "$g tidak kurang dari 20"; <br>
}
</td>
<td> Melakukan pengkondisian dengan operator pada <b>if</b> jika <b>True</b> dan <b>else</b> jika <b>False</b>  </td>
</tr>
<tr>
<td><b>if.. else if..else</b></td>
<td>
$h = 0; <br>
while( $h <= 5 ) { <br>
&nbsp; echo "nilai h adalah $h"; <br>
&nbsp; if( $h < 5 ) { <br>
&nbsp; &nbsp;echo "$h kurang dari 5"; <br>
&nbsp; } else if( $h == 5 ) { <br>
&nbsp; &nbsp;echo "$h bernilai 5"; <br>
&nbsp; } else { <br>
&nbsp; &nbsp;echo "$h lebih dari 5"; <br>
&nbsp; } <br>
&nbsp; $h++; <br>
}
</td>
<td> Sama seperti <b>if.. else</b> tapi menambahkan kondisi lain dengan sintaks <b>else if( ):</b> </td>
</tr>

<tr>
<td><b>ternary</b></td>
<td>
</td>
<td></td>
</tr>

<tr>
<td><b>switch</b></td>
<td> </td>
<td> </td>
</tr>

</table>

Contoh penggunaan pengkondisian untuk table HTML

```php
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .warna-baris {
            background-color: silver;
        }
    </style>
</head>
<body>
<table border="1" cellpading="10" cellspacing="0">
    <?php for( $i=1; $i<=3; $i++ ) : ?>
        <?php if( $i % 2 == 1 ) : ?>
            <tr class="warna-baris">
        <?php else: ?>
            <tr>
        <?php endif; ?>
                <?php for( $j=1; $j<=5; $j++ ) : ?>
                    <td>
                        <?php echo " $i,$j "; ?>
                    </td>
                <?php endfor; ?>
            </tr>
    <?php endfor; ?>
    </table>
</body>
</html>
```
