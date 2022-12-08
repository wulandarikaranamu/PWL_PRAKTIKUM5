<?php
session_start();
include("config.php");

$username = $_POST['txtUsername'];
$password = $_POST['txtPassword'];

$sql = "SELECT user_name FROM user 
        WHERE user_name = '$username' 
        AND user_password= '$password'";

$hasil = mysqli_query($config, $sql) or exit("Error query : <b>".$sql."</b>.");

    if(mysqli_num_rows($hasil)>0){
        $data = mysqli_fetch_array($hasil);
        $_SESSION['username'] = $data['user_name'];
        header("Location:welcome.php");
        exit();

    } else { ?>
        <h2>Maaf..</h2>
        <p> Username atau Password salah. klik <a href="login.php">disini</a> untuk kembali login. </p> <?php

    }
?>