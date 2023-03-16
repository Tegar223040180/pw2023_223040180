<?php 
// ARRAY ASSOCIATIVE
// Array yang index   nya adalah string yang kita buat sendiri

$mahasiswa = [
             ['nama' => 'Tegar',
              'binatang' => '🐂',
              'makanan' => '🍔'], 
             ['nama' => 'Samudra',
              'binatang' => '🐴',
              'makanan' => '🌭'], 
             ['nama' => 'Zidan',
              'binatang' => '🐒',
              'makanan' => '🦐'], 
             ['nama' => 'Naufal',
              'binatang' => '🪳',
              'makanan' => '🥯'], 
             ['nama' => 'Galuh',
              'binatang' => '🦔',
              'makanan' => '🍟']
            ];

 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>latihan3.php</title>
</head>
<body>
    <h2>Daftar Mahasiswa</h2>
    <?php foreach ($mahasiswa as $mhs):  ?>
    <ul>
        <li>Nama: <?= $mhs["nama"]; ?></li>
        <li>Makanan Favorit: <?= $mhs["makanan"]; ?></li>
        <li>Pliharaan: <?= $mhs["binatang"]; ?></li>
    </ul>
    <?php endforeach; ?>
</body>
</html>