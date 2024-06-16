<?php


include "session.php";
include "koneksi.php";
?>

<!DOCTYPE html>
<html>
<head>
    <title>Halaman Selamat Datang</title>
    <style>
        body {
            background-color: #fff; /* putih */
            color: #c00; /* merah */
            font-family: 'Helvetica Neue', Arial, sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-image: url('koneksibg.png');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
        }
        #container {
            text-align: center;
            animation: fadeIn 2s ease-in-out;
        }
        h1 {
            font-size: 3em;
            font-weight: bold;
            margin-bottom: 0.5em;
        }
        p {
            font-size: 1.5em;
            line-height: 1.5;
        }
        #logout-link {
            color: #c00; /* merah */
            text-decoration: none;
            font-weight: bold;
            transition: color 0.3s ease-in-out;
        }
        #logout-link:hover {
            color: #900; /* lebih gelap saat hover */
        }
        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }
    </style>
</head>
<body>
    <div id="container">
        <h1>Halo, Selamat Datang <b><?php echo $_SESSION['username']; ?></b></h1>
        <p>
            Silakan <a id="logout-link" href="logout.php"><b>Logout</b></a> untuk keluar dari aplikasi
        </p>
    </div>
</body>
</html>
