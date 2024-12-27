<!-- Content wrapper -->
<div class="content-wrapper">
    <!-- Content -->

    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="row gy-4">

            <!-- Card Border Shadow -->
            <div class="row">
                <div class="col-sm-6 col-lg-3 mb-4">
                    <div class="card card-border-shadow-primary h-100">
                        <div class="card-body">
                            <div class="d-flex align-items-center mb-2 pb-1">
                                <div class="avatar me-2">
                                    <span class="avatar-initial rounded bg-label-primary"><i
                                            class="mdi mdi-account mdi-20px"></i></span>
                                </div>
                                <h4 class="ms-1 mb-0 display-6"><?= $user2; ?></h4>
                            </div>
                            <p class="mb-0 text-heading">Total Pendaftar</p>
                            <p class="mb-0">
                                <span class="me-1">Keseluruhan Pendaftar </span>
                                <small class="text-muted"></small>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3 mb-4">
                    <div class="card card-border-shadow-warning h-100">
                        <div class="card-body">
                            <div class="d-flex align-items-center mb-2 pb-1">
                                <div class="avatar me-2">
                                    <span class="avatar-initial rounded bg-label-warning">
                                        <i class='mdi mdi-package-variant-plus mdi-20px'></i></span>
                                </div>
                                <h4 class="ms-1 mb-0 display-6"><?= $berita2; ?></h4>
                            </div>
                            <p class="mb-0 text-heading">Total Berita</p>
                            <p class="mb-0">
                                <span class="me-1">Keseluruhan Berita</span>
                                <small class="text-muted"> </small>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3 mb-4">
                    <div class="card card-border-shadow-danger h-100">
                        <div class="card-body">
                            <div class="d-flex align-items-center mb-2 pb-1">
                                <div class="avatar me-2">
                                    <span class="avatar-initial rounded bg-label-danger">
                                        <i class='mdi mdi-account mdi-20px'></i>
                                    </span>
                                </div>
                                <h4 class="ms-1 mb-0 display-6"><?= $jadwal2; ?></h4>
                            </div>
                            <p class="mb-0 text-heading">Total Jadwal</p>
                            <p class="mb-0">
                                <span class="me-1">Keseluruhan Jadwal</span>
                                <small class="text-muted"></small>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3 mb-4">
                    <div class="card card-border-shadow-info h-100">
                        <div class="card-body">
                            <div class="d-flex align-items-center mb-2 pb-1">
                                <div class="avatar me-2">
                                    <span class="avatar-initial rounded bg-label-info"><i
                                            class='mdi mdi-account mdi-20px'></i></span>
                                </div>
                                <h4 class="ms-1 mb-0 display-6"><?= $user2; ?></h4>
                            </div>
                            <p class="mb-0 text-heading">Mahasiswa Baru </p>
                            <p class="mb-0">
                                <span class="me-1">Mahasiswa Baru</span>
                                <small class="text-muted"> </small>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <!--/ Card Border Shadow -->

            <!--  Statistik Pendaftar -->
            <div class="row">
                <div class="col-xl-13 d-flex align-items-strech">
                    <div class="card w-100">
                        <div class="card-body">
                            <div class="d-sm-flex d-block align-items-center justify-content-between mb-9">
                                <div class="mb-3 mb-sm-0">
                                    <h5 class="card-title fw-semibold">Statistik Pendaftar</h5>
                                </div>
                                <div>
                                    <select class="form-select">
                                        <option value="1">Januari 2024</option>
                                        <option value="2">February 2024</option>
                                        <option value="3">Maret 2024</option>
                                        <option value="4">April 2024</option>
                                        <option value="5">Mei 2024</option>
                                    </select>
                                </div>
                            </div>
                            <div id="chart"></div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Tabel Informasi Jalur Masuk -->
            <div class="col-xl-13 col-md-12">
                <div class="card h-100">
                    <h5 class="card-header">Akun Pendaftar</h5>
                    <div class="table-responsive text-nowrap">
                    <table class="table table-hover">
                            <caption class="ms-4">
                               Akun Pendaftar
                            </caption>
                            <thead>
                                <tr>
                                    <th>No Pendaftar</th>
                                    <th>Nama </th>
                                    <th>No HP</th>
                                    <th>Email</th>
                                    <th>Berkas</th>
                                    <th>Pembayaran</th>
                                    <th>Status</th>
       
                                </tr>
                            </thead>

                            <tbody class="table-border-bottom-0" id="tableContainer">

                                <?php $i=1;?>
                                <?php foreach($pendaftar_data as $pendaftar): ?>
                                  <?php if($pendaftar['role'] !== 'Admin') { ?>
                                <tr>
                                    <td class="text-truncate" style="max-width: 150px;">
                                        <span class="fw-medium"><?= $pendaftar['id']; ?></span>
                                    </td>
                                    <td class="text-truncate" style="max-width: 150px;">
                                        <span class="fw-medium"><?= $pendaftar['nama']; ?></span>
                                    </td>
                                    <td class="text-truncate" style="max-width: 150px;">
                                        <span class="fw-medium"><?= $pendaftar['no_hp']; ?></span>
                                    </td>
                                    <td><span class="fw-medium"><?= $pendaftar['email']; ?></span></td>
                                     
                                    <td><span class="badge <?= $pendaftar['status_pembayaran'] == "Lunas" ? "bg-label-success" : "bg-label-danger" ?>  rounded-pill"><?=  $pendaftar['status_pembayaran']; ?></span></td>
                                    <td><span class="badge <?= $pendaftar['status_berkas'] == "Lengkap" ? "bg-label-success" : "bg-label-danger" ?>  rounded-pill"><?= $pendaftar['status_berkas']; ?></span></td>
                                    <td><span class="badge <?= $pendaftar['status_kelulusan'] == "Lulus" ? "bg-label-success" : "bg-label-danger" ?>  rounded-pill"><?= $pendaftar['status_kelulusan']; ?></span></td>
                                    
                                </tr>
                                <?php };  ?>
                                <?php $i++;?>
                                <?php endforeach;?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!--/ Tabel Informasi Jalur Masuk -->
        </div>
    </div>
    <!-- / Content -->
</div>