<!-- ======= Informasi dan Pengumuman Section ======= -->
<section id="portfolio" class="portfolio sections-bg">
    <div class="container" data-aos="fade-up">

        <div class="section-header">
            <h2><?php echo $judul; ?></h2>
            <!-- <p>Quam sed id excepturi ccusantium dolorem ut quis dolores nisi llum nostrum enim velit qui ut et autem uia
                reprehenderit sunt deleniti</p> -->
        </div>

        <div class="portfolio-isotope" data-portfolio-filter="*" data-portfolio-layout="masonry"
            data-portfolio-sort="original-order" data-aos="fade-up" data-aos-delay="100">



            <div class="row gy-4 portfolio-container">


                <?php $i=1;?>
                <?php foreach($berita as $us): ?>

                <div class="col-xl-6 col-md-8 portfolio-item filter-app">
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