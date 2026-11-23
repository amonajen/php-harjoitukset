<?php
$luku = 7;
?>
<!DOCTYPE html>
<html lang="fi">
<head>
    <meta charset="UTF-8">
    <title>Lista ja kertotaulu</title>
</head>
<body>
    <ul>
        <?php for ($i = 1; $i <= 10; $i++) { ?>
            <li>Rivi <?= $i ?></li>
        <?php } ?>
    </ul>

    <h2>Luvun <?= $luku ?> kertotaulu</h2>
    <table>
        <thead>
            <tr>
                <th scope="col">Lasku</th>
                <th scope="col">Tulos</th>
            </tr>
        </thead>
        <tbody>
            <?php for ($i = 1; $i <= 10; $i++) { ?>
                <tr>
                    <td><?= $luku ?> x <?= $i ?></td>
                    <td><?= $luku * $i ?></td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</body>
</html>
