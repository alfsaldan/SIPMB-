<!-- Content wrapper -->
<div class="content-wrapper">

    <!-- Content -->

    <div class="container-xxl flex-grow-1 container-p-y">


        <h4 class="py-3 mb-4">
        <span class="text-muted fw-light">Proses Seleksi /</span>
                    <?php echo $judul; ?>
        </h4>
        <div class="row">
            <!-- User Sidebar -->
            <div class="col-xl-4 col-lg-5 col-md-5 order-1 order-md-0">
                <!-- User Card -->
                <div class="card mb-4">
                    <div class="card-body">
                        <div class="user-avatar-section">
                            <div class=" d-flex align-items-center flex-column">
                                <img class="img-fluid rounded mb-3 mt-4"  src="<?= base_url('assets/img/pendaftar/') . $user['gambar']; ?>"
                                    height="120" width="120" alt="User avatar" />
                                <div class="user-info text-center">
                                    <h4><?= $user['nama']; ?></h4>
                                    <span class="badge bg-label-primary rounded-pill">Pendaftar <?= $user['id']; ?></span>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex justify-content-between flex-wrap my-2 py-3">
                            <!-- <div class="d-flex align-items-center me-4 mt-3 gap-3">
                                <div class="avatar">
                                    <div class="avatar-initial bg-label-primary rounded">
                                        <i class='mdi mdi-check mdi-24px'></i>
                                    </div>
                                </div>
                                <div>
                                    <h4 class="mb-0">1.23k</h4>
                                    <span>Tasks Done</span>
                                </div>
                            </div>
                            <div class="d-flex align-items-center mt-3 gap-3">
                                <div class="avatar">
                                    <div class="avatar-initial bg-label-primary rounded">
                                        <i class='mdi mdi-star-outline mdi-24px'></i>
                                    </div>
                                </div>
                                <div>
                                    <h4 class="mb-0">568</h4>
                                    <span>Projects Done</span>
                                </div>
                            </div> -->
                        </div>
                        <h5 class="pb-3 border-bottom mb-3">Details</h5>
                        <div class="info-container">
                            <ul class="list-unstyled mb-4">
                                <li class="mb-3">
                                    <span class="h6">Nama:</span>
                                    <span><?= $user['nama']; ?></span>
                                </li>
                                <li class="mb-3">
                                    <span class="h6">Nisn:</span>
                                    <span><?= $user['nisn']; ?></span>
                                </li>
                                <li class="mb-3">
                                    <span class="h6">Nik:</span>
                                    <span><?= $user['nik']; ?></span>
                                </li>
                                <li class="mb-3">
                                    <span class="h6">Email:</span>
                                    <span><?= $user['email']; ?></span>
                                </li>
                                <li class="mb-3">
                                    <span class="h6">No Hp:</span>
                                    <span><?= $user['no_hp']; ?></span>
                                </li>
                                <li class="mb-3">
                                    <span class="h6">Tempat Lahir:</span>
                                    <span><?= $user['tempat_lahir']; ?></span>
                                </li>
                                <li class="mb-3">
                                    <span class="h6">Tanggal Lahir:</span>
                                    <span><?= $user['tanggal_lahir']; ?></span>
                                </li>
                                <li class="mb-3">
                                    <span class="h6">Jenis Kelamin:</span>
                                    <span><?= $user['jenis_kelamin']; ?></span>
                                </li>
                                <li class="mb-3">
                                    <span class="h6">Kabupaten Tinggal:</span>
                                    <span><?= $user['kabupaten_tinggal']; ?></span>
                                </li>

                                <li class="mb-3">
                                    <span class="h6">Kabupaten Sekolah:</span>
                                    <span><?= $user['kabupaten_sekolah']; ?></span>
                                </li>
                                <li class="mb-3">
                                    <span class="h6">Jurusan:</span>
                                    <span><?= $user['jurusan']; ?></span>
                                </li>
                                <li class="mb-3">
                                    <span class="h6">Tahun Lulus:</span>
                                    <span><?= $user['tahun_lulus']; ?></span>
                                </li>
                                <li class="mb-3">
                                    <span class="h6">Jenis Pendaftar:</span>
                                    <span><?= $user['jenis_pendaftar']; ?></span>
                                </li>

                            </ul>
                            <div class="d-flex justify-content-center">
                                <!-- <a href="javascript:;" class="btn btn-primary me-3" data-bs-target="#editUser"
                                    data-bs-toggle="modal">Edit</a> -->
                                <a href="<?= base_url('admin/pendaftaran/') ?>" class="btn btn-outline-danger suspend-user">Kembali</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /User Card -->
            </div>
        </div>
    </div>
</div>