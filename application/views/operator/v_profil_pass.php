<main class="content">
  <div class="container-fluid p-0">

    <div class="row">

      <div class="col-12 col-md-12 col-xxl-6 d-flex order-3 order-xxl-2">
        <div class="card flex-fill w-100">

          <div class="card-body px-4">
            <center><h3>Ganti Password User</h3></center>
              <?php
                foreach ($kode_user as $row) {
                echo form_open('C_operator/profil_pass_up'); ?>
              <div class="mb-3">
                <label class="form-label"><b>Username</label>
                  <input type="hidden" class="form-control" name="id_user" value="<?= $row->id_user ?>" required>
                  <input type="text" class="form-control" name="username" value="<?= $row->username ?>" readonly>
              </div>
              <div class="mb-3">
                <label class="form-label"><b>Password</label><a href="<?= base_url() ?>C_operator/profil_password"></a>
                  <input type="text" class="form-control" name="password" value="" >
              </div>
              <div class="mb-3">
                <label class="form-label"><b>Password Konfirmasi</label><a href="<?= base_url() ?>C_operator/profil_password"></a>
                  <input type="text" class="form-control" name="password_konfirmasi" value="" >
              </div>

              <div class="mb-3"><center>
                <input type="submit" class="btn btn-success btn-sm" name="" value="simpan">
                <a href="<?= base_url() ?>/C_operator/profil_user" class="btn btn-danger btn-sm">Kembali</a>
              </div>
              <?php echo form_close();
            } ?>
          </div>
        </div>
      </div>
    </div>

  </div>
</main>
