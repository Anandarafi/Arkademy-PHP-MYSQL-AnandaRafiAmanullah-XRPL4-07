<?php
    include "koneksi.php";

    $sql = "CREATE TABLE user(
        id int PRIMARY KEY,
        nama varchar(50),
        role varchar(50),
        availability varchar(50),
        age int,
        location varchar(50),
        email varchar(50)
    )";

    if($koneksi->query($sql) == FALSE){
        echo "Tabel  berhasil dibuat";
    }else{
        echo "Tabel tidak berhasil dibuat";
    }
?>