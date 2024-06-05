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


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.10.0/dist/sweetalert2.all.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/sweetalert2@11.10.0/dist/sweetalert2.min.css" rel="stylesheet">

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

        </div>
    </header><!-- End Header -->


    <main id="main">


        <!-- ======= Contact Section ======= -->
        <section id="contact" class="contact">

            <div class="container" data-aos="fade-up">

                <div class="row mt-5 mb-5">


                    <div class="col-lg-8 mt-5 mt-lg-0">

                        <h4>Registrasi</h4>


                        <form action="<?= base_url() ?>registrasiSimpan" method="post" role="form" class="php-email-form formregistrasi">

                            <div class="row mt-4">

                                <div class="col-md-6 form-group">
                                    <input type="text" name="userid" class="form-control" id="userid" placeholder="Masukan ID User" autocomplete="off">
                                    <div class="invalid-feedback errorUserID"></div>
                                </div>


                                <div class="col-md-6 form-group">
                                    <input type="text" name="usernama" class="form-control" id="usernama" placeholder=" Masukan Nama User" autocomplete="off">
                                    <div class="invalid-feedback errorUserNama"></div>
                                </div>

                            </div>

                            <div class="row mt-4">

                                <div class="col-md-6 form-group">
                                    <input type="email" name="useremail" class="form-control" id="useremail" placeholder="Masukan Email" autocomplete="off">
                                    <div class="invalid-feedback errorUserEmail"></div>
                                </div>


                                <div class="col-md-6 form-group">
                                    <input type="text" name="userhp" class="form-control" id="userhp" placeholder=" Masukan Nomor HP" autocomplete="off">
                                    <div class="invalid-feedback errorUserHP"></div>
                                </div>

                            </div>

                            <div class="row mt-4">

                                <div class="col-md-12 form-group">
                                    <input type="text" name="useralamat" class="form-control" id="useralamat" placeholder="Masukan Alamat" autocomplete="off">
                                    <div class="invalid-feedback errorUserAlamat"></div>
                                </div>

                            </div>

                            <div class="row mt-4">
                                <div class="col-md-6 form-group">
                                    <input type="password" name="userpassword" class="form-control" id="userpassword" placeholder="Password" autocomplete="off">
                                    <div class="invalid-feedback errorPassword"></div>
                                </div>
                            </div>

                            <div class="row mt-4 mb-5">
                                <div class="col-md-6 form-group">
                                    <button type="submit">Registrasi</button>
                                </div>
                            </div>
                        </form>

                        <p>Sudah punya akun ? <a href="<?= base_url() ?>loginPelanggan">Login</a></p>

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
        $(document).ready(function() {
            // proses form login
            $('.formregistrasi').submit(function(e) {
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

                            if (err.errUserNama) {
                                $('#usernama').addClass('is-invalid');
                                $('.errorUserNama').html(err.errUserNama);
                            } else {
                                $('#usernama').removeClass('is-invalid');
                                $('#usernama').addClass('is-valid');
                            }


                            if (err.errUserEmail) {
                                $('#useremail').addClass('is-invalid');
                                $('.errorUserEmail').html(err.errUserEmail);
                            } else {
                                $('#useremail').removeClass('is-invalid');
                                $('#useremail').addClass('is-valid');
                            }


                            if (err.errUserHP) {
                                $('#userhp').addClass('is-invalid');
                                $('.errorUserHP').html(err.errUserHP);
                            } else {
                                $('#userhp').removeClass('is-invalid');
                                $('#userhp').addClass('is-valid');
                            }


                            if (err.errUserAlamat) {
                                $('#useralamat').addClass('is-invalid');
                                $('.errorUserAlamat').html(err.errUserAlamat);
                            } else {
                                $('#useralamat').removeClass('is-invalid');
                                $('#useralamat').addClass('is-valid');
                            }


                            if (err.errPassword) {
                                $('#userpassword').addClass('is-invalid');
                                $('.errorPassword').html(err.errPassword);
                            } else {
                                $('#userpassword').removeClass('is-invalid');
                                $('#userpassword').addClass('is-valid');
                            }
                        }

                        if (response.sukses) {
                            Swal.fire({
                                icon: 'success',
                                title: 'Berhasil',
                                text: response.sukses
                            }).then((result) => {
                                if (result.isConfirmed) {
                                    location.href = "<?= base_url() ?>loginPelanggan";
                                }
                            });
                        }
                    },
                    error: function(xhr, ajaxOptions, thrownError) {
                        alert(xhr.status + '\n' + thrownError);
                    }
                });

            });

        });
    </script>

</body>

</html>