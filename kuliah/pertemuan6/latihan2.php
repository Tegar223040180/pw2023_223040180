<?php 
$mahasiswa = [['Tegar','🐂','🍔'], 
             ['Samudra','🐴','🌭'], 
             ['Zidan','🐒','🦐'], 
             ['Naufal','🪳','🥯'], 
             ['Galuh','🦔','🍟']];

 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>latihan2.php</title>
</head>
<body>
    <h2>Daftar Mahasiswa</h2>
    <?php foreach ($mahasiswa as $mhs):  ?>
    <ul>
        <li>Nama: <?= $mhs[0]; ?></li>
        <li>Makanan Favorit: <?= $mhs[2]; ?></li>
        <li>Pliharaan: <?= $mhs[1]; ?></li>
    </ul>
    <?php endforeach; ?>
</body>
</html>