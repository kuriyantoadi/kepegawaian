<main class="content">
  <div class="container-fluid p-0">

    <div class="row">

      <div class="col-12 col-md-12 col-xxl-6 d-flex order-3 order-xxl-2">
        <div class="card flex-fill w-100">
          <div class="card-header">
            <h3 style="margin: 30px"><center>Data Permintaan File</h3>

          <a href="<?= base_url() ?>C_operator/permintaan_file_tambah" class="btn btn-primary" style="margin-bottom: 20px">Tambah</a>
          <table class="table table-bordered table-hover" id="example">
            <thead>
            <tr>
              <th>
                <center>No
              </th>
              <th>
                <center>Keterangan Permintaan File
              </th>
              <th>
                <center>Kondisi
              </th>
              <th>
                <center>Opsi
              </th>
            </tr>
          </thead>

          <?php
          $no=1;
          foreach ($kode_permintaan as $row) {
           ?>

            <tr>
              <td><center><?= $no++ ?></td>
              <td><center><?= $row->nama_keterangan; ?></td>
              <td><center><?= $row->kondisi; ?></td>
              <td><center>
                <a href="<?php echo site_url('c_operator/permintaan_file_hapus/'.$row->id_keterangan); ?>" class="btn btn-danger btn-sm" onclick="return confirm('Anda yakin menhapus data <?= $row->nama_keterangan ?> ?')">Hapus</a>
                <a href="<?php echo site_url('c_operator/permintaan_file_edit/'.$row->id_keterangan); ?>" class="btn btn-info btn-sm">Edit</a>
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
