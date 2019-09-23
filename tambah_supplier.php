<?php include 'include/header.php'; ?>
<!-- End of Topbar -->

<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Data Supplier</h1>
  </div>

  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">Tambah Data Supplier</h6>
    </div>

    <div class="card-body">
      <form action="insert_supplier.php" method="post">
        <div class="form-group">
          <label>ID Supplier</label>
          <input type="text" name="id_supplier" class="form-control" placeholder="ex: SP001...">
        </div>
        <div class="form-group">
          <label>Nama Supplier</label>
          <input type="text" name="nama_supplier" class="form-control" placeholder="">
        </div>
        <div class="form-group">
          <label>Email</label>
          <input type="email" name="email" class="form-control" placeholder="ex: example@mail.com">
        </div>
        <div class="form-group">
          <label>Alamat</label>
          <textarea name="alamat" cols="30" rows="2" class="form-control"></textarea>
        </div>
        <div class="form-group">
          <label>No. HP</label>
          <input type="number" name="no_hp" class="form-control" placeholder="">
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