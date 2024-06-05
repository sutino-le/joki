<!-- Modal -->
<div class="modal fade" id="modalEdit" data-backdrop="static" data-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl rounded">
        <div class="modal-content">


            <form action="<?= base_url('formMenuUpdate') ?>" method="post" id="formEdit" class="formsimpan"
                enctype="multipart/form-data">
                <?= csrf_field(); ?>

                <input type="hidden" name="menuid" id="menuid" value="<?= $menuid ?>">

                <div class="modal-header bg-primary text-white">
                    <h5 class="modal-title" id="staticBackdropLabel">Edit Menu</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    </button>
                </div>
                <div class="modal-body">

                    <div class="row">
                        <div class="col-6">
                            <div class="form-group row">
                                <label for="menunama" class="col-sm-4 col-form-label">Nama Menu</label>
                                <div class="col-sm-8">
                                    <input type="text" name="menunama" id="menunama" class="form-control"
                                        value="<?= $menunama ?>" placeholder="Enter Nama Menu..." autocomplete="off">
                                    <div class="invalid-feedback errorMenuNama"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group row">
                                <label for="menukategori" class="col-sm-4 col-form-label">kategori</label>
                                <div class="col-sm-8">
                                    <select name="menukategori" id="menukategori" class="form-control">
                                        <option value="">Pilih Kategori</option>
                                        <option value="">-------</option>
                                        <?php foreach ($dataKategori as $rowKategori) : ?>
                                        <option value="<?= $rowKategori['katid'] ?>"
                                            <?= ($rowKategori['katid'] == $menukategori) ? "selected" : "" ?>>
                                            <?= $rowKategori['katnama'] ?>
                                        </option>
                                        <?php endforeach ?>
                                    </select>
                                    <div class="invalid-feedback errorMenuKategori"></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12">
                            <div class="form-group row">
                                <label for="menudeskripsi" class="col-sm-2 col-form-label">Deskripsi</label>
                                <div class="col-sm-10">
                                    <textarea name="menudeskripsi" id="menudeskripsi"
                                        class="form-control"><?= $menudeskripsi ?></textarea>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-6">
                            <div class="form-group row">
                                <label for="jenis_a" class="col-sm-4 col-form-label">Jenis 1</label>
                                <div class="col-sm-8">
                                    <input type="text" name="jenis_a" id="jenis_a" class="form-control"
                                        value="<?= $jenis_a ?>" placeholder="Enter Jenis 1..." autocomplete="off">
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group row">
                                <label for="harga_a" class="col-sm-4 col-form-label">Harga 1</label>
                                <div class="col-sm-8">
                                    <input type="text" name="harga_a" id="harga_a" class="form-control"
                                        value="<?= $harga_a ?>" placeholder="Enter Harga 1..." autocomplete="off">
                                    <div class="invalid-feedback errorHargaA"></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-6">
                            <div class="form-group row">
                                <label for="jenis_b" class="col-sm-4 col-form-label">Jenis 2</label>
                                <div class="col-sm-8">
                                    <input type="text" name="jenis_b" id="jenis_b" class="form-control"
                                        value="<?= $jenis_b ?>" placeholder="Enter Jenis 2..." autocomplete="off">
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group row">
                                <label for="harga_b" class="col-sm-4 col-form-label">Harga 2</label>
                                <div class="col-sm-8">
                                    <input type="text" name="harga_b" id="harga_b" class="form-control"
                                        value="<?= $harga_b ?>" placeholder="Enter Harga 2..." autocomplete="off">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-6">
                            <div class="form-group row">
                                <label for="jenis_c" class="col-sm-4 col-form-label">Jenis 3</label>
                                <div class="col-sm-8">
                                    <input type="text" name="jenis_c" id="jenis_c" class="form-control"
                                        value="<?= $jenis_c ?>" placeholder="Enter Jenis 3..." autocomplete="off">
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group row">
                                <label for="harga_c" class="col-sm-4 col-form-label">Harga 3</label>
                                <div class="col-sm-8">
                                    <input type="text" name="harga_c" id="harga_c" class="form-control"
                                        value="<?= $harga_c ?>" placeholder="Enter Harga 3..." autocomplete="off">
                                </div>
                            </div>
                        </div>
                    </div>




                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-sm btn-primary" id="tombolsimpan"
                        autocomplete="off">Simpan</button>
                    <button type="button" class="btn btn-sm btn-danger" data-dismiss="modal" id="batal">Batal</button>
                </div>


            </form>

        </div>
    </div>
</div>


<script src="<?= base_url('assets_admin/dist/js/autoNumeric.js') ?>"></script>

<script>
$(document).ready(function() {


    // autonumerik harga 1
    $('#harga_a').autoNumeric('init', {
        mDec: 2,
        aDec: ',',
        aSep: '.',
    })
    $('#harga_a').keyup(function(e) {
        let harga_a = $('#harga_a').autoNumeric('get');

    });


    // autonumerik harga 2
    $('#harga_b').autoNumeric('init', {
        mDec: 2,
        aDec: ',',
        aSep: '.',
    })
    $('#harga_b').keyup(function(e) {
        let harga_b = $('#harga_b').autoNumeric('get');

    });


    // autonumerik harga 3
    $('#harga_c').autoNumeric('init', {
        mDec: 2,
        aDec: ',',
        aSep: '.',
    })
    $('#harga_c').keyup(function(e) {
        let harga_c = $('#harga_c').autoNumeric('get');

    });


    $('.formsimpan').submit(function(e) {
        e.preventDefault();

        var formData = new FormData($('#formEdit')[0]);

        $.ajax({
            type: "post",
            url: '<?= base_url('formMenuUpdate') ?>',
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

                    if (err.errMenuKategori) {
                        $('#menukategori').addClass('is-invalid');
                        $('.errorMenuKategori').html(err.errMenuKategori);
                    } else {
                        $('#menukategori').removeClass('is-invalid');
                        $('#menukategori').addClass('is-valid');
                    }

                    if (err.errMenuDeskripsi) {
                        $('#menudeskripsi').addClass('is-invalid');
                        $('.errorMenuDeskripsi').html(err.errMenuDeskripsi);
                    } else {
                        $('#menudeskripsi').removeClass('is-invalid');
                        $('#menudeskripsi').addClass('is-valid');
                    }

                    if (err.errHargaA) {
                        $('#harga_a').addClass('is-invalid');
                        $('.errorHargaA').html(err.errHargaA);
                    } else {
                        $('#harga_a').removeClass('is-invalid');
                        $('#harga_a').addClass('is-valid');
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