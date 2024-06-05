<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Bamboo Dimsum</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="<?= base_url() ?>assets/img/favicon.png" rel="icon">
    <link href="<?= base_url() ?>assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="<?= base_url() ?>assets/vendor/animate.css/animate.min.css" rel="stylesheet">
    <link href="<?= base_url() ?>assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="<?= base_url() ?>assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?= base_url() ?>assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="<?= base_url() ?>assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="<?= base_url() ?>assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="<?= base_url() ?>assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="<?= base_url() ?>assets/css/style.css" rel="stylesheet">


    <!-- =======================================================
  * Template Name: Restaurantly
  * Template URL: https://bootstrapmade.com/restaurantly-restaurant-template/
  * Updated: Mar 17 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

    <!-- ======= Top Bar ======= -->
    <div id="topbar" class="d-flex align-items-center fixed-top">
        <div class="container d-flex justify-content-center justify-content-md-between">

            <div class="contact-info d-flex align-items-center">
                <i class="bi bi-phone d-flex align-items-center"><span>021 4587 9292</span></i>
                <i class="bi bi-clock d-flex align-items-center ms-4"><span> Buka Setiap Hari : Pukul 10.00 - 22.00
                        WIB</span></i>
            </div>

            <div class="languages d-none d-md-flex align-items-center">
                <ul>
                    <li></li>
                </ul>
            </div>
        </div>
    </div>

    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top d-flex align-items-cente">
        <div class="container-fluid container-xl d-flex align-items-center justify-content-lg-between">

            <h1 class="logo me-auto me-lg-0"><a href="<?= base_url() ?>">Bamboo Dimsum</a></h1>

            <nav id="navbar" class="navbar order-last order-lg-0">
                <ul>
                    <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
                    <li><a class="nav-link scrollto" href="#about">Tentang kami</a></li>
                    <li><a class="nav-link scrollto" href="#menu">Menu</a></li>
                    <li><a class="nav-link scrollto" href="#specials">Specials</a></li>
                    <li><a class="nav-link scrollto" href="#events">Events</a></li>
                    <li><a class="nav-link scrollto" href="#gallery">Galeri</a></li>
                    <li><a class="nav-link scrollto" href="#contact">Kontak</a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->
            <?php
            if (session()->level == 3) {
            ?>
                <?= session()->usernama ?>
                <a href="<?= base_url() ?>logout" class="book-a-table-btn scrollto d-none d-lg-flex">Logout</a>
            <?php
            } else {
            ?>
                <a href="<?= base_url() ?>loginPelanggan" class="book-a-table-btn scrollto d-none d-lg-flex">Login</a>
            <?php
            }
            ?>

        </div>
    </header><!-- End Header -->

    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex align-items-center">
        <div class="container position-relative text-center text-lg-start" data-aos="zoom-in" data-aos-delay="100">
            <div class="row">
                <div class="col-lg-8">
                    <h1>Selamat Datang di <br><span>Bamboo Dimsum</span></h1>
                    <h2>All You Can Eat</h2>

                    <div class="btns">
                        <a href="#menu" class="btn-menu animated fadeInUp scrollto">Menu Kami</a>
                    </div>
                </div>
                <div class="col-lg-4 d-flex align-items-center justify-content-center position-relative" data-aos="zoom-in" data-aos-delay="200">
                    <a href="https://www.youtube.com/watch?v=ZNQCGXWevQk" class="glightbox play-btn"></a>
                </div>

            </div>
        </div>
    </section><!-- End Hero -->

    <main id="main">

        <!-- ======= About Section ======= -->
        <section id="about" class="about">
            <div class="container" data-aos="fade-up">

                <div class="row">
                    <div class="col-lg-6 order-1 order-lg-2" data-aos="zoom-in" data-aos-delay="100">
                        <div class="about-img">
                            <img src="<?= base_url() ?>assets/img/about.jpg" alt="">
                        </div>
                    </div>
                    <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content">
                        <h3>Tentang Kami</h3>
                        <p align="justify" class="fst-italic">
                            Bamboo Dimsum didirikan sejak tahun 2010, adalah perusahaan menu makanan yang
                            dapat disajikan dengan cara dikukus, digoreng, dibakar dan dipanggang. Dari sabang sampai
                            merauke Indonesia adalah salah satu Negara yang kaya akan menu-menu masakan. Sampai
                            akhirnya kuliner pun masuk ke Indonesia. Di Indonesia sendiri selain turis- turis yang
                            berkunjung dan tinggal banyak pula orang-orang yang berdarah Tiongkok. Dimsum
                            merupakan makanan tradisional yang berasal dari China. Kata dimsum sendiri berasal dari
                            bahasa China yaitu “dianxin” yang berarti makanan kecil. Biasanya dimsum dimakan saat
                            sarapandan diminum dengan teh. Dimsum lebih baik dibuat dan disajikan dengan
                            memperhatikan keharmonisan warna,bentuk, rasa, aroma, kualitas bahan dasarnya, jenis
                            masakannya dan bahan- bahanalami yang baik untuk kesehatan.
                        </p>
                    </div>
                </div>

            </div>
        </section><!-- End About Section -->

        <!-- ======= Menu Section ======= -->
        <section id="menu" class="menu section-bg">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Menu</h2>
                    <p>periksa Menu Lezat Kami</p>
                </div>

                <?php
                if (session()->level == 3) {
                    echo "";
                } else {
                ?>

                    <div class="row" data-aos="fade-up" data-aos-delay="100">
                        <div class="col-lg-12 d-flex justify-content-center">
                            <ul id="menu-flters">
                                <li data-filter="*" class="filter-active">Silahkan Login atau Registrasi terlebih dahulu
                                    untuk memesan makanan...</li>
                            </ul>
                        </div>
                    </div>
                <?php
                }
                ?>

                <div class="row menu-container" data-aos="fade-up" data-aos-delay="200">
                    <?php foreach ($dataMenu as $rowMenu) : ?>

                        <div class="col-lg-6 menu-item filter-starters">
                            <img src="<?= base_url() ?>upload/<?= $rowMenu['menufoto'] ?>" class="menu-img">
                            <div class="menu-content">
                                <a href="#"><?= $rowMenu['menunama'] ?></a><span>Rp.
                                    <?= number_format($rowMenu['menuharga']) ?></span>
                            </div>
                            <div class="menu-ingredients">
                                <?= $rowMenu['menudeskripsi'] ?>
                            </div>
                            <div class="menu-ingredients">
                                <?php
                                if (session()->level == 3) {
                                ?>
                                    <button type="button" class="btn btn-sm btn-outline-warning" onclick="edit('<?= $rowMenu['menuid'] ?>')">Tambah ke Keranjang</button>
                                <?php
                                } else {
                                    echo "";
                                }
                                ?>

                            </div>
                        </div>

                    <?php endforeach ?>

                </div>

            </div>
        </section><!-- End Menu Section -->

        <!-- ======= Specials Section ======= -->
        <section id="specials" class="specials">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Specials</h2>
                    <p>Check Our Specials</p>
                </div>

                <div class="row" data-aos="fade-up" data-aos-delay="100">
                    <div class="col-lg-3">
                        <ul class="nav nav-tabs flex-column">
                            <li class="nav-item">
                                <a class="nav-link active show" data-bs-toggle="tab" href="#tab-1">Modi sit est</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-bs-toggle="tab" href="#tab-2">Unde praesentium sed</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-bs-toggle="tab" href="#tab-3">Pariatur explicabo vel</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-bs-toggle="tab" href="#tab-4">Nostrum qui quasi</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-bs-toggle="tab" href="#tab-5">Iusto ut expedita aut</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-9 mt-4 mt-lg-0">
                        <div class="tab-content">
                            <div class="tab-pane active show" id="tab-1">
                                <div class="row">
                                    <div class="col-lg-8 details order-2 order-lg-1">
                                        <h3>Architecto ut aperiam autem id</h3>
                                        <p class="fst-italic">Qui laudantium consequatur laborum sit qui ad sapiente
                                            dila parde sonata raqer a videna mareta paulona marka</p>
                                        <p>Et nobis maiores eius. Voluptatibus ut enim blanditiis atque harum sint.
                                            Laborum eos ipsum ipsa odit magni. Incidunt hic ut molestiae aut qui. Est
                                            repellat minima eveniet eius et quis magni nihil. Consequatur dolorem
                                            quaerat quos qui similique accusamus nostrum rem vero</p>
                                    </div>
                                    <div class="col-lg-4 text-center order-1 order-lg-2">
                                        <img src="<?= base_url() ?>assets/img/specials-1.png" alt="" class="img-fluid">
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="tab-2">
                                <div class="row">
                                    <div class="col-lg-8 details order-2 order-lg-1">
                                        <h3>Et blanditiis nemo veritatis excepturi</h3>
                                        <p class="fst-italic">Qui laudantium consequatur laborum sit qui ad sapiente
                                            dila parde sonata raqer a videna mareta paulona marka</p>
                                        <p>Ea ipsum voluptatem consequatur quis est. Illum error ullam omnis quia et
                                            reiciendis sunt sunt est. Non aliquid repellendus itaque accusamus eius et
                                            velit ipsa voluptates. Optio nesciunt eaque beatae accusamus lerode pakto
                                            madirna desera vafle de nideran pal</p>
                                    </div>
                                    <div class="col-lg-4 text-center order-1 order-lg-2">
                                        <img src="<?= base_url() ?>assets/img/specials-2.png" alt="" class="img-fluid">
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="tab-3">
                                <div class="row">
                                    <div class="col-lg-8 details order-2 order-lg-1">
                                        <h3>Impedit facilis occaecati odio neque aperiam sit</h3>
                                        <p class="fst-italic">Eos voluptatibus quo. Odio similique illum id quidem non
                                            enim fuga. Qui natus non sunt dicta dolor et. In asperiores velit quaerat
                                            perferendis aut</p>
                                        <p>Iure officiis odit rerum. Harum sequi eum illum corrupti culpa veritatis
                                            quisquam. Neque necessitatibus illo rerum eum ut. Commodi ipsam minima
                                            molestiae sed laboriosam a iste odio. Earum odit nesciunt fugiat sit ullam.
                                            Soluta et harum voluptatem optio quae</p>
                                    </div>
                                    <div class="col-lg-4 text-center order-1 order-lg-2">
                                        <img src="<?= base_url() ?>assets/img/specials-3.png" alt="" class="img-fluid">
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="tab-4">
                                <div class="row">
                                    <div class="col-lg-8 details order-2 order-lg-1">
                                        <h3>Fuga dolores inventore laboriosam ut est accusamus laboriosam dolore</h3>
                                        <p class="fst-italic">Totam aperiam accusamus. Repellat consequuntur iure
                                            voluptas iure porro quis delectus</p>
                                        <p>Eaque consequuntur consequuntur libero expedita in voluptas. Nostrum ipsam
                                            necessitatibus aliquam fugiat debitis quis velit. Eum ex maxime error in
                                            consequatur corporis atque. Eligendi asperiores sed qui veritatis aperiam
                                            quia a laborum inventore</p>
                                    </div>
                                    <div class="col-lg-4 text-center order-1 order-lg-2">
                                        <img src="<?= base_url() ?>assets/img/specials-4.png" alt="" class="img-fluid">
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="tab-5">
                                <div class="row">
                                    <div class="col-lg-8 details order-2 order-lg-1">
                                        <h3>Est eveniet ipsam sindera pad rone matrelat sando reda</h3>
                                        <p class="fst-italic">Omnis blanditiis saepe eos autem qui sunt debitis porro
                                            quia.</p>
                                        <p>Exercitationem nostrum omnis. Ut reiciendis repudiandae minus. Omnis
                                            recusandae ut non quam ut quod eius qui. Ipsum quia odit vero atque qui
                                            quibusdam amet. Occaecati sed est sint aut vitae molestiae voluptate vel</p>
                                    </div>
                                    <div class="col-lg-4 text-center order-1 order-lg-2">
                                        <img src="<?= base_url() ?>assets/img/specials-5.png" alt="" class="img-fluid">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section><!-- End Specials Section -->

        <!-- ======= Events Section ======= -->
        <section id="events" class="events">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Events</h2>
                    <p>Organize Your Events in our Restaurant</p>
                </div>

                <div class="events-slider swiper" data-aos="fade-up" data-aos-delay="100">
                    <div class="swiper-wrapper">

                        <div class="swiper-slide">
                            <div class="row event-item">
                                <div class="col-lg-6">
                                    <img src="<?= base_url() ?>assets/img/event-birthday.jpg" class="img-fluid" alt="">
                                </div>
                                <div class="col-lg-6 pt-4 pt-lg-0 content">
                                    <h3>Birthday Parties</h3>
                                    <div class="price">
                                        <p><span>$189</span></p>
                                    </div>
                                    <p class="fst-italic">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                        incididunt ut labore et dolore
                                        magna aliqua.
                                    </p>
                                    <ul>
                                        <li><i class="bi bi-check-circled"></i> Ullamco laboris nisi ut aliquip ex ea
                                            commodo consequat.</li>
                                        <li><i class="bi bi-check-circled"></i> Duis aute irure dolor in reprehenderit
                                            in voluptate velit.</li>
                                        <li><i class="bi bi-check-circled"></i> Ullamco laboris nisi ut aliquip ex ea
                                            commodo consequat.</li>
                                    </ul>
                                    <p>
                                        Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor
                                        in reprehenderit in voluptate
                                        velit esse cillum dolore eu fugiat nulla pariatur
                                    </p>
                                </div>
                            </div>
                        </div><!-- End testimonial item -->

                        <div class="swiper-slide">
                            <div class="row event-item">
                                <div class="col-lg-6">
                                    <img src="<?= base_url() ?>assets/img/event-private.jpg" class="img-fluid" alt="">
                                </div>
                                <div class="col-lg-6 pt-4 pt-lg-0 content">
                                    <h3>Private Parties</h3>
                                    <div class="price">
                                        <p><span>$290</span></p>
                                    </div>
                                    <p class="fst-italic">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                        incididunt ut labore et dolore
                                        magna aliqua.
                                    </p>
                                    <ul>
                                        <li><i class="bi bi-check-circled"></i> Ullamco laboris nisi ut aliquip ex ea
                                            commodo consequat.</li>
                                        <li><i class="bi bi-check-circled"></i> Duis aute irure dolor in reprehenderit
                                            in voluptate velit.</li>
                                        <li><i class="bi bi-check-circled"></i> Ullamco laboris nisi ut aliquip ex ea
                                            commodo consequat.</li>
                                    </ul>
                                    <p>
                                        Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor
                                        in reprehenderit in voluptate
                                        velit esse cillum dolore eu fugiat nulla pariatur
                                    </p>
                                </div>
                            </div>
                        </div><!-- End testimonial item -->

                        <div class="swiper-slide">
                            <div class="row event-item">
                                <div class="col-lg-6">
                                    <img src="<?= base_url() ?>assets/img/event-custom.jpg" class="img-fluid" alt="">
                                </div>
                                <div class="col-lg-6 pt-4 pt-lg-0 content">
                                    <h3>Custom Parties</h3>
                                    <div class="price">
                                        <p><span>$99</span></p>
                                    </div>
                                    <p class="fst-italic">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                        incididunt ut labore et dolore
                                        magna aliqua.
                                    </p>
                                    <ul>
                                        <li><i class="bi bi-check-circled"></i> Ullamco laboris nisi ut aliquip ex ea
                                            commodo consequat.</li>
                                        <li><i class="bi bi-check-circled"></i> Duis aute irure dolor in reprehenderit
                                            in voluptate velit.</li>
                                        <li><i class="bi bi-check-circled"></i> Ullamco laboris nisi ut aliquip ex ea
                                            commodo consequat.</li>
                                    </ul>
                                    <p>
                                        Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor
                                        in reprehenderit in voluptate
                                        velit esse cillum dolore eu fugiat nulla pariatur
                                    </p>
                                </div>
                            </div>
                        </div><!-- End testimonial item -->

                    </div>
                    <div class="swiper-pagination"></div>
                </div>

            </div>
        </section><!-- End Events Section -->

        <!-- ======= Gallery Section ======= -->
        <section id="gallery" class="gallery">

            <div class="container" data-aos="fade-up">
                <div class="section-title">
                    <h2>Galeri</h2>
                    <p>Beberapa foto dari Restoran Kami</p>
                </div>
            </div>

            <div class="container-fluid" data-aos="fade-up" data-aos-delay="100">

                <div class="row g-0">

                    <div class="col-lg-3 col-md-4">
                        <div class="gallery-item">
                            <a href="<?= base_url() ?>assets/img/gallery/gallery-1.jpg" class="gallery-lightbox" data-gall="gallery-item">
                                <img src="<?= base_url() ?>assets/img/gallery/gallery-1.jpg" alt="" class="img-fluid">
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4">
                        <div class="gallery-item">
                            <a href="<?= base_url() ?>assets/img/gallery/gallery-2.jpg" class="gallery-lightbox" data-gall="gallery-item">
                                <img src="<?= base_url() ?>assets/img/gallery/gallery-2.jpg" alt="" class="img-fluid">
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4">
                        <div class="gallery-item">
                            <a href="<?= base_url() ?>assets/img/gallery/gallery-3.jpg" class="gallery-lightbox" data-gall="gallery-item">
                                <img src="<?= base_url() ?>assets/img/gallery/gallery-3.jpg" alt="" class="img-fluid">
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4">
                        <div class="gallery-item">
                            <a href="<?= base_url() ?>assets/img/gallery/gallery-4.jpg" class="gallery-lightbox" data-gall="gallery-item">
                                <img src="<?= base_url() ?>assets/img/gallery/gallery-4.jpg" alt="" class="img-fluid">
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4">
                        <div class="gallery-item">
                            <a href="<?= base_url() ?>assets/img/gallery/gallery-5.jpg" class="gallery-lightbox" data-gall="gallery-item">
                                <img src="<?= base_url() ?>assets/img/gallery/gallery-5.jpg" alt="" class="img-fluid">
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4">
                        <div class="gallery-item">
                            <a href="<?= base_url() ?>assets/img/gallery/gallery-6.jpg" class="gallery-lightbox" data-gall="gallery-item">
                                <img src="<?= base_url() ?>assets/img/gallery/gallery-6.jpg" alt="" class="img-fluid">
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4">
                        <div class="gallery-item">
                            <a href="<?= base_url() ?>assets/img/gallery/gallery-7.jpg" class="gallery-lightbox" data-gall="gallery-item">
                                <img src="<?= base_url() ?>assets/img/gallery/gallery-7.jpg" alt="" class="img-fluid">
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4">
                        <div class="gallery-item">
                            <a href="<?= base_url() ?>assets/img/gallery/gallery-8.jpg" class="gallery-lightbox" data-gall="gallery-item">
                                <img src="<?= base_url() ?>assets/img/gallery/gallery-8.jpg" alt="" class="img-fluid">
                            </a>
                        </div>
                    </div>

                </div>

            </div>
        </section><!-- End Gallery Section -->

        <!-- ======= Contact Section ======= -->
        <section id="contact" class="contact">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Kontak</h2>
                    <p>Hubungi Kami</p>
                </div>
            </div>

            <div data-aos="fade-up">
                <iframe style="border:0; width: 100%; height: 350px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.2706384738267!2d106.85398967499042!3d-6.228005393760101!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f39b4b9d37ad%3A0x9a8ea07d00dbfd82!2sBamboo%20Dimsum%20Tebet!5e0!3m2!1sid!2sid!4v1716348908177!5m2!1sid!2sid" frameborder="0" allowfullscreen></iframe>
            </div>

            <div class="container" data-aos="fade-up">

                <div class="row mt-5">

                    <div class="col-lg-4">
                        <div class="info">
                            <div class="address">
                                <i class="bi bi-geo-alt"></i>
                                <h4>Alamat :</h4>
                                <p>Jl. Tebet Raya No.78B, RT.1/RW.3, Tebet Tim., Kec. Tebet, Kota Jakarta Selatan,
                                    Daerah Khusus Ibukota Jakarta 12820</p>
                            </div>

                            <div class="open-hours">
                                <i class="bi bi-clock"></i>
                                <h4>Jam Operasional:</h4>
                                <p>
                                    Setiap hari :<br>
                                    10:00 - 22.00 WIB
                                </p>
                            </div>

                            <div class="email">
                                <i class="bi bi-envelope"></i>
                                <h4>Email:</h4>
                                <p>bamboodimsum@hosting.com</p>
                            </div>

                            <div class="phone">
                                <i class="bi bi-phone"></i>
                                <h4>Telp:</h4>
                                <p>021 4587 9292</p>
                            </div>

                        </div>

                    </div>

                    <div class="col-lg-8 mt-5 mt-lg-0">

                        <form action="<?= base_url() ?>forms/contact.php" method="post" role="form" class="php-email-form">
                            <div class="row">
                                <div class="col-md-6 form-group">
                                    <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                                </div>
                                <div class="col-md-6 form-group mt-3 mt-md-0">
                                    <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                                </div>
                            </div>
                            <div class="form-group mt-3">
                                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
                            </div>
                            <div class="form-group mt-3">
                                <textarea class="form-control" name="message" rows="8" placeholder="Message" required></textarea>
                            </div>
                            <div class="my-3">
                                <div class="loading">Loading</div>
                                <div class="error-message"></div>
                                <div class="sent-message">Your message has been sent. Thank you!</div>
                            </div>
                            <div class="text-center"><button type="submit">Send Message</button></div>
                        </form>

                    </div>

                </div>

            </div>
        </section><!-- End Contact Section -->

    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer">
        <div class="footer-top">
            <div class="container">
                <div class="row">

                    <div class="col-lg-3 col-md-6">
                        <div class="footer-info">
                            <h3>Bamboo Dimsum</h3>
                            <p>
                                Jl. Tebet Raya No.78B, RT.1/RW.3, Tebet Tim., Kec. Tebet, Kota Jakarta Selatan,
                                Daerah Khusus Ibukota Jakarta 12820<br><br>
                                <strong>Phone:</strong> 021 4587 9292<br>
                                <strong>Email:</strong> bamboodimsum@hosting.com<br>
                            </p>
                            <div class="social-links mt-3">
                                <a href="https://www.facebook.com/people/BambooDimsum/100077758986103/?checkpoint_src=any" class="facebook" target="_blank"><i class="bx bxl-facebook"></i></a>
                                <a href="https://www.instagram.com/bamboodimsum.id/" class="instagram" target="_blank"><i class="bx bxl-instagram"></i></a>
                                <a href="https://id.linkedin.com/company/bamboo-dimsum-tebet" class="linkedin" target="_blank"><i class="bx bxl-linkedin"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-2 col-md-6 footer-links">
                        <h4>Tautan Berguna</h4>
                        <ul>
                            <li><i class="bx bx-chevron-right"></i> <a href="<?= base_url() ?>#hero">Home</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="<?= base_url() ?>#about">Tentang Kami</a>
                            </li>
                            <li><i class="bx bx-chevron-right"></i> <a href="<?= base_url() ?>#menu">Menu</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-3 col-md-6 footer-links">
                    </div>

                    <div class="col-lg-4 col-md-6 footer-newsletter">


                    </div>

                </div>
            </div>
        </div>

        <div class="container">
            <div class="copyright">
                &copy; Copyright <strong><span>Bamboo Dimsum</span></strong>
            </div>
            <div class="credits">
            </div>
        </div>
    </footer><!-- End Footer -->

    <div id="preloader"></div>
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="<?= base_url() ?>assets/vendor/aos/aos.js"></script>
    <script src="<?= base_url() ?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="<?= base_url() ?>assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="<?= base_url() ?>assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="<?= base_url() ?>assets/vendor/swiper/swiper-bundle.min.js"></script>

    <!-- Template Main JS File -->
    <script src="<?= base_url() ?>assets/js/main.js"></script>


    <script>
        function tambahKerjang(menuid) {
            $.ajax({
                url: "<?= base_url() ?>/tambahKeranjang/" + menuid,
                dataType: "json",
                success: function(response) {
                    if (response.sukses) {

                        Swal.fire(
                            'Berhasil...',
                            response.sukses,
                            'success'
                        ).then((result) => {
                            window.location.reload();
                        })
                    }
                },
                error: function(xhr, ajaxOptions, thrownError) {
                    alert(xhr.status + '\n' + thrownError);
                }
            });
        }
    </script>

</body>

</html>