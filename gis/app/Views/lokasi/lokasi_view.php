<?= $this->extend('layout'); ?>

<?= $this->section('isi') ?>


<!-- icon -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>



<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?= base_url() ?>main">Home</a></li>
                    <li class="breadcrumb-item active">kategori</li>
                </ol>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>

<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">



                <div class="card">
                    <div class="card-header">
                        <h3>Data Lokasi</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">


                        <button class="btn btn-sm btn-primary d-inline mb-3" id="tambahLokasi"><i class="fas fa-plus"></i> Tambah
                            data</button>

                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Lokasi</th>
                                    <th>Deskripsi</th>
                                    <th>#</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $no = 1;
                                foreach ($datalokasi->getResultArray() as $rowlokasi) :
                                ?>
                                    <tr>
                                        <td><?= $no++ ?></td>
                                        <td><?= $rowlokasi['loknama'] ?></td>
                                        <td><?= $rowlokasi['lokdeskripsi'] ?></td>
                                        <td>
                                            <button class="btn btn-sm btn-success d-inline" onclick="edit('<?= $rowlokasi['lokid'] ?>')"><i class="fas fa-edit"></i></button>
                                            <button class="btn btn-sm btn-danger d-inline" onclick="hapus('<?= $rowlokasi['lokid'] ?>')" <?= ($rowlokasi['intel_id'] == "") ? "" : "disabled" ?>><i class="fas fa-trash"></i></button>
                                            <button class="btn btn-sm btn-warning d-inline" onclick="detail('<?= $rowlokasi['lokid'] ?>')"><i class="fas fa-search"></i></button>
                                        </td>
                                    </tr>
                                <?php endforeach ?>
                            </tbody>
                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->



            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</section>
<!-- /.content -->


<div class="viewmodal" style="display: none;"></div>


<script>
    // Form tambah data
    $(document).ready(function() {

        $('#tambahLokasi').click(function(e) {
            e.preventDefault();
            $.ajax({
                url: "<?= base_url() ?>formTambahLokasi",
                dataType: "json",
                success: function(response) {
                    if (response.data) {
                        $('.viewmodal').html(response.data).show();
                        $('#modalTambah').modal('show');
                    }
                },
                error: function(xhr, ajaxOptions, thrownError) {
                    alert(xhr.status + '\n' + thrownError);
                }
            });
        });

    });




    // form edit
    function edit(lokid) {
        $.ajax({
            url: "<?= base_url() ?>/formLokasiEdit/" + lokid,
            dataType: "json",
            success: function(response) {
                if (response.data) {
                    $('.viewmodal').html(response.data).show();
                    $('#modalEdit').modal('show');
                }
            },
            error: function(xhr, ajaxOptions, thrownError) {
                alert(xhr.status + '\n' + thrownError);
            }
        });
    }



    // form hapus
    function hapus(lokid) {
        Swal.fire({
            title: 'Apakah kamu yakin?',
            text: "Anda ingin menghapus data ini!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Ya, hapus data!',
            cancelButtonText: 'Batal'
        }).then((result) => {
            if (result.isConfirmed) {
                $.ajax({
                    url: "<?= base_url() ?>/lokasiHapus/" + lokid,
                    dataType: "json",
                    success: function(response) {
                        if (response.sukses) {
                            swal.fire(
                                'Berhasil',
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
            } else {
                window.location.reload();
            }
        })
    }







    // detail
    function detail(lokid) {
        $.ajax({
            url: "<?= base_url() ?>/detailLokasi/" + lokid,
            dataType: "json",
            success: function(response) {
                if (response.data) {
                    $('.viewmodal').html(response.data).show();
                    $('#modalDetail').modal('show');
                }
            },
            error: function(xhr, ajaxOptions, thrownError) {
                alert(xhr.status + '\n' + thrownError);
            }
        });
    }
</script>

<?= $this->endSection('isi') ?>