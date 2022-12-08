<?php 
session_start();
if(isset($_SESSION['nama'])) {?>
    <h2>Control Panel</h2>
    <p>Selaat Datang
        "<?php echo $_SESSION['nama'];?>"klik.<a href="logout.php">
        disini</a> untuk logout.</p>
    <?php } else { ?>
        <h2>Maaf..</h2>
        <p>anda tidak berhak mengakses halaman ini.silahkan<a href="login.php">disini</a>untuk kembali login</p>

    <?php } ?>
    