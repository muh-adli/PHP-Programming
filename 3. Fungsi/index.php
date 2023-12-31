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


<?php
// Contoh User-Defined Function
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