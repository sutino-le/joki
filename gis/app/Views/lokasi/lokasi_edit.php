<!-- Modal -->
<div class="modal fade" id="modalEdit" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">


            <form action="<?= base_url('formEditLokasiSimpan') ?>" class="formsimpan">
                <?= csrf_field(); ?>

                <input type="hidden" name="lokid" id="lokid" value="<?= $lokid ?>">

                <div class="modal-header bg-primary text-white">
                    <h5 class="modal-title" id="staticBackdropLabel">Edit Data Lokasi</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    </button>
                </div>
                <div class="modal-body">

                    <div class="form-group">
                        <label for="">Nama Lokasi</label>
                        <input type="text" name="loknama" id="loknama" class="form-control" value="<?= $loknama ?>" placeholder="Masukan Nama Lokasi..." autocomplete="off">
                        <div class="invalid-feedback errorLokasiNama"></div>
                    </div>

                    <div class="form-group">
                        <label for="">Link Lokasi</label>
                        <textarea name="loklink" id="loklink" class="form-control" placeholder="Masukan Link..."><?= $loklink ?></textarea>
                        <div class="invalid-feedback errorLokasiLink"></div>
                    </div>

                    <div class="form-group">
                        <label for="">Deskripsi</label>
                        <input type="text" name="lokdeskripsi" id="lokdeskripsi" class="form-control" value="<?= $lokdeskripsi ?>" placeholder="Masukan Deskripsi..." autocomplete="off">
                    </div>


                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-sm btn-primary" id="tombolsimpan" autocomplete="off">Simpan</button>
                    <button type="button" class="btn btn-sm btn-danger" data-dismiss="modal" id="batal">batal</button>
                </div>


            </form>

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

                        if (err.errLokasiNama) {
                            $('#loknama').addClass('is-invalid');
                            $('.errorLokasiNama').html(err.errLokasiNama);
                        } else {
                            $('#loknama').removeClass('is-invalid');
                            $('#loknama').addClass('is-valid');
                        }

                        if (err.errLokasiLink) {
                            $('#loklink').addClass('is-invalid');
                            $('.errorLokasiLink').html(err.errLokasiLink);
                        } else {
                            $('#loklink').removeClass('is-invalid');
                            $('#loklink').addClass('is-valid');
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