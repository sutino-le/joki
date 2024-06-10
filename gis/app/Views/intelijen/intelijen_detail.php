<!-- Modal -->
<div class="modal fade" id="modalDetail" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">




            <div class="modal-header bg-primary text-white">
                <h5 class="modal-title" id="staticBackdropLabel">Detail Intelijen</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                </button>
            </div>
            <div class="modal-body">

                <div class="row text-center">
                    <div class="col-12">
                        <?= $loklink ?>
                    </div>
                </div>

                <div class="row mt-2">
                    <div class="col-12">
                        <table>
                            <tr>
                                <td>Judul</td>
                                <td>:</td>
                                <td><b>
                                        <?= $intel_judul ?>
                                    </b></td>
                            </tr>
                            <tr>
                                <td>Tanggal</td>
                                <td>:</td>
                                <td><b>
                                        <?= date('d-M-Y', strtotime($intel_tanggal)) ?>
                                    </b></td>
                            </tr>
                            <tr>
                                <td>Kategori</td>
                                <td>:</td>
                                <td><b>
                                        <?= $katnama ?>
                                    </b></td>
                            </tr>
                            <tr>
                                <td>Lokasi</td>
                                <td>:</td>
                                <td><b>
                                        <?= $loknama ?>
                                    </b></td>
                            </tr>
                            <tr>
                                <td>Level</td>
                                <td>:</td>
                                <td><b>
                                        <?= $intel_level ?>
                                    </b></td>
                            </tr>
                            <tr>
                                <td>Deskripsi</td>
                                <td>:</td>
                                <td><?= $intel_deskripsi ?></td>
                            </tr>
                        </table>
                    </div>
                </div>


            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-sm btn-danger" data-dismiss="modal" id="batal">Tutup</button>
            </div>


        </div>
    </div>
</div>