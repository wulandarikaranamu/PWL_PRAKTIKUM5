<?php 
session_start();
include("config.php");

$nama = $_POST['txtNama'];
$nim = $_POST['txtNim'];

$sql = "SELECT nama FROM user
        WHERE nama = '$nama'
        AND nim = '$nim'";

$hasil = mysqli_query($config,$sql) or exit ("Error query <br>".$sql."</br>");

    if(mysqli_num_rows($hasil)>0) {
        $data=mysqli_fetch_array($hasil);
        $_SESSION['nama'] = $data['nama'];
        header('location:welcome.php');
        exit();

    }else{?>
        <h2>Maaf..</h2>
        <p>nama dan nim anda salah.kilik<a href="login.php"></a>disini untuk kembali login</p><?php
    }

?>