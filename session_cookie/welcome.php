<?php 
//latihan session untuk autentikasi login
session_start();
    if(isset($_SESSION['username'])) { ?>
    <h2>Control Panel</h2>
    <p>Selamat Datang
        "<?php echo $_SESSION['username'];?>".Klik <a href="logout.php">
        disini</a> untuk logout.</p> 
    <?php } else { ?>
        <h2>Maaf...</h2>
        <p>Anda tidak berhak mengakses halaman ini. silahkan <a href="login.php">Login </a> terlebih dahulu. </p>

   <?php } ?>