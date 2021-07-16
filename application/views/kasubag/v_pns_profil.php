<main class="content">
  <div class="container-fluid p-0">

    <div class="row">

      <div class="col-12 col-md-12 col-xxl-6 d-flex order-3 order-xxl-2">
        <div class="card flex-fill w-100">

          <div class="card-body px-4">
            <center><h3 style="margin-bottom: 30px">Profil Pegawai PNS</h3></center>
            <?php
              foreach ($kode_pegawai as $row) {
            ?>

            <table class="table table-bordered table-hover">
              <tr>
                <td>Username Pegawai</td>
                <td><?= $row->username ?></td>
              </tr>
              <tr>
                <td>Enkripsi Password</td>
                <td><?= $row->password ?></td>
              </tr>

              <tr>
                <td>Nama Pegawai PNS</td>
                <td><?= $row->nama_pegawai ?></td>
              </tr>
              <tr>
                <td>Tempat Lahir</td>
                <td><?= $row->tempat_lahir ?></td>
              </tr>
              <tr>
                <td>Jenis Kelamin</td>
                <td><?= $row->jk ?></td>
              </tr>
              <tr>
                <td>Agama</td>
                <td><?= $row->agama ?></td>
              </tr>
              <tr>
                <td>Pangkat</td>
                <td><?= $row->pangkat ?></td>
              </tr>
              <tr>
                <td>Masa Kerja</td>
                <td><?= $row->masa_kerja ?></td>
              </tr>
              <tr>
                <td>Gaji Pokok</td>
                <td><?= $row->gaji_pokok ?></td>
              </tr>
              <tr>
                <td>Nama Istri</td>
                <td><?= $row->nama_istri ?></td>
              </tr>
              <tr>
                <td>Nama Anak Ke-1</td>
                <td><?= $row->anak_1 ?></td>
              </tr>
              <tr>
                <td>Nama Anak ke-2</td>
                <td><?= $row->anak_2 ?></td>
              </tr>
              <tr>
                <td>Nama Anak ke-3</td>
                <td><?= $row->anak_3 ?></td>
              </tr>
              <tr>
                <td>Nama Anak ke-4</td>
                <td><?= $row->anak_4 ?></td>
              </tr>
              <tr>
                <td>Nama Anak ke-5</td>
                <td><?= $row->anak_5 ?></td>
              </tr>
              <tr>
                <td>NIP</td>
                <td><?= $row->nip ?></td>
              </tr>
              <tr>
                <td>Unit Kerja</td>
                <td><?= $row->unit_kerja ?></td>
              </tr>
              <tr>
                <td>Gaji Pokok</td>
                <td><?= $row->gaji_pokok ?></td>
              </tr>
              <tr>
                <td>Gaji Pokok Lama</td>
                <td><?= $row->gaji_pokok_lama ?></td>
              </tr>
              <tr>
                <td>Gaji Pokok Baru</td>
                <td><?= $row->gaji_pokok_baru ?></td>
              </tr>
              <tr>
                <td>Mulai Tanggal</td>
                <td><?= $row->mulai_tgl ?></td>
              </tr>
            </table>

            <?= form_close();
            }
            ?>
          </div>
        </div>
      </div>
    </div>

  </div>
</main>
