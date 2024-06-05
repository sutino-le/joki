<!-- Modal -->
<div class="modal fade" id="modalTambah" data-backdrop="static" data-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">



            <form action="<?= base_url('formTambahMenuSimpan') ?>" method="post" id="formTambah" class="formsimpan"
                enctype="multipart/form-data">
                <?= csrf_field(); ?>

                <div class="modal-header bg-primary text-white">
                    <h5 class="modal-title" id="staticBackdropLabel">Tambah Data Menu</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    </button>
                </div>
                <div class="modal-body">

                    <div class="form-group">
                        <label for="">Nama Menu</label>
                        <input type="text" name="menunama" id="menunama" class="form-control"
                            placeholder="Masukan Nama Menu..." autocomplete="off">
                        <div class="invalid-feedback errorMenuNama"></div>
                    </div>

                    <div class="form-group">
                        <label for="">Deskripsi</label>
                        <textarea name="menudeskripsi" id="menudeskripsi" class="form-control"></textarea>
                    </div>

                    <div class="form-group">
                        <label for="">Harga</label>
                        <input type="text" name="menuharga" id="menuharga" class="form-control"
                            placeholder="Masukan Harga..." autocomplete="off">
                        <div class="invalid-feedback errorMenuHarga"></div>
                    </div>

                    <div class="form-group">
                        <label for="">Gambar</label>
                        <input type="file" name="menufoto" id="menufoto" class="form-control">
                        <div class="invalid-feedback errorMenuFoto"></div>
                    </div>


                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-sm btn-primary" id="tombolsimpan"
                        autocomplete="off">Simpan</button>
                    <button type="button" class="btn btn-sm btn-danger" data-dismiss="modal" id="batal">batal</button>
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
            url: '<?= base_url('formTambahMenuSimpan') ?>',
            data: formData,
            contentType: false,
            processData: false,
            dataType: "json",
            success: function(response) {
                if (response.error) {
                    let err = response.error;

                    if (err.errMenuNama) {
                        $('#menunama').addClass('is-invalid');
                        $('.errorMenuNama').html(err.errMenuNama);
                    } else {
                        $('#menunama').removeClass('is-invalid');
                        $('#menunama').addClass('is-valid');
                    }

                    if (err.errMenuHarga) {
                        $('#menuharga').addClass('is-invalid');
                        $('.errorMenuHarga').html(err.errMenuHarga);
                    } else {
                        $('#menuharga').removeClass('is-invalid');
                        $('#menuharga').addClass('is-valid');
                    }

                    if (err.errMenuFoto) {
                        $('#menufoto').addClass('is-invalid');
                        $('.errorMenuFoto').html(err.errMenuFoto);
                    } else {
                        $('#menufoto').removeClass('is-invalid');
                        $('#menufoto').addClass('is-valid');
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