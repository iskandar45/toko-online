<?php include 'include/header.php'; ?>
<!-- End of Topbar -->

<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Data Penjualan</h1>
    <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Cetak Transaksi Penjualan</a>
  </div>

  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">Data Penjualan</h6>
    </div>

    <div class="card-body">
      <a class="btn btn-sm btn-primary shadow-sm mb-3" href="tambah_transaksi.php"><i class="fas fa-plus fa-sm text-white-50"></i> Input Transaksi</a>
      <table class="table table-bordered" id="dataTable">
        <thead>
          <tr>
            <th>No.</th>
            <th>Tanggal</th>
            <th>ID Transaksi</th>
            <th>Nama Barang</th>
            <th>Jumlah</th>
            <th>Harga</th>
            <th>Aksi</th>
          </tr>
        </thead>
        <tbody>
          <?php include 'include/config.php';
          $query = "select * from transaksi";
          $data = mysqli_query($con, $query);
          $i = 1;
          foreach ($data as $row) : ?>
            <tr>
              <td><?= $i++; ?></td>
              <td><?= $row['tanggal'] ?></td>
              <td><?= $row['id_transaksi'] ?></td>
              <?php
                $data2 = mysqli_query($con, "select nama_barang from barang where id_barang = '" . $row['nama_barang'] . "'");
                foreach ($data2 as $row1) : ?>
                <td><?= $row1['nama_barang'] ?></td>
              <?php endforeach; ?>

              <td><?= $row['jumlah'] ?></td>
              <td><?= $row['harga'] ?></td>
              <td>
                <a class="badge badge-success" href="">Lihat</a>
                <a class="badge badge-primary" href="">Edit</a>
                <a class="badge badge-danger" href="">Hapus</a>
              </td>
            </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    </div>
  </div>
</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->
<?php include 'include/footer.php'; ?>