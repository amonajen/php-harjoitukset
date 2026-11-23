<?php
date_default_timezone_set('Europe/Helsinki');
$tunti = 23;

if ($tunti < 10) {
    $tervehdys = 'Hyvää huomenta';
    $vari = 'orange';
} elseif ($tunti < 18) {
    $tervehdys = 'Hyvää päivää';
    $vari = 'green';
} else {
    $tervehdys = 'Hyvää iltaa';
    $vari = 'navy';
}
?>
<!DOCTYPE html>
<html lang="fi">
<head>
    <meta charset="UTF-8">
    <title>Ensimmäinen PHP-sivu</title>
</head>
<body>
    <h1 style="color: <?= $vari ?>;"><?= $tervehdys ?></h1>
</body>
</html>

