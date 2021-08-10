<main class="content">
  <div class="container-fluid p-0">

    <div class="row">

      <div class="col-12 col-md-12 col-xxl-6 d-flex order-3 order-xxl-2">
        <div class="card flex-fill w-100">

          <div class="card-body px-4">
            <center><h3 style="margin-bottom: 40px;">Berkas Naik Gaji Pegawai Negeri Sipil</h3></center>

          <?php
          foreach ($db_pns as $row1) {
            $tgl_masuk = $row1->mulai_tgl;
            $tahun_masuk = substr($tgl_masuk,-4);
            $tgl_skrg = date('Y');
            include 'tambahan.php';
            if ($naik_pangkat == 'ya') {
           ?>
            <a style="margin-top: 30px; margin-bottom: 20px" href="<?= base_url() ?>C_file/naik_gaji_tambah" class="btn btn-success">Tambah Berkas</a>
            <p>Selamat anda naik gaji tahun ini, silahkan upload berkas sesuai prosedur</p>

          <?php }else{ ?>
            <p>Maaf anda belum naik pangkat tahun ini </p>

          <?php
              }
            }
          ?>

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
            <?php
            $no=1;
             foreach ($tampil as $row) {
             ?>
              <tr>
                <td><center><?= $no++ ?></td>
                <td><center><?= $row->tgl_upload ?></td>
                <td><?= $row->nama_pegawai ?></td>
                <td><center><?= $row->nama_keterangan ?> ( Berkas <?= $row->kondisi ?> )</td>
                <td><center>
                  <a href="<?= base_url('file_upload/'.$row->nama_file); ?>" class="btn btn-primary">Download</a>
                  <a href="<?= site_url('C_file/lihat_berkas/'.$row->id_file); ?>" class='btn btn-info'>View</a>
                  <a href="<?= site_url('C_file/naik_gaji_hapus/'.$row->id_file); ?>" class='btn btn-danger' onclick="return confirm('Hapus data PDF <?= $row->nama_keterangan ?> ?')">Hapus</a>
                </td>
              </tr>
            <?php }  ?>
            </table>

            <?= form_close(); ?>
          </div>
        </div>
      </div>
    </div>

  </div>
</main>
