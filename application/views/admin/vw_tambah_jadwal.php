<!-- Form Tambah Jadwal -->
<div class="container-xxl flex-grow-1 container-p-y">
    <div class="card">
        <h5 class="card-header"><?php echo $judul; ?></h5>
        <div class="card-body">
            <form action="" method="POST" enctype="multipart/form-data" class="browser-default-validation">
                <div class="form-floating form-floating-outline mb-4">
                    <input type="text" value="<?= set_value('tempat') ?>" name="tempat" class="form-control" id="tempat"
                        placeholder="Tempat" required />
                    <?= form_error('tempat', '<small class="text-danger p-1">', '</small>'); ?>
                    <label for="tempat">Tempat Jadwal</label>
                </div>
                <div class="form-floating form-floating-outline mb-4">
                    <input type="text" value="<?= set_value('subjalur') ?>" name="subjalur" class="form-control"
                        id="subjalur" placeholder="Subjalur" required />
                    <?= form_error('subjalur', '<small class="text-danger p-1">', '</small>'); ?>
                    <label for="subjalur">Subjalur</label>
                </div>
                <div class="form-floating form-floating-outline mb-4">
                    <input type="text" value="<?= set_value('jenis') ?>" name="jenis" class="form-control" id="jenis"
                        placeholder="Jenis" required />
                    <?= form_error('jenis', '<small class="text-danger p-1">', '</small>'); ?>
                    <label for="jenis">Jenis Jadwal</label>
                </div>
                <div class="form-floating form-floating-outline mb-4">
                    <input type="date" class="form-control flatpickr-validation" name="tgl_awal"
                        placeholder="YYYY-MM-DD" id="tgl_awal" required value="<?= set_value('tgl_awal') ?>" />
                    <?= form_error('tgl_awal', '<small class="text-danger p-1">', '</small>'); ?>
                    <label for="tgl_awal">Tanggal Awal</label>
                </div>
                <div class="form-floating form-floating-outline mb-4">
                    <input type="date" class="form-control flatpickr-validation" name="tgl_akhir"
                        placeholder="YYYY-MM-DD" id="tgl_akhir" required value="<?= set_value('tgl_akhir') ?>" />
                    <?= form_error('tgl_akhir', '<small class="text-danger p-1">', '</small>'); ?>
                    <label for="tgl_akhir">Tanggal Akhir</label>
                </div>
                <div class="form-floating form-floating-outline mb-4">
                    <input type="date" class="form-control flatpickr-validation" name="akhir_upload"
                        placeholder="YYYY-MM-DD" id="akhir_upload" required value="<?= set_value('akhir_upload') ?>" />
                    <?= form_error('akhir_upload', '<small class="text-danger p-1">', '</small>'); ?>
                    <label for="akhir_upload">Akhir Upload</label>
                </div>
                <div class="form-floating form-floating-outline mb-4">
                    <input type="date" class="form-control flatpickr-validation" name="akhir_regis"
                        placeholder="YYYY-MM-DD" id="akhir_regis" required value="<?= set_value('akhir_regis') ?>" />
                    <?= form_error('akhir_regis', '<small class="text-danger p-1">', '</small>'); ?>
                    <label for="akhir_regis">Akhir Registrasi</label>
                </div>
                <div class="row">
                    <div class="col-12">
                        <a href="<?= base_url('Jadwal') ?>" class="btn btn-danger">Kembali</a>
                        <button type="submit" name="tambah" class="btn btn-success">Tambah</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- /Form Tambah Jadwal -->