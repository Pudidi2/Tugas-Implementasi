 <?php
require 'function.php';

$id = $_GET["id"];

$santri = query("SELECT * FROM santri WHERE id = $id")[0];

if( isset($_POST["submit"])) {

    if( ubah($_POST) > 0 ) {
        echo "
                <script>
                alert('data berhasil diubah!');
                document.location.href = 'index.php';
                </script>
        ";
    } else {
        echo "
        <script>
        alert('data gagal diubah!');
        document.location.href = 'index.php';
        </script>
";
    }


}


?>
<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ubah data siswa</title>
</head>
<body>
    <h1>Tambah data siswa</h1>

    <form action="" method="post" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?= $siswa["id"]; ?>">
        <input type="hidden" name="gambarLama" value="<?= $siswa["gambar"]; ?>">
        <ul>
            <li>
                <label for="nis">NIS : </label>
                <input type="text" name="nis" id="nis" required
                 value="<?= $siswa["nis"]?>">
            </li>
            <li>
            <label for="nama">Nama : </label>
                <input type="text" name="nama" id="nama"
                value="<?= $siswa["nama"]?>">
            </li>
            <li>
            <label for="email">Email : </label>
                <input type="email" name="email" id="email"
                value="<?= $siswa["email"]?>">
            </li>
            <li>
            <label for="jurusan">Jurusan : </label>
                <input type="text" name="jurusan" id="jurusan"
                value="<?= $siswa["jurusan"]?>">
            </li>
            <li>
            <label for="gambar">Gambar : </label> <br>
            <img src="img/<?= $siswa['gambar']; ?>" width="40"> <br>
                <input type="file" name="gambar" id="gambar">
            </li>
            <li>
               <button type="submit" name="submit">Ubah Data!</button>
            </li>
        </ul>


    </form>
</body>
</html> -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
      .btn-large { padding: 9px 14px; font-size: 15px; line-height: normal; -webkit-border-radius: 5px; -moz-border-radius: 5px; border-radius: 5px; }
            
            .btn-primary, .btn-primary:hover { text-shadow: 0 -1px 0 rgba(0, 0, 0, 0.25 ); color: #ffffff; }
            
            .btn-primary {background-image: -webkit-linear-gradient(top, #6eb6de, #4a77d4);  border: 1px solid #3762bc; text-shadow: 1px 1px 1px rgba(0,0,0,0.4); }
            
            .btn-block { width: 100%; display:block; }

            * {   box-sizing:border-box; }



            body { 
                width: 100%;
                height:100%;
                font-family: 'Open Sans', sans-serif;
                background: #2C1D55;
            }
            .login { 
                position: absolute;
                top: 50%;
                left: 50%;
                margin: -150px 0 0 -150px;
                width:300px;
                height:300px;
            }
            .login h1 { color: #fff; text-shadow: 0 0 10px rgba(0,0,0,0.3); letter-spacing:1px; text-align:center; }

            input { 
                width: 100%; 
                margin-bottom: 10px; 
                background: rgba(0,0,0,0.3);
                border: none;
                outline: none;
                padding: 10px;
                font-size: 13px;
                color: #fff;
                text-shadow: 1px 1px 1px rgba(0,0,0,0.3);
                border: 1px solid rgba(0,0,0,0.3);
                border-radius: 4px;
                box-shadow: inset 0 -5px 45px rgba(100,100,100,0.2), 0 1px 1px rgba(255,255,255,0.2);
                
            }
            input:focus { box-shadow: inset 0 -5px 45px rgba(100,100,100,0.4), 0 1px 1px rgba(255,255,255,0.2); }
    </style>
    <title>Ubah data Santri</title>
</head>
<body>
<div class="login">
	<h1>Ubah Data </h1>
    <form action="" method="post" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?= $santri["id"]; ?>">
        <input type="text" name="nama_santri" id="nama_santri" required
                 value="<?= $santri["nama_santri"]?>">
                 <input type="text" name="alamat_santri" id="alamat_santri"
                value="<?= $santri["alamat_santri"]?>">
                <input type="text" name="no_telp" id="no_telp"
                value="<?= $santri["no_telp"]?>">
                <input type="text" name="nama_ayah" id="nama_ayah"
                value="<?= $santri["nama_ayah"]?>">
                <input type="text" name="nama_ibu" id="nama_ibu"
                value="<?= $santri["nama_ibu"]?>">
               
             
      <button type="submit" name="submit" class="btn btn-primary btn-block btn-large">Ubah!</button>
    </form>
</div>
</body>
</html> 