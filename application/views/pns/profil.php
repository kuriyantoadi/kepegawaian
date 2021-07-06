<main class="content">
  <div class="container-fluid p-0">

    <div class="row">

      <div class="col-12 col-md-12 col-xxl-6 d-flex order-3 order-xxl-2">
        <div class="card flex-fill w-100">

          <div class="card-body px-4">
            <center><h3>Profil Pegawai Negeri Sipil</h3></center>
            <?php
              foreach ($kode_pns as $row) {
            ?>
            <a style="margin-bottom: 20px" class="btn btn-warning" href="<?= site_url('c_pns/edit/'.$row->id_pegawai); ?>">Edit</a>

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
                  <input type="text" class="form-control datepicker" name="tgl_lahir" value="<?= $row->tgl_lahir ?>" readonly>
              </div>
              <div class="mb-3">
                <label class="form-label"><b>Jenis Kelamin</label>
                  <select class="form-control" name="jk" readonly>
                    <option value="<?= $row->jk ?>">Pilihan Awal | <?= $row->jk ?></option>
                    <option value="Laki-laki">Laki-laki</option>
                    <option value="Perempuan">Perempuan</option>
                  </select>
              </div>
              <div class="mb-3">
                <label class="form-label"><b>Agama</label>
                  <select class="form-control" name="agama" readonly>
                    <option value="<?= $row->agama ?>">Pilihan Awal | <?= $row->agama ?></option>
                    <option value="Islam">Islam</option>
                    <option value="Kristen">Kristen</option>
                    <option value="Katolik">Katolik</option>
                    <option value="Hindu">Hindu</option>
                    <option value="Budha">Budha</option>
                  </select>
              </div>
              <div class="mb-3">
                <label class="form-label"><b>Pangkat</label>
                <input type="text" class="form-control" name="pangkat" value="<?= $row->pangkat ?>" readonly>
              </div>
              <div class="mb-3">
                <label class="form-label"><b>Masa Kerja</label>
                <input type="text" class="form-control" name="masa_kerja" value="<?= $row->masa_kerja ?>" readonly>
              </div>
              <div class="mb-3">
                <label class="form-label"><b>Gaji Pokok</label>
                <input type="text" class="form-control" name="gaji_pokok" value="<?= $row->gaji_pokok ?>" readonly>
              </div>
              <div class="mb-3">
                <label class="form-label"><b>Nama Istri</label>
                <input type="text" class="form-control" name="nama_istri" value="<?= $row->nama_istri ?>" readonly>
              </div>
              <div class="mb-3">
                <label class="form-label"><b>Nama Anak ke-1</label>
                <input type="text" class="form-control" name="anak_1" value="<?= $row->anak_1 ?>" readonly>
              </div>
              <div class="mb-3">
                <label class="form-label"><b>Nama Anak ke-2</label>
                <input type="text" class="form-control" name="anak_2" value="<?= $row->anak_2 ?>" readonly>
              </div>
              <div class="mb-3">
                <label class="form-label"><b>Nama Anak ke-3</label>
                <input type="text" class="form-control" name="anak_3" value="<?= $row->anak_3 ?>" readonly>
              </div>
              <div class="mb-3">
                <label class="form-label"><b>Nama Anak ke-4</label>
                <input type="text" class="form-control" name="anak_4" value="<?= $row->anak_4 ?>" readonly>
              </div>
              <div class="mb-3">
                <label class="form-label"><b>Nama Anak ke-5</label>
                <input type="text" class="form-control" name="anak_5" value="<?= $row->anak_5 ?>" readonly>
              </div>
              <div class="mb-3">
                <label class="form-label"><b>NIP</label>
                <input type="text" class="form-control" name="nip" value="<?= $row->nip ?>" readonly>
              </div>
              <div class="mb-3">
                <label class="form-label"><b>Unit Kerja</label>
                <input type="text" class="form-control" name="unit_kerja" value="<?= $row->unit_kerja ?>" readonly>
              </div>
              <div class="mb-3">
                <label class="form-label"><b>Gaji Pokok Lama</label>
                <input type="text" class="form-control" name="gaji_pokok_lama" value="<?= $row->gaji_pokok_lama ?>" readonly>
              </div>
              <div class="mb-3">
                <label class="form-label"><b>Gaji Pokok Baru</label>
                <input type="text" class="form-control" name="gaji_pokok_baru" value="<?= $row->gaji_pokok_baru ?>" readonly>
              </div>
              <div class="mb-3">
                <label class="form-label"><b>Mulai Tanggal</label>
                <input type="text" class="form-control datepicker" name="mulai_tgl" value="<?= $row->mulai_tgl ?>" readonly>
              </div>


              <!-- <div class="mb-3"><center>
                <input type="submit" class="btn btn-success btn-md" name="" value="simpan">
              </div> -->
            <?= form_close();
            }
            ?>
          </div>
        </div>
      </div>
    </div>

  </div>
</main>
