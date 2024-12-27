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
                        <h5 class="card-header">Table Manajemen Konten Berita</h5>

                        <a href="<?= base_url() ?>Konten/tambah" class="btn btn-success">
                            <span class="mdi mdi-plus me-sm-1"></span>Tambah</a>
                    </div>

                    <div class="h-4 d-flex justify-content-end ">
                        <div class="w-25 ">
                            <span class="me-2">Search:</span>
                            <input type="text" class="form-control form-control-sm">
                        </div>
                    </div>
                    <div class="table-responsive text-nowrap">
                        <table class="table table-hover">
                            <caption class="ms-4">
                                Konten Artikel Berita
                            </caption>
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Judul Berita</th>
                                    <th>Isi Berita</th>
                                    <th>Gambar</th>
                                    <th>File </th>
                                    <th>Tanggal</th>
                                    <th>Action</th>


                                </tr>
                            </thead>

                            <tbody class="table-border-bottom-0" id="tableContainer">

                                <?php $i=1;?>
                                <?php foreach($berita as $us): ?>

                                <tr>
                                <td><?=$i; ?>. </td>
                                    <td class="text-truncate" style="max-width: 150px;">
                                        <span class="fw-medium" ><?= $us['judul']; ?></span>
                                    </td>
                               
                                    <td class=" text-truncate" style="max-width: 150px;" ><span class="fw-medium"><?= $us['isi']; ?></span>
                                    </td>
                                    <td>
                                        <img src="<?= base_url('assets/img/berita/') . $us['gambar']; ?>" style="width:100px;"
                                class="img-thumbnail">
                                    </td>
                                    <td><ul class="list-unstyled users-list m-0 avatar-group d-flex align-items-center">
                                            <li data-bs-toggle="tooltip" data-popup="tooltip-custom"
                                                data-bs-placement="top" class="avatar avatar-xs pull-up"
                                                title="File Berita">
                                                <img src="<?= base_url('assets/img/pdf/pdf.png'); ?>" alt="Avatar" class="rounded-circle" />
                                            </li>
                                        </ul><span class="fw-medium"><i></i><?= $us['file']; ?></span>
                                    </td>
                                    <td><span class="fw-medium"><?= $us['tanggal']; ?></span></td>
                                    <td>
                                        <div class="dropdown">
                                            <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                                data-bs-toggle="dropdown">
                                                <i class="mdi mdi-dots-vertical"></i>
                                            </button>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="<?= base_url('Konten/edit/') . $us['berita_id'];?>"><i class="mdi mdi-pencil-outline me-1"></i> Edit</a>
                                                
                                                <a class="dropdown-item text-danger" href="<?= base_url('Konten/hapus/') . $us['berita_id'];?>"><i class="mdi mdi-trash-can-outline text-danger me-1"></i> Delete</a>
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