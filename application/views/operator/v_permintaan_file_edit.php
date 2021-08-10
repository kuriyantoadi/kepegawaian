<main class="content">
  <div class="container-fluid p-0">

    <div class="row">

      <div class="col-12 col-md-12 col-xxl-6 d-flex order-3 order-xxl-2">
        <div class="card flex-fill w-100">

          <div class="card-body px-4">
            <center><h3>Edit Keterangan Permitanan File</h3></center>
              <?php
                foreach ($kode_permintaan as $row) {
                echo form_open('C_operator/permintaan_file_edit_up'); ?>
              <div class="mb-3">
                <label class="form-label"><b>Nama Keterangan File</label>
                  <input type="hidden" class="form-control" name="id_keterangan" value="<?= $row->id_keterangan ?>" required>
                 <input type="text" class="form-control" name="nama_keterangan" value="<?= $row->nama_keterangan ?>" required>
              </div>
              <div class="mb-3">
                <label class="form-label"><b>Kondisi</label>
                <select class="form-control" name="kondisi">
                  <option value="<?= $row->kondisi ?>">Pilih ( <?= $row->kondisi ?>) </option>
                  <option value="aktif">aktif</option>
                  <option value="tidak aktif">tidak aktif</option>
                </select>
              </div>

              <div class="mb-3"><center>
                <input type="submit" class="btn btn-success" name="" value="simpan">
              </div>
              <?php echo form_close();
            } ?>
          </div>
        </div>
      </div>
    </div>

  </div>
</main>
