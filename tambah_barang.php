<?php include 'include/header.php'; ?>
<!-- End of Topbar -->

<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Data Barang</h1>
  </div>

  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">Tambah Data Barang</h6>
    </div>

    <div class="card-body">
      <form action="insert_barang.php" method="post">
        <div class="form-group">
          <label>ID Barang</label>
          <input type="text" name="id_barang" class="form-control" placeholder="ex: KD001...">
        </div>
        <div class="form-group">
          <label>Nama Barang</label>
          <input type="text" name="nama_barang" class="form-control" placeholder="">
        </div>
        <div class="form-group">
          <label>Harga Awal</label>
          <input type="number" name="harga_awal" class="form-control" placeholder="ex: 2500">
        </div>
        <div class="form-group">
          <label>Harga Jual</label>
          <input type="number" name="harga_jual" class="form-control" placeholder="ex: 3000">
        </div>
        <div class="form-group">
          <label>Supplier</label>
          <select name="id_supplier" class="form-control">
            <option value="">--Pilih Supplier--</option>
            <?php include 'include/config.php';
            $query = "SELECT id_supplier, nama_supplier FROM supplier order by id";
            $data = mysqli_query($con, $query);
            foreach ($data as $row) : ?>
              <option value="<?= $row['id_supplier']; ?>">-<?= $row['nama_supplier']; ?></option>
            <?php endforeach; ?>
          </select>
        </div>
        <div class="form-group">
          <label>Jumlah</label>
          <input type="number" name="jumlah" class="form-control" placeholder="ex: 10; 50; etc">
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