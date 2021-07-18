<main class="content">
  <div class="container-fluid p-0">

    <div class="row">

      <div class="col-12 col-md-12 col-xxl-6 d-flex order-3 order-xxl-2">
        <div class="card flex-fill w-100">
          <div class="card-header">
            <h3 style="margin: 30px"><center>Data Upload Berkas</h3>

          <table class="table table-bordered table-hover" id="example">
            <thead>
            <tr>
              <th>
                <center>No
              </th>
              <th>
                <center>Pemilik File
              </th>
              <th>
                <center>Keterangan File
              </th>
              <th>
                <center>Waktu Upload
              </th>
            </tr>
          </thead>

          <?php
          $no=1;
          foreach ($tampil_berkas as $row) {
           ?>

            <tr>
              <td><center><?= $no++ ?></td>
              <td><center><?= $row->nama_pegawai; ?></td>
              <td><center><?= $row->nama_keterangan; ?></td>
              <td><center><?= $row->tgl_upload; ?></td>
            </tr>
            <?php } ?>
          </table>
        </div>

        </div>
      </div>
    </div>

  </div>
</main>
