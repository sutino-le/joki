<!-- Modal -->
<div class="modal fade" id="modalDetailPesanan" data-backdrop="static" data-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header bg-dark text-warning">
                <h5 class="modal-title" id="staticBackdropLabel">Detail Pesanan</h5>
            </div>
            <div class="modal-body bg-dark">

                <table class="table">
                    <tr>
                        <td>No</td>
                        <td>Menu</td>
                        <td>Jumlah</td>
                        <td>Total</td>
                    </tr>
                    <?php
                    $no = 1;
                    $totalharga = 0;
                    foreach ($detailPesanan->getResultArray() as $rowDetail) :
                    ?>
                    <tr>
                        <td><?= $no++ ?></td>
                        <td><?= $rowDetail['menunama'] ?></td>
                        <td><?= $rowDetail['psn_jumlah'] . " x " . number_format($rowDetail['menuharga']) ?></td>
                        <td><?= number_format($rowDetail['psn_jumlah'] * $rowDetail['menuharga']) ?></td>
                    </tr>
                    <?php
                        $totalharga += $rowDetail['psn_jumlah'] * $rowDetail['menuharga'];
                    endforeach
                    ?>
                    <tr>
                        <td colspan="3" align="right"><b>Total Pembayaran : </b></td>
                        <td><b><?= number_format($totalharga) ?></b></td>
                    </tr>
                </table>



            </div>
            <div class="modal-footer bg-dark">
                <button type="button" class="btn btn-outline-danger" data-dismiss="modal" id="batal">Tutup</button>
            </div>



        </div>
    </div>
</div>


<script>
$(document).ready(function() {


    $('#batal').click(function(e) {
        e.preventDefault();
        window.location.reload();
    });


});
</script>