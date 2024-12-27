<!-- ======= Hero Section ======= -->
<section id="hero" class="hero">
    <div class="container position-relative">
        <div class="row gy-5" data-aos="fade-in">
            <div
                class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center text-center text-lg-start">
                <h2>Selamat Datang <span><br>Calon Mahasiswa Baru</span>
                    <span>Politeknik Caltex Riau</span>
                </h2>
                <p>Kami merupakan perguruan tinggi vokasi swasta terbaik di Indonesia. 👏 <br>
                    Kampus kami bebas asap rokok, ramah lingkungan, dan tertib lalu lintas.</br></p>
                <div class="d-flex justify-content-center justify-content-lg-start">
                    <a href="<?= site_url('landing/formulir') ?>" class="btn-get-started">Daftar Sekarang</a>
                    <a href="https://www.youtube.com/watch?v=D4HdqnHSQ0o&t=2s"
                        class="glightbox btn-watch-video d-flex align-items-center"><i
                            class="bi bi-play-circle"></i><span>Watch Video</span></a>
                </div>
            </div>
            <div class="col-lg-6 order-1 order-lg-2">
                <img src="<?= site_url('assets/') ?>/img/pmb-img1.png" class="img-fluid" alt="" data-aos="zoom-out"
                    data-aos-delay="100">
            </div>
        </div>
    </div>

    <div class="icon-boxes position-relative">
        <div class="container position-relative">
            <div class="row gy-4 mt-5">

                <div class="col-xl-3 col-md-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="icon-box">
                        <div class="icon"><i class="bi bi-mortarboard fs-1 px-1 text-light"></i></div>
                        <h4 class="title"><a href="<?= site_url('landing/prodi') ?>" class="stretched-link">Program
                                Studi</a></h4>
                    </div>
                </div>
                <!--End Icon Box -->

                <div class="col-xl-3 col-md-6" data-aos="fade-up" data-aos-delay="200">
                    <div class="icon-box">
                        <div class="icon"><i class="bi bi-stickies fs-2 px-1 text-light"></i></div>
                        <h4 class="title"><a href="<?= site_url('landing/formulir') ?>" class="stretched-link">Formulir
                                Pendaftaran</a></h4>
                    </div>
                </div>
                <!--End Icon Box -->

                <div class="col-xl-3 col-md-6" data-aos="fade-up" data-aos-delay="300">
                    <div class="icon-box">
                        <div class="icon"><i class="bi bi-wallet fs-2 px-2 text-light"></i></div>
                        <h4 class="title"><a href="<?= site_url('landing/jadwal') ?>" class="stretched-link">Jadwal &
                                Biaya</a></h4>
                    </div>
                </div>
                <!--End Icon Box -->

                <div class="col-xl-3 col-md-6" data-aos="fade-up" data-aos-delay="500">
                    <div class="icon-box">
                        <div class="icon"><i class="bi bi-building fs-2 px-1 text-light"></i></div>
                        <h4 class="title"><a href="<?= site_url('landing/berita') ?>" class="stretched-link">Berita</a>
                        </h4>
                    </div>
                </div>
                <!--End Icon Box -->

            </div>
        </div>
    </div>

    </div>
</section>
<!-- End Hero Section -->

<main id="main">

    <!-- ======= Informasi dan Pengumuman Section ======= -->
    <section id="portfolio" class="portfolio sections-bg">
        <div class="container" data-aos="fade-up">

            <div class="section-header">
                <h2>Informasi Seputar PMB</h2>
                <!-- <p>Quam sed id excepturi ccusantium dolorem ut quis dolores nisi llum nostrum enim velit qui ut et autem
                    uia
                    reprehenderit sunt deleniti</p> -->
            </div>

            <div class="portfolio-isotope" data-portfolio-filter="*" data-portfolio-layout="masonry"
                data-portfolio-sort="original-order" data-aos="fade-up" data-aos-delay="100">



                <div class="row gy-4 portfolio-container">

                    <?php $i=1;?>
                    <?php foreach($berita as $us): ?>

                    <div class="col-xl-4 col-md-6 portfolio-item filter-app">
                        <div class="portfolio-wrap">
                            <a href="<?= base_url('assets/img/berita/') . $us['gambar']; ?>"
                                data-gallery="portfolio-gallery-app" class="glightbox"><img
                                    src="<?= base_url('assets/img/berita/') . $us['gambar']; ?>" class="img-fluid"
                                    alt=""></a>
                            <div class="portfolio-info">
                                <h4 class=""><a href="portfolio-details.html" title="More Details"
                                        class="text-primary"><?= $us['judul']; ?></a></h4>
                                <p class="w-auto d-flex text-wrap"><?= $us['isi']; ?></p>
                                <a href="<?= base_url('assets/file/berita/') . $us['file']; ?>" class="text-primary readmore stretched-link">Download<i
                                    class="bi bi-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>

                    <?php $i++;?>
                    <?php endforeach;?>

                </div><!-- End Portfolio Container -->
            </div>
        </div>
    </section><!-- End Portfolio Section -->

    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials">
        <div class="container" data-aos="fade-up">

            <div class="section-header">
                <h2>Apa Kata Alumni ?</h2>
                <!-- <p>Voluptatem quibusdam ut ullam perferendis repellat non ut consequuntur est eveniet deleniti
                    fignissimos eos quam</p> -->
            </div>

            <div class="slides-3 swiper" data-aos="fade-up" data-aos-delay="100">
                <div class="swiper-wrapper">

                    <div class="swiper-slide">
                        <div class="testimonial-wrap">
                            <div class="testimonial-item">
                                <div class="d-flex align-items-center">
                                    <img src="<?= base_url('assets/') ?>/img/testimonials/M.Sulaiman Lubis.jpeg"
                                        class="testimonial-img flex-shrink-0" alt="">
                                    <div>
                                        <h3>M. Sulaiman Lubis</h3>
                                        <h4>Engineer</h4>
                                        <div class="stars">
                                            <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                                        </div>
                                    </div>
                                </div>
                                <p>
                                    <i class="bi bi-quote quote-icon-left"></i>
                                    Thank you PCR. PCR mengajarkan betapa pentingnya kedisiplinan dan memegang tanggung
                                    jawab. Terima kasih untuk semua pihak yang telah membentuk Saya seperti sekarang
                                    ini. I am PCR, You're the next.
                                    <i class="bi bi-quote quote-icon-right"></i>
                                </p>
                            </div>
                        </div>
                    </div><!-- End testimonial item -->

                    <div class="swiper-slide">
                        <div class="testimonial-wrap">
                            <div class="testimonial-item">
                                <div class="d-flex align-items-center">
                                    <img src="<?= base_url('assets/') ?>/img/testimonials/irwan Hasbi.jpeg"
                                        class="testimonial-img flex-shrink-0" alt="">
                                    <div>
                                        <h3>Irwan Hasbi</h3>
                                        <h4>Bussinessman</h4>
                                        <div class="stars">
                                            <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                                class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>

                                        </div>
                                    </div>
                                </div>
                                <p>
                                    <i class="bi bi-quote quote-icon-left"></i>
                                    Thank you PCR. Berkat menimba ilmu di PCR aku bisa menjadi desaigner terkenal di
                                    Indonesia. Dan saya berharap PCR semakin maju dan menghasilkan lulusan-lulusan yang
                                    lebih berkualitas
                                    <i class="bi bi-quote quote-icon-right"></i>
                                </p>
                            </div>
                        </div>
                    </div><!-- End testimonial item -->

                    <div class="swiper-slide">
                        <div class="testimonial-wrap">
                            <div class="testimonial-item">
                                <div class="d-flex align-items-center">
                                    <img src="<?= base_url('assets/') ?>/img/testimonials/Sentari Gradinia.jpeg"
                                        class="testimonial-img flex-shrink-0" alt="">
                                    <div>
                                        <h3>Sentari Gradinia</h3>
                                        <h4>Mitratel Employees</h4>
                                        <div class="stars">
                                            <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                                class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                                class="bi bi-star-fill"></i>
                                        </div>
                                    </div>
                                </div>
                                <p>
                                    <i class="bi bi-quote quote-icon-left"></i>
                                    Thank you PCR. Kenangan saat kuliah tidak akan bisa dilupakan. Karna PCR memiliki
                                    fasilitas yang lengkap dan nyaman. Jadi betah deh dikampus dan gaakan pernah dapat
                                    tempat senyaman di kampus PCR
                                    <i class="bi bi-quote quote-icon-right"></i>
                                </p>
                            </div>
                        </div>
                    </div><!-- End testimonial item -->

                    <div class="swiper-slide">
                        <div class="testimonial-wrap">
                            <div class="testimonial-item">
                                <div class="d-flex align-items-center">
                                    <img src="<?= base_url('assets/') ?>/img/testimonials/Silmi Yuliana.jpg"
                                        class="testimonial-img flex-shrink-0" alt="">
                                    <div>
                                        <h3>Silmi Yuliana</h3>
                                        <h4>BTN Bank Employee</h4>
                                        <div class="stars">
                                            <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                                class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                                class="bi bi-star-fill"></i>
                                        </div>
                                    </div>
                                </div>
                                <p>
                                    <i class="bi bi-quote quote-icon-left"></i>
                                    Alhamdulillah setelah lulus dari PCR saya diterima di dua perusahaan BUMN ini sesuai
                                    cita-cita saya. Terimakasih PCR
                                    <i class="bi bi-quote quote-icon-right"></i>
                                </p>
                            </div>
                        </div>
                    </div><!-- End testimonial item -->

                    <div class="swiper-slide">
                        <div class="testimonial-wrap">
                            <div class="testimonial-item">
                                <div class="d-flex align-items-center">
                                    <img src="<?= base_url('assets/') ?>/img/testimonials/Andika Putra.jpg"
                                        class="testimonial-img flex-shrink-0" alt="">
                                    <div>
                                        <h3>Andika Putra</h3>
                                        <h4>Engineer</h4>
                                        <div class="stars">
                                            <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                                class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                                class="bi bi-star-fill"></i>
                                        </div>
                                    </div>
                                </div>
                                <p>
                                    <i class="bi bi-quote quote-icon-left"></i>
                                    Beberapa teman saya yang berasal dari luar Riau mengaku tertarik masuk PCR karena
                                    keberhasilan tim robot PCR. Mereka menjadikan keberhasilan tim robot PCR itu sebagai
                                    tolak ukur kualitas pendidikan di sini.
                                    <i class="bi bi-quote quote-icon-right"></i>
                                </p>
                            </div>
                        </div>
                    </div><!-- End testimonial item -->

                </div>
                <div class="swiper-pagination"></div>
            </div>

        </div>
    </section><!-- End Testimonials Section -->


</main><!-- End #main -->