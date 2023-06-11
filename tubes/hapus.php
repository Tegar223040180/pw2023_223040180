<?php 
// ambil file functions.php
require 'functions.php';

//ambil id
$id = $_GET['id'];

if( hapus($id) > 0 ) {
    echo "
        <script>
            alert('Data berhasil hapus!');
            document.location.href = 'index.pgp/index.php';
        </script>
        ";
} else {
    echo "
        <script>
            alert('Data gagal dihapus!');
            document.location.href = 'index.pgp/index.php';
        </script>
        ";
}


?>