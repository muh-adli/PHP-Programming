<?php

// Pengulangan

// for
// Melakukan pengulangan dalam batas variable i
for( $i=0; $i<5; $i++ ) {
    echo "Ini for ke $i <br>";
}

// while
// Melakukan pengulangan menggunakan kondisi True
$a = 0;
while( $a <5 ) {
    echo "ini while ke $a <br>";
    $a++;
}

// do.. while
// mirip dengan while tapi akan melakukan do terlebih dahulu
$b =0;
do {
    echo "ini do.. while ke $b <br>";
    $b++;
} while( $b < 5 );

// foreach -> khusus array

// contoh penggunaan
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1> Contoh penggunaan for untuk table </h1>
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

    <h1> atau dapat ditulis sebagai berikut </h1>
    <p> penggunaan kurung kurawal ( {} ) menjadi titik dua ( : ) untuk kurung kurawal buka ( { ) dan endfor untuk kurung kurawal tutup ( } ) </p>
    <p> dan ini menggunakan code php yang tidak menyambung, karena PHP dapat menyatu dengan HTML </p>
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
</body>
</html>

<?php
// Pengkondisian

// if.. else
$g = 10;
if( $g < 20 ) {
    echo "<br> $g kurang dari 20 <br><br>";
} else {
    echo "<br> $g tidak kurang dari 20 <br><br>";
}

// if.. else if..else
$h = 0;
while( $h <= 5 ) {
    echo "nilai h adalah $h <br>";
    if( $h < 5 ) {
        echo "$h kurang dari 5 <br><br>";
    } else if( $h == 5 ) {
        echo "$h bernilai 5 <br><br>";
    } else {
        echo "$h lebih dari 5 <br><br>";
    }
    $h++;
}

// ternary

// switch

// Contoh penguunaan
?>

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