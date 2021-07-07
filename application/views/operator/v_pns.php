<main class="content">
  <div class="container-fluid p-0">

    <div class="row">

      <div class="col-12 col-md-12 col-xxl-6 d-flex order-3 order-xxl-2">
        <div class="card flex-fill w-100">
          <div class="card-header">
            <h3 style="margin: 30px"><center>Data Pegawai PNS</h3>

          <a href="<?= base_url() ?>C_operator/tambah_pns" class="btn btn-primary btn-sm" style="margin-bottom: 20px">Tambah</a>
          <table class="table table-bordered table-hover" id="example">
            <thead>
            <tr>
              <th>
                <center>No
              </th>
              <th>
                <center>NIP
              </th>
              <th>
                <center>Nama Pegawai
              </th>
              <th>
                <center>Opsi
              </th>
            </tr>
          </thead>

          <?php
          $no=1;
          foreach ($kode_pegawai as $row) {
           ?>

            <tr>
              <td><center><?= $no++ ?></td>
              <td><center><?= $row->nip; ?></td>
              <td><center><?= $row->nama_pegawai; ?></td>
              <td><center>
                <a href="<?php echo site_url('c_operator/hapus_pns/'.$row->id_pegawai); ?>" class="btn btn-sm btn-danger" onclick="return confirm('Anda yakin menhapus data <?= $row->nama_pegawai ?> ?')">Hapus</a>
                <a href="<?php echo site_url('c_operator/pns_edit/'.$row->id_pegawai); ?>" class="btn btn-sm btn-info">Edit</a>
                <a href="<?php echo site_url('c_operator/berkas_pns/'.$row->id_pegawai); ?>" class="btn btn-sm btn-primary">Berkas</a>
                <a href="<?php echo site_url('c_operator/profil_pns/'.$row->id_pegawai); ?>" class="btn btn-sm btn-success">Profil</a>

              </td>
            </tr>
            <?php } ?>
          </table>
        </div>

        </div>
      </div>
    </div>

  </div>
</main>
