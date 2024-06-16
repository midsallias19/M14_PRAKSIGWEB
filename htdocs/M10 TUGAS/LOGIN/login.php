<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <title>Login & Daftar Akun</title>
    <style>
        body {
            background-image: url('bg.png'); 
            background-size: cover;
            background-position: center;
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .container {
            width: 400px;
            padding: 40px;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h1 {
            text-align: center;
            color: #333;
            margin-bottom: 30px;
        }

        form {
            margin-top: 20px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th, td {
            padding: 10px;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: #f2f2f2;
            color: #333;
        }

        input[type="text"],
        input[type="password"],
        input[type="submit"],
        input[type="date"] {
            width: calc(100% - 20px);
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }

        input[type="submit"] {
            background-color: #8b0000;
            color: #fff;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        input[type="submit"]:hover {
            background-color: #5a0000;
        }

        .error {
            text-align: center;
            color: #ff0000;
            margin-top: 20px;
        }

        .toggle-link {
            text-align: center;
            margin-top: 20px;
        }

        .toggle-link a {
            color: #8b0000;
            text-decoration: none;
        }

        .toggle-link a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="container">
        <?php
        session_start();
        $koneksi = mysqli_connect("localhost", "root", "", "KWN");

        if(isset($_POST['proseslog'])){
            $username = $_POST['username'];
            $password = $_POST['password'];
            $sql = mysqli_query($koneksi, "SELECT * FROM tbkwn WHERE username='$username' AND password='$password'");
            $cek = mysqli_num_rows($sql);
            if($cek > 0){
                $_SESSION['username'] = $username;
                echo "<meta http-equiv='refresh' content='0;URL=home.php'>";
            } else {
                echo "<p class='error'><b>Username dan Password salah!</b></p>";
            }
        }

        if(isset($_POST['proses'])){
            $username = $_POST['username'];
            $password = $_POST['password'];
            $nama = $_POST['nama'];
            $tempat_lahir = $_POST['tempat_lahir'];
            $tanggal_lahir = $_POST['tanggal_lahir'];
            $alamat = $_POST['alamat'];
            $agama = $_POST['agama'];
            $pekerjaan = $_POST['pekerjaan'];
            $sql = "INSERT INTO tbkwn (username, password, nama, tempat_lahir, tanggal_lahir, alamat, agama, pekerjaan) VALUES ('$username', '$password', '$nama', '$tempat_lahir', '$tanggal_lahir', '$alamat', '$agama', '$pekerjaan')";
            if(mysqli_query($koneksi, $sql)){
                echo "Berhasil! Data kewarganegaraan telah tersimpan.";
            } else {
                echo "Error: " . $sql . "<br>" . mysqli_error($koneksi);
            }
        }

        mysqli_close($koneksi);

        if(isset($_GET['action']) && $_GET['action'] == 'register') {
        ?>
            <h1>Daftar Akun</h1>
            <h3>Input Data Kewarganegaraan</h3>
            <link rel="stylesheet" type="text/css" href="coba.css">
            <form action="" method="POST">
                <table>
                    <tr>
                        <td width="130">Username</td>
                        <td><input type="text" name="username" required></td>
                    </tr>
                    <tr>
                        <td>Password</td>
                        <td><input type="password" name="password" required></td>
                    </tr>
                    <tr>
                        <td>Nama Lengkap</td>
                        <td><input type="text" name="nama" required></td>
                    </tr>
                    <tr>
                        <td>Tempat Lahir</td>
                        <td><input type="text" name="tempat_lahir" required></td>
                    </tr>
                    <tr>
                        <td>Tanggal Lahir</td>
                        <td><input type="date" name="tanggal_lahir" required></td>
                    </tr>
                    <tr>
                        <td>Alamat</td>
                        <td><input type="text" name="alamat" required></td>
                    </tr>
                    <tr>
                        <td>Agama</td>
                        <td><input type="text" name="agama" required></td>
                    </tr>
                    <tr>
                        <td>Pekerjaan</td>
                        <td><input type="text" name="pekerjaan" required></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><input type="submit" value="Simpan" name="proses"></td>
                    </tr>
                </table>
            </form>
            <div class="toggle-link">
                <p>Sudah punya akun? <a href="?action=login">Login</a></p>
            </div>
        <?php
        } else {
        ?>
            <h1>Login Form</h1>
            <form action="" method="POST">
                <table>
                    <tr>
                        <td><input type="text" name="username" placeholder="Username" required></td>
                    </tr>
                    <tr>
                        <td><input type="password" name="password" placeholder="Password" required></td>
                    </tr>
                    <tr>
                        <td><input type="submit" value="Login" name="proseslog"></td>
                    </tr>
                </table>
            </form>
            <div class="toggle-link">
                <p>Belum punya akun? <a href="?action=register">Daftar</a></p>
            </div>
        <?php
        }
        ?>
    </div>
</body>
</html>
