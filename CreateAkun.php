<?php
include "KoneksiDatabase.php";

if (isset($_POST["register"])) {
    $username = strtolower($_POST["username"]);
    $password = $_POST["password"];
    $password2 = $_POST["password2"];

    if ($password != $password2) {
        echo "<script>alert('Input password tidak sesuai');</script>";
    } else {
        $password = password_hash($password, PASSWORD_DEFAULT);
        $query = "INSERT INTO account (username, password) VALUES ('$username', '$password')";
        $q = mysqli_query($conn, $query);

        if ($q) {
            echo "<script>alert('User berhasil ditambahkan');</script>";
            header("Location: LoginAkun.php");
            exit;
        } else {
            echo "<script>alert('User gagal ditambahkan');</script>";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DAFTAR LOGIN</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: linear-gradient(to top, rgb(35, 53, 216), rgb(81, 119, 224), rgb(255, 255, 255));
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }

    .register-card {
        width: 900px;
        border-radius: 30px;
        opacity: 0;
        transition: opacity 1s ease-in-out;
    }

    .register-card.show {
        opacity: 1;
    }

    .image-section {
        position: relative;
    }

    .logo-img {
        position: absolute;
        top: 20px;
        left: 20px;
        width: 100px;
        height: 100px;
        z-index: 2;
    }

    .main-img {
        width: 100%;
        height: 500px;
        object-fit: cover;
    }

    .form-section {
        padding-top: 60px;
    }

    .form-padding {
        padding: 0px 30px;
    }

    .btn-submit {
        transition: all 0.5s ease;
    }

    .btn-submit:hover {
        background-color: #0b5ed7; 
        transform: scale(1.05);
    }

    .back-link {
        color: #6c757d;
        transition: all 0.5s ease;
        position: relative;
        display: inline-block;
    }

    .back-link::after {
        content: '';
        position: absolute;
        width: 0%;
        height: 2px;
        left: 0;
        bottom: -2px;
        background-color: #6c757d;
        transition: width 0.3s ease;
    }

    .back-link:hover {
        color: #343a40;
        transform: translateX(-2px);
    }

    .back-link:hover::after {
        width: 100%;
    }
    </style>
</head>

<body>
    <div class="container-fluid d-flex justify-content-center">
        <div class="card border shadow bg-body-tertiary d-flex flex-md-row flex-column register-card" id="registerCard">
            <div class="col-md-6 border-end border-dark-subtle image-section">
                <img src="LogoWeb.png" class="logo-img" alt="Logo">
                <img src="DesainLogin.jpeg" class="main-img" alt="Desain Login">
            </div>

            <form action="" method="POST" class="col-md-6 form-section">
                <h3 class="text-center text-info-emphasis mb-3">Sign Up</h3>
                <div class="row">
                    <div class="form-padding">
                        <label class="form-label" for="username">Username</label>
                        <input type="text" class="form-control" name="username" id="username" required><br>
                    </div>
                    <div class="form-padding">
                        <label class="form-label" for="password">Password</label>
                        <input type="password" class="form-control" name="password" id="password" required><br>
                    </div>
                    <div class="form-padding">
                        <label class="form-label" for="password2">Konfirmasi Password</label>
                        <input type="password2" class="form-control" name="password2" id="password2" required><br>
                    </div>
                    <div class="form-padding">
                       <button type="submit" name="register" class="btn btn-primary w-100 btn-submit">Sign Up</button><br>
                    </div>
                    <div class="text-center" style="padding-top: 20px;">
                        <a href="LoginAkun.php" class="text-decoration-none back-link">Kembali</a>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        window.addEventListener("DOMContentLoaded", () => {
            const card = document.getElementById("registerCard");
            card.classList.add("show");
        });
    </script>
</body>
</html>
