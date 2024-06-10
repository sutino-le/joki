<!-- Modal -->
<div class="modal fade" id="modalTambah" data-backdrop="static" data-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">


            <form action="<?= base_url('formTambahIntelijenSimpan') ?>" class="formsimpan">
                <?= csrf_field(); ?>

                <div class="modal-header bg-primary text-white">
                    <h5 class="modal-title" id="staticBackdropLabel">Tambah Data Intelijen</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    </button>
                </div>
                <div class="modal-body">

                    <div class="form-group">
                        <label for="">Judul</label>
                        <input type="text" name="intel_judul" id="intel_judul" class="form-control"
                            placeholder="Masukan Judul..." autocomplete="off">
                        <div class="invalid-feedback errorIntelijenJudul"></div>
                    </div>

                    <div class="form-group">
                        <label for="">Tanggal</label>
                        <input type="date" name="intel_tanggal" id="intel_tanggal" class="form-control"
                            placeholder="Masukan Nama Intelijen..." autocomplete="off">
                        <div class="invalid-feedback errorIntelijenTanggal"></div>
                    </div>

                    <div class="form-group">
                        <label for="">Deskripsi</label>
                        <textarea name="intel_deskripsi" id="intel_deskripsi" class="form-control"
                            placeholder="Masukan Deskripsi..."></textarea>
                    </div>

                    <div class="form-group">
                        <label for="">Kategori</label>
                        <select name="intel_katid" id="intel_katid" class="form-control">
                            <option value="">Pilih Kategori</option>
                            <option value=""></option>
                            <?php foreach ($dataKategori as $rowKategori) : ?>
                            <option value="<?= $rowKategori['katid'] ?>"><?= $rowKategori['katnama'] ?></option>
                            <?php endforeach ?>
                        </select>
                        <div class="invalid-feedback errorIntelijenKategori"></div>
                    </div>

                    <div class="form-group">
                        <label for="">Lokasi</label>
                        <select name="intel_lokid" id="intel_lokid" class="form-control">
                            <option value="">Pilih Lokasi</option>
                            <option value=""></option>
                            <?php foreach ($dataLokasi as $rowLokasi) : ?>
                            <option value="<?= $rowLokasi['lokid'] ?>"><?= $rowLokasi['loknama'] ?></option>
                            <?php endforeach ?>
                        </select>
                        <div class="invalid-feedback errorIntelijenLokasi"></div>
                    </div>

                    <div class="form-group">
                        <label for="">Level</label>
                        <select name="intel_level" id="intel_level" class="form-control">
                            <option value="">Pilih Level</option>
                            <option value=""></option>
                            <option value="Rendah">Rendah</option>
                            <option value="Sedang">Sedang</option>
                            <option value="Tinggi">Tinggi</option>
                        </select>
                        <div class="invalid-feedback errorIntelijenLevel"></div>
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

                    if (err.errIntelijenJudul) {
                        $('#intel_judul').addClass('is-invalid');
                        $('.errorIntelijenJudul').html(err.errIntelijenJudul);
                    } else {
                        $('#intel_judul').removeClass('is-invalid');
                        $('#intel_judul').addClass('is-valid');
                    }

                    if (err.errIntelijenTanggal) {
                        $('#intel_tanggal').addClass('is-invalid');
                        $('.errorIntelijenTanggal').html(err.errIntelijenTanggal);
                    } else {
                        $('#intel_tanggal').removeClass('is-invalid');
                        $('#intel_tanggal').addClass('is-valid');
                    }

                    if (err.errIntelijenKategori) {
                        $('#intel_katid').addClass('is-invalid');
                        $('.errorIntelijenKategori').html(err.errIntelijenKategori);
                    } else {
                        $('#intel_katid').removeClass('is-invalid');
                        $('#intel_katid').addClass('is-valid');
                    }

                    if (err.errIntelijenLokasi) {
                        $('#intel_lokid').addClass('is-invalid');
                        $('.errorIntelijenLokasi').html(err.errIntelijenLokasi);
                    } else {
                        $('#intel_lokid').removeClass('is-invalid');
                        $('#intel_lokid').addClass('is-valid');
                    }

                    if (err.errIntelijenLevel) {
                        $('#intel_level').addClass('is-invalid');
                        $('.errorIntelijenLevel').html(err.errIntelijenLevel);
                    } else {
                        $('#intel_level').removeClass('is-invalid');
                        $('#intel_level').addClass('is-valid');
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