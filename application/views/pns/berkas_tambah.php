<main class="content">
  <div class="container-fluid p-0">

    <div class="row">

      <div class="col-12 col-md-12 col-xxl-6 d-flex order-3 order-xxl-2">
        <div class="card flex-fill w-100">

          <div class="card-body px-4">
            <center><h3 style="margin-top: 30px; margin-bottom: 20px">Tambah Berkas Pegawai Negeri Sipil</h3></center>

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
                  <input type="text" class="form-control datepicker" name="tgl_lahir" value="<?= $row->tgl_lahir ?>"  readonly>
              </div>
              <div class="mb-3">

                <label class="form-label"><b>Keterangan (Belum selesaikan)</label>
                <select class="form-control" name="">
                  <option value=""></option>
                </select>
              </div>
              <div class="mb-3">
                <label class="form-label"><b>File Upload</label>
                  <input type="file" class="form-control" name="nama_file">
              </div>


              <center><input style="margin-top: 20px" class="btn btn-success" type="submit" name="" value="submit">

          <?php } ?>


            <?= form_close(); ?>
          </div>
        </div>
      </div>
    </div>

  </div>
</main>
