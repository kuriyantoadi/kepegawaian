<main class="content">
  <div class="container-fluid p-0">

    <div class="row">

      <div class="col-12 col-md-12 col-xxl-6 d-flex order-3 order-xxl-2">
        <div class="card flex-fill w-100">

          <div class="card-body px-4">
            <center><h3 style="margin-top: 30px; margin-bottom: 20px">Berkas Pegawai Negeri Sipil</h3></center>

            <?php
              $no=1;
              foreach ($kode_pns as $row) {
            ?>

              <!-- <a style="margin-top: 30px; margin-bottom: 20px" href="<?= base_url() ?>/C_file/tambah_berkas" class="btn btn-success">Tambah Berkas</a> -->

            <table class="table table-bordered" id="example">
              <thead>
                <tr>
                  <td><center>No</td>
                  <td><center>Tanggal Upload</td>
                  <td><center>Nama Pemilik File</td>
                  <td><center>Keterangan</td>
                  <td><center>Opsi</td>
                </tr>
              </thead>
            <?php  foreach ($tampil_file as $row) {  ?>
              <tr>
                <td><center><?= $no++ ?></td>
                <td><center><?= $row->tgl_upload ?></td>
                <td><?= $row->nama_pegawai ?></td>
                <td><center><?= $row->keterangan ?></td>
                <td><center>
                  <a href="<?= base_url() ?>file_upload/<?= $row->nama_file ?>" class="btn btn-primary">Download</a>
                  <a href="<?= site_url('C_file/hapus/'.$row->id_file); ?>" class='btn btn-danger' onclick="return confirm('Hapus data PDF <?= $row->keterangan ?> ?')">Hapus</a>
                </td>
              </tr>
            <?php } } ?>
            </table>


            <?= form_close(); ?>
          </div>
        </div>
      </div>
    </div>

  </div>
</main>
