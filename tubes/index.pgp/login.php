<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="login.css">
    <script src="https://kit.fontawesome.com/8531b50185.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
</head>
<body>
    <!--loader--> 
    <div class="bg-loader">
        <div class="loader"></div>

    </div>

</div>
</header>

<!--label-->
<section class="label">
    <div class="container">
        <p>Home / Login</p>
    </div>
</section>


<!--about-->
<section class="login">
    <div class="container ">
    <h2>Hallo Guys</h2>
        <main>
        <div class="wrapper">
            <form action="">
            <label for="uname"><b>Username</b></label>
            <input type="text" placeholder="Enter Username" name="uname" required>

            <label for="psw"><b>Password</b></label>
            <input type="password" placeholder="Enter Password" name="psw" required>
                <button type="submit"><a href="home.php">Login</a></button>
            </form>
        </div>
        </main>
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