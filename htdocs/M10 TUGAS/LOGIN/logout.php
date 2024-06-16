<?php
session_start();
session_destroy();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logout</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            background: linear-gradient(135deg, #ff0000, #ffffff); /* Merah dan putih */
            overflow: hidden;
        }
        .container {
            text-align: center;
            animation: fadeOut 3s forwards;
            background-color: rgba(255, 255, 255, 0.8); /* Latar belakang putih semi-transparan */
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.2); /* Bayangan */
        }
        h1 {
            font-size: 2.5em;
            color: #ff0000; /* Merah */
            margin-bottom: 20px;
        }
        p {
            font-size: 1.2em;
            color: #333; /* Hitam */
        }
        .animation {
            position: absolute;
            top: 50%;
            left: 50%;
            width: 150px;
            height: 150px;
            background-color: #ff0000; /* Merah */
            border-radius: 50%;
            transform: translate(-50%, -50%);
            animation: bounce 2s infinite ease-in-out;
        }
        @keyframes bounce {
            0%, 100% {
                transform: translate(-50%, -50%) scale(1);
            }
            50% {
                transform: translate(-50%, -50%) scale(1.2);
            }
        }
        @keyframes fadeOut {
            0% {
                opacity: 1;
            }
            100% {
                opacity: 0;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Logout Berhasil!</h1>
        <p>Anda akan diarahkan ke halaman login...</p>
        <div class="animation"></div>
    </div>
    <script>
        setTimeout(function() {
            window.location.href = 'login.php';
        }, 3000); // 3 detik sebelum diarahkan
    </script>
</body>
</html>
