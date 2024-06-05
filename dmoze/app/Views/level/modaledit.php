<!-- Modal -->
<div class="modal fade" id="modalEdit" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl rounded">
        <div class="modal-content">


            <form action="<?= base_url('formLevelSimpan') ?>" method="post" id="formEdit" class="formEdit" enctype="multipart/form-data">
                <?= csrf_field(); ?>

                <div class="modal-header bg-primary text-white">
                    <h5 class="modal-title" id="staticBackdropLabel">Edit Level</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    </button>
                </div>
                <div class="modal-body">

                    <input type="hidden" name="levelid" id="levelid" value="<?= $levelid ?>">

                    <div class="form-group row">
                        <label for="levelnama" class="col-sm-2 col-form-label">Nama Level</label>
                        <div class="col-sm-10">
                            <input type="text" name="levelnama" id="levelnama" class="form-control" value="<?= $levelnama ?>" placeholder="Enter Nama Level..." autocomplete="off">
                            <div class="invalid-feedback errorLevelNama"></div>
                        </div>
                    </div>


                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-sm btn-primary" id="tombolsimpan" autocomplete="off">Rubah</button>
                    <button type="button" class="btn btn-sm btn-danger" data-dismiss="modal" id="batal">Batal</button>
                </div>


            </form>

        </div>
    </div>
</div>



<script>
    $(document).ready(function() {

        $('.formEdit').submit(function(e) {
            e.preventDefault();

            var formData = new FormData($('#formEdit')[0]);

            $.ajax({
                type: "post",
                url: '<?= base_url('formLevelUpdate') ?>',
                data: formData,
                contentType: false,
                processData: false,
                dataType: "json",
                success: function(response) {
                    if (response.error) {
                        let err = response.error;

                        if (err.errLevelNama) {
                            $('#levelnama').addClass('is-invalid');
                            $('.errorLevelNama').html(err.errLevelNama);
                        } else {
                            $('#levelnama').removeClass('is-invalid');
                            $('#levelnama').addClass('is-valid');
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