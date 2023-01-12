<?php
$conn = mysqli_connect("localhost", "root", "", "datasantri");


function query($query) {
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while ( $row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

function tambah($data) {
    global $conn;

    $id = htmlspecialchars($data["id"]);
    $nama_santri = htmlspecialchars($data["nama_santri"]);
    $alamat_santri = htmlspecialchars($data["alamat_santri"]);
    $no_telp = htmlspecialchars($data["no_telp"]);
    $nama_ayah = htmlspecialchars($data["nama_ayah"]);
    $nama_ibu = htmlspecialchars($data["nama_ibu"]);

    


    $query = "INSERT INTO santri
                VALUES
                ('', '$nama_santri', '$alamat_santri', '$no_telp', '$nama_ayah', '$nama_ibu')
                ";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
    }

    
    
      
    
        


    function hapus($id) {
        global $conn;
        mysqli_query($conn, "DELETE FROM santri WHERE id = $id");
        return mysqli_affected_rows($conn);
    }



    function ubah($data) {
        global $conn;
        $id = $data["id"];
        $nama_santri = htmlspecialchars($data["nama_santri"]);
        $alamat_santri = htmlspecialchars($data["alamat_santri"]);
        $no_telp = htmlspecialchars($data["no_telp"]);
        $nama_ayah = htmlspecialchars($data["nama_ayah"]);
        $nama_ibu = htmlspecialchars($data["nama_ibu"]);

    
        
    
    
        $query = "UPDATE santri SET
            nama_santri = '$nama_santri',
            alamat_santri = '$alamat_santri',
            no_telp = '$no_telp', 
            nama_ayah = '$nama_ayah',
            nama_ibu = '$nama_ibu'

            WHERE id = $id
            ";
        mysqli_query($conn, $query);
    
        return mysqli_affected_rows($conn);
    }

    function cari($keyword){
        $query = "SELECT * FROM santri
                WHERE
                nama_santri LIKE '%$keyword%' OR 
                alamat_santri LIKE '%$keyword%' OR
                no_telp LIKE '%$keyword%' OR
                nama_ayah LIKE '%$keyword%'
                nama_ibu LIKE '%$keyword%'
                ";
                return query($query);
    }


?>