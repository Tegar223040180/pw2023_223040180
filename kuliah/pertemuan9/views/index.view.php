<?php requaire('partails/header.php') ?> 

<div class="container">
    <h1>Halaman Home</h1>

    <h3>Daftar Mahasiswa</h3>
    <?php foreach ($students as $student) : ?>

    <ul>
        <li> Nama: <?= $students["nama"];?></li>
        <li> NPM: <?= $students["npm"];?></li>
        <li> Email: <?= $students["email"];?></li>
    </ul>

    <?php endforeach; ?>
</div>
       
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  </body>
</html>