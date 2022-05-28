<div class="container">

    <div class="row mt-3">
        <div class="col-md-6">
        <div class="card">
        <div class="card-header">
        Form Tambah Data Pelanggan
        </div>
             
                    
                    <form action="" method="post">
                        <div class="form-group">
                            <label for="nama">Nama<label>
                            <input type="text" name="nama" class="form form-control float-right" id="nama">
                            <small class="form-text text-danger"><?= form_error('nama'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="tgl_checkin">Tanggal Checkin<label>
                            <input type="text" name="tgl_checkin" class="form form-control" id="tgl_checkin">
                            <small class="form-text text-danger"><?= form_error('tgl_checkin'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="email">Email<label>
                            <input type="text" name="email" class="form form-control" id="email">
                            <small class="form-text text-danger"><?= form_error('email'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="jenis_kamar">Jenis Kamar<label>
                            <input type="text" name="jenis_kamar" class="form form-control" id="jenis_kamar">
                            <small class="form-text text-danger"><?= form_error('jenis_kamar'); ?></small>
                        </div>
                        <button type="submit" name="tambah" class="btn btn-primary float-right"> Tambah Data </button>
                    </form>
                </div>
        </div>    
         

        </div>
    </div>

</div>