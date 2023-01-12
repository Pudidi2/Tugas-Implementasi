<?php
session_start();



require 'function.php';



$santri = query("SELECT * FROM santri ");

if( isset($_POST["cari"])) {
    $santri = cari($_POST["keyword"]);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <title>Halaman Admin</title>
    <style>
        body {
            background-color: #49747d;
        }
    </style>
</head>
<body style="
font-family: Lucida Console, Courier New, monospace;" >
<br><br><br>

<div class="container-fluid">
    <div class="row">
        <div class="col col-md-10 offset-md-1 rounded shadow mt-5 p-4 "
        style="background: rgb(73,116,125);
background: linear-gradient(90deg, rgba(73,116,125,1) 0%, rgba(184,184,184,0.8883928571428571) 51%, rgba(73,116,125,1) 100%, rgba(23,23,23,1) 100%, rgba(73,116,125,1) 100%);">

            <a class="btn btn-danger" href="logout.php"><i class="bi bi-box-arrow-left text-white"></i></a>
            <h1 class="text-center" font-family="Fantasy">Data Santri</h1>
            
            <br><br>
            
            <form class="d-flex col-md-6 offset-md-3 mb-5" action="" method="post">
                <input type="text" name="keyword" size="40" autofocus
                placeholder="masukkan keyword pencarian.." autocomplete="off" class="form-control me-5">
                <button type="submit" name="cari" class="btn btn-secondary"><i class="bi bi-search"></i></button>
            </form>
            <br>
            <a href="tambah.php" class="btn btn-primary mb-3" >Tambah data santri</a>
            <table class=" table table-dark table-striped" border="" cellpadding="10" cellspacing="0" >
            
            
            <tr>
                <th>ID</th>
                <th>Aksi</th>
                <th>Nama</th>
                <th>Alamat</th>
                <th>No.Telp</th>
                <th>Nama Ayah</th>
                <th>Nama Ibu</th>
            </tr>
            
            <?php $i = 1; ?>
            
            <?php foreach( $santri as $row) : ?>
            <tr>
                <td><?= $i; ?></td>
                <td>
                    <a href="ubah.php?id=<?= $row["id"]; ?>"><i class="bi bi-pencil-square text-success"></i></a>
                    <a href="hapus.php?id=<?= $row["id"]; ?>" onclick="
                    return confirm('yakin?');"><i class="bi bi-trash-fill text-danger"></i></a>
                </td>
                <td><?= $row["nama_santri"]; ?></td>
                <td><?= $row["alamat_santri"]; ?></td>
                <td><?= $row["no_telp"]; ?></td>
                <td><?= $row["nama_ayah"]; ?></td>
                <td><?= $row["nama_ibu"]; ?></td>
            
            
            
            
            </tr>
            <?php $i++; ?>
            <?php endforeach; ?>
            
            </table>

        </div>
    </div>
</div>
    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>

</body>
</html>