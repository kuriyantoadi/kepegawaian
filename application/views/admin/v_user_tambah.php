<main class="content">
  <div class="container-fluid p-0">

    <div class="row">

      <div class="col-12 col-md-12 col-xxl-6 d-flex order-3 order-xxl-2">
        <div class="card flex-fill w-100">

          <div class="card-body px-4">
            <center><h3>Tambah User</h3></center>
              <?= form_open('C_user/tambah_up'); ?>
              <div class="mb-3">
                <label class="form-label"><b>Username</label>
                  <input type="text" class="form-control" name="username" value="" required>
              </div>
              <div class="mb-3">
                <label class="form-label"><b>Password</label>
                  <input type="text" class="form-control" name="password" value="" required>
              </div>
              <div class="mb-3">
                <label class="form-label"><b>Status</label>
                <select class="form-control" name="status" required>
                  <option value="">Pilih</option>
                  <option value="admin">Admin</option>
                  <option value="user">User</option>
                </select>
              </div>
              <div class="mb-3"><center>
                <input type="submit" class="btn btn-success btn-sm" name="" value="simpan">
              </div>
              <?= form_close(); ?>
          </div>
        </div>
      </div>
    </div>

  </div>
</main>
