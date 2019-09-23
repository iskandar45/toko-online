<?php
include 'include/config.php';
$id = $_POST['id'];
$password_lama = md5($_POST['password_lama']);
$password_baru1 = md5($_POST['password_baru1']);
$password_baru2 = md5($_POST['password_baru2']);
$hint = $_POST['hint'];

$h = mysqli_query($con, "select * from user where id='$id'");
$e = mysqli_fetch_array($h);
$hint_lama = $e['hint'];
$pass_lama = $e['password'];

if ($hint ===  $hint_lama) {
  if ($password_baru1 === $password_baru2) {
    if ($password_lama === $pass_lama) {
      $query = mysqli_query($con, "update user set password='$password_baru1' where id='$id'");
      if ($query) {
        header('location:setting.php?m=s_password');
      } else {
        header('location:setting.php?m=r_password');
      }
    }
  }
} else {
  header('location:setting.php?m=r_password');
}
