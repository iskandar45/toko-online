<?php
include 'include/config.php';
$id = $_POST['id'];
$nama_lengkap = $_POST['nama_lengkap'];
$email = $_POST['email'];
$nohp = $_POST['nohp'];
$alamat = $_POST['alamat'];
$hint = $_POST['hint'];

$h = mysqli_query($con, "select * from user where id='$id'");
$e = mysqli_fetch_array($h);

$hint_lama = $e['hint'];
if ($hint ===  $hint_lama) {
  $query = mysqli_query($con, "update user set nama_lengkap='$nama_lengkap', email='$email', nohp='$nohp', alamat='$alamat' where id='$id'");
  if ($query) {
    header('location:setting.php?m=s_profile');
  } else {
    header('location:setting.php?m=r_profile');
  }
} else {
  header('location:setting.php?m=r_profile');
}
