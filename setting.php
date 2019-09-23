<?php include 'include/header.php'; ?>
<!-- End of Topbar -->

<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Data Profile</h1>
  </div>

  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">Edit Profile</h6>
    </div>

    <div class="card-body">
      <?php
      if (isset($_GET['m'])) {
        if ($_GET['m'] == 's_profile') {
          echo "<div class='alert alert-success'>Profile berhasil diubah! <small>login ulang untuk melihat perubahan</small></div>";
        } elseif ($_GET['m'] == 'r_profile') {
          echo "<div class='alert alert-danger'>Profile gagal diubah! (Hint Salah)</div>";
        }
      }
      ?>

      <form action="e_profile.php" method="post">
        <div class="form-group">
          <?php include 'include/config.php';
          $id = $_SESSION['id'];
          $d = mysqli_query($con, "select * from user where id='$id'");
          $row = mysqli_fetch_assoc($d);
          ?>
          <input type="hidden" name="id" class="form-control" placeholder="" value="<?= $row['id'] ?>">
          <label>Nama Lengkap</label>
          <input type="text" name="nama_lengkap" class="form-control" placeholder="" value="<?= $row['nama_lengkap'] ?>">

        </div>
        <div class="form-group">
          <label>Email</label>
          <input type="email" name="email" class="form-control" placeholder="" value="<?= $row['email'] ?>">
        </div>
        <div class="form-group">
          <label>No. HP</label>
          <input type="number" name="nohp" class="form-control" placeholder="" value="<?= $row['nohp'] ?>">
        </div>
        <div class="form-group">
          <label>Alamat</label>
          <textarea name="alamat" cols="30" rows="2" class="form-control"><?= $row['alamat'] ?></textarea>
        </div>
        <div class="form-group">
          <label>Hint</label>
          <input type="text" name="hint" class="form-control" placeholder="Siapakah nama ibu kandung anda?">
        </div>
        <div class="form-group">
          <input type="submit" class="btn btn-primary">
        </div>

      </form>
    </div>
  </div>

  <div class="row">
    <div class="col">
      <div class="card shadow mb-4">
        <div class="card-header py-3">
          <h6 class="m-0 font-weight-bold text-primary">Ganti Password</h6>
        </div>
        <div class="card-body">
          <?php
          if (isset($_GET['m'])) {
            if ($_GET['m'] == 's_password') {
              echo "<div class='alert alert-success'>Password berhasil diubah! <small>login ulang untuk melihat perubahan</small></div>";
            } elseif ($_GET['m'] == 'r_password') {
              echo "<div class='alert alert-danger'>Password gagal diubah!</div>";
            }
          }
          ?>
          <form action="e_password.php" method="post">
            <div class="form-group">
              <label>Password Lama</label>
              <input type="hidden" name="id" class="form-control" placeholder="" value="<?= $_SESSION['id'] ?>">
              <input type="password" name="password_lama" class="form-control" placeholder="">
            </div>
            <div class="form-group">
              <div class="row">
                <div class="col">
                  <label>Password Baru</label>
                  <input type="password" name="password_baru1" class="form-control" placeholder="">
                </div>
                <div class="col">
                  <label>Repeat Password</label>
                  <input type="password" name="password_baru2" class="form-control" placeholder="">
                </div>
              </div>
            </div>
            <div class="form-group">
              <label>Hint</label>
              <input type="text" name="hint" class="form-control" placeholder="Siapakah nama ibu kandung anda?">
            </div>
            <div class="form-group">
              <input type="submit" class="btn btn-primary">
            </div>
          </form>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card shadow mb-4">
        <div class="card-header py-3">
          <h6 class="m-0 font-weight-bold text-primary">Ganti Photo</h6>
        </div>
        <div class="card-body">
          <?php
          if (isset($_GET['m'])) {
            if ($_GET['m'] == 's_photo') {
              echo "<div class='alert alert-success'>Photo berhasil diubah! <small>login ulang untuk melihat perubahan</small></div>";
            } elseif ($_GET['m'] == 'r_photo') {
              echo "<div class='alert alert-danger'>Photo gagal diubah!</div>";
            } elseif ($_GET['m'] == 'r_photo_b') {
              echo "<div class='alert alert-danger'>Photo gagal diubah! <small>Ukuran photo terlalu besar!</small></div>";
            } elseif ($_GET['m'] == 'r_photo_x') {
              echo "<div class='alert alert-danger'>Photo gagal diubah! <small>Ektensi file tidak diperbolehkan!</small></div>";
            } elseif ($_GET['m'] == 'r_photo_h') {
              echo "<div class='alert alert-danger'>Photo gagal diubah! <small>Hint tidak sesuai!</small></div>";
            }
          }
          ?>
          <form action="e_photo.php" method="post" enctype="multipart/form-data">
            <div class="form-group">
              <label>Photo Baru</label>
              <input type="hidden" name="id" class="form-control" placeholder="" value="<?= $_SESSION['id'] ?>">
              <input type="file" name="file" class="form-control" placeholder="">
            </div>
            <div class="form-group">
              <label>Hint</label>
              <input type="text" name="hint" class="form-control" placeholder="Siapakah nama ibu kandung anda?">
            </div>
            <div class="form-group">
              <input type="submit" class="btn btn-primary">
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->
<?php include 'include/footer.php'; ?>