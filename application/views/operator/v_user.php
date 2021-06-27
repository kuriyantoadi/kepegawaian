<main class="content">
  <div class="container-fluid p-0">

    <div class="row">

      <div class="col-12 col-md-12 col-xxl-6 d-flex order-3 order-xxl-2">
        <div class="card flex-fill w-100">
          <div class="card-header">
            <h4 style="margin: 30px"><center>Data User</h4>

          <a href="<?= base_url() ?>c_user/tambah" class="btn btn-primary btn-sm" style="margin-bottom: 20px">Tambah</a>
          <table class="table table-bordered table-hover" id="example">
            <thead>
            <tr>
              <th>
                <center>No
              </th>
              <th>
                <center>Username
              </th>
              <th>
                <center>Status
              </th>
              <th>
                <center>Opsi
              </th>
            </tr>
          </thead>

          <?php
          $no=1;
          foreach ($user as $row) {
           ?>

            <tr>
              <td><center><?= $no++ ?></td>
              <td><center><?= $row->username; ?></td>
              <td><center><?= $row->status; ?></td>
              <td><center>
                <a href="<?php echo site_url('c_user/hapus/'.$row->id_user); ?>" class="btn btn-sm btn-danger" onclick="return confirm('Anda yakin menhapus data ini ?')">Hapus</a>
                <a href="<?php echo site_url('c_user/edit/'.$row->id_user); ?>" class="btn btn-sm btn-info">Edit</a></td>
              </td>
            </tr>
            <?php } ?>
          </table>
        </div>

        </div>
      </div>
    </div>

  </div>
</main>
