<div class="container">
    <?php if($this->session->flashdata('success')) : ?>
        <div class="row mt-3">
            <div class="col-md-6">
                <div class="alert alert-success alert-dismissible fade show float-right" role="alert">
                    Data Mahasiswa <strong>berhasil</strong>  <?= $this->session->flashdata('success');?>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            </div>
        </div>
    <?php endif; ?>

    <div class="row mt-3">
        <div class="col-md-6">
            <a href="<?= base_url('mahasiswa/tambah'); ?>" class="btn btn-primary">Tambah Data Mahasiswa</a>
        </div>
    </div>
    
    <div class="row mt-3">
        <div class="col-md-6">
            <form action="" method="post">
                <div class="input-group">
                    <input type="text" placeholder="Cari data mahasiswa..." class="form-control" name="keyword">
                    <div class="input-group-append">
                        <button type="submit" class="btn btn-primary" >Cari</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6 mt-3">
            <h3>Daftar Mahasiswa</h3>
            <?php if (empty($mahasiswa)) : ?>
                <div class="alert alert-danger" role="alert">
                    Data mahasiswa tidak ditemukan.
                </div>
            <?php endif ?>
            <ul class="list-group">
                <?php foreach ($mahasiswa as $mhs) : ?>
                    <li class="list-group-item"><?= $mhs['nama']; ?>
                        <a href="<?= base_url('mahasiswa/hapus/'); ?><?= $mhs['id']; ?>" 
                        class="badge badge-danger float-right" onclick="return confirm('yakin?');">Hapus</a>
                        <a href="<?= base_url('mahasiswa/ubah/'); ?><?= $mhs['id']; ?>" 
                        class="badge badge-success float-right">Ubah</a>
                        <a href="<?= base_url('mahasiswa/detail/'); ?><?= $mhs['id']; ?>" 
                        class="badge badge-primary float-right">Detail</a>
                    </li>
                <?php endforeach ?>
            </ul>
        </div>
    </div>
</div>
