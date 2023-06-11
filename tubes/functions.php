<?php 
//koneksi ke database
$conn = mysqli_connect('localhost', 'root' , '' , 'tubes');

//function query buat mengambil data
function query  ($query){
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while($row = mysqli_fetch_assoc($result) ) {
        $rows[] = $row;
    }
    return $rows;
}

function tambah ($data){
    global $conn;

    $judul = htmlspecialchars($data['judul']);
    $gambar = htmlspecialchars($data['gambar']);
    $isi = htmlspecialchars($data['isi']);

    $query = "INSERT INTO home_content
                VALUES
                (null,'$judul' , '$gambar' , '$isi')
            ";

mysqli_query($conn, $query) or die(mysqli_error($conn));

return mysqli_affected_rows($conn);
}

function hapus ($id) {
    global $conn;   
    mysqli_query($conn, "DELETE FROM home_content WHERE id = $id") or die(mysqli_error($conn));

    return mysqli_affected_rows($conn);
}

function cari($keyword){
    global $conn;
    $query = "SELECT * FROM home_content
                WHERE
                judul = '%$keyword%'
                ";

    $result = mysqli_query($conn, $query);
    $rows = [];
    while($row = mysqli_fetch_assoc($result) ) {
        $rows[] = $row;
    }
    return $rows;

}

//edit artikel
function edit ($data){
    global $conn;

    $id = $data["id"];
    $judul = htmlspecialchars($data['judul']);
    $gambar = htmlspecialchars($data['gambar']);
    $isi = htmlspecialchars($data['isi']);

    $query = "UPDATE home_content SET
                    judul = '$judul',
                    gambar = '$gambar',
                    isi = '$isi'
                WHERE id = $id    
            ";
   mysqli_query($conn, $query) or die(mysqli_error($conn));

    return mysqli_affected_rows($conn);
}

?>