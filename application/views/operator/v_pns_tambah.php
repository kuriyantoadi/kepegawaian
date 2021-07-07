<main class="content">
  <div class="container-fluid p-0">

    <div class="row">

      <div class="col-12 col-md-12 col-xxl-6 d-flex order-3 order-xxl-2">
        <div class="card flex-fill w-100">

          <div class="card-body px-4">
            <center><h3>Tambah Pegawai</h3></center>
              <?= form_open('C_operator/tambah_pns_up'); ?>
              <div class="mb-3">
                <label class="form-label"><b>Username Pegawai</b></label>
                  <input type="text" class="form-control" name="username" value="" required>
              </div>
              <div class="mb-3">
                <label class="form-label"><b>Password Pegawai</b></label>
                  <input type="text" class="form-control" name="password" value="" required>
              </div>
              <div class="mb-3">
                <label class="form-label"><b>Nama Pegawai</b></label>
                  <input type="text" class="form-control" name="nama_pegawai" value="" required>
              </div>
              <div class="mb-3">
                <label class="form-label"><b>Tempat Lahir</b></label>
                  <input type="text" class="form-control" name="tempat_lahir" value="" required>
              </div>
              <div class="mb-3">
                <label class="form-label"><b>Tanggal Lahir</b></label>
                <input type="date" class="form-control" name="tgl_lahir" value="" required>
                <div class="form-text">Format Bulan/Tanggal/Tahun</div>
              </div>
              <div class="mb-3">
                <label class="form-label"><b>Jenis Kelamin</b></label>
                  <select class="form-control" name="jk" required>
                    <option value="">Pilih</option>
                    <option value="Laki-laki">Laki-laki</option>
                    <option value="Perempuan">Perempuan</option>
                  </select>
              </div>
              <div class="mb-3">
                <label class="form-label"><b>Agama</b></label>
                  <select class="form-control" name="agama" required>
                    <option value="">Pilih</option>
                    <option value="Islam">Islam</option>
                    <option value="Kristen">Kristen</option>
                    <option value="Katolik">Katolik</option>
                    <option value="Hindu">Hindu</option>
                    <option value="Budha">Budha</option>
                  </select>
              </div>
              <div class="mb-3">
                <label class="form-label"><b>Pangkat</b></label>
                <input type="text" class="form-control" name="pangkat" value="" required>
              </div>
              <div class="mb-3">
                <label class="form-label"><b>Jabatan</b></label>
                <input type="text" class="form-control" name="jabatan" value="" required>
              </div>
              <div class="mb-3">
                <label class="form-label"><b>Masa Kerja</b></label>
                <input type="text" class="form-control" name="masa_kerja" value="" required>
              </div>
              <div class="mb-3">
                <label class="form-label"><b>Gaji Pokok</b></label>
                <input type="text" class="form-control" name="gaji_pokok" value="" required>
              </div>
              <div class="mb-3">
                <label class="form-label"><b>Nama Istri</b></label>
                <input type="text" class="form-control" name="nama_istri" value="" required>
              </div>
              <div class="mb-3">
                <label class="form-label"><b>Nama Anak ke-1</b></label>
                <input type="text" class="form-control" name="anak_1" value="" required>
              </div>
              <div class="mb-3">
                <label class="form-label"><b>Nama Anak ke-2</b></label>
                <input type="text" class="form-control" name="anak_2" value="" required>
              </div>
              <div class="mb-3">
                <label class="form-label"><b>Nama Anak ke-3</b></label>
                <input type="text" class="form-control" name="anak_3" value="" required>
              </div>
              <div class="mb-3">
                <label class="form-label"><b>Nama Anak ke-4</b></label>
                <input type="text" class="form-control" name="anak_4" value="" required>
              </div>
              <div class="mb-3">
                <label class="form-label"><b>Nama Anak ke-5</b></label>
                <input type="text" class="form-control" name="anak_5" value="" required>
              </div>
              <div class="mb-3">
                <label class="form-label"><b>NIP</b></label>
                <input type="text" class="form-control" name="nip" value="" required>
              </div>
              <div class="mb-3">
                <label class="form-label"><b>Unit Kerja</b></label>
                <input type="text" class="form-control" name="unit_kerja" value="" required>
              </div>
              <div class="mb-3">
                <label class="form-label"><b>Gaji Pokok Lama</b></label>
                <input type="text" class="form-control" name="gaji_pokok_lama" value="" required>
              </div>
              <div class="mb-3">
                <label class="form-label"><b>Gaji Pokok Baru</b></label>
                <input type="text" class="form-control" name="gaji_pokok_baru" value="" required>
              </div>
              <div class="mb-3">
                <label class="form-label"><b>Mulai Tanggal</b></label>
                <input type="text" class="form-control" name="mulai_tgl" value="" required>
                <div class="form-text">Format Bulan/Tanggal/Tahun</div>
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
