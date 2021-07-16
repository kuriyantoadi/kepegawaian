<main class="content">
  <div class="container-fluid p-0">

    <div class="row">

      <div class="col-12 col-md-12 col-xxl-6 d-flex order-3 order-xxl-2">
        <div class="card flex-fill w-100">
          <div class="card-header">
            <h3 style="margin: 30px"><center>Data Pengumuman</h3>

          <a href="<?= base_url() ?>C_kasubag/pengumuman_tambah" class="btn btn-primary btn-sm" style="margin-bottom: 20px">Tambah</a>
          <table class="table table-bordered table-hover" id="example">
            <thead>
            <tr>
              <th>
                <center>No
              </th>
              <th>
                <center>Tanggal Pengumuman
              </th>
              <th>
                <center>Isi Pengumuman
              </th>
              <th>
                <center>Kondisi
              </th>
              <th>
                <center>Pilihan
              </th>
            </tr>
          </thead>

          <?php
          $no=1;
          foreach ($kode_pengumuman as $row) {
           ?>

            <tr>
              <td><center><?= $no++ ?></td>
              <td><center><?= $row->tgl_upload; ?></td>
              <td><center><?= $row->isi_pengumuman; ?></td>
              <td><center><?= $row->kondisi; ?></td>
              <td><center>
                <a href="<?php echo site_url('C_kasubag/hapus_pengumuman/'.$row->id_pengumuman); ?>" class="btn btn-sm btn-danger" onclick="return confirm('Anda yakin menhapus data <?= $row->isi_pengumuman ?> ?')">Hapus</a>
                <a href="<?php echo site_url('C_kasubag/edit_pengumuman/'.$row->id_pengumuman); ?>" class="btn btn-sm btn-info">Edit</a>

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
