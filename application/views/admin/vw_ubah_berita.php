<!-- Form Ubah Berita -->
<div class="container-xxl flex-grow-1 container-p-y">
    <div class="card">
        <h5 class="card-header"><?php echo $judul; ?></h5>
        <div class="card-body">
            <form action="" method="POST" enctype="multipart/form-data" class="browser-default-validation">
                <input type="hidden" name="id" value="<?= $berita['berita_id']; ?>">
                <div class="form-floating form-floating-outline mb-4">
                    <input type="text" value="<?= set_value('judul', $berita['judul']) ?>" name="judul" class="form-control" id="judul" placeholder="Judul" required />
                    <?= form_error('judul', '<small class="text-danger p-1">', '</small>'); ?>
                    <label for="judul">Judul Berita</label>
                </div>
                <div class="form-floating form-floating-outline mb-4">
                    <textarea class="form-control h-px-75" id="isi" name="isi" placeholder="Isi" rows="3" required><?= set_value('isi', $berita['isi']) ?></textarea>
                    <?= form_error('isi', '<small class="text-danger p-1">', '</small>'); ?>
                    <label for="isi">Isi Berita</label>
                </div>
                <div class="form-floating form-floating-outline mb-4">
                    <label for="gambar">Gambar Berita</label>
                    <img src="<?= base_url('assets/img/berita/') . $berita['gambar']; ?>" height="100" width="100"
                    class="img-fluid rounded mb-3 mt-4">
                    <input type="file" name="gambar" class="form-control" id="gambar" />
                    <?= form_error('gambar', '<small class="text-danger p-1">', '</small>'); ?>
                </div>
                <div class="form-floating form-floating-outline mb-4">
                    <label for="file">File Berita</label>
                    <input type="file" name="file" class="form-control" id="file" />
                    <?= form_error('file', '<small class="text-danger p-1">', '</small>'); ?>
                </div>
                <div class="form-floating form-floating-outline mb-4">
                    <input type="date" class="form-control flatpickr-validation" name="tanggal" placeholder="YYYY-MM-DD" id="tanggal" value="<?= set_value('tanggal', $berita['tanggal']) ?>" />
                    <?= form_error('tanggal', '<small class="text-danger p-1">', '</small>'); ?>
                    <label for="tanggal">Tanggal</label>
                </div>
                <div class="row">
                    <div class="col-12">
                        <a href="<?= base_url('Konten') ?>" class="btn btn-danger">Kembali</a>
                        <button type="submit" name="ubah" class="btn btn-success">Ubah</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- /Form Ubah Berita -->
