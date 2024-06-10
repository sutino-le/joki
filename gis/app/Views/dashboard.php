<?= $this->extend('layout'); ?>

<?= $this->section('isi') ?>


<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Dashboard</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="<?= base_url() ?>main">Home</a></li>
                    <li class="breadcrumb-item active">Dashboard</li>
                </ol>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>

<!-- Main content -->
<section class="content">
    <div class="container-fluid">

        <?php

        $conn = mysqli_connect("localhost", "root", "", "gis");

        ?>

        <div class="row justify-content-center">

            <?php foreach ($dataKategori as $rowKategori) : ?>

                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-info">
                        <div class="inner">
                            <?php
                            $idintelijen = $rowKategori['katid'];
                            $sqlintelijen = "SELECT * FROM data_intilejen WHERE intel_katid='$idintelijen' ";
                            $resultintelijen = mysqli_query($conn, $sqlintelijen);
                            ?>
                            <h3><?= $jumlah_kategori = mysqli_num_rows($resultintelijen); ?></h3>

                            <p><?= $rowKategori['katnama'] ?></p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-bag"></i>
                        </div>
                        <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>

            <?php endforeach ?>

        </div>

        <div class="row justify-content-center">


            <div class="col-12">



                <div class="card">
                    <div class="card-header text-center">
                        <h3><b>Kota Tasikmalaya</b></h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">

                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d180215.93480932896!2d108.14439194731654!3d-7.388963879596911!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6f56e5924c576f%3A0x301e8f1fc2f2500!2sKota%20Tasikmalaya%2C%20Kab.%20Tasikmalaya%2C%20Jawa%20Barat!5e1!3m2!1sid!2sid!4v1718006916002!5m2!1sid!2sid" width="100%" height="500" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>


                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->


            </div>

        </div>

    </div>
    <!-- /.container-fluid -->
</section>
<!-- /.content -->


<div class="viewmodal" style="display: none;"></div>


<?= $this->endSection('isi') ?>