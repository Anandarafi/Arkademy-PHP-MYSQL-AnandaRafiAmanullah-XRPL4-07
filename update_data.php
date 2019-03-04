<?php
    include "koneksi.php";

    if(isset($_POST["submit"])){
        $id_user = $_POST["id_user"];
        $nama = $_POST["name"];
        $role = $_POST["role"];
        $availability = $_POST["availability"];
        $location = $_POST["location"];
        $email = $_POST["email"];

        $sql ="UPDATE user SET nama = '$nama', role = '$role', availability = '$availability', age = '$age', location = '$location' email = '$location' WHERE id = '$id_user'  ";
    
        if($koneksi->query($sql) == FALSE){
            echo "Update Data Berhasil ";
        }else{
            echo "Update Data gagal";
        }
    
    }
?>