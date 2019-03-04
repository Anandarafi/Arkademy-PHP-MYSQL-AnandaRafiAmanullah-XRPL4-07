<?php
    include "koneksi.php";

    $sql = "SELECT * FROM user";
    $result = $koneksi-> query($sql);

    foreach($result as $res){
        $id = $res["id"];
        $nama = $res["nama"];
        $role = $res["role"];
        $availability = $res["availability"];
        $age = $res["age"];
        $location = $res["location"];
        $email = $res["email"];
    }
?>