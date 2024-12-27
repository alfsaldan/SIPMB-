<div class="content-wrapper">
    <!-- Bootstrap Table with Caption -->

    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="row gy-4">

            <div class="row">
                <h4 class="py-3 mb-4">
                    <span class="text-muted fw-light">General /</span>
                    <?php echo $judul; ?>
                </h4>

                <?= $this->session->flashdata('message');?>
                <div class="card p-2">
                    <div class="d-flex justify-content-between align-items-center w-full">
                        <h5 class="card-header">Table Manajemen Pendaftaran</h5>
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
                                Manajemen Pendaftaran
                            </caption>
                            <thead>
                                <tr>
                                    <th>No Pendaftar</th>
                                    <th>Nama </th>
                                    <th>No HP</th>
                                    <th>Email</th>
                                    <th>Pembayaran</th>
                                    <th>Berkas</th>
                                    <th>Kelulusan</th>
                                    <th>Action</th>
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
                                    <td>
                                        <div class="dropdown">
                                            <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                                data-bs-toggle="dropdown">
                                                <i class="mdi mdi-dots-vertical"></i>
                                            </button>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item"
                                                    href="<?= base_url('landing/editPendaftar/') . $pendaftar['id']; ?>"><i
                                                        class="mdi mdi-pencil-outline me-1"></i> Verifikasi</a>

                                                <a class="dropdown-item text-danger"
                                                    href="<?= base_url('Landing/hapusPendaftar/') . $pendaftar['id']; ?>"><i
                                                        class="mdi mdi-trash-can-outline text-danger me-1"></i>
                                                    Delete</a>
                                            </div>
                                            <a href="<?= base_url('Landing/detailPendaftar/') . $pendaftar['id']; ?>"
                                                class="btn btn-sm btn-text-secondary rounded-pill  btn-icon item-edit"><i
                                                    class="mdi mdi-account-details"></i></a>
                                        </div>
                                    </td>
                                </tr>
                                <?php };  ?>
                                <?php $i++;?>
                                <?php endforeach;?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- Bootstrap Table with Caption -->