<!DOCTYPE html>
<html class="no-js" prefix="og: http://ogp.me/ns#" lang="en-IN">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>D'MOZE Salon Muwardi</title>

    <link href="<?= base_url() ?>assets/img/logo.png" rel="icon">
    <link href="<?= base_url() ?>assets/img/logo.png" rel="apple-touch-icon">

    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <meta name="description" content="D’MOZE Salon, it’s your style, you need it…" />
    <link href="<?= base_url() ?>assets/img/logo.png" rel="apple-touch-icon" sizes="96x96">
    <link href="<?= base_url() ?>assets/img/logo.png" rel="icon" sizes="96x96" type="image/png">
    <meta content="<?= base_url() ?>assets/img/logo.png" name="msapplication-TileImage">

    <meta property="og:url" content="https://dmoze.inoart.my.id/" />
    <meta property="og:title" content="D’MOZE Salon" />
    <meta property="og:locale" content="en_IN" />
    <meta property="og:site_name" content="D'MOZE" />
    <meta name="twitter:card" content="summary" />
    <meta name="twitter:site" content="D'MOZE" />
    <meta name="twitter:creator" content="D'MOZE" />

    <link href="https://fonts.googleapis.com/css?family=Lobster|Roboto:400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Great+Vibes" rel="stylesheet">
    <link rel='stylesheet' href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/magnific-popup.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/animate.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/app.css">

    <script src="<?= base_url() ?>assets/js/jquery.min.js"></script>
    <script>
        $(window).on('load', function() {
            $(".loader").fadeOut(2000);
        });
        $(function() {
            new WOW().init();
        });
    </script>


    <style>
        .menu-category {
            width: 100%;
            padding: 10px;
            margin-right: 10px;
        }

        .menu-items {
            width: 100%;
            padding: 10px;
        }

        .menu-items ul {
            list-style-type: none;
            padding: 0;
        }
    </style>

</head>

<body>

    <div class="loader"></div>
    <!-- NAVIGATION 
          -->
    <div class="topmenu">
        <div class="container">
            <div class="row" id="page-top">
                <div class="col-md-6 col-sm-6 phone">
                    <div><i class="fa fa-phone"></i> Call Now: (+62) 82210101702</div>
                </div>
                <div class="col-md-6 col-sm-6 address">
                    <div><i class="fa fa-map-marker"></i> Jl. Dr. Muwardi I No. 30 Grogol, Kec. Grogol Petamburan,
                        Jakarta Barat, DKI Jakarta 11450</div>
                </div>
            </div>
        </div>
    </div>

    <nav class="navbar navbar-expand-lg navbar-light" id="mainNav" data-toggle="affix">
        <div class="container-fluid">
            <a class="navbar-brand js-scroll-trigger" href="<?= base_url() ?>"><img src="<?= base_url() ?>assets/img/logo.png" style="max-height: 60px;" alt="" class="img-fluid"></a>
            <button class="navbar-toggler navbar-toggler-center  ml-auto py-3 my-2 " type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                Menu
                <i class="fa fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav text-uppercase ml-auto">
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="#home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="#services">Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="#about">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="#catalog">Catalog</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="#portfolio">Customer style</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="#testimonials">Testimonials</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="#contact">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="#">User</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" data-toggle="modal" data-target="#staticBackdrop">Login</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- HEADER-->
    <header id="home">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            </ol>
            <div class="carousel-inner" role="listbox">
                <div class="carousel-item active">
                    <div class="home-content-box">
                        <div class="home-content-box-inner text-center">
                            <div class="home-heading animated fadeInDown">
                                <h3>Fascinating than any <br> fashion salon</h3>
                            </div>
                            <div class="home-btn wow fadeInUp" data-wow-delay="0.3s">
                                <a class=" js-scroll-trigger" href="#catalog" role="button" title="View Our Work"><button class="btn btn-lg btn-general btn-greenish ">Book
                                        Now</button></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="home-content-box">
                        <div class="home-content-box-inner text-center">
                            <div class="home-heading animated fadeInDown">
                                <h3>your hair style <br> our passionate team </h3>
                            </div>
                            <div class="home-btn fadeInDown">
                                <a class=" js-scroll-trigger" href="#catalog" role="button" title="View Our Work"><button class="btn btn-lg btn-general btn-greenish ">Book
                                        Now</button></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>


    <!-- SERVICES -->
    <section id="services" class="services">
        <div class="container">
            <div class="row mb-5">
                <div class="col-md-12 text-center mb-5">
                    <div class="heading wow fadeInUp" data-wow-delay="0.3s">
                        <h1>Services</h1>
                        <div class="bord">D'Moze Salon and Spa stands ready to meet your every need in beauty,
                            relaxation and wellness within a luxurious sanctum that will calm your mind, soothe your
                            body and uplift your spirit.</div>
                    </div>
                </div>
            </div>
            <div class="row text-center justify-content-center">
                <div class="col-md-3 col-sm-6 mb-5">
                    <div class="service-cont wow fadeInUp" data-wow-delay="0.3s">
                        <img src="<?= base_url() ?>assets/img/service/service-1.jpg" alt="" class="img-fluid">
                        <div class="service-desc">Totok &amp; Masker Wajah</div>
                        <div>Metode perawatan kecantikan yang dilakukan dengan cara memijat pada bagian wajah dengan
                            menggunakan teknik khusus.</div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 mb-5">
                    <div class="service-cont wow fadeInUp" data-wow-delay="0.6s">
                        <img src="<?= base_url() ?>assets/img/service/service-2.jpg" alt="" class="img-fluid">
                        <div class="service-desc">Manicure &amp; Pedicure</div>
                        <div>Membersihkan kuku tangan dan kaki serta menjaga kesehatan tangan dan kaki secara
                            keseluruhan.</div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 mb-5">
                    <div class="service-cont wow fadeInUp" data-wow-delay="0.9s">
                        <img src="<?= base_url() ?>assets/img/service/service-3.jpg" alt="" class="img-fluid">
                        <div class="service-desc">Make Up</div>
                        <div>Make up adalah seni untuk mempercantik diri, sehingga membuat penampilan kita semakin
                            menarik dan percaya diri.</div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 mb-5">
                    <div class="service-cont wow fadeInUp" data-wow-delay="1.2s">
                        <img src="<?= base_url() ?>assets/img/service/service-4.jpg" alt="" class="img-fluid">
                        <div class="service-desc">Hair Cutting</div>
                        <div>Proses memotong dan membentuk rambut untuk mengubah penampilan.</div>
                    </div>
                </div>



                <div class="col-md-3 col-sm-6 mb-5">
                    <div class="service-cont wow fadeInUp" data-wow-delay="0.3s">
                        <img src="<?= base_url() ?>assets/img/service/service-5.jpg" alt="" class="img-fluid">
                        <div class="service-desc">Hair Styling</div>
                        <div>Proses menata rambut yang dilakukan untuk menghasilkan gaya rambut tertentu.</div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 mb-5">
                    <div class="service-cont wow fadeInUp" data-wow-delay="0.3s">
                        <img src="<?= base_url() ?>assets/img/service/service-6.jpg" alt="" class="img-fluid">
                        <div class="service-desc">Hair Treatment</div>
                        <div>Memperbaiki masalah-masalah yang dialami pada rambut dan kulit kepala, serta melindungi
                            rambut dari kerusakan eksternal.</div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 mb-5">
                    <div class="service-cont wow fadeInUp" data-wow-delay="0.3s">
                        <img src="<?= base_url() ?>assets/img/service/service-7.jpg" alt="" class="img-fluid">
                        <div class="service-desc">Body Treatment (Ladies Only)</div>
                        <div>Memberikan tekanan atau pijatan pada tubuh dapat meningkatkan relaksasi dan kesehatan tubuh
                            serta pikiran.</div>
                    </div>
                </div>
            </div>



        </div>
    </section>

    <!-- ABOUT -->
    <section id="about" class="about">
        <div class="container">
            <div class="row mb-5">
                <div class="col-md-12 text-center ">
                    <div class="heading wow fadeInUp" data-wow-delay="0.3s">
                        <h1>About Us</h1>
                        <div class="bord-bot"></div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 my-auto">
                    <div class="body-cont mb-5 wow fadeInUp" data-wow-delay="0.6s">
                        <h1>Beauty Is About Feeling Comfortable With Your Chosen Hairstyle</h3>
                            <div class="bord-bottom"></div>
                            <p align="justify">At DMOZE Salon – hair care we aim to provide you with a variety of hair
                                treatments for
                                any
                                type, color, texture or length that meet common beauty standards. There are many choices
                                of
                                hairstyles such as coloring, cutting, hair spa and hair mask. A service provider that is
                                attentive in providing new looks for clients who want to change their appearance. Salons
                                offer many benefits to individuals seeking relaxation, beauty treatments, and self-care.
                            </p>
                            <a href="#contact" class="img-fluid js-scroll-trigger"><button class="btn btn-general btn-white">ENQUIRIES</button></a>
                    </div>
                </div>
                <div class="col-md-8 m-auto text-center">
                    <div class="body-img-1 wow fadeInUp" data-wow-delay="0.9s">
                        <img src="<?= base_url() ?>assets/img/treamer-small.png" alt="" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Catalog-->
    <section id="catalog" class="team pb-5">
        <div class="container">
            <div class="col-md-12 text-center mb-5">
                <div class="heading wow fadeInUp" data-wow-delay="0.3s">
                    <h1>Catalog</h1>
                </div>
            </div>

            <div class="row text-center">
                <div class="col-md-12 my-auto">
                    <div class="body-cont mb-5 wow fadeInUp" data-wow-delay="0.6s">


                        <div class="menu-container">

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="menu-category">
                                        <ul class="nav nav-pills nav-fill">
                                            <li class="nav-item"><a class="nav-link" href="#catalog" onclick="showMenu('all')">All</a>
                                            </li>
                                            <?php foreach ($dataKategori as $rowKategori) : ?>
                                                <li class="nav-item"><a class="nav-link" href="#catalog" onclick="showMenu('<?= $rowKategori['katid'] ?>')"><?= $rowKategori['katnama'] ?></a>
                                                </li>
                                            <?php endforeach ?>
                                        </ul>
                                    </div>
                                </div>
                            </div>


                            <?php
                            // koneksi
                            $conn = mysqli_connect("localhost", "root", "", "dmoze");
                            ?>


                            <div class="row">
                                <div class="col-md-12">
                                    <div class="menu-items" id="menu-items">


                                        <ul class="list-group-flush" id="all" style="display:block;">
                                            <?php foreach ($dataMenu as $rowMenu) : ?>

                                                <li class="list-group-item">
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <strong><?= $rowMenu['menunama'] ?></strong>
                                                            <p><?= $rowMenu['menudeskripsi'] ?></p>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <strong><?= ($rowMenu['harga_a'] == 0) ? "" : $rowMenu['jenis_a'] . " : Rp. " . number_format($rowMenu['harga_a']) . ",- <br>" ?>
                                                            </strong>
                                                            <strong><?= ($rowMenu['harga_b'] == 0) ? "" : $rowMenu['jenis_b'] . " : Rp. " . number_format($rowMenu['harga_b']) . ",- <br>" ?>
                                                            </strong>
                                                            <strong><?= ($rowMenu['harga_c'] == 0) ? "" : $rowMenu['jenis_c'] . " : Rp. " . number_format($rowMenu['harga_c']) . ",- <br>" ?>
                                                            </strong>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <button class="btn btn-outline-warning" type="submit">Booking</button>
                                                        </div>
                                                    </div>
                                                </li>
                                            <?php endforeach ?>
                                        </ul>



                                        <?php foreach ($dataKategori as $rowKategori) : ?>
                                            <ul class="list-group-flush" id="<?= $rowKategori['katid'] ?>" style="display:none;">
                                                <h3><?= $rowKategori['katnama'] ?></h3>
                                                <?php
                                                // id kategori
                                                $idkategori =  $rowKategori['katid'];

                                                $sqlmenu = mysqli_query($conn, "SELECT * FROM menu WHERE menukategori='$idkategori' ");

                                                while ($rowmenukat = mysqli_fetch_array($sqlmenu)) {
                                                ?>

                                                    <li class="list-group-item">
                                                        <div class="row">
                                                            <div class="col-md-4">
                                                                <strong><?= $rowmenukat['menunama'] ?></strong>
                                                                <p><?= $rowmenukat['menudeskripsi'] ?></p>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <strong><?= ($rowmenukat['harga_a'] == 0) ? "" : $rowmenukat['jenis_a'] . " : Rp. " . number_format($rowmenukat['harga_a']) . ",- <br>" ?>
                                                                </strong>
                                                                <strong><?= ($rowmenukat['harga_b'] == 0) ? "" : $rowmenukat['jenis_b'] . " : Rp. " . number_format($rowmenukat['harga_b']) . ",- <br>" ?>
                                                                </strong>
                                                                <strong><?= ($rowmenukat['harga_c'] == 0) ? "" : $rowmenukat['jenis_c'] . " : Rp. " . number_format($rowmenukat['harga_c']) . ",- <br>" ?>
                                                                </strong>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <button class="btn btn-outline-warning" type="submit">Booking</button>
                                                            </div>
                                                        </div>
                                                    </li>
                                                <?php } ?>
                                            </ul>
                                        <?php endforeach ?>
                                        <!-- Tambahkan menu lainnya sesuai kebutuhan -->
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- PORTFOLIO 
          -->
    <section id="portfolio" class="portfolio pb-0 pt-5">
        <div class="container-fluid">
            <div class="row mb-5">
                <div class="col-md-12 text-center mb-3">
                    <div class="heading wow fadeInUp" data-wow-delay="0.3s">
                        <h1>Our Customer Style</h1>
                        <div class="bord-bot"></div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3 col-sm-6 p-0">
                    <div class="port-cont">
                        <a href="<?= base_url() ?>assets/img/portfolio/portfolio-1.jpg" title="Salon Style">
                            <img src="<?= base_url() ?>assets/img/portfolio/portfolio-1.jpg" alt="Salon Style" class="img-fluid">
                        </a>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 p-0">
                    <div class="port-cont">
                        <a href="<?= base_url() ?>assets/img/portfolio/portfolio-2.jpg" title="Salon Style">
                            <img src="<?= base_url() ?>assets/img/portfolio/portfolio-2.jpg" alt="Salon Style" class="img-fluid">
                        </a>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 p-0">
                    <div class="port-cont">
                        <a href="<?= base_url() ?>assets/img/portfolio/portfolio-3.jpg" title="Salon Style">
                            <img src="<?= base_url() ?>assets/img/portfolio/portfolio-3.jpg" alt="Salon Style" class="img-fluid">
                        </a>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 p-0">
                    <div class="port-cont">
                        <a href="<?= base_url() ?>assets/img/portfolio/portfolio-4.jpg" title="Salon Style">
                            <img src="<?= base_url() ?>assets/img/portfolio/portfolio-4.jpg" alt="Salon Style" class="img-fluid">
                        </a>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 p-0">
                    <div class="port-cont">
                        <a href="<?= base_url() ?>assets/img/portfolio/portfolio-8.jpg" title="Salon Style">
                            <img src="<?= base_url() ?>assets/img/portfolio/portfolio-8.jpg" alt="Salon Style" class="img-fluid">
                        </a>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 p-0">
                    <div class="port-cont">
                        <a href="<?= base_url() ?>assets/img/portfolio/portfolio-6.jpg" title="Salon Style">
                            <img src="<?= base_url() ?>assets/img/portfolio/portfolio-6.jpg" alt="Salon Style" class="img-fluid">
                        </a>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 p-0">
                    <div class="port-cont">
                        <a href="<?= base_url() ?>assets/img/portfolio/portfolio-7.jpg" title="Salon Style">
                            <img src="<?= base_url() ?>assets/img/portfolio/portfolio-7.jpg" alt="Salon Style" class="img-fluid">
                        </a>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 p-0">
                    <div class="port-cont">
                        <a href="<?= base_url() ?>assets/img/portfolio/portfolio-5.jpg" title="Salon Style">
                            <img src="<?= base_url() ?>assets/img/portfolio/portfolio-5.jpg" alt="Salon Style" class="img-fluid">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- TESTIMONIALS-->
    <section id="testimonials" class="testimonials">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div id="testimonial-slider" class="owl-carousel owl-theme">
                        <div class="testimonial">
                            <div class="pic">
                                <img src="<?= base_url() ?>assets/img/client/client-1.jpg">
                            </div>
                            <p class="description">
                                Bagus dan puas banget sama pelayannya
                            </p>
                            <h3 class="title">Intan</h3>
                            <br>
                            <small class="post">Customer</small>
                        </div>
                        <div class="testimonial">
                            <div class="pic">
                                <img src="<?= base_url() ?>assets/img/client/client-2.jpg">
                            </div>
                            <p class="description">
                                All good!! Loved it!
                            </p>
                            <h3 class="title">Monica Ocellyna</h3>
                            <br>
                            <small class="post">Customer</small>
                        </div>
                        <div class="testimonial">
                            <div class="pic">
                                <img src="<?= base_url() ?>assets/img/client/client-3.jpg">
                            </div>
                            <p class="description">
                                Overall bagus banget. Besok2 udah pasti balik lg ❤
                            </p>
                            <h3 class="title">Evelyn</h3>
                            <br>
                            <small class="post">Customer</small>
                        </div>
                        <div class="testimonial">
                            <div class="pic">
                                <img src="<?= base_url() ?>assets/img/client/client-4.jpg">
                            </div>
                            <p class="description">
                                Potongan rambutnya bagusss banget, Awalnya mau potong bob disaranin oval aja baguss
                            </p>
                            <h3 class="title">Eka Farda</h3>
                            <br>
                            <small class="post">Customer</small>
                        </div>
                        <div class="testimonial">
                            <div class="pic">
                                <img src="<?= base_url() ?>assets/img/client/client-5.jpg">
                            </div>
                            <p class="description">
                                Pelayanan bagus semua ya, ramah dan informatif. Saya ditawarin shampoo ama scalp. Trus
                                harganya juga tidak terlalu mahal. Tempatnya juga nyaman, tidak terlalu ramai. Lalu saya
                                juga diperbolehkan makan. Ya itu membantu banget ya kalau lagi kelaparan.
                            </p>
                            <h3 class="title">Rini</h3>
                            <br>
                            <small class="post">Customer</small>
                        </div>
                        <div class="testimonial">
                            <div class="pic">
                                <img src="<?= base_url() ?>assets/img/client/client-6.jpg">
                            </div>
                            <p class="description">
                                Pelayanannya sangat ramah, Saya sebagai customer sangat enjoy &lt;3
                            </p>
                            <h3 class="title">Dinda Aulia</h3>
                            <br>
                            <small class="post">Customer</small>
                        </div>
                        <div class="testimonial">
                            <div class="pic">
                                <img src="<?= base_url() ?>assets/img/client/client-7.jpg">
                            </div>
                            <p class="description">
                                Sangat bagus pelayanan dari DMOZE. Semua Mbak nya sangat ramah, harga terjangkau, dan
                                bagus semua hasil treatmentnya. Selalu langganan disini 😊👍
                            </p>
                            <h3 class="title">Lieana</h3>
                            <br>
                            <small class="post">Customer</small>
                        </div>
                        <div class="testimonial">
                            <div class="pic">
                                <img src="<?= base_url() ?>assets/img/client/client-8.jpg">
                            </div>
                            <p class="description">
                                Pelayanan sangat ramah dan humble sama client, merekomendasikan perawatan yang oke
                                banget, thankyou all
                            </p>
                            <h3 class="title">Tika Nuriana</h3>
                            <br>
                            <small class="post">Customer</small>
                        </div>
                        <div class="testimonial">
                            <div class="pic">
                                <img src="<?= base_url() ?>assets/img/client/client-9.jpg">
                            </div>
                            <p class="description">
                                Ramah bangeeeettt mbak nya, aku suka banget sama semua yang di DMOZE pokoknya DMOZE is
                                the best deh♥️
                            </p>
                            <h3 class="title">Risma</h3>
                            <br>
                            <small class="post">Customer</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CONTACT FORM =================-->
    <section id="contact" class="contact pb-0">
        <div class="container">
            <div class="row mb-5">
                <div class="col-md-12 text-center">
                    <div class="heading">
                        <h1>Contact Us</h1>
                        <div class="bord-bot"></div>
                        <p class="desc">We would love to hear from you!</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <form id="contactForm" name="sentMessage" novalidate>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input class="form-control" id="name" type="text" placeholder="Your Name *" required data-validation-required-message="Please enter your name.">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" id="email" type="email" placeholder="Your Email *" required data-validation-required-message="Please enter your email address.">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" id="phone" type="tel" placeholder="Your Phone *" required data-validation-required-message="Please enter your phone number.">
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <textarea class="form-control" id="message" placeholder="Your Message *" required data-validation-required-message="Please enter a message."></textarea>
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                            <div class="col-lg-12 text-center">
                                <div id="success"></div>
                                <button id="sendMessageButton" class="btn btn-general btn-greenish btn-xl text-uppercase" type="submit" style="color:white; border-color: white;">Send Message</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>


        <!-- Modal -->
        <!-- Modal -->
        <div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="staticBackdropLabel">Form Login</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        ...
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary">Login</button>
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>



















        <!-- FOOTER-->
        <footer>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-5">
                        <span class="copyright">Copyright &copy;D'MOZE Salon Muwardi 2024 Design By <a href="https://inoart.my.id/">Inoart</a></span>
                    </div>
                    <div class="col-md-3">
                        <ul class="list-inline social-buttons">
                            <li class="list-inline-item">
                                <a href="https://www.instagram.com/dmozesalon/" target="_blank">
                                    <i class="fa fa-instagram"></i>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a href="https://www.facebook.com/profile.php?id=100010287215461" target="_blank">
                                    <i class="fa fa-facebook"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-4">

                    </div>
                </div>
            </div>
        </footer>

        <a href="#page-top" id="back-to-top" class="btn btn-sm btn-green btn-back-to-top  js-scroll-trigger hidden-sm hidden-xs" title="home" role="button">
            <i class="fa fa-angle-double-up"></i>
        </a>

    </section>

    <script src="<?= base_url() ?>assets/js/popper.min.js"></script>
    <script src="<?= base_url() ?>assets/js/bootstrap.min.js"></script>
    <script src="<?= base_url() ?>assets/js/jquery.easing.min.js"></script>
    <script src="<?= base_url() ?>assets/js/jquery.magnific-popup.min.js"></script>
    <script src="<?= base_url() ?>assets/js/owl.carousel.min.js"></script>
    <script src="<?= base_url() ?>assets/js/jqBootstrapValidation.min.js"></script>
    <script src="<?= base_url() ?>assets/js/contact_me.min.js"></script>
    <script src="<?= base_url() ?>assets/js/wow.min.js"></script>
    <script src="<?= base_url() ?>assets/js/app.js"></script>
    <!--Start of Tawk.to Script-->
    <script type="text/javascript">
        var Tawk_API = Tawk_API || {},
            Tawk_LoadStart = new Date();
        (function() {
            var s1 = document.createElement("script"),
                s0 = document.getElementsByTagName("script")[0];
            s1.async = true;
            s1.src = 'https://embed.tawk.to/5a6d77fc4b401e45400c7419/default';
            s1.charset = 'UTF-8';
            s1.setAttribute('crossorigin', '*');
            s0.parentNode.insertBefore(s1, s0);
        })();
    </script>
    <!--End of Tawk.to Script-->

    <script>
        function showMenu(category) {
            var allMenus = document.querySelectorAll('.menu-items ul');
            for (var i = 0; i < allMenus.length; i++) {
                allMenus[i].style.display = 'none';
            }
            document.getElementById(category).style.display = 'block';
        }
    </script>


</body>

</html>