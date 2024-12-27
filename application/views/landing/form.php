<!-- ======= Contact Section ======= -->
<section id="contact" class="contact">
    <div class="container" data-aos="fade-up">
        <div class="section-header">
            <h2><?php echo $judul; ?></h2>
        </div>
        <div class="row gx-lg-0 gy-4 d-flex justify-content-center">
            <div class="col-lg-10">
                <form action="<?= base_url('Landing/daftar/' . $user['id']); ?>" method="post" enctype="multipart/form-data">
                    <input type="hidden" name="id" value="<?= $user['id']; ?>">
                    
                    <div class="row ">
                        <div class="col-md-6 form-group mb-3">
                            <input type="text" name="nama" class="form-control rounded" id="nama" placeholder="Nama"
                                value="<?= set_value('nama', $user['nama']) ?>" required>
                            <?= form_error('nama', '<small class="text-danger p-1">', '</small>'); ?>
                        </div>
                        <div class="col-md-6 form-group">
                            <input type="text" name="nisn" class="form-control rounded" id="nisn" placeholder="Nisn"
                                value="<?= set_value('nisn'); ?>" required>
                            <?= form_error('nisn', '<small class="text-danger p-1">', '</small>'); ?>
                        </div>
                        <div class="col-md-6 form-group mb-3">
                            <input type="text" name="nik" class="form-control rounded" id="nik" placeholder="Nik"
                                value="<?= set_value('nik'); ?>" required>
                            <?= form_error('nik', '<small class="text-danger p-1">', '</small>'); ?>
                        </div>
                        <div class="col-md-6 form-group">
                            <input type="text" name="email" class="form-control rounded" id="email" placeholder="Email"
                                value="<?= set_value('email', $user['email']) ?>" required>
                            <?= form_error('email', '<small class="text-danger p-1">', '</small>'); ?>
                        </div>
                        <div class="col-md-6 form-group mb-3">
                            <input type="text" name="no_hp" class="form-control rounded" id="no_hp"
                                placeholder="No Handphone" value="<?= set_value('no_hp'); ?><?= set_value('no_hp', $user['no_hp']) ?>" required>
                            <?= form_error('no_hp', '<small class="text-danger p-1">', '</small>'); ?>
                        </div>

                        <div class="col-md-6 form-group mb-3">
                            <input type="text" name="tempat_lahir" class="form-control rounded" id="tempat_lahir"
                                placeholder="Tempat Lahir" value="<?= set_value('tempat_lahir'); ?>" required>
                            <?= form_error('tempat_lahir', '<small class="text-danger p-1">', '</small>'); ?>
                        </div>
                        <div class="col-md-6 form-group">
                            <input type="date" name="tanggal_lahir" class="form-control rounded" id="tanggal_lahir"
                                placeholder="Tanggal Lahir" value="<?= set_value('tanggal_lahir'); ?>" required>
                            <?= form_error('tanggal_lahir', '<small class="text-danger p-1">', '</small>'); ?>
                        </div>
                        <div class="col-md-6 form-group mb-3">
                            <select id="jenis_kelamin" value="<?= set_value('jenis_kelamin'); ?>"
                                name="jenis_kelamin" class="select2 form-select">
                                <option value="">Jenis kelamin</option>
                                <option value="Laki-Laki">Laki-Laki</option>
                                <option value="Perempuan">Perempuan</option>
                            </select>
                            <?= form_error('jenis_kelamin', '<small class="text-danger p-1">', '</small>'); ?>
                        </div>
                        <div class="col-md-6 form-group mb-3">
                            <select id="kabupaten_tinggal" value="<?= set_value('kabupaten_tinggal'); ?>"
                                name="kabupaten_tinggal" class="select2 form-select">
                                <option value="">Kabupaten Tinggal</option>
                                <option value="Kabupaten Bengkalis">Kabupaten Bengkalis</option>
                                <option value="Kabupaten Indragiri Hilir">Kabupaten Indragiri Hilir</option>
                                <option value="Kabupaten Indragiri Hulu">Kabupaten Indragiri Hulu</option>
                                <option value="Kabupaten Kampar">Kabupaten Kampar</option>
                                <option value="Kabupaten Kepulauan Meranti">Kabupaten Kepulauan Meranti</option>
                                <option value="Kabupaten Kuantan Singingi">Kabupaten Kuantan Singingi</option>
                                <option value="Kabupaten Pelalawan">Kabupaten Pelalawan</option>
                                <option value="Kabupaten Rokan Hilir">Kabupaten Rokan Hilir</option>
                                <option value="Kabupaten Rokan Hulu">Kabupaten Rokan Hulu</option>
                                <option value="Kabupaten Siak">Kabupaten Siak</option>
                                <option value="Kota Dumai">Kota Dumai</option>
                                <option value="Kota Pekanbaru">Kota Pekanbaru</option>
                            </select>
                            <?= form_error('kabupaten_tinggal', '<small class="text-danger p-1">', '</small>'); ?>
                        </div>
                        <div class="col-md-6 form-group mb-3">
                            <select id="kabupaten_sekolah" value="<?= set_value('kabupaten_sekolah'); ?>"
                                name="kabupaten_sekolah" class="select2 form-select">
                                <option value="">Kabupaten Sekolah</option>
                                <option value="Kabupaten Bengkalis">Kabupaten Bengkalis</option>
                                <option value="Kabupaten Indragiri Hilir">Kabupaten Indragiri Hilir</option>
                                <option value="Kabupaten Indragiri Hulu">Kabupaten Indragiri Hulu</option>
                                <option value="Kabupaten Kampar">Kabupaten Kampar</option>
                                <option value="Kabupaten Kepulauan Meranti">Kabupaten Kepulauan Meranti</option>
                                <option value="Kabupaten Kuantan Singingi">Kabupaten Kuantan Singingi</option>
                                <option value="Kabupaten Pelalawan">Kabupaten Pelalawan</option>
                                <option value="Kabupaten Rokan Hilir">Kabupaten Rokan Hilir</option>
                                <option value="Kabupaten Rokan Hulu">Kabupaten Rokan Hulu</option>
                                <option value="Kabupaten Siak">Kabupaten Siak</option>
                                <option value="Kota Dumai">Kota Dumai</option>
                                <option value="Kota Pekanbaru">Kota Pekanbaru</option>
                            </select>
                            <?= form_error('kabupaten_sekolah', '<small class="text-danger p-1">', '</small>'); ?>
                        </div>
                        <div class="col-md-6 form-group">
                            <input type="text" name="jurusan" class="form-control rounded" id="jurusan"
                                placeholder="Jurusan" value="<?= set_value('jurusan'); ?>" required>
                            <?= form_error('jurusan', '<small class="text-danger p-1">', '</small>'); ?>
                        </div>
                        <div class="col-md-6 form-group mb-3">
                            <input type="text" name="tahun_lulus" class="form-control rounded" id="tahun"
                                placeholder="Tahun" value="<?= set_value('tahun_lulus'); ?>" required>
                            <?= form_error('tahun_lulus', '<small class="text-danger p-1">', '</small>'); ?>
                        </div>
                        <div class="col-md-6 form-group mb-3">
                            <select id="jenis_pendaftar" value="<?= set_value('jenis_pendaftar'); ?>"
                                name="jenis_pendaftar" class="select2 form-select">
                                <option value="">Jalur Pendaftar</option>
                                <option value="PSUD">PSUD</option>
                                <option value="UMPCRI">UMPCR I</option>
                                <option value="UMPCRII">UMPCR II</option>
                                <option value="UMPCRIII">UMPCR III</option>
                                <option value="Magister">Magister terapan</option>
                            </select>
                            <?= form_error('jenis_pendaftar', '<small class="text-danger p-1">', '</small>'); ?>
                        </div>
                        <div class="col-md-12 form-group mb-3">
                            <input type="file" name="gambar" class="form-control rounded" id="gambar"
                                placeholder="gambar" value="<?= set_value('gambar'); ?>" required>
                            <?= form_error('gambar', '<small class="text-danger p-1">', '</small>'); ?>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <a href="<?= base_url('Landing/formulir') ?>" class="btn btn-danger">Kembali</a>
                            <button type="submit" name="tambah" class="btn btn-primary">Daftar</button>
                        </div>

                </form>
            </div>
        </div>
    </div>
</section><!-- End Contact Section -->