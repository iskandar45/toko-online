<?php
include 'include/config.php';

$id_supplier = $_POST['id_supplier'];
$nama_supplier = $_POST['nama_supplier'];
$email = $_POST['email'];
$alamat = $_POST['alamat'];
$no_hp = $_POST['no_hp'];

$query = "INSERT INTO supplier (id_supplier, nama_supplier, email, alamat, nohp) VALUES ('$id_supplier','$nama_supplier','$email','$alamat','$no_hp')";
$q = mysqli_query($con, $query);
if ($q) { ?>
  <script>
    alert('Data Supplier berhasil ditambahkan!');
    location.href = 'data_supplier.php';
  </script>
<?php } ?>