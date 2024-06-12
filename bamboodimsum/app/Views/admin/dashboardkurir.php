<!-- Modal -->
<div class="modal fade" id="modalTentukanKurir" data-backdrop="static" data-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">




            <div class="modal-header bg-primary text-white">
                <h5 class="modal-title" id="staticBackdropLabel">Tentukan Kurir</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                </button>
            </div>
            <div class="modal-body">

                <div class="row">
                    <div class="col-12">
                        <table width="100%">
                            <tr>
                                <td>Nomor Pesanan</td>
                                <td>:</td>
                                <td><?= $psn_nomor ?></td>
                                <td>Pemesan</td>
                                <td>:</td>
                                <td><?= $usernama ?></td>
                            </tr>
                            <tr>
                                <td>Total Pesanan</td>
                                <td>:</td>
                                <td>Rp. <?= number_format($pjl_totalharga) ?></td>
                                <td>Alamat</td>
                                <td>:</td>
                                <td><?= $useralamat ?></td>
                            </tr>
                        </table>
                    </div>
                </div>

                <div class="row">
                    <table class="table table-sm">
                        <tr>
                            <td>No</td>
                            <td>Nama Kurir</td>
                            <td>Status Pengantaran</td>
                            <td>Aksi</td>
                        </tr>
                        <?php
                        $no = 1;
                        foreach ($datakurir->getResultArray() as $rowKurir) :
                        ?>
                        <tr>
                            <td><?= $no++ ?></td>
                            <td><?= $rowKurir['usernama'] ?></td>
                            <td><?= ($rowKurir['psn_status']=="") ? "Free" : $rowKurir['psn_status'] ?></td>
                            <td>
                                <form action="<?= base_url('tentukanKurirSimpan') ?>" class="formsimpan">
                                    <?= csrf_field(); ?>
                                    <input type="hidden" name="userid" id="userid" value="<?= $rowKurir['userid'] ?>">
                                    <input type="hidden" name="psn_nomor" id="psn_nomor" value="<?= $psn_nomor ?>">

                                    <button type="submit" class="btn btn-sm btn-primary" id="tombolsimpan"
                                        autocomplete="off">Pilih</button>
                                </form>
                            </td>
                        </tr>
                        <?php endforeach ?>
                    </table>
                </div>


            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-sm btn-danger" data-dismiss="modal" id="batal">batal</button>
            </div>




        </div>
    </div>
</div>

<script>
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
                        window.location.reload();
                    })
                }
            },
            error: function(xhr, ajaxOptions, thrownError) {
                alert(xhr.status + '\n' + thrownError);
            }
        });

        return false;
    });

    $('#batal').click(function(e) {
        e.preventDefault();
        window.location.reload();
    });

});
</script>