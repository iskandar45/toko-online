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
      <h6 class="m-0 font-weight-bold text-primary">Edit Data Barang</h6>
    </div>

    <div class="card-body">
      <form action="e_barang.php" method="post">
        <?php
        include 'include/config.php';
        $id = $_GET['id'];
        $dd = mysqli_query($con, "select * from barang where id='$id'");
        foreach ($dd as $rr) : ?>
          <div class="form-group">
            <label>ID Barang</label>
            <input type="hidden" name="id" class="form-control" value="<?= $rr['id'] ?>">
            <input type="text" name="id_barang" class="form-control" value="<?= $rr['id_barang'] ?>" readonly>
          </div>
          <div class="form-group">
            <label>Nama Barang</label>
            <input type="text" name="nama_barang" class="form-control" placeholder="" value="<?= $rr['nama_barang'] ?>">
          </div>
          <div class="form-group">
            <label>Harga Awal</label>
            <input type="number" name="harga_awal" class="form-control" placeholder="ex: 2500" value="<?= $rr['harga_awal'] ?>">
          </div>
          <div class="form-group">
            <label>Harga Jual</label>
            <input type="number" name="harga_jual" class="form-control" placeholder="ex: 3000" value="<?= $rr['harga_jual'] ?>">
          </div>
          <div class="form-group">
            <label>Supplier</label>
            <select name="id_supplier" class="form-control">
              <option value="">--Pilih Supplier--</option>
              <?php
                $df = mysqli_query($con, "select id_supplier,nama_supplier from supplier order by nama_supplier");
                foreach ($df as $rt) : ?>
                <?php
                    if ($rt['id_supplier'] === $rr['id_supplier']) : ?>
                  <option value="<?= $rt['id_supplier'] ?>" selected>-<?= $rt['nama_supplier'] ?></option>
                <?php endif; ?>
                <option value="<?= $rt['id_supplier'] ?>">-<?= $rt['nama_supplier'] ?></option>
              <?php endforeach; ?>
            </select>
          </div>
          <div class="form-group">
            <label>Jumlah</label>
            <input type="number" name="jumlah" class="form-control" placeholder="ex: 10; 50; etc" value="<?= $rr['sisa'] ?>">
          </div>
          <div class="form-group">
            <input type="submit" class="btn btn-primary">
          </div>

        <?php endforeach; ?>
      </form>
    </div>
  </div>
</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->
<?php include 'include/footer.php'; ?>