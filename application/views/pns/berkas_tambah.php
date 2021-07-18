<main class="content">
  <div class="container-fluid p-0">

    <div class="row">

      <div class="col-12 col-md-12 col-xxl-6 d-flex order-3 order-xxl-2">
        <div class="card flex-fill w-100">

          <div class="card-body px-4">
            <center>
              <h3 style="margin-top: 30px; margin-bottom: 20px">Tambah Berkas Pegawai Negeri Sipil</h3>
            </center>

            <?= form_open_multipart('C_file/upload_berkas'); ?>

            <?php
              $no=1;
              foreach ($kode_pns as $row) {
            ?>

            <div class="mb-3">
              <label class="form-label"><b>Nama Pegawai</label>
              <input type="hidden" name="id_pegawai" value="<?= $ses_id ?>">
              <input type="text" class="form-control" name="nama_pegawai" value="<?= $row->nama_pegawai ?>" readonly>
            </div>
            <div class="mb-3">
              <label class="form-label"><b>Tempat Lahir</label>
              <input type="text" class="form-control" name="tempat_lahir" value="<?= $row->tempat_lahir ?>" readonly>
            </div>
            <div class="mb-3">
              <label class="form-label"><b>Tanggal Lahir</label>
              <input type="text" class="form-control datepicker" name="tgl_lahir" value="<?= $row->tgl_lahir ?>" readonly>
            </div>
            <div class="mb-3">
              <label class="form-label"><b>Keterangan</label>
              <select class="form-control" name="id_keterangan" required>
                <option value="">Pilih</option>
                <?php foreach ($tampil_permintaan as $row_2) { ?>
                 <option value="<?= $row_2->id_keterangan ?>"><?= $row_2->nama_keterangan ?></option>
                <?php } ?>
              </select>
            </div>
            <div class="mb-3">
              <label class="form-label"><b>File Upload</label>
              <input type="file" class="form-control" name="nama_file" required>
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
