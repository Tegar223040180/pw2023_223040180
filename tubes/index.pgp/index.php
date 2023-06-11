<?php 
require "../functions.php";

$home_content = query("SELECT * FROM home_content");

//tombol search di klik
if(isset($_POST["cari"])){
    $home_content = cari($_POST["keyword"]);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">
    <script src="https://kit.fontawesome.com/8531b50185.js" crossorigin="anonymous"></script>
    <title>Electric Car</title>
    <script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
</head>
<body>
    <!--loader--> 
    <div class="bg-loader">
        <div class="loader"></div>

    </div>

<!--header-->
<div class="medsos">
    <div class="container">
        <ul>
            <li><a>WELCOME</a></li>
            
        </ul>
    </div>
</div>



<header>
    <div class="container">
    <h1><a href="index.php">Electric Car</a></h1>

    
        <form action="" method="post">
    <ul>   

        <li class="active"><a href="index.php">HOME</a></li>
        <li><a href="about.php">ABOUT</a></li>
        <li><a href="contact.php">CONTACT</a></li>
        <li><a href="../login/login.php">LOGIN</a></li>

        <input type="text" name="keyword" id="keyword" autofocus placeholder="masukan merek">
        <button type="submit" name="cari" id="cari">Cari</button>

            
    </ul>
    </form>
</div>
</header>

<!--banner-->
<section class="banner">
    <h2>WELCOME TO TECHNOLOGY</h2>
</section>

<!--about-->

<section class="about">
    <div class="container ">
        <h3>ABOUT</h3>
        <br>
        <?php foreach($home_content as $h_cont) :?>
        <h4><?= $h_cont['judul']; ?></h4>
        <br>
        <img src="../img/<?= $h_cont['gambar']; ?>" alt="" width="450">
        <p><?= $h_cont['isi']; ?></p>
          <br> 
          <a href="../hapus.php?id=<?= $h_cont['id'] ;?> " onclick="return confirm('apakah anda yakin?');">Delete</a>
          <a href="../edit.php?id=<?= $h_cont['id']; ?>">Edit</a>
        <?php endforeach ; ?>
        
    </div>
</section>

<!--contact--> 
<section class="contact">
    <div class="container ">
        <h3>CONTACT INFO</h3>
        <div class="box">
            <div class="col-4">
            <a href="https://wa.me/628975643923"><i class="fa-brands fa-whatsapp fa-2xl"></i></a>
                <h4>WhatAppp</h4>
            </div>
            <div class="col-4">
                <a href="https://www.gmail.com/tegarsamudraaa.gmail.com"><i class="fa-solid fa-envelope"></i></a>
                <h4>Email</h4>
            </div>
            <div class="col-4">
            <a href="https://www.instagram.com/tegarsamudraa"><i class="fa-brands fa-instagram fa-2xl"></i></a>
                <h4>Instagram</h4>
            </div>
            <div class="col-4">
                <a href="https://www.facebook.com/tegarsamudra"><i class="fa-brands fa-facebook"></i></a>
                <h4>FaceBook</h4>
            </div>
        </div>
        </div>
</section>

<footer>
    <div class="container">
        <small>Copyright &copy; 2023 - Tegar Samudra</small>

    </div>
</footer>
<script type="text/javascript">
    $(document).ready(function(){
        $(".bg-loader").hide();
    })
</script>
</body>
</html>