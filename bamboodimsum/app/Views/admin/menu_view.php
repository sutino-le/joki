<?= $this->extend('admin/layout'); ?>

<?= $this->section('isi') ?>


<!-- icon -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"
    integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>



<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?= base_url() ?>main">Home</a></li>
                    <li class="breadcrumb-item active">menu</li>
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
                        <h3>Data Menu</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">


                        <button class="btn btn-sm btn-primary d-inline mb-3" id="tambahMenu"><i class="fas fa-plus"></i>
                            Tambah
                            data</button>

                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Menu</th>
                                    <th>Deskripsi</th>
                                    <th>Harga</th>
                                    <th>Gambar</th>
                                    <th>#</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $no = 1;
                                foreach ($dataMenu->getResultArray() as $rowmenu) :
                                ?>
                                <tr>
                                    <td><?= $no++ ?></td>
                                    <td><?= $rowmenu['menunama'] ?></td>
                                    <td><?= $rowmenu['menudeskripsi'] ?></td>
                                    <td><?= $rowmenu['menuharga'] ?></td>
                                    <td><img src="<?= base_url() ?>upload/<?= $rowmenu['menufoto'] ?>" width="50px"
                                            height="50px"></td>
                                    <td>
                                        <button class="btn btn-sm btn-success d-inline"
                                            onclick="edit('<?= $rowmenu['menuid'] ?>')"><i
                                                class="fas fa-edit"></i></button>
                                        <button class="btn btn-sm btn-danger d-inline"
                                            onclick="hapus('<?= $rowmenu['menuid'] ?>')"
                                            <?= ($rowmenu['det_psn_id'] == "") ? "" : "disabled" ?>><i
                                                class="fas fa-trash"></i></button>
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

    $('#tambahMenu').click(function(e) {
        e.preventDefault();
        $.ajax({
            url: "<?= base_url() ?>formTambahMenu",
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
function edit(menuid) {
    $.ajax({
        url: "<?= base_url() ?>/formMenuEdit/" + menuid,
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
function hapus(menuid) {
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
                url: "<?= base_url() ?>/menuHapus/" + menuid,
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
</script>

<?= $this->endSection('isi') ?>