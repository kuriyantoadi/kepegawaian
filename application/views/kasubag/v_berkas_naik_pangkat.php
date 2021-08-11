<main class="content">
  <div class="container-fluid p-0">

    <div class="row">

      <div class="col-12 col-md-12 col-xxl-6 d-flex order-3 order-xxl-2">
        <div class="card flex-fill w-100">

          <div class="card-body px-4">
            <center><h3 style="margin-bottom: 40px;">Berkas Naik Pangkat Pegawai Negeri Sipil</h3></center>

            <table class="table table-bordered" id="example">
              <thead>
                <tr>
                  <th><center>No</th>
                  <th><center>Tanggal Upload</th>
                  <th><center>Nama Pemilik File</th>
                  <th><center>Keterangan</th>
                  <th><center>Status Validasi</th>
                  <th><center>Opsi</th>
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
                <td><center><?= $row->nama_keterangan ?> </td>
                <td><center>
                  <?php if ($row->status_validasi == 'tolak') { ?>
                    <span class="badge bg-danger">Tolak</span>
                  <?php }elseif ($row->status_validasi == 'terima') { ?>
                    <span class="badge bg-info">Diterima</span>
                  <?php }else{ ?>
                    <span class="badge bg-warning">Belum di Validasi</span>
                  <?php } ?>
                  <center>
                </td>
                <td><center>
                  <a href="<?= base_url('file_upload/'.$row->nama_file); ?>" class="btn btn-primary btn-sm">Download</a>
                  <a href="<?= site_url('C_kasubag/lihat_berkas/'.$row->id_file); ?>" class='btn btn-info btn-sm'>View</a>
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
