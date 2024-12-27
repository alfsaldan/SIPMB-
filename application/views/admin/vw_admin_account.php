 <!-- Content wrapper -->
 <div class="content-wrapper">
     <!-- Content -->

     <div class="container-xxl flex-grow-1 container-p-y">
         <h4 class="py-3 mb-4"><span class="text-muted fw-light">Account Settings /</span> Account</h4>

         <div class="row">
             <div class="col-md-12">
                 <div class="card mb-4">
                     <h4 class="card-header"><?php echo $judul; ?></h4>
                     <!-- Account -->
                     <div class="card-body">
                         <div class="d-flex align-items-start align-items-sm-center gap-4">
                             <img src="<?= base_url('assets2/assets/img/avatars/'). $user['gambar']; ?> "
                                 alt="user-avatar" class="d-block w-px-120 h-px-120 rounded" id="uploadedAvatar" />
                             <!-- <div class="button-wrapper">
                                 <label for="gambar" class="btn btn-primary me-2 mb-3" tabindex="0">
                                     <span class="d-none d-sm-block">Upload new photo</span>
                                     <i class="mdi mdi-tray-arrow-up d-block d-sm-none"></i>
                                     <input type="file" name="gambar" id="gambar" class="account-file-input" hidden
                                         accept="image/png, image/jpeg" />
                                 </label>
                                 <div class="text-muted small">Allowed JPG, GIF or PNG. Max size of 800K</div>
                             </div> -->
                         </div>
                     </div>
                     <div class="card-body pt-2 mt-1">
                         <form action="" method="POST" enctype="multipart/form-data" class="browser-default-validation">
                             <input type="hidden" name="id" value="<?= $user['id']; ?>">
                             <div class="row mt-2 gy-4">
                                 <div class="col-md-6">
                                     <div class="form-floating form-floating-outline">
                                         <input class="form-control" type="text" id="nama" name="nama"
                                             value="<?= set_value('nama', $user['nama']) ?>" />
                                         <label for="nama">Nama</label>
                                     </div>
                                 </div>
                                 <div class="col-md-6">
                                 </div>
                                 <div class="col-md-6">
                                     <div class="form-floating form-floating-outline">
                                         <input class="form-control" type="text" id="email" name="email"
                                             value="<?= set_value('email', $user['email']) ?>" />
                                         <label for="email">E-mail</label>
                                     </div>
                                 </div>
                                 <div class="col-md-6">
                                 </div>
                                 <div class="col-md-6">
                                     <div class="input-group input-group-merge">
                                         <div class="form-floating form-floating-outline">
                                             <input type="text" id="no_hp" name="no_hp"
                                                 value="<?= set_value('no_hp', $user['no_hp']) ?>"
                                                 class="form-control" />
                                             <label for="no_hp">Nomor Hp</label>
                                         </div>
                                         <span class="input-group-text">ID (+62)</span>
                                     </div>
                                 </div>
                                 <div class="col-md-6">
                                 </div>
                                 <!-- <div class="col-md-6">
                                     <div class="form-floating form-floating-outline">
                                         <input class="form-control" type="file" id="gambar" name="gambar"
                                             value="<?= set_value('gambar', $user['gambar']) ?>" />
                                         <label for="Gambar">Gambar </label>
                                     </div>
                                 </div> -->
                             </div>
                             <!-- <div class="mt-4">
                                 <button type="submit" class="btn btn-primary me-2">Save changes</button>
                                 <button type="reset" class="btn btn-outline-secondary">Reset</button>
                             </div> -->
                         </form>
                     </div>
                     <!-- /Account -->
                 </div>
             </div>
         </div>
     </div>
     <!-- / Content -->
 </div>