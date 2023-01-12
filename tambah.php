
<?php
session_start();



require 'function.php';

if( isset($_POST["submit"])) {


    if( tambah($_POST) > 0 ) {
        echo "
                <script>
                alert('data berhasil ditambahkan!');
                document.location.href = 'index.php';
                </script>
        ";
    } else {
        echo "
        <script>
        alert('data gagal ditambahkan!');
        document.location.href = 'index.php';
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
    <title>Tambah data siswa</title>
</head>
<body>
<div class="login">
	<h1>Tambah Data </h1>
  <form action="" method="post"  enctype="multipart/form-data">
    	<input type="text" name="nama_santri" placeholder="Nama" id="nama_santri" required="required" />
      <input type="text" name="alamat_santri" placeholder="Alamat Kota" id="alamat_santri" required="required" />
      <input type="text" name="no_telp" placeholder="No.Telp"  id="no_telp" required="required" />
      <input type="text" name="nama_ayah" placeholder="Nama Ayah" id="nama_ayah" required="required" />
        <input type="text" name="nama_ibu" placeholder="Nama Ibu" id="nama_ibu"  required="required" />
        <button type="submit" name="submit" class="btn btn-primary btn-block btn-large">Tambah!</button>
    </form>
</div>
</body>
</html>  