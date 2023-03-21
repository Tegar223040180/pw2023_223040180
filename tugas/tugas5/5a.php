<?php 

$mahasiswa = [
    [
        "nrp" => "223040180",
        "nama" => "Tegar Samudra",
        "email" => "tegar.223040180@mail.unpas.ac.id",
        "jurusan" => "Teknik Informatika",
        "gambar" => "https://storage.googleapis.com/assets-edlink/p/thumb-5c1f95bd7f1f1f4699d450501ba133a01f3481c549a3ef16c2e80c760f3afa20-img-20221206-092022-6305603904430470439.jpg"
    ],
    [
        "nrp" => "223040152",
        "nama" => "Naufal Sayyid Akbar",
        "email" => "naufal.223040152@mail.unpas.ac.id",
        "jurusan" => "Teknik Informatika",
        "gambar" => "https://storage.googleapis.com/assets-edlink/p/thumb-fc1657a792b811cd70b3691d5b02471e1b10dea3227a1fa73ab101d14fb571a1-img-20220929-191014-3349495824430964855.jpg"
    ],
    [
        "nrp" => "223040151",
        "nama" => "Adrian Muhammad Zidan",
        "email" => "adrian.223040151@mail.unpas.ac.id",
        "jurusan" => "Teknik Informatika",
        "gambar" => "https://storage.googleapis.com/assets-edlink/p/thumb-6f1722416eb1c16fbe8717218e33a2e263cc9a46c7356695a97dadaf61f10b42-adrian.jpg"
    ],
    [
        "nrp" => "223040138",
        "nama" => "Darryl Azzuri",
        "email" => "darryl.223040138@mail.unpas.ac.id",
        "jurusan" => "Teknik Informatika",
        "gambar" => "https://storage.googleapis.com/assets-edlink/p/thumb-842ef2d561b7ddcb90785fbe451ef330b02f65add02a10c63825525557a5f92d-img-20221009-175602-9026201917274328247.jpg"
    ],
    [
        "nrp" => "223040167",
        "nama" => "Muhamad Rizki Maulana",
        "email" => "rizki.223040167@mail.unpas.ac.id",
        "jurusan" => "Teknik Informatika",
        "gambar" => "https://storage.googleapis.com/assets-edlink/p/thumb-7bb72645137298bfadf1bf691dc8e14bc0a6309011045a02f1fb82d27fedc606-img-20220927-141635-1527231034083600655.jpg"
    ],
    [
        "nrp" => "223040175",
        "nama" => "Hilmi Anugrah Bela Negara",
        "email" => "hilmi.223040175@mail.unpas.ac.id",
        "jurusan" => "Teknik Informatika",
        "gambar" => "https://storage.googleapis.com/assets-edlink/p/thumb-e9bf345400cd5ff59e1eb396db669788267eb15abf085e3178f978e7ea1af406-img-20220927-144233-5128513620500898.jpg"
    ],
    [
        "nrp" => "223040165",
        "nama" => "Ilmman Hanifa",
        "email" => "ilman.223040165@mail.unpas.ac.id",
        "jurusan" => "Teknik Informatika",
        "gambar" => "https://storage.googleapis.com/assets-edlink/p/thumb-9cfb9e635796e8196fda46d3e8a0a0bae4165e4de1f083550ae6b2f2b4fff2a2-4x6%5B1%5D.jpg"
    ],
    [
        "nrp" => "223040141",
        "nama" => "Muhhamad Kholish Kamil",
        "email" => "kholish.223040141@mail.unpas.ac.id",
        "jurusan" => "Teknik Informatika",
        "gambar" => "https://storage.googleapis.com/assets-edlink/p/thumb-cdc053a1c287cfc5dcb9427e1135a66bd729de86c92bc124da60185e3d6f2c0d-img-20221020-174139-6229253173595982916.jpg"
    ],
    [
        "nrp" => "223040146",
        "nama" => "Muhammad Adis Sumarwin",
        "email" => "adis.223040146@mail.unpas.ac.id",
        "jurusan" => "Teknik Informatika",
        "gambar" => "https://storage.googleapis.com/assets-edlink/p/thumb-2cc9a796584cd937a439f3fb36d610bb4e2960e2cfd42cef77cc5775c675c94d-img-20220927-151213-6666068811341197536.jpg"
    ],
    [
        "nrp" => "223040173",
        "nama" => "Ryan Hidayat",
        "email" => "ryan.223040173@mail.unpas.ac.id",
        "jurusan" => "Teknik Informatika",
        "gambar" => "https://storage.googleapis.com/assets-edlink/p/thumb-0b14d7850a56cdcaef9b48464ae849b76d40d6f54db7c103ff0d8197ca5205a4-dsc-0142.jpg"
    ]

]

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>
</head>
<body>

    <h1>Daftar Mahasiswa</h1>

    <?php foreach ($mahasiswa as $mhs) : ?>
        <ul>
            <li>
                <img src="<?= $mhs["gambar"]; ?>"  alt="">
            </li>
            <li>Nama : <?= $mhs["nama"]; ?></li>
            <li>NRP : <?= $mhs["nrp"]; ?></li>
            <li>Jurusan : <?= $mhs["jurusan"]; ?></li>
            <li>Email : <?= $mhs["email"]; ?></li>
        </ul>

    <?php endforeach; ?>

</body>

</html>