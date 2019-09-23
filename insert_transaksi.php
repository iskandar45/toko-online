<?php
include 'include/config.php';

$tanggal = $_POST['tanggal'];
$id_transaksi = $_POST['id_transaksi'];
$nama_barang = $_POST['nama_barang'];
$jumlah = $_POST['jumlah'];
$harga = $_POST['harga'];

$query1 = "INSERT INTO `transaksi`(`id_transaksi`, `nama_barang`, `jumlah`, `harga`, `tanggal`) VALUES ('$id_transaksi','$nama_barang','$jumlah','$harga','$tanggal')";
$www = mysqli_query($con, "select jumlah from barang where id_barang= '$nama_barang'");
foreach ($www as $r) {
  $j = $r['jumlah'];
  $sisa = $j - $jumlah;
  $query2 = "UPDATE barang SET sisa ='$sisa' WHERE id_barang = '$nama_barang'";
  mysqli_query($con, $query2);
}
$q1 = mysqli_query($con, $query1);
if ($q1) { ?>
  <script>
    alert('Data Transaksi berhasil ditambahkan!');
    location.href = 'data_penjualan.php';
  </script>
<?php } ?>