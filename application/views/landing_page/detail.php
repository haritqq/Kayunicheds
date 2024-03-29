<!-- Begin Page Content -->
<div class="container-fluid">
  <div class="card" style="margin-top:50px">
    <h2 class="mt-5">Detail berita</h2>
    <div class="row">
      <div class="card">
        <div class="card-body">
          <div class="col-md-4">
            <div class="card" style="width: 18rem;">
              <img src="<?= base_url(); ?>assets/gambar_berita/<?= $berita['gambar']; ?>" class="card-img-top">
              <div class="card-body">
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-7">
        <table class="table table-striped">
          <tr>
            <th>Judul berita</th>
            <td>: <?= $berita['judul_berita']; ?></td>
          </tr>
          <tr>
            <th>Isi Berita</th>
            <td>: <?= nl2br($berita['keterangan']); ?></td>
          </tr>
          <tr>
            <th>Pengirim</th>
            <td>: <?= $berita['pengirim']; ?></td>
          </tr>
          <tr>
            <th>Date created</th>
            <td>: <?= date('d F Y', $berita['date_created']); ?></td>
          </tr>
        </table>
        <a href="<?= base_url(); ?>landing_page" class="btn btn-primary float-right mb-3">Kembali</a>
      </div>
    </div>
  </div>
</div>