<?php
require('functions.php');

$title = 'Form Tmabah Data';

//insert data jika tombol tambah di klik
if(isset($_POST['tambah'])){
    tambah($_POST);
//cek ika data berhasil di tambah
if(tambah($_POST) > 0){
    echo "<script>
    alert( 'data berhasil ditambahkan');
    document.location.href = 'index.php';
    </script>";
}
}



require('views/tambah.view.php');
