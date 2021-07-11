<?php $ses_nama = $this->session->userdata('ses_nama');  ?>

<main class="content">
  <div class="container-fluid p-0">

    <div class="row">

      <div class="col-12 col-md-12 col-xxl-6 d-flex order-3 order-xxl-2">
        <div class="card flex-fill w-100">

          <div class="card-body px-4">
            <center><h3>Selamat Datang, <?= $ses_nama ?></h3></center>
            <?php
              if (!empty($pengumuman)) {
              foreach ($pengumuman as $row) {
              $no=1;
            ?>

            <br><h3>Pengumuman</h3> 
            <br><b>Penulis :</b> <?= $row->penulis ?>
            <br><b>Tanggal Upload :</b> <?= $row->tgl_upload ?>
            <br><b>Isi Pengumuman :</b> <?= $row->isi_pengumuman ?>


          <?php
            }
          }else{
            echo "<p>Hari ini tidak inforimasi</p>";
          } ?>

          </div>

        </div>
      </div>
    </div>

  </div>
</main>
