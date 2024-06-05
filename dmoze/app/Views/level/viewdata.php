<?= $this->extend('main/index'); ?>

<?= $this->section('isi') ?>



<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>


<!-- icon -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"
    integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>



<div class="row">
    <div class="col-12">
        <div class="card card-blue">
            <div class="card-header">
                <h3 class="card-title"><b>Data Level</b></h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">

                <button class="btn btn-sm btn-primary mb-2" id="tambahLevel"><i class="fas fa-plus"></i> Tambah
                    Data</button>
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Level</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 1;
                        foreach ($dataLevel->getResultArray() as $rowLevel) :
                        ?>
                        <tr>
                            <td><?= $no++ ?></td>
                            <td><?= $rowLevel['levelnama'] ?></td>
                            <td>
                                <button class="btn btn-sm btn-success d-inline"
                                    onclick="edit('<?= $rowLevel['levelid'] ?>')"><i class="fas fa-edit"></i></button>
                                <button class="btn btn-sm btn-danger d-inline"
                                    onclick="hapus('<?= $rowLevel['levelid'] ?>')"
                                    <?= ($rowLevel['userlevel'] == "") ? "" : "disabled" ?>><i
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



<div class="viewmodal" style="display: none;"></div>

<script>
// Form tambah data
$(document).ready(function() {

    $('#tambahLevel').click(function(e) {
        e.preventDefault();
        $.ajax({
            url: "<?= base_url() ?>/formLevelTambah",
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
function edit(levelid) {
    $.ajax({
        url: "<?= base_url() ?>/formLevelEdit/" + levelid,
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
function hapus(levelid) {
    Swal.fire({
        title: 'Apakah Anda yakin?',
        text: "Anda akan menghapus data ini!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Ya, hapus!',
        cancelButtonText: 'Batal'
    }).then((result) => {
        if (result.isConfirmed) {
            $.ajax({
                url: "<?= base_url() ?>/levelHapus/" + levelid,
                dataType: "json",
                success: function(response) {
                    if (response.sukses) {
                        swal.fire(
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
        } else {
            window.location.reload();
        }
    })
}
</script>

<?= $this->endSection('isi') ?>