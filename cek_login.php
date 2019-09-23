<?php
session_start();

include 'include/config.php';

$username = $_POST['username'];
$password = md5($_POST['password']);

$login = mysqli_query($con, "select * from user where username='$username' and password='$password'");

$cek = mysqli_num_rows($login);

if ($cek) {
  $_SESSION['status'] = "login";
  $data = mysqli_fetch_assoc($login);

  if ($data['role_id'] == 1) { // 1 = SuperAdmin
    $_SESSION['id'] = $data['id'];
    $_SESSION['username'] = $data['username'];
    $_SESSION['nama_lengkap'] = $data['nama_lengkap'];
    $_SESSION['level'] = "Admin";
    // alihkan ke halaman dashboard admin
    header("location:index.php");
  }
}
