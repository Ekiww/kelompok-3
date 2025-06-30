<?php
include "koneksi.php";
?>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Register ke Perpustakan Kelompok 3</title>
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
                                    <h3 class="text-center font-weight-light my-4">Register Perpustakan Kelompok 3</h3>
                                </div>
                                <div class="card-body">
                                    <?php
                                    if (isset($_POST['register'])) {
                                        $nama = $_POST['nama'];
                                        $email = $_POST['email'];
                                        $alamat = $_POST['alamat'];
                                        $no_telepon = $_POST['no_telepon'];
                                        $level = $_POST['level'];
                                        $username = $_POST['username'];
                                        $password = $_POST['password']; // Tanpa hashing

                                        // Query untuk menyimpan data ke database
                                        $insert = mysqli_query($koneksi, "INSERT INTO user (nama, email, alamat, no_telepon, username, password, level) 
                                        VALUES ('$nama', '$email', '$alamat', '$no_telepon', '$username', '$password', '$level')");

                                        if ($insert) {
                                            echo '<script>alert("Selamat, register berhasil. Silakan login."); location.href="login.php";</script>';
                                        } else {
                                            echo '<script>alert("Register gagal. Silakan coba lagi.");</script>';
                                        }
                                    }
                                    ?>

                                    <form method="post">
                                        <div class="form-group">
                                            <label class="small mb-1">Nama Lengkap</label>
                                            <input class="form-control py-4" type="text" name="nama"
                                                placeholder="Masukan nama lengkap" required />
                                        </div>
                                        <div class="form-group">
                                            <label class="small mb-1">Email</label>
                                            <input class="form-control py-4" type="email" name="email"
                                                placeholder="Masukan email" required />
                                        </div>
                                        <div class="form-group">
                                            <label class="small mb-1">No Telepon</label>
                                            <input class="form-control py-4" type="text" name="no_telepon"
                                                placeholder="Masukan no telepon" required />
                                        </div>
                                        <div class="form-group">
                                            <label class="small mb-1">Alamat</label>
                                            <textarea name="alamat" rows="5" class="form-control py-4"
                                                required></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label class="small mb-1">Username</label>
                                            <input class="form-control py-4" type="text" name="username"
                                                placeholder="Masukan username" required />
                                        </div>
                                        <div class="form-group">
                                            <label class="small mb-1">Password</label>
                                            <input class="form-control py-4" name="password" type="password"
                                                placeholder="Masukan password" required />
                                        </div>
                                        <div class="form-group">
                                            <label class="small mb-1">Level</label>
                                            <select name="level" class="form-select py-4" required>
                                                <option value="peminjam">Peminjam</option>
                                                <option value="admin">Admin</option>
                                            </select>
                                        </div>
                                        <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
                                            <button class="btn btn-primary" type="submit" name="register"
                                                value="register">Register</button>
                                            <a class="btn btn-danger" href="login.php">Login</a>
                                        </div>
                                    </form>
                                </div>
                                <div class="card-footer text-center py-3">
                                    <div class="small">
                                        &copy; 2024 Perpustakan Kelompok 3.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>
</body>