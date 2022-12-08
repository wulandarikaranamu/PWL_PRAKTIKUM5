<?php 

    include "config.php"; //memanggil file koneksi database ke PHP

    $sql = "Select*from user";
    $query = mysqli_query($config,$sql);
    $row = mysqli_fetch_assoc($query);

    //data ditampilkan dalam bentuk array dalam bentuk pertama
    echo "<pre>";
    print_r($row);
    echo "<pre>";

    //atau dalam bentuk kedua 
    echo "username :" .$row['user_name']."<br/>";
    echo "user_password :" .$row['user_password']."<br/>";
    echo "user_namalengkap:" .$row['user_namalengkap']."<br/>";
    echo "user_email:" .$row['user_email']."<br/>";

?>