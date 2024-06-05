<!-- Modal -->
<div class="modal fade" id="modalEdit" data-backdrop="static" data-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl rounded">
        <div class="modal-content">


            <form action="<?= base_url('formUserUpdate') ?>" method="post" id="formEdit" class="formEdit"
                enctype="multipart/form-data">
                <?= csrf_field(); ?>

                <input type="hidden" name="userid" id="userid" value="<?= $userid ?>">

                <div class="modal-header bg-primary text-white">
                    <h5 class="modal-title" id="staticBackdropLabel">Edit User</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    </button>
                </div>
                <div class="modal-body">

                    <div class="form-group row">
                        <label for="userid" class="col-sm-2 col-form-label">ID User</label>
                        <div class="col-sm-10">
                            <input type="text" name="userid" id="userid" class="form-control" value="<?= $userid ?>"
                                placeholder="Enter ID User..." disabled>
                            <div class="invalid-feedback errorUserID"></div>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="usernama" class="col-sm-2 col-form-label">Nama User</label>
                        <div class="col-sm-10">
                            <input type="text" name="usernama" id="usernama" class="form-control"
                                value="<?= $usernama ?>" placeholder="Enter Nama User..." autocomplete="off">
                            <div class="invalid-feedback errorUserNama"></div>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="useremail" class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-10">
                            <input type="email" name="useremail" id="useremail" class="form-control"
                                value="<?= $useremail ?>" placeholder="Enter Email..." autocomplete="off">
                            <div class="invalid-feedback errorUserEmail"></div>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="userhp" class="col-sm-2 col-form-label">Nomor HP</label>
                        <div class="col-sm-10">
                            <input type="text" name="userhp" id="userhp" class="form-control" value="<?= $userhp ?>"
                                placeholder="Enter Nomor HP..." autocomplete="off">
                            <div class="invalid-feedback errorUserHP"></div>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="userpassword" class="col-sm-2 col-form-label">Password</label>
                        <div class="col-sm-10">
                            <input type="password" name="userpassword" id="userpassword" class="form-control"
                                value="<?= $userpassword ?>" placeholder="Enter Password..." autocomplete="off">
                            <div class="invalid-feedback errorUserPassword"></div>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="useremail" class="col-sm-2 col-form-label">Level</label>
                        <div class="col-sm-10">
                            <select name="userlevel" id="userlevel" class="form-control">
                                <option value="">Pilih Level</option>
                                <option value="">------------</option>
                                <?php foreach ($dataLevel as $rowLevel) : ?>
                                <option value="<?= $rowLevel['levelid'] ?>"
                                    <?= ($rowLevel['levelid'] == $userlevel) ? "selected" : ""  ?>>
                                    <?= $rowLevel['levelnama'] ?></option>
                                <?php endforeach ?>
                            </select>
                            <div class="invalid-feedback errorUserLevel"></div>
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



<script>
$(document).ready(function() {

    $('.formEdit').submit(function(e) {
        e.preventDefault();

        var formData = new FormData($('#formEdit')[0]);

        $.ajax({
            type: "post",
            url: '<?= base_url('formUserUpdate') ?>',
            data: formData,
            contentType: false,
            processData: false,
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