<?php
include "KoneksiDatabase.php";

if (isset($_POST["register"])) {
    $username = strtolower($_POST["username"]);
    $password = $_POST["password"];
    $password2 = $_POST["password2"];

    //cek konfirmasi password
    if ($password != $password2) {
        echo "<script>
        alert('input password tidak sesuai')</script>";
    } else {
        //jika benar maka akan dimasukkan ke db

        //enkripsi
        $password = password_hash($password, PASSWORD_DEFAULT);

        //MASUKKAN KE DB
        $query = "INSERT INTO akun (Username, Password)
        VALUES ('$username', '$password')";
        $q = mysqli_query($conn, $query);

        if ($q) {
            echo "<script>
        alert('user berhasil ditambahkan')</script>";
            header("Location: LoginAkun.php");
            exit;
        } else {
            echo "<script>
        alert('user gagal ditambahkan')</script>";
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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<style>
    body {
        background: linear-gradient(to top, rgb(11, 49, 75), rgb(49, 93, 185), rgb(23, 172, 209));
        height: 100vh;
        display: flex;
        align-items: center;
        justify-content: center;
    }
</style>

<body>
    <div class="container fluid d-flex justify-content-center">
        <div class="card border border-radius-4 d-flex flex-md-row flex-column opacity-75 shadow mb-5 bg-body-tertiary rounded" style="margin-top: 40px; width: 900px; border-radius: 100px;">
            <div class="col-md-6 border-start border-dark-subtle position-relative">
                <img src="LogoWeb.png" class="position-absolute" style="top: 20px; left: 20px; width: 100px; height: 100px; z-index: 2;" alt="Logo">
                <img src="DesainLogin.jpeg" style="width: 445px; height: 500px;">
            </div>
            <form action="" class="col-md-6" method="POST" style="padding-top: 60px;">
                <h3 class="text-center mb-3">BUAT AKUN</h3>
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
                        <label class="form-label" for="password">Konfirmasi Password</label>
                        <input type="password2" class="form-control" name="password2" id="password2" required><br>
                    </div>
                    <div style="padding: 0px 30px 0px;">
                        <button type="submit" value="register" name="register" class="btn btn-primary w-100">Sign Up</button><br>
                    </div>
                    <div class="text-center" style="padding: 20px 30px 0px;">
                        <a href="LoginAkun.php" class="text-decoration-none text-secondary">Kembali</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</body>

</html>