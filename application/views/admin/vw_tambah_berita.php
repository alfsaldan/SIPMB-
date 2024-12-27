<!-- Form Tambah Berita -->
<div class="container-xxl flex-grow-1 container-p-y">
    <div class="card">
        <h5 class="card-header"><?php echo $judul; ?></h5>
        <div class="card-body">
            <form action="" method="POST" enctype="multipart/form-data" class="browser-default-validation">
                <div class="form-floating form-floating-outline mb-4">
                    <input type="text" value="<?= set_value('judul') ?>" name="judul" class="form-control" id="judul"
                        placeholder="Judul" required />
                    <?= form_error('judul', '<small class="text-danger p-1">', '</small>'); ?>
                    <label for="judul">Judul Berita</label>
                </div>
                <div class="form-floating form-floating-outline mb-4">
                    <textarea class="form-control h-px-75" id="isi" name="isi" placeholder="Isi" rows="3"
                        required><?= set_value('isi') ?></textarea>
                    <?= form_error('isi', '<small class="text-danger p-1">', '</small>'); ?>
                    <label for="isi">Isi Berita</label>
                </div>
                <div class="form-floating form-floating-outline mb-4">
                    <input type="file" name="gambar" class="form-control" id="gambar" required />
                    <?= form_error('gambar', '<small class="text-danger p-1">', '</small>'); ?>
                    <label for="gambar">Gambar Berita</label>
                </div>
                <div class="form-floating form-floating-outline mb-4">
                    <input type="file" name="file" class="form-control" id="file" required />
                    <?= form_error('file', '<small class="text-danger p-1">', '</small>'); ?>
                    <label for="file">File Berita</label>
                </div>
                <div class="form-floating form-floating-outline mb-4">
                    <input type="date" class="form-control flatpickr-validation" name="tanggal" placeholder="YYYY-MM-DD"
                        id="tanggal" required value="<?= set_value('tanggal') ?>" />
                    <?= form_error('tanggal', '<small class="text-danger p-1">', '</small>'); ?>
                    <label for="tanggal">Tanggal</label>
                </div>
                <div class="row">
                    <div class="col-12">
                        <a href="<?= base_url('Konten') ?>" class="btn btn-danger">Kembali</a>
                        <button type="submit" name="tambah" class="btn btn-success">Tambah</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- /Form Tambah Berita -->