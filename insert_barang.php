<?php
include 'include/config.php';

$id_barang = $_POST['id_barang'];
$nama_barang = $_POST['nama_barang'];
$harga_awal = $_POST['harga_awal'];
$harga_jual = $_POST['harga_jual'];
$id_supplier = $_POST['id_supplier'];
$jumlah = $_POST['jumlah'];
$sisa = $_POST['jumlah'];


$query = "INSERT INTO `barang`(`id_barang`, `nama_barang`, `harga_awal`, `harga_jual`, `jumlah`, `id_supplier`, `sisa`) VALUES ('$id_barang', '$nama_barang', '$harga_awal', '$harga_jual', $jumlah, '$id_supplier', '$sisa')";
$q = mysqli_query($con, $query);
if ($q) { ?>
  <script>
    alert('Data Barang berhasil ditambahkan!');
    location.href = 'data_barang.php';
  </script>
<?php } ?>