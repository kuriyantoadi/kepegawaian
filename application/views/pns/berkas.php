<main class="content">
  <div class="container-fluid p-0">

    <div class="row">

      <div class="col-12 col-md-12 col-xxl-6 d-flex order-3 order-xxl-2">
        <div class="card flex-fill w-100">

          <div class="card-body px-4">
            <center><h3 style="margin-top: 30px; margin-bottom: 20px">Berkas Pegawai Negeri Sipil</h3></center>

            <?php
              $no=1;
              foreach ($kode_pns as $row) {
            ?>

              <div class="mb-3">
                <label class="form-label"><b>Nama Pegawai</label>
                  <input type="text" class="form-control" name="nama_pegawai" value="<?= $row->nama_pegawai ?>" readonly>
              </div>
              <div class="mb-3">
                <label class="form-label"><b>Tempat Lahir</label>
                  <input type="text" class="form-control" name="tempat_lahir" value="<?= $row->tempat_lahir ?>" readonly>
              </div>
              <div class="mb-3">
                <label class="form-label"><b>Tanggal Lahir</label>
                  <input type="text" class="form-control datepicker" name="tgl_lahir"  readonly>
              </div>
              <a style="margin-top: 30px; margin-bottom: 20px" href="<?= base_url() ?>/C_file/tambah_berkas" class="btn btn-success">Tambah Berkas</a>

            <table class="table table-bordered" id="example">
              <thead>
                <tr>
                  <td><center>No</td>
                  <td><center>Nama File</td>
                  <td><center>Keterangan</td>
                  <td><center>Opsi</td>
                </tr>
              </thead>
              <tr>
                <td><center><?= $no++ ?></td>
                <td><center><?= $row->nama_file ?></td>
                <td><center><?= $row->keterangan ?></td>
                <td><center>
                  <a href="#" class="btn btn-primary">Download</a>
                  <a href="#" class='btn btn-danger'>Hapus</a>
                </td>
              </tr>
            <?php } ?>
            </table>


            <?= form_close(); ?>
          </div>
        </div>
      </div>
    </div>

  </div>
</main>
