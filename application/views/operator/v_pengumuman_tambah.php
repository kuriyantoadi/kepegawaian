<main class="content">
  <div class="container-fluid p-0">

    <div class="row">

      <div class="col-12 col-md-12 col-xxl-6 d-flex order-3 order-xxl-2">
        <div class="card flex-fill w-100">

          <div class="card-body px-4">
            <center><h3>Tambah Pegawai</h3></center>
              <?= form_open('C_operator/pengumuman_tambah_up');  ?>
              <div class="mb-3">
                <label class="form-label"><b>Penulis Pengumuman</b></label>
                  <input type="text" class="form-control" name="penulis" value="" required>
              </div>
              <div class="mb-3">
                <label class="form-label"><b>Isi Pengumuman</b></label>
                <textarea class="form-control" name="isi_pengumuman" rows="2" required></textarea>
              </div>
              <div class="mb-3">
                <label class="form-label"><b>Kondisi</b></label>
                <select class="form-control" name="kondisi" required>
                  <option value="">Pilih</option>
                  <option value="buka">buka</option>
                  <option value="tutup">tutup</option>
                </select>
              </div>

              <div class="mb-3"><center>
                <input type="submit" class="btn btn-success btn-md" name="" value="simpan">
              </div>
              <?= form_close(); ?>
          </div>
        </div>
      </div>
    </div>

  </div>
</main>
