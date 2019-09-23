<?php include 'include/header.php'; ?>
<!-- End of Topbar -->

<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Data Barang</h1>
    <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Cetak Laporan</a>
  </div>

  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">Data Barang</h6>
    </div>

    <div class="card-body">
      <a class="btn btn-sm btn-primary shadow-sm mb-3" href="tambah_barang.php"><i class="fas fa-plus fa-sm text-white-50"></i> Tambah Barang</a>
      <table class="table table-bordered" id="dataTable">
        <thead>
          <tr>
            <th>No.</th>
            <th>ID Barang</th>
            <th>Nama Barang</th>
            <th>Harga Awal</th>
            <th>Harga Jual</th>
            <th>Jumlah</th>
            <th>Sisa</th>
            <th>Aksi</th>
          </tr>
        </thead>
        <tbody>
          <?php include 'include/config.php';
          $query = "SELECT * FROM barang";
          $data = mysqli_query($con, $query);
          $i = 1;
          foreach ($data as $row) : ?>
            <tr>
              <td><?= $i++; ?></td>
              <td><?= $row['id_barang']; ?></td>
              <td><?= $row['nama_barang']; ?></td>
              <td><?= $row['harga_awal']; ?></td>
              <td><?= $row['harga_jual']; ?></td>
              <td><?= $row['jumlah']; ?></td>
              <td><?= $row['sisa']; ?></td>
              <td>
                <a class="badge badge-primary" href="ubah_barang.php?id=<?= $row['id'] ?>">Edit</a>
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