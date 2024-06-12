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


    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>


    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>


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
                    <li><a class="nav-link scrollto active" href="<?= base_url() ?>#hero">Pengantaran Saya</a></li>
                    <li>
                        <?php
                        if (session()->level == 2) {
                        ?>
                    <li class="dropdown"><a href="<?= base_url() ?>#"><span><?= session()->usernama ?></span> <i class="bi bi-chevron-down"></i></a>
                        <ul>
                            <li><a href="<?= base_url() ?>logout">Logout</a></li>
                        </ul>
                    </li>
                <?php
                        } else {
                ?>
                    <li><a class=" nav-link scrollto" href="<?= base_url() ?>loginPelanggan">Login</a></li>
                <?php
                        }
                ?>
                </li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->


        </div>
    </header><!-- End Header -->

    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex">
        <div class="container position-relative text-center text-lg-start" data-aos="zoom-in" data-aos-delay="100">
            <div class="row mt-5">

                <table class="table bg-transparent table-responsive">
                    <tr>
                        <td colspan="6" align="center"><b>Data Pengantaran</b></td>
                    </tr>
                    <tr>
                        <td><b>No</b></td>
                        <td><b>Pemesan</b></td>
                        <td><b>No. HP</b></td>
                        <td><b>Alamat</b></td>
                        <td><b>Total Harga</b></td>
                        <td><b>#</b></td>
                    </tr>
                    <?php
                    $no = 1;
                    foreach ($daftarPengantaran->getResultArray() as $rowPengantaran) :
                    ?>
                        <tr>
                            <td><?= $no++ ?></td>
                            <td><?= $rowPengantaran['usernama'] ?></td>
                            <td><?= $rowPengantaran['userhp'] ?></td>
                            <td><?= $rowPengantaran['useralamat'] ?></td>
                            <td><?= number_format($rowPengantaran['pjl_totalharga']) ?></td>
                            <td>
                                <div class="row">
                                    <div class="col-4">
                                        <button class="btn btn-sm btn-success d-inline" onclick="datailPesanan('<?= $rowPengantaran['psn_nomor'] ?>')"><i class="fas fa-edit"></i> Detail
                                            Pesanan</button>
                                    </div>
                                    <div class="col-6">
                                        <?php
                                        if ($rowPengantaran['psn_status'] == "Pesanan diantar") {
                                        ?>
                                            <form action="<?= base_url('pesananSelesai') ?>" class="formsimpan">
                                                <?= csrf_field(); ?>
                                                <input type="hidden" name="userid" id="userid" value="<?= $rowPengantaran['psn_kurir'] ?>">
                                                <input type="hidden" name="psn_nomor" id="psn_nomor" value="<?= $rowPengantaran['psn_nomor'] ?>">

                                                <button type="submit" class="btn btn-sm btn-warning  d-inline" id="tombolsimpan" autocomplete="off">Selesaikan Pengantaran</button>
                                            </form>

                                        <?php
                                        } else {
                                        ?>
                                            <form action="<?= base_url('pesananDiantar') ?>" class="formsimpan">
                                                <?= csrf_field(); ?>
                                                <input type="hidden" name="userid" id="userid" value="<?= $rowPengantaran['psn_kurir'] ?>">
                                                <input type="hidden" name="psn_nomor" id="psn_nomor" value="<?= $rowPengantaran['psn_nomor'] ?>">

                                                <button type="submit" class="btn btn-sm btn-warning  d-inline" id="tombolsimpan" autocomplete="off">Proses
                                                    Pengantaran</button>
                                            </form>
                                        <?php
                                        }
                                        ?>

                                    </div>
                                    <div class="col-2"></div>
                                </div>


                            </td>
                        </tr>
                    <?php
                    endforeach
                    ?>
                </table>

            </div>
        </div>
    </section><!-- End Hero -->

    <main id="main">




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



    <div class="viewmodal" style="display: none;"></div>






    <div id="preloader"></div>
    <a href="<?= base_url() ?>#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="<?= base_url() ?>assets/vendor/aos/aos.js"></script>
    <script src="<?= base_url() ?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="<?= base_url() ?>assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="<?= base_url() ?>assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="<?= base_url() ?>assets/vendor/swiper/swiper-bundle.min.js"></script>

    <!-- Template Main JS File -->
    <script src="<?= base_url() ?>assets/js/main.js"></script>


    <script>
        function datailPesanan(psn_nomor) {
            $.ajax({
                url: "<?= base_url() ?>/datailPesanan/" + psn_nomor,
                dataType: "json",
                success: function(response) {
                    if (response.data) {
                        $('.viewmodal').html(response.data).show();
                        $('#modalDetailPesanan').modal('show');
                    }
                },
                error: function(xhr, ajaxOptions, thrownError) {
                    alert(xhr.status + '\n' + thrownError);
                }
            });
        }

        $(document).ready(function() {
            $('.formsimpan').submit(function(e) {
                e.preventDefault();

                $.ajax({
                    type: "post",
                    url: $(this).attr('action'),
                    data: $(this).serialize(),
                    dataType: "json",
                    success: function(response) {
                        if (response.error) {
                            let err = response.error;

                            if (err.errUserID) {
                                $('#userid').addClass('is-invalid');
                                $('.errorUserID').html(err.errUserID);
                            } else {
                                $('#userid').removeClass('is-invalid');
                                $('#userid').addClass('is-valid');
                            }
                        }

                        if (response.sukses) {

                            Swal.fire(
                                'Berhasil...',
                                response.sukses,
                                'success'
                            ).then((result) => {
                                window.location.href = '<?= base_url() ?>dasboardKurir';
                            })
                        }
                    },
                    error: function(xhr, ajaxOptions, thrownError) {
                        alert(xhr.status + '\n' + thrownError);
                    }
                });

                return false;
            });

        });
    </script>

</body>

</html>