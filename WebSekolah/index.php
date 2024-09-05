<?php
    require_once("content.php");
?>    
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $sekolah; ?></title>
</head>
<body>
    <h1><?= $judul; ?></h1>
    <p><?= $isi; ?></p>
    <hr>
    <h1>Jadwal Pelajaran RPL tahun 2024/2025</h1>
    <table border="1">
        <thead>
            <tr>
                <th><?= $hari[0];?></th>
                <th><?= $hari[1];?></th>
                <th><?= $hari[2];?></th>
                <th><?= $hari[3];?></th>
                <th><?= $hari[4];?></th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><?= $pembelajaran[0];?></td>
                <td><?= $pembelajaran[1];?></td>
                <td><?= $pembelajaran[2];?></td>
                <td><?= $pembelajaran[3];?></td>
                <td><?= $pembelajaran[4];?></td>
            </tr>
            <tr>
                <td><?= $pembelajaran[5];?></td>
                <td><?= $pembelajaran[6];?></td>
                <td><?= $pembelajaran[7];?></td>
                <td><?= $pembelajaran[8];?></td>
                <td><?= $pembelajaran[9];?></td>
            </tr>
            <tr>
                <td><?= $pembelajaran[10];?></td>
                <td><?= $pembelajaran[11];?></td>
                <td><?= $pembelajaran[12];?></td>
                <td><?= $pembelajaran[13];?></td>
                <td><?= $pembelajaran[14];?></td>
            </tr>
            <tr>
                <td><?= $pembelajaran[15];?></td>
                <td><?= $pembelajaran[16];?></td>
                <td><?= $pembelajaran[17];?></td>
                <td><?= $pembelajaran[18];?></td>
                <td><?= $pembelajaran[19];?></td>
            </tr>
        </tbody>
    </table>
    <img src="images/<?= $img[0]?>" alt="">
    <img src="images/<?= $img[1]?>" alt="">
    <img src="images/<?= $img[2]?>" alt="">
</body>
</html>
    