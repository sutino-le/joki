<!-- Modal -->
<div class="modal fade" id="modalTambah" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl rounded">
        <div class="modal-content">


            <form action="<?= base_url('formKategoriSimpan') ?>" method="post" id="formTambah" class="formsimpan" enctype="multipart/form-data">
                <?= csrf_field(); ?>

                <div class="modal-header bg-primary text-white">
                    <h5 class="modal-title" id="staticBackdropLabel">Tambah Kategori</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    </button>
                </div>
                <div class="modal-body">

                    <div class="form-group row">
                        <label for="katnama" class="col-sm-2 col-form-label">Nama Kategori</label>
                        <div class="col-sm-10">
                            <input type="text" name="katnama" id="katnama" class="form-control" placeholder="Enter Nama Kategori..." autocomplete="off">
                            <div class="invalid-feedback errorKategoriNama"></div>
                        </div>
                    </div>


                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-sm btn-primary" id="tombolsimpan" autocomplete="off">Simpan</button>
                    <button type="button" class="btn btn-sm btn-danger" data-dismiss="modal" id="batal">Batal</button>
                </div>


            </form>

        </div>
    </div>
</div>



<script>
    $(document).ready(function() {

        $('.formsimpan').submit(function(e) {
            e.preventDefault();

            var formData = new FormData($('#formTambah')[0]);

            $.ajax({
                type: "post",
                url: '<?= base_url('formKategoriSimpan') ?>',
                data: formData,
                contentType: false,
                processData: false,
                dataType: "json",
                success: function(response) {
                    if (response.error) {
                        let err = response.error;

                        if (err.errKategoriNama) {
                            $('#katnama').addClass('is-invalid');
                            $('.errorKategoriNama').html(err.errKategoriNama);
                        } else {
                            $('#katnama').removeClass('is-invalid');
                            $('#katnama').addClass('is-valid');
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