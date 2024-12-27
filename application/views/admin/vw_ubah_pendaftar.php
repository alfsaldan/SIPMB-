<!-- Form Ubah Pendaftar -->
<div class="container-xxl flex-grow-1 container-p-y">
    <div class="card">
        <h5 class="card-header"><?php echo $judul; ?></h5>
        <div class="card-body">
            <form action="" method="POST" enctype="multipart/form-data" class="browser-default-validation">
                <input type="hidden" name="id" value="<?= $user['id']; ?>">

               
                <div class="form-floating form-floating-outline mb-4">
                    <select name="status_pembayaran" id="status_pembayaran" class="form-control">
                        <option value="">Status Pembayaran</option>
                        <option value="Lunas"
                            <?= set_select('status_pembayaran', 'Lunas', ($user['status_pembayaran'] == 'Lunas')); ?>>
                            Lunas</option>
                        <option value="Belum Lunas"
                            <?= set_select('status_pembayaran', 'Belum Lunas', ($user['status_pembayaran'] == 'Belum Lunas')); ?>>
                            Belum Lunas</option>
                    </select>
                    <?= form_error('status_pembayaran', '<small class="text-danger p-1">', '</small>'); ?>
                    <label for="status_pembayaran">Status Pembayaran</label>
                </div>

                <div class="form-floating form-floating-outline mb-4">
                    <select name="status_berkas" id="status_berkas" class="form-control">
                        <option value="">Status Berkas</option>
                        <option value="Lengkap"
                            <?= set_select('status_berkas', 'Lengkap', ($user['status_berkas'] == 'Lengkap')); ?>>
                            Lengkap</option>
                        <option value="Belum lengkap"
                            <?= set_select('status_berkas', 'Belum lengkap', ($user['status_berkas'] == 'Belum lengkap')); ?>>
                            Belum lengkap</option>
                    </select>
                    <?= form_error('status_berkas', '<small class="text-danger p-1">', '</small>'); ?>
                    <label for="status_berkas">Status Berkas</label>
                </div>

                <div class="form-floating form-floating-outline mb-4">
                    <select name="status_kelulusan" id="status_kelulusan" class="form-control">
                        <option value="">Status Kelulusan</option>
                        <option value="Lulus"
                            <?= set_select('status_kelulusan', 'Lulus', ($user['status_kelulusan'] == 'Lulus')); ?>>
                            Lulus</option>
                        <option value="Tidak Lulus"
                            <?= set_select('status_kelulusan', 'Tidak Lulus', ($user['status_kelulusan'] == 'Tidak Lulus')); ?>>
                            Tidak Lulus</option>
                    </select>
                    <?= form_error('status_kelulusan', '<small class="text-danger p-1">', '</small>'); ?>
                    <label for="status_kelulusan">Status Kelulusan</label>
                </div>

                <div class="row">
                    <div class="col-12">
                        <a href="<?= base_url('admin/pendaftaran/') ?>" class="btn btn-danger">Kembali</a>
                        <button type="submit" name="ubah" class="btn btn-success">Ubah</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- /Form Ubah Pendaftar -->