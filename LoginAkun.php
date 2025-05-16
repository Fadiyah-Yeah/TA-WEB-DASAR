<?php
include "KoneksiDatabase.php";
session_start();

if (isset($_COOKIE['id']) && isset($_COOKIE['username'])) {
    $id = $_COOKIE['id'];
    $username = $_COOKIE['username'];

    $result = mysqli_query($conn, "SELECT username FROM users WHERE id = '$id'");
    $row = mysqli_fetch_assoc($result);

    if ($username === hash('sha256', $row['username'])) {
        $_SESSION['login'] = true;
    }
}

if (isset($_POST["login"])) {
    $username = $_POST["username"];
    $password = $_POST["password"];

    $result = mysqli_query($conn, "SELECT * FROM account WHERE username = '$username'");

    if (mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_assoc($result);

        if (password_verify($password, $row["password"])) {
            $_SESSION["login"] = true;

            if (isset($_POST['remember'])) {
                setcookie('id', $row['id'], time() + 60 * 60);
                setcookie('username', hash('sha256', $row['username']), time() + 60 * 60);
            }
            header("Location: Homepage.php");
            exit;
        } else {
            echo "<script>alert('input password tidak sesuai')</script>";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Login Akun</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <style>
        body {
            background: linear-gradient(to left, rgb(35, 53, 216), rgb(81, 119, 224), rgb(255, 255, 255));
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .card-custom {
            width: 900px;
            border-radius: 30px;
            margin-top: 40px;
        }

        .form-section {
            padding: 40px 30px 30px;
        }

        .login-image {
            width: 100%;
            height: 500px;
            object-fit: cover;
        }

        .btn-submit,
        .btn-create {
            transition: 0.3s;
        }

        .btn-submit:hover {
            background-color: #0d6efd;
            transform: scale(1.03);
        }

        .btn-create:hover {
            color: #000;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div class="container-fluid d-flex justify-content-center">
        <div class="card shadow bg-body-tertiary d-flex flex-md-row flex-column card-custom">
            <form action="" method="POST" class="col-md-6 form-section">
                <h4 class="text-info-emphasis mb-3">
                    <img src="LogoWeb.png" style="width: 100px; height: 100px;" alt="Logo" />
                    AppleTalk
                </h4>
                <h3 class="text-center text-info-emphasis mb-3">Sign In</h3>
                <div class="mb-3">
                    <label for="username" class="form-label">Username</label>
                    <input type="text" class="form-control" name="username" id="username" required />
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" name="password" id="password" required />
                </div>
                <div class="mb-3">
                    <button type="submit" name="login" class="btn btn-primary w-100 btn-submit">Log In</button>
                </div>
                <div class="text-center mt-3">
                    Tidak Memiliki Akun?
                    <a href="CreateAkun.php" class="text-decoration-none text-danger btn-create">Buat Akun</a>
                </div>
            </form>
            <div class="col-md-6 border-start border-dark-subtle">
                <img src="DesainRegister.jpeg" class="login-image" alt="Login" />
            </div>
        </div>
    </div>
</body>
</html>
