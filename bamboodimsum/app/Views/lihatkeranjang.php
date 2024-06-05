<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"
    integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>




<!-- Modal -->
<div class="modal fade" id="modalKeranjang" data-backdrop="static" data-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">



            <form action="<?= base_url('formTambahKeranjangSimpan') ?>" method="post" id="formTambah" class="formsimpan"
                enctype="multipart/form-data">
                <?= csrf_field(); ?>

                <div class="modal-header bg-dark text-warning">
                    <h5 class="modal-title" id="staticBackdropLabel">Keranjang Saya</h5>
                </div>
                <div class="modal-body bg-dark">
                    <div class="row ">
                        <div class="col-7">
                            <b>Menu Pesanan</b>
                        </div>
                        <div class="col-5">
                            <b>Jumlah</b>
                        </div>
                    </div>
                    <hr>

                    <?php
                    $totalHarga = 0;
                    foreach ($dataKeranjang->getResultArray() as $rowKeranjang) :
                    ?>
                    <div class="row">
                        <div class="col-2">
                            <img src="<?= base_url() ?>upload/<?= $rowKeranjang['menufoto'] ?>" width="50px"
                                height="50px">
                        </div>
                        <div class="col-5">
                            <b><?= $rowKeranjang['menunama'] ?></b>
                            <p><?= $rowKeranjang['menudeskripsi'] ?> <br>Rp.
                                <?= number_format($rowKeranjang['menuharga']) ?></p>
                        </div>
                        <div class="col-2">
                            x <?= $rowKeranjang['krn_jumlah'] ?>
                        </div>
                        <div class="col-3">
                            <?= number_format($rowKeranjang['menuharga'] * $rowKeranjang['krn_jumlah']) ?>
                        </div>
                    </div>
                    <?php
                        $totalHarga += $rowKeranjang['menuharga'] * $rowKeranjang['krn_jumlah'];
                    endforeach
                    ?>

                    <hr>
                    <div class="row ">
                        <div class="col-9">
                            <b>Total Pembayaran</b>
                        </div>
                        <div class="col-3">
                            <b><?= number_format($totalHarga) ?></b>
                        </div>
                    </div>

                </div>
                <div class="modal-footer bg-dark">
                    <button type="submit" class="btn btn-outline-warning" id="tombolsimpan"
                        autocomplete="off">Pesan</button>
                    <button type="button" class="btn btn-outline-danger" data-dismiss="modal" id="batal">batal</button>
                </div>


            </form>

        </div>
    </div>
</div>



<script src="<?= base_url('assets_admin/dist/js/autoNumeric.js') ?>"></script>
<script>
$(document).ready(function() {


    // autonumerik harga
    $('#menuharga').autoNumeric('init', {
        mDec: 2,
        aDec: ',',
        aSep: '.',
    })
    $('#menuharga').keyup(function(e) {
        let menuharga = $('#menuharga').autoNumeric('get');

    });








    $('.formsimpan').submit(function(e) {
        e.preventDefault();

        var formData = new FormData($('#formTambah')[0]);

        $.ajax({
            type: "post",
            url: '<?= base_url('formTambahKeranjangSimpan') ?>',
            data: formData,
            contentType: false,
            processData: false,
            dataType: "json",
            success: function(response) {
                if (response.error) {
                    let err = response.error;

                    if (err.errJumlah) {
                        $('#krn_jumlah').addClass('is-invalid');
                        $('.errorJumlah').html(err.errJumlah);
                    } else {
                        $('#krn_jumlah').removeClass('is-invalid');
                        $('#krn_jumlah').addClass('is-valid');
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