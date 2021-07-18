<main class="content">
  <div class="container-fluid p-0">

    <div class="row">

      <div class="col-12 col-md-12 col-xxl-6 d-flex order-3 order-xxl-2">
        <div class="card flex-fill w-100">
          <div class="card-header">
            <h3 style="margin: 30px"><center>Data Kondisi Berkas</h3>

          <table class="table table-bordered">
            <?php
            $no=1;
            foreach ($tampil_pns as $row) {
             ?>
            <tr>
              <td>Nama Pegawai</td>
              <td><?= $row->nama_pegawai; ?></td>
            </tr>
          <?php } ?>
        </table>

        <h3 style="margin: 30px"><center>Data Belum Diupload</h3>


          <table class="table table-bordered">

            <?php
            $no=1;
            foreach ($belum_upload as $row) {
             ?>

             <tr>
               <td>Berkas Kurang</td>
               <td><?= $row->nama_keterangan ?></td>
             </tr>
            <?php } ?>

          </table>
        </div>

        </div>
      </div>
    </div>

  </div>
</main>
