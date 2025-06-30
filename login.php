<?php 
session_start();
include "koneksi.php";
?>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Login ke perpustkan kelompok 3</title>
    <link href="css/styles.css" rel="stylesheet" />

</head>

<body class="bg-primary">
    <div id="layoutAuthentication">
        <div id="layoutAuthentication_content">
            <main>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-5">
                            <div class="card shadow-lg border-0 rounded-lg mt-5">
                                <div class="card-header">
                                    <h3 class="text-center font-weight-light my-4">Login perpustakan kelompok 3</h3>
                                </div>
                                <div class="card-body">
                                    <?php
                                    if (isset($_POST['login'])) {
                                        $email = $_POST['email'];
                                        $password = $_POST['password']; 
                                        $data = mysqli_query($koneksi, "SELECT * FROM user WHERE email='$email' AND password='$password'");
                                        $cek = mysqli_num_rows($data);
                                        if ($cek > 0) {
                                            $_SESSION['user'] = mysqli_fetch_array($data);
                                            echo '<script>alert("selamat datang, login berhasil"); location.href="index.php";</script>';
                                        } else {
                                            echo '<script>alert("maaf, kata sandi gagal")</script>';
                                        }
                                    }
                                    ?>
                                    <form method="post">
                                        <div class="form-group">
                                            <label class="small mb-1" for="inputEmailAddress">Email Address</label>
                                            <input class="form-control py-4" id="inputEmailAddress" type="text"
                                                name="email" placeholder="Enter Email Address" />
                                        </div>
                                        <div class="form-group">
                                            <label class="small mb-1" for="inputPassword">Password</label>
                                            <input class="form-control py-4" id="inputPassword" name="password"
                                                type="password" placeholder="Password" />
                                        </div>
                                        <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
                                            <button class="btn btn-primary" type="submit" name="login"
                                                value="login">Login</button>
                                            <a class="btn btn-danger" href="register.php">register</a>
                                        </div>
                                    </form>
                                </div>
                                <div class="card-footer text-center py-3">
                                    <div class="small">
                                        &copy; 2024 perpustakan kelompok 3.
                                    </div>
                                </div>
                            </div>