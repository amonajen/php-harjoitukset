<?php
date_default_timezone_set('Europe/Helsinki');

$nimi = 'Andrejs';
$paiva = date('d.m.Y');
?>
<!DOCTYPE html>
<html lang="fi">
<head>
    <meta charset="UTF-8">
    <title>Ensimmäinen PHP-sivu</title>
</head>
<body>
    <h1><?php echo $nimi; ?></h1>
    <p><?= $paiva ?></p>
</body>
</html>
