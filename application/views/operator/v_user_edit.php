<main class="content">
  <div class="container-fluid p-0">

    <div class="row">

      <div class="col-12 col-md-12 col-xxl-6 d-flex order-3 order-xxl-2">
        <div class="card flex-fill w-100">

          <div class="card-body px-4">
            <center><h3>Edit User</h3></center>
              <?php
                foreach ($kode_user as $row) {
                echo form_open('C_user/edit_up'); ?>
              <div class="mb-3">
                <label class="form-label"><b>Username</label>
                  <input type="hidden" class="form-control" name="id_user" value="<?= $row->id_user ?>" required>
                  <input type="text" class="form-control" name="username" value="<?= $row->username ?>" required>
              </div>
              <div class="mb-3">
                <label class="form-label"><b>Password</label>
                  <input type="text" class="form-control" name="password" value="<?= $row->password ?>" required>
              </div>
              <div class="mb-3">
                <label class="form-label"><b>Status</label>
                <select class="form-control" name="status" required>
                  <option value="<?= $row->status ?>">Pilihan Awal | <?= $row->status ?></option>
                  <option value="admin">Admin</option>
                  <option value="user">User</option>
                </select>
              </div>
              <div class="mb-3"><center>
                <input type="submit" class="btn btn-success btn-sm" name="" value="simpan">
              </div>
              <?php echo form_close();
            } ?>
          </div>
        </div>
      </div>
    </div>

  </div>
</main>
