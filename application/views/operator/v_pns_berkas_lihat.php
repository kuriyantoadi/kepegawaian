<main class="content">
  <div class="container-fluid p-0">

    <div class="row">

      <div class="col-12 col-md-12 col-xxl-6 d-flex order-3 order-xxl-2">
        <div class="card flex-fill w-100">

          <div class="card-body px-4">
            <center>
              <h3 style="margin-top: 30px; margin-bottom: 20px">Lihat Berkas Pegawai Negeri Sipil</h3>
            </center>

            <?php
              foreach ($kode_file as $row) {
            ?>

            <table class="table table-bordered">
              <tr>
                <td>Keterangan File</td>
                <td><?= $row->nama_keterangan ?></td>
              </tr>
              <tr>
                <td>Tampil File</td>
                <td>
                  <embed type="application/pdf" src="<?= base_url('file_upload/'.$row->nama_file); ?>" width="600" height="900"></embed>
                </td>
              </tr>
            </table>

            <?php } ?>


          </div>
        </div>
      </div>
    </div>

  </div>
</main>
