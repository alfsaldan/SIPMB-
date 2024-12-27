<!-- Content wrapper -->
<div class="content-wrapper">
    <!-- Content -->

    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="row gy-4">

            <!-- Card Border Shadow -->
            <div class="row">
                <h4 class="py-3 mb-4">
                    <span class="text-muted fw-light">General /</span>
                    <?php echo $judul; ?>
                </h4>
                <?= $this->session->flashdata('message');?>
                <!-- Bootstrap Table with Caption -->
                <div class="card p-2">
                    <div class="d-flex justify-content-between align-items-center w-full">
                        <h5 class="card-header">Table Manajemen Jadwal</h5>

                        <a href="<?= base_url() ?>Jadwal/tambah" class="btn btn-success">
                            <span class="mdi mdi-plus me-sm-1"></span>Tambah</a>
                    </div>

                    <div class="h-4 d-flex justify-content-end">
                        <div class="w-25">
                            <span class="me-2">Search:</span>
                            <input type="text" class="form-control form-control-sm">
                        </div>
                    </div>
                    <div class="table-responsive text-nowrap">
                        <table class="table table-hover">
                            <caption class="ms-4">
                                Jadwal Pendaftaran
                            </caption>
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Tempat</th>
                                    <th>Subjalur</th>
                                    <th>Jenis</th>
                                    <th>Tanggal Awal</th>
                                    <th>Tanggal Akhir</th>
                                    <th>Akhir Upload</th>
                                    <th>Akhir Registrasi</th>
                                    <th>Action</th>
                                </tr>
                            </thead>

                            <tbody class="table-border-bottom-0" id="tableContainer">

                                <?php $i=1;?>
                                <?php foreach($jadwal as $jd): ?>

                                <tr>
                                    <td><?= $i; ?>. </td>
                                    <td class="text-truncate" style="max-width: 150px;">
                                        <span class="fw-medium"><?= $jd['tempat']; ?></span>
                                    </td>
                                    <td class="text-truncate" style="max-width: 150px;">
                                        <span class="fw-medium"><?= $jd['subjalur']; ?></span>
                                    </td>
                                    <td class="text-truncate" style="max-width: 150px;">
                                        <span class="fw-medium"><?= $jd['jenis']; ?></span>
                                    </td>
                                    <td><span class="fw-medium"><?= $jd['tgl_awal']; ?></span></td>
                                    <td><span class="fw-medium"><?= $jd['tgl_akhir']; ?></span></td>
                                    <td><span class="fw-medium"><?= $jd['akhir_upload']; ?></span></td>
                                    <td><span class="fw-medium"><?= $jd['akhir_regis']; ?></span></td>
                                    <td>
                                        <div class="dropdown">
                                            <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                                data-bs-toggle="dropdown">
                                                <i class="mdi mdi-dots-vertical"></i>
                                            </button>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item"
                                                    href="<?= base_url('Jadwal/edit/') . $jd['jadwal_id']; ?>"><i
                                                        class="mdi mdi-pencil-outline me-1"></i> Edit</a>

                                                <a class="dropdown-item text-danger "
                                                    href="<?= base_url('Jadwal/hapus/') . $jd['jadwal_id']; ?>"><i
                                                        class="mdi mdi-trash-can-outline text-danger me-1"></i> Delete</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <?php $i++;?>
                                <?php endforeach;?>
                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- Bootstrap Table with Caption -->

            </div>
        </div>
    </div>
</div>