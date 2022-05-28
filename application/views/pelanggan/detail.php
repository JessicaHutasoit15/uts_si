<div class="container">
<div class="row mt-3">
    <div class="col-md-6">

    <div class="card">
    <div class="card-header">
        Detail Data Pelanggan
    </div>
    <div class="card-body">
        <h5 class="card-title"><?= $pelanggan['nama'] ?></h5>
        <h6 class="card-subtitle mb-2 text-muted"><?= $pelanggan ['email']; ?></h6>
        <p class="card-text"><?= $pelanggan['tgl_checkin']; ?></p>
        <p class="card-text"><?= $pelanggan['jenis_kamar']; ?></p>
        <a href="<?= base_url(); ?>pelanggan" class="btn btn-primary">Kembali</a>
    </div>
</div>
    </div>
</div>
</div>