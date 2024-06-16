<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <title>Login Form</title>
    <style>
        body {
            background-image: url('bg.png'); 
            background-size: cover; /* Atur ukuran gambar agar mengisi seluruh latar belakang */
            background-position: center; /* Posisikan gambar di tengah latar belakang */
            font-family: Arial, sans-serif;
            background-color: #f8f9fa; /* Warna latar belakang yang netral */
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .container {
            width: 400px; /* Lebar kontainer */
            padding: 40px;
            background-color: #fff; /* Warna latar belakang kontainer */
            border-radius: 10px; /* Border radius */
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); /* Efek bayangan */
        }

        h1 {
            text-align: center;
            color: #333; /* Warna teks header */
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
            border-bottom: 1px solid #ddd; /* Garis bawah untuk setiap baris */
        }

        th {
            background-color: #f2f2f2; /* Warna latar belakang header */
            color: #333; /* Warna teks header */
        }

        input[type="text"],
        input[type="password"],
        input[type="submit"] {
            width: calc(100% - 20px); /* Lebar input */
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ccc; /* Garis batas input */
            border-radius: 5px; /* Border radius */
            box-sizing: border-box;
        }

        input[type="submit"] {
    background-color: #8b0000; /* Warna merah bata */
    color: #fff; /* Warna teks tombol */
    cursor: pointer;
    transition: background-color 0.3s ease; /* Efek transisi */
}

input[type="submit"]:hover {
    background-color: #5a0000; /* Warna merah bata saat dihover */
}

        .error {
            text-align: center;
            color: #ff0000;
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Login Form</h1>
        <form action="" method="POST">
        <p>Belum Punya Akun? <a href="kwn.php">Daftar</a></p>
            <table>
                <tr>
                <i class="fas fa-flag"></i> <!-- Ikon bendera Indonesia -->
                    <td> <input type="text" name="username" placeholder="Username"></td>
                </tr>
                <tr>
                    <td> <input type="password" name="password" placeholder="Password"></td>
                </tr>
                <tr>
                    <td> <input type="submit" value="Login" name="proseslog"></td>
                </tr>
                
            </table>
        </form>
        <?php
        if(isset($_POST['proseslog'])){
            $sql=mysqli_query($koneksi, "select * from tbmhs where username='$_POST[username]' and password='$_POST[password]'");
            
            $cek=mysqli_num_rows($sql);
            if($cek>0){
                $_SESSION['username'] = $_POST['username'];

                echo "<meta http-equiv=refresh content=0;URL='home.php'>";
            }else {
                echo "<p class='error'><b>Username dan Password salah!</b></p>";
            }
        }
        ?>
    </div>
</body>
</html>
