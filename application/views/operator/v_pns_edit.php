<main class="content">
  <div class="container-fluid p-0">

    <div class="row">

      <div class="col-12 col-md-12 col-xxl-6 d-flex order-3 order-xxl-2">
        <div class="card flex-fill w-100">

          <div class="card-body px-4">
            <center><h3>Edit Pegawai</h3></center>
            <?php
              foreach ($kode_pegawai as $row) {
              echo form_open('C_operator/pns_edit_up');
            ?>
              <div class="mb-3">
                <label class="form-label"><b>Username Pegawai</b></label>
                  <input type="hidden" class="form-control" name="id_pegawai" value="<?= $row->id_pegawai ?>" required>
                  <input type="text" class="form-control" name="username" value="<?= $row->username ?>" readonly>
              </div>
              <div class="mb-3">
                <label class="form-label"><b>Password Pegawai</b></label>
                  <input type="text" class="form-control" name="password" value="<?= $row->password ?>" readonly>
              </div>
              <div class="mb-3">
                <label class="form-label"><b>Nama Pegawai</b></label>
                  <input type="text" class="form-control" name="nama_pegawai" value="<?= $row->nama_pegawai ?>" required>
              </div>
              <div class="mb-3">
                <label class="form-label"><b>Tempat Lahir</b></label>
                  <input type="text" class="form-control" name="tempat_lahir" value="<?= $row->tempat_lahir ?>" required>
              </div>
              <div class="mb-3">
                <label class="form-label"><b>Tanggal Lahir</b></label>
                  <input type="date" class="form-control" name="tgl_lahir" value="<?= $row->tgl_lahir ?>" required>
                  <div class="form-text">Format Bulan/Tanggal/Tahun</div>

              </div>
              <div class="mb-3">
                <label class="form-label"><b>Jenis Kelamin</b></label>
                  <select class="form-control" name="jk" required>
                    <option value="<?= $row->jk ?>">Pilihan Awal | <?= $row->jk ?></option>
                    <option value="Laki-laki">Laki-laki</option>
                    <option value="Perempuan">Perempuan</option>
                  </select>
              </div>
              <div class="mb-3">
                <label class="form-label"><b></b>Agama</label>
                  <select class="form-control" name="agama" required>
                    <option value="<?= $row->agama ?>">Pilihan Awal | <?= $row->agama ?></option>
                    <option value="Islam">Islam</option>
                    <option value="Kristen">Kristen</option>
                    <option value="Katolik">Katolik</option>
                    <option value="Hindu">Hindu</option>
                    <option value="Budha">Budha</option>
                  </select>
              </div>
              <div class="mb-3">
                <label class="form-label"><b>Pangkat</b></label>
                <input type="text" class="form-control" name="pangkat" value="<?= $row->pangkat ?>" required>
              </div>
              <div class="mb-3">
                <label class="form-label"><b>Masa Kerja</b></label>
                <input type="text" class="form-control" name="masa_kerja" value="<?= $row->masa_kerja ?>" required>
              </div>
              <div class="mb-3">
                <label class="form-label"><b>Gaji Pokok</b></label>
                <input type="text" class="form-control" name="gaji_pokok" value="<?= $row->gaji_pokok ?>" required>
              </div>
              <div class="mb-3">
                <label class="form-label"><b>Nama Istri</b></label>
                <input type="text" class="form-control" name="nama_istri" value="<?= $row->nama_istri ?>" required>
              </div>
              <div class="mb-3">
                <label class="form-label"><b>Nama Anak ke-1</b></label>
                <input type="text" class="form-control" name="anak_1" value="<?= $row->anak_1 ?>" required>
              </div>
              <div class="mb-3">
                <label class="form-label"><b>Nama Anak ke-2</b></label>
                <input type="text" class="form-control" name="anak_2" value="<?= $row->anak_2 ?>" required>
              </div>
              <div class="mb-3">
                <label class="form-label"><b>Nama Anak ke-3</b></label>
                <input type="text" class="form-control" name="anak_3" value="<?= $row->anak_3 ?>" required>
              </div>
              <div class="mb-3">
                <label class="form-label"><b>Nama Anak ke-4</b></label>
                <input type="text" class="form-control" name="anak_4" value="<?= $row->anak_4 ?>" required>
              </div>
              <div class="mb-3">
                <label class="form-label"><b>Nama Anak ke-5</b></label>
                <input type="text" class="form-control" name="anak_5" value="<?= $row->anak_5 ?>" required>
              </div>
              <div class="mb-3">
                <label class="form-label"><b>NIP</b></label>
                <input type="text" class="form-control" name="nip" value="<?= $row->nip ?>" required>
              </div>
              <div class="mb-3">
                <label class="form-label"><b>Unit Kerja</b></label>
                <input type="text" class="form-control" name="unit_kerja" value="<?= $row->unit_kerja ?>" required>
              </div>
              <div class="mb-3">
                <label class="form-label"><b>Gaji Pokok Lama</b></label>
                <input type="text" class="form-control" name="gaji_pokok_lama" value="<?= $row->gaji_pokok_lama ?>" required>
              </div>
              <div class="mb-3">
                <label class="form-label"><b>Gaji Pokok Baru</b></label>
                <input type="text" class="form-control" name="gaji_pokok_baru" value="<?= $row->gaji_pokok_baru ?>" required>
              </div>
              <div class="mb-3">
                <label class="form-label"><b>Mulai Tanggal</b></label>
                <input type="date" class="form-control" name="mulai_tgl" value="<?= $row->mulai_tgl ?>" required>
                <div class="form-text">Format Bulan/Tanggal/Tahun</div>
              </div>
              <div class="mb-3"><center>
                <input type="submit" class="btn btn-success btn-md" name="" value="simpan">
              </div>
            <?= form_close();
            }
            ?>
          </div>
        </div>
      </div>
    </div>

  </div>
</main>
