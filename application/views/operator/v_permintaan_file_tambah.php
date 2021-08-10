<main class="content">
  <div class="container-fluid p-0">

    <div class="row">

      <div class="col-12 col-md-12 col-xxl-6 d-flex order-3 order-xxl-2">
        <div class="card flex-fill w-100">

          <div class="card-body px-4">
            <center><h3>Tambah Keterangan Permintaan File</h3></center>
              <?= form_open('C_operator/permintaan_file_tambah_up'); ?>
              <div class="mb-3">
                <label class="form-label"><b>Keterangan Permintaan File</b></label>
                  <input type="text" class="form-control" name="nama_keterangan" value="" required>
              </div>
              <div class="mb-3">
                <label class="form-label"><b>Kondisi</label>
                <select class="form-control" name="kondisi"  required>
                  <option value="">Pilihan </option>
                  <option value="umum">Umum</option>
                  <option value="naik_pangkat">Naik Pangkat</option>
                  <option value="naik_gaji">Naik Gaji</option>
                  <option value="tunjangan_keluarga">Tunjangan Keluarga</option>
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
