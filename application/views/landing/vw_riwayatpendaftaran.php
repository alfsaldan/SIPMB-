<!-- ======= Frequently Asked Questions Section ======= -->
<section id="faq" class="faq">
    <div class="container" data-aos="fade-up">

        <div class="section-header">
            <h2>Riwayat Pendaftaran</h2>

            <div class="row gy-4">

                <div class="col-lg-4">
                    <div class="content px-xl-5">
                        <h3>Detail Pendaftaran</h3>
                        <p>
                            detail tahapan pendaftaran, selesaikan setiap tahapan yang berwarna
                        <h5 class="m-0 font-weight-bold text-danger"> Merah </h5></i></button>
                        </p>
                    </div>
                </div>

                <div class="col-lg-8">

                    <div class="accordion accordion-flush" id="faqlist" data-aos="fade-up" data-aos-delay="100">

                        <div class="accordion-item">
                            <h3 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#faq-content-1">
                                    <span class="num">1.</span>
                                    Status Kelengkapan Berkas
                                </button>
                            </h3>
                            <div id="faq-content-1" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                                <!-- <div class="accordion-body">
                                    <h5 class="m-0 font-weight-bold text-success">Selamat! Berkas kamu lengkap dan telah
                                        berhasil di verifikasi, Silahkan Lanjutkan Proses Pendaftaran mu ya!</h5>
                                    </i></button>
                                </div> -->

                                <div class="accordion-body">
                                    <h5 class="m-0 font-weight-bold  <?= $user['status_berkas'] == "Lengkap" ? "text-success" : "text-danger" ?> "> <?= $user['status_berkas'] == "Lengkap" ? "Selamat! Berkas kamu lengkap dan telah
                                        berhasil di verifikasi, Silahkan Lanjutkan Proses Pendaftaran mu ya!" : "Berkas Kamu belum lengkap" ?> </h5>
                                    </i></button>
                                </div>

                            </div>
                        </div><!-- # Faq item-->

                        <div class="accordion-item">
                            <h3 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#faq-content-2">
                                    <span class="num">2.</span>
                                    Status Pembayaran Formulir Pendaftaran
                                </button>
                            </h3>
                            <div id="faq-content-2" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                                <div class="accordion-body">
                                <h5 class="m-0 font-weight-bold  <?= $user['status_pembayaran'] == "Lunas" ? "text-success" : "text-danger" ?> "> <?= $user['status_pembayaran'] == "Lunas" ? "Status Pembayaran : Lunas!" : "Pembayaran Belum lunas, Mohon Selesaikan Pembayaran" ?> </h5>
                                    </i></button>
                                </div>
                            </div>
                        </div><!-- # Faq item-->

                        <div class="accordion-item">
                            <h3 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#faq-content-3">
                                    <span class="num">3.</span>
                                    Status Kelulusan
                                </button>
                            </h3>
                            <div id="faq-content-3" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                                <div class="accordion-body">
                                    <div class="card-body">
                                    <h5 class="m-0 font-weight-bold  <?= $user['status_kelulusan'] == "Lulus" ? "text-success" : "text-danger" ?> "> <?= $user['status_kelulusan'] == "Lulus" ? "Selamat Kamu di nyatakan Lulus di PCR" : "Jangan Bersedih , Masi ada tahun depan" ?> </h5>
                                    </i></button>
                          
                                    </div>
                                </div>
                            </div>
                        </div><!-- # Faq item-->

                    </div>

                </div>
            </div>

        </div>
</section><!-- End Frequently Asked Questions Section -->