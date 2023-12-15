<!-- Modal -->
<div class="modal fade" id="updateModal" tabindex="-1" aria-labelledby="updateModalLabel" aria-hidden="true">
    <form action="" method="post" id="updateProdakForm">
        @csrf
        <input type="hidden" id="up_id">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="updateModalLabel">update prodak</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="errMsgContainer">

                    </div>
                    <div class="form-group">
                        <label for="name">Name prodak</label>
                        <input class="form-control" type="text" name="up_name" id="up_name" placeholder="prodak name">
                    </div>
                    <div class="form-group">
                        <label for="price">price</label>
                        <input class="form-control" type="number" name="up_price" id="up_price" placeholder="prodak price">
                    </div>
                    <div class="form-group">
                        <label for="nama_proses">Nama Proses</label>
                        <input class="form-control" type="text" name="up_nama_proses" id="up_nama_proses" placeholder="Nama Proses">
                    </div>

                    <div class="form-group">
                        <label for="klasifikasi_perubahan">Klasifikasi Perubahan</label>
                        <input class="form-control" type="text" name="up_klasifikasi_perubahan" id="up_klasifikasi_perubahan" placeholder="Klasifikasi Perubahan">
                    </div>

                    <div class="form-group">
                        <label for="pelaksanaan2ndQA">Pelaksanaan 2nd QA</label>
                        <input class="form-control" type="text" name="up_pelaksanaan2ndQA" id="up_pelaksanaan2ndQA" placeholder="Pelaksanaan 2nd QA">
                    </div>

                    <div class="form-group">
                        <label for="item_perubahan">Item Perubahan</label>
                        <input class="form-control" type="text" name="up_item_perubahan" id="up_item_perubahan" placeholder="Item Perubahan">
                    </div>
                    <!-- Lanjutkan menambahkan form-group sesuai dengan penambahan Anda -->
                    <div class="form-group">
                        <label for="no_lembar_instruksi">No Lembar Instruksi</label>
                        <input class="form-control" type="text" name="up_no_lembar_instruksi" id="up_no_lembar_instruksi" placeholder="No Lembar Instruksi">
                    </div>

                    <div class="form-group">
                        <label for="tanggal_produksi_saat_perubahan">Tanggal Produksi Saat Perubahan</label>
                        <input class="form-control" type="text" name="up_tanggal_produksi_saat_perubahan" id="up_tanggal_produksi_saat_perubahan" placeholder="Tanggal Produksi Saat Perubahan">
                    </div>

                    <div class="form-group">
                        <label for="shift">Shift</label>
                        <input class="form-control" type="text" name="up_shift" id="up_shift" placeholder="Shift">
                    </div>

                    <div class="form-group">
                        <label for="part_number_finish_good">Part Number Finish Good</label>
                        <input class="form-control" type="text" name="up_part_number_finish_good" id="up_part_number_finish_good" placeholder="Part Number Finish Good">
                    </div>

                    <div class="form-group">
                        <label for="kualitas">Kualitas</label>
                        <select class="form-control" name="up_kualitas" id="up_kualitas">
                            <option value="ok">OK</option>
                            <option value="ng">NG</option>
                        </select>
                    </div>

                    <!-- Lanjutkan menambahkan form-group sesuai dengan penambahan Anda -->
                    <div class="form-group">
                        <label for="fakta_ng">Fakta NG</label>
                        <input class="form-control" type="text" name="up_fakta_ng" id="up_fakta_ng" placeholder="Fakta NG">
                    </div>

                    <div class="form-group">
                        <label for="pcdt">PCDT</label>
                        <select class="form-control" name="up_pcdt" id="up_pcdt">
                            <option value="resived">Resived</option>
                            <option value="not resived">Not Resived</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="tanggal_perubahan_pcdt">Tanggal Perubahan PCDT</label>
                        <input class="form-control" type="text" name="up_tanggal_perubahan_pcdt" id="up_tanggal_perubahan_pcdt" placeholder="Tanggal Perubahan PCDT">
                    </div>

                    <div class="form-group">
                        <label for="instruksi_kerja">Instruksi Kerja</label>
                        <select class="form-control" name="up_instruksi_kerja" id="up_instruksi_kerja">
                            <option value="resived">Resived</option>
                            <option value="not resived">Not Resived</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="tanggal_perubahan_instruksi_kerja">Tanggal Perubahan Instruksi Kerja</label>
                        <input class="form-control" type="text" name="up_tanggal_perubahan_instruksi_kerja" id="up_tanggal_perubahan_instruksi_kerja" placeholder="Tanggal Perubahan Instruksi Kerja">
                    </div>

                    <div class="form-group">
                        <label for="isir">ISIR</label>
                        <select class="form-control" name="up_isir" id="up_isir">
                            <option value="resived">Resived</option>
                            <option value="not resived">Not Resived</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="tanggal_perubahan_isir">Tanggal Perubahan ISIR</label>
                        <input class="form-control" type="text" name="up_tanggal_perubahan_isir" id="up_tanggal_perubahan_isir" placeholder="Tanggal Perubahan ISIR">
                    </div>

                    <div class="form-group">
                        <label for="pemahaman">Pemahaman</label>
                        <select class="form-control" name="up_pemahaman" id="up_pemahaman">
                            <option value="paham">Paham</option>
                            <option value="kurang paham">Kurang Paham</option>
                            <option value="tidak paham sama sekali">Tidak Paham Sama Sekali</option>
                        </select>
                    </div>



                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary update_prodak">Update</button>
                </div>
            </div>
        </div>
    </form>
</div>