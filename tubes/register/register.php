<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Register.css">
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
        <p>Home / Register</p>
    </div>
</section>


<!--about-->
<section class="Register">
    
    
        <div class="wrapper">
        <div class="container ">
        <h2>Register</h2>
            <form action="">
        <div>
            <label for="uname"><b>Username</b></label>
            <input type="text" placeholder="Username" name="uname" required>
        </div>
        <div>
            <label for="email"><b>Email</b></label>
            <input type="email" placeholder="Email" name="email" required>
        </div>
            <label for="psw"><b>Password</b></label>
            <input type="password" placeholder="Password" name="psw" required>

            <label for="cpss"><b>Confirm Password</b></label>
            <input type="password" placeholder="Confirm Password" name="psw" required>
                <button type="submit"><a href="../login/login.php">Register</a></button>
                
            </form>
        </div>
        </div>
</section>
       

<footer>
    <div class="footer">
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