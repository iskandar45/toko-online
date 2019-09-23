<?php
include 'include/config.php';

$id = $_POST['id'];
$hint = $_POST['hint'];

$ekstensi_diperbolehkan  = array('png', 'jpg');
$nama = $_FILES['file']['name'];
$x = explode('.', $nama);
$ekstensi = strtolower(end($x));
$ukuran  = $_FILES['file']['size'];
$file_tmp = $_FILES['file']['tmp_name'];

$h = mysqli_query($con, "select hint from user where id='$id'");
$f = mysqli_fetch_assoc($h);
$hint_lama = f['hint'];

if ($hint === $hint_lama) {
  if (in_array($ekstensi, $ekstensi_diperbolehkan) === true) {
    if ($ukuran < (1044070 * 2)) { // ukuran 2MB

      move_uploaded_file($file_tmp, 'img/user/' . $nama);
      $query = mysqli_query($con, "UPDATE user SET photo='$nama' WHERE id='$id'");
      if ($query) {
        header('location:setting.php?m=s_photo');
      } else {
        header('location:setting.php?m=r_photo');
      }
    } else {
      header('location:setting.php?m=r_photo_b');
    }
  } else {
    header('location:setting.php?m=r_photo_x');
  }
} else {
  header('location:setting.php?m=r_photo_h');
}
