<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>




<!-- Modal -->
<div class="modal fade" id="modalEdit" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">



            <form action="<?= base_url('formTambahKeranjangSimpan') ?>" method="post" id="formTambah" class="formsimpan" enctype="multipart/form-data">
                <?= csrf_field(); ?>

                <div class="modal-header bg-dark text-warning">
                    <h5 class="modal-title" id="staticBackdropLabel">Tambah Keranjang</h5>
                </div>
                <div class="modal-body bg-dark">

                    <input type="hidden" name="menuid" id="menuid" value="<?= $menuid ?>">
                    <input type="hidden" name="userid" id="userid" value="<?= session()->userid ?>">

                    <div class="row text-warning">
                        <div class="col-3">
                            <img src="<?= base_url() ?>upload/<?= $menufoto ?>" width="100px" height="100px">
                        </div>
                        <div class="col-5">
                            <h1><?= $menunama ?></h1>
                            <p><?= $menudeskripsi ?> <br> Rp. <?= number_format($menuharga) ?>
                        </div>
                        <div class="col-4">
                            Jumlah <br>
                            <div class="form-group">
                                <input type="number" name="krn_jumlah" id="krn_jumlah" class="form-control bg-black text-warning">
                                <div class="invalid-feedback errorJumlah"></div>
                            </div>
                        </div>
                    </div>


                </div>
                <div class="modal-footer bg-dark">
                    <button type="submit" class="btn btn-outline-warning" id="tombolsimpan" autocomplete="off">Tambah</button>
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