<?php
    include "koneksi.php";

    $sql = "INSERT INTO user(
        id,
        nama,
        role,
        availability,
        age,
        location,
        email
        ) VALUE (
            '07',
            'Ananda Rafi Amanullah',
            'Editing Video',
            'Full Time',
            '16',
            'Probolinggo',
            'rafiamanullah05@gmail.com'
    )";

    if($koneksi->query($sql) == TRUE){
        echo "Insert data telah berhasil";
    }else{
        echo "Insert data gagal";
    }
?>