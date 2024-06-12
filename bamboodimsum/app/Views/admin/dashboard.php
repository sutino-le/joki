<?= $this->extend('admin/layout'); ?>

<?= $this->section('isi') ?>


<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <ol class="breadcrumb">
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
        <div class="row">

            <div class="col-6">
                <div class="card">
                    <div class="card-header bg-primary">
                        <h3 class="card-title"><b>Daftar Pesanan</b></h3>
                    </div>
                    <div class="card-body">

                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>User</th>
                                    <th>Status</th>
                                    <th>Kurir</th>
                                    <th>#</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $no = 1;
                                foreach ($daftarPesanan->getResultArray() as $rowpesanan) :
                                ?>
                                <tr>
                                    <td><?= $no++ ?></td>
                                    <td><?= $rowpesanan['psn_userid'] ?></td>
                                    <td><?= $rowpesanan['psn_status'] ?></td>
                                    <td><?= $rowpesanan['psn_kurir'] ?></td>
                                    <td>
                                        <button class="btn btn-sm btn-success d-inline"
                                            onclick="tentukanKurir('<?= $rowpesanan['psn_nomor'] ?>')">Tentukan
                                            Kurir</button>
                                    </td>
                                </tr>
                                <?php endforeach ?>
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>

            <div class="col-6">
                <div class="card">
                    <div class="card-header bg-primary">
                        <h3 class="card-title"><b>Daftar Pengantaran</b></h3>
                    </div>
                    <div class="card-body">

                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>User</th>
                                    <th>Status Pengantaran</th>
                                    <th>Kurir</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $no = 1;
                                foreach ($daftarPesananProses->getResultArray() as $rowpesananproses) :
                                ?>
                                <tr>
                                    <td><?= $no++ ?></td>
                                    <td><?= $rowpesananproses['psn_userid'] ?></td>
                                    <td><?= $rowpesananproses['psn_status'] ?></td>
                                    <td><?= $rowpesananproses['psn_kurir'] ?></td>
                                </tr>
                                <?php endforeach ?>
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>

        </div>
    </div>
</section>



<div class="viewmodal" style="display: none;"></div>

<script>
// form edit
function tentukanKurir(psn_nomor) {
    $.ajax({
        url: "<?= base_url() ?>/tentukanKurir/" + psn_nomor,
        dataType: "json",
        success: function(response) {
            if (response.data) {
                $('.viewmodal').html(response.data).show();
                $('#modalTentukanKurir').modal('show');
            }
        },
        error: function(xhr, ajaxOptions, thrownError) {
            alert(xhr.status + '\n' + thrownError);
        }
    });
}
</script>

<?= $this->endSection('isi') ?>