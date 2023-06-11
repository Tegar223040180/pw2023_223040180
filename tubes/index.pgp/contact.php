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
            <li><a>HALLO</a></li>
            
        </ul>
    </div>
</div>
<header>
    <div class="container">
    <h1><a href="index.php">Electric Car</a></h1>

    <ul>
        <form action="" method="post">
        

        <li class="active"><a href="index.php">HOME</a></li>
        <li><a href="about.php">ABOUT</a></li>
        <li><a href="contact.php">CONTACT</a></li>
        <li><a href="../login/login.php">LOGIN</a></li>

        <input type="text" name="keyword">
        <button type="submit" name="cari">Cari</button>
        
        </form>    
    </ul>
</div>
</header>
<!--label-->
<section class="label">
    <div class="container">
        <p>Home / Contact</p>
    </div>
</section>


<!--about-->
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