<?php 
$config = mysqli_connect("localhost","root","","mahasiswa");
if(!$config){
    die('gagal terhubung ke mysql'.mysqli_connect_error());
}
?>