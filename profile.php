<?php include 'include/header.php'; ?>
<!-- End of Topbar -->

<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Profile</h1>
    <a href="setting.php" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-cog fa-sm text-white-50"></i> Go to Settings</a>
  </div>

  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">Profile</h6>
    </div>

    <div class="card-body">
      <div class="row">
        <div class="col-2">
          <?php
          include 'include/config.php';
          $id = $_SESSION['id'];
          $data = mysqli_query($con, "select * from user where id='$id'");
          $qq = mysqli_fetch_assoc($data);
          ?>
          <img src="img/user/<?= $qq['photo']; ?>" alt="user" class="img-thumbnail" width="300px">
        </div>
        <div class="col-10">
          <div class="border-left-primary px-2 py-2">
            <div class="row">
              <div class="col-3">
                Nama Lengkap
              </div>
              <div class="col-9">
                : <?= $qq['nama_lengkap']; ?>
              </div>
            </div>
            <div class="row">
              <div class="col-3">
                Status
              </div>
              <div class="col-9">
                : <?= $_SESSION['level']; ?>
              </div>
            </div>
            <div class="row">
              <div class="col-3">
                Email
              </div>
              <div class="col-9">
                : <?= $qq['email']; ?>
              </div>
            </div>
            <div class="row">
              <div class="col-3">
                Alamat
              </div>
              <div class="col-9">
                : <?= $qq['alamat']; ?>
              </div>
            </div>
            <div class="row">
              <div class="col-3">
                No. HP
              </div>
              <div class="col-9">
                : <?= $qq['nohp']; ?>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->
<?php include 'include/footer.php'; ?>