<main class="content">
  <div class="container-fluid p-0">

    <div class="row">

      <div class="col-12 col-md-12 col-xxl-6 d-flex order-3 order-xxl-2">
        <div class="card flex-fill w-100">

          <div class="card-body px-4">
            <center><h3>Edit Pengumuman</h3></center>
              <?php
                foreach ($kode_pengumuman as $row) {
                echo form_open('C_kasubag/pengumuman_edit_up'); ?>
              <div class="mb-3">
                <label class="form-label"><b>Tanggal Pengumuman</label>
                  <input type="hidden" class="form-control" name="id_pengumuman" value="<?= $row->id_pengumuman ?>" required>
                  <input type="text" class="form-control" name="tgl_upload" value="<?= $row->tgl_upload ?>" readonly>
              </div>
              <div class="mb-3">
                <label class="form-label"><b>Penulis Pengumuman</label>
                <input type="text" class="form-control" name="penulis" value="<?= $row->penulis ?>" required>
              </div>
              <div class="mb-3">
                <label class="form-label"><b>Isi Pengumuman</label>
                <textarea class="form-control" name="isi_pengumuman" rows="3" cols="80"><?= $row->isi_pengumuman ?></textarea>
              </div>

              <div class="mb-3">
                <label class="form-label"><b>Kondisi</label>
                <select class="form-control" name="kondisi" required>
                  <option value="<?= $row->kondisi ?>" >Pilihan Awal | <?= $row->kondisi ?></option>
                  <option value="buka">Buka</option>
                  <option value="tutup">Tutup</option>
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
