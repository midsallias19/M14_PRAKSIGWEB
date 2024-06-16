<?php
include "session.php";
include "koneksi.php";

?>

<p align = "center">

Halo, Selamat Datang <b> <?php echo $_SESSION['username']; ?></b><br>
Silakan <a href="logout.php"><b> Logout </b> untuk keluar dari aplikasi
</p>