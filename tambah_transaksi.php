<?php include 'include/header.php'; ?>
<!-- End of Topbar -->

<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Transaksi</h1>
  </div>

  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">Transaksi Penjualan</h6>
    </div>

    <div class="card-body">
      <form action="insert_transaksi.php" method="post">
        <div class="form-group">
          <label>Tanggal</label>
          <input type="date" name="tanggal" class="form-control" placeholder="">
        </div>
        <div class="form-group">
          <label>ID Transaksi</label>
          <input type="text" name="id_transaksi" class="form-control" placeholder="ex: FKT001..">
        </div>
        <div class="form-group">
          <label>Nama Barang</label>
          <select name="nama_barang" class="form-control">
            <option value="">-- Pilih Barang --</option>
            <?php include 'include/config.php';
            $query = "SELECT id_barang,nama_barang FROM barang";
            $data = mysqli_query($con, $query);
            foreach ($data as $row) : ?>
              <option value="<?= $row['id_barang'] ?>">-<?= $row['nama_barang'] ?></option>
            <?php endforeach; ?>
          </select>
        </div>
        <div class="form-group">
          <label>Jumlah</label>
          <input type="number" name="jumlah" class="form-control" placeholder="" required>
        </div>
        <div class="form-group">
          <label>Harga</label>
          <input type="number" name="harga" class="form-control" placeholder="" required>
        </div>
        <div class="form-group">
          <input type="submit" class="btn btn-primary">
        </div>

      </form>
    </div>
  </div>
</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->
<?php include 'include/footer.php'; ?>