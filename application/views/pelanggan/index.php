
<div class="container">
    <?php if( $this->session->flashdata('flash') ) : ?>
<div class="row mt-3">

    <div class="col-md-6">
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            Data Pelanggan <strong>Berhasil</strong> <?= $this->session->flashdata('flash');?>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                
            </button>
        </div>
    </div>

    

</div>
<?php endif; ?>
<div class="row mt-3">
    <div class="col-md-6">
        <a href="<?= base_url(); ?>pelanggan/tambah" class="btn btn-primary">Tambah Data Pelanggan</a>
</div>
</div>

<div class="row mt-3">
        <div class="col-md-6">
            <form action="" method="post">
                <div class="input-group">
                <input type="text" class="form-control" placeholder="Cari data pelanggan .." name="keyword">
                <div class="input-group-append">
                <button class="btn btn-outline-primary" type="submit" >Cari</button>
                </div>
                </div>
            </form>
        </div>
    </div>

    <div class="row mt-3">
        <div class="col-md-6">
            <h3>Daftar Pelanggan</h3>
            <?php if(empty($pelanggan )): ?>
                <div class="alert alert-danger" role="alert">
                    data pelanggan tidak ditemukan
                </div>
            <?php endif; ?>
        <ul class="list-group">
            <?php foreach( $pelanggan as $pgl ) : ?>
            <li class="list-group-item">
                <?= $pgl['nama']; ?>
                <a href="<?= base_url(); ?>pelanggan/hapus/<?= $pgl['id']; ?>" class="btn btn-outline-danger " class="text-end"onclick="return confirm('yakin?');">Hapus</a>                
                <a href="<?= base_url(); ?>pelanggan/ubah/<?= $pgl['id']; ?>" class="btn btn-outline-success float: right">Ubah</a>
                <a href="<?= base_url(); ?>pelanggan/detail/<?= $pgl['id']; ?>" class="btn btn-outline-primary float: right">Details</a>
                
            </li>
            <?php endforeach; ?>
        </ul>
        </div>
    </div>
 

</div>