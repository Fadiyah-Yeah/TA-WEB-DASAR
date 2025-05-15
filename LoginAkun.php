<?php
include "KoneksiDatabase.php";
session_start();
if (isset($_POST["login"])) {
    $username = $_POST["username"];
    $password = $_POST["password"];

    //ambil data dr tabel
    $result = mysqli_query($conn, "SELECT * FROM akun WHERE username = '$username'");

    if (mysqli_num_rows($result) == 1) //melihat data yang diambil dari result
        $row = mysqli_fetch_assoc($result);

    if (password_verify($password, $row["password"])) {
        $_SESSION["login"] = true;
        header("Location: Homepage.php");
        exit;
    } else {
        echo "<script>
        alert('input password tidak sesuai')</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<style>
    body {
        background: linear-gradient(to left, rgb(11, 49, 75), rgb(49, 93, 185), rgb(23, 172, 209));
        height: 100vh;
        display: flex;
        align-items: center;
        justify-content: center;
    }
</style>

<body>
    <div class="container fluid d-flex justify-content-center">
        <div class="card border border-radius-4 d-flex flex-md-row flex-column opacity-75 shadow mb-5 bg-body-tertiary rounded" style="margin-top: 40px; width: 900px; border-radius: 100px;">
            <form action="" class="col-md-6" method="POST">
                <h4 class="text-info-emphasis text-left" style="top: 20px; left: 20px; padding-top: 10px;"> <img src="LogoWeb.png" style="width: 100px; height: 100px;" alt="Logo"> ReApple</h4>
                <h3 class="text-center mb-3">LOGIN AKUN</h3>
                <div class="row">
                    <div style="padding: 0px 30px 0px ; ">
                        <label class="form-label" for="username">Username</label>
                        <input type="text" class="form-control" name="username" id="username" required><br>
                    </div>
                    <div style="padding: 0px 30px 0px;">
                        <label class="form-label" for="password">Password</label>
                        <input type="password" class="form-control" name="password" id="password" required><br>
                    </div>
                    <div style="padding: 0px 30px 0px;">
                        <button type="submit" value="login" name="login" class="btn btn-primary w-100">Log In</button><br>
                    </div>
                    <div class="text-center mt-3">
                        Tidak Memiliki Akun? <a href="CreateAkun.php" class="text-decoration-none text-danger">Buat Akun</a>
                    </div>
                </div>
            </form>
            <div class=" col-md-6 border-start border-dark-subtle">
                <img src="DesainRegister.jpeg" style="width: 445px; height: 500px;">
            </div>
        </div>
    </div>
</body>

</html>