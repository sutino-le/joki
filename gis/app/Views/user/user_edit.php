<!-- Modal -->
<div class="modal fade" id="modalEdit" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">


            <form action="<?= base_url('formEditUserSimpan') ?>" class="formsimpan">
                <?= csrf_field(); ?>

                <input type="hidden" name="userid" id="userid" value="<?= $userid ?>">

                <div class="modal-header bg-primary text-white">
                    <h5 class="modal-title" id="staticBackdropLabel">Edit Data User</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    </button>
                </div>
                <div class="modal-body">

                    <div class="row">
                        <div class="col-6">
                            <div class="form-group">
                                <label for="">ID User</label>
                                <input type="text" name="userid" id="userid" class="form-control" value="<?= $userid ?>" disabled>
                                <div class="invalid-feedback errorUserID"></div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label for="">Nama</label>
                                <input type="text" name="usernama" id="usernama" class="form-control" value="<?= $usernama ?>" placeholder="Masukan Nama..." autocomplete="off">
                                <div class="invalid-feedback errorUserNama"></div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-6">
                            <div class="form-group">
                                <label for="">Email</label>
                                <input type="email" name="useremail" id="useremail" class="form-control" value="<?= $useremail ?>" placeholder="Masukan Email..." autocomplete="off">
                                <div class="invalid-feedback errorUserEmail"></div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label for="">Nomor HP</label>
                                <input type="text" name="userhp" id="userhp" class="form-control" value="<?= $userhp ?>" placeholder="Masukan Nomor HP..." autocomplete="off">
                                <div class="invalid-feedback errorUserHP"></div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-6">
                            <div class="form-group">
                                <label for="">Kata Sandi</label>
                                <input type="password" name="userpassword" id="userpassword" class="form-control" value="<?= $userpassword ?>" placeholder="Masukan Kata Sandi..." autocomplete="off">
                                <div class="invalid-feedback errorUserPassword"></div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label for="">Level</label>
                                <select name="userlevel" id="userlevel" class="form-control">
                                    <option value="">Pilih Level</option>
                                    <option value="">-------------</option>
                                    <?php foreach ($dataLevel as $rowLevel) : ?>
                                        <option value="<?= $rowLevel['levelid'] ?>" <?= ($userlevel == $rowLevel['levelid']) ? "selected" : "" ?>>
                                            <?= $rowLevel['levelnama'] ?></option>
                                    <?php endforeach ?>
                                    <option value="">-------------</option>
                                </select>
                                <div class="invalid-feedback errorUserLevel"></div>
                            </div>
                        </div>
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

                        if (err.errUserID) {
                            $('#userid').addClass('is-invalid');
                            $('.errorUserID').html(err.errUserID);
                        } else {
                            $('#userid').removeClass('is-invalid');
                            $('#userid').addClass('is-valid');
                        }

                        if (err.errUserNama) {
                            $('#usernama').addClass('is-invalid');
                            $('.errorUserNama').html(err.errUserNama);
                        } else {
                            $('#usernama').removeClass('is-invalid');
                            $('#usernama').addClass('is-valid');
                        }

                        if (err.errUserEmail) {
                            $('#useremail').addClass('is-invalid');
                            $('.errorUserEmail').html(err.errUserEmail);
                        } else {
                            $('#useremail').removeClass('is-invalid');
                            $('#useremail').addClass('is-valid');
                        }

                        if (err.errUserHP) {
                            $('#userhp').addClass('is-invalid');
                            $('.errorUserHP').html(err.errUserHP);
                        } else {
                            $('#userhp').removeClass('is-invalid');
                            $('#userhp').addClass('is-valid');
                        }

                        if (err.errUserPassword) {
                            $('#userpassword').addClass('is-invalid');
                            $('.errorUserPassword').html(err.errUserPassword);
                        } else {
                            $('#userpassword').removeClass('is-invalid');
                            $('#userpassword').addClass('is-valid');
                        }

                        if (err.errUserLevel) {
                            $('#userlevel').addClass('is-invalid');
                            $('.errorUserLevel').html(err.errUserLevel);
                        } else {
                            $('#userlevel').removeClass('is-invalid');
                            $('#userlevel').addClass('is-valid');
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