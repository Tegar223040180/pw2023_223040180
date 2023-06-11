<?php 
// konkesi ke DBMS   
require 'functions.php';

    //ambil data di url
    $id = $_GET['id'];
    
    // querry data bedasarkan id
    $edit = query("SELECT * FROM home_content WHERE id = $id")[0];
    
// cek jika tombol done/submit sudah di pencet
if ( isset ($_POST["done"]) ){
    
    // cek apakah data berhasil diedit atau tidak
    if(edit($_POST) > 0) {
        echo "
            <script>
                alert('Data berhasil edit!');
                document.location.href = 'index.pgp/index.php';
            </script>
            ";
    } else {
        echo"
            <script>
                alert('Data gagal edit!');
                document.location.href = 'index.pgp/index.php';
            </script>
            ";
    }
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="admin/admin.css">
    <title>Admin</title>
</head>
<body>
    <main>
        <div class="container">
            <h1>Hello Welcome To Admin </h1>
            <br>
            <input type="hidden" id="id" name="id" value="<?= $edit['id']; ?>">
            <form action="" method="post">
            <label for="judul">Judul :</label>
            <input type="text" id="judul" name="judul" value="<?= $edit['judul']; ?>">
            <br><br>
            <label for="gambar">Gambar :</label>
            <input type="text" id="gambar" name="gambar" value="<?= $edit['gambar']; ?>">
            <br><br>
            <label class="colmn1" for="add-txt">Isi :</label>
            <input value="<?= $edit['isi']; ?>"  name="isi" id="isi" cols="50" rows="10" ></input >
            <br><br>
            <a href="../index.pgp/index.php">logout?</a>
            
            <button class="done-btn" type="submit" name="done">Done</button>
            </form>
            
        </div>
    </main>
</body>
</html>