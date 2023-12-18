<!-- Modal -->
<div class="modal fade" id="addModal" tabindex="-1" aria-labelledby="addModalLabel" aria-hidden="true">
    <form action="" method="post" id="addProdakForm">
        @csrf
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addModalLabel">Add prodak</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="errMsgContainer">

                    </div>
                    <div class="form-group">
                        <label for="name">Name prodak</label>
                        <input class="form-control" type="text" name="name" id="name" placeholder="prodak name">
                    </div>
                    <div class="form-group">
                        <label for="price">price</label>
                        <input class="form-control" type="number" name="price" id="price" placeholder="prodak price">
                    </div>
                    <div class="form-group">
                        <label for="nama_proses" class="col-sm-2 control-label">Nama Proses</label>
                        <div class="col-sm-12">
                            <input type="text" class="form-control" id="nama_proses" name="nama_proses" placeholder="Enter Nama Proses" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="klasifikasi_perubahan" class="col-sm-2 control-label">Klasifikasi Perubahan</label>
                        <div class="col-sm-12">
                            <input type="text" class="form-control" id="klasifikasi_perubahan" name="klasifikasi_perubahan" placeholder="Enter Klasifikasi Perubahan" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="pelaksanaan2ndQA" class="col-sm-2 control-label">Pelaksanaan 2nd QA</label>
                        <div class="col-sm-12">
                            <input type="text" class="form-control" id="pelaksanaan2ndQA" name="pelaksanaan2ndQA" placeholder="Enter Pelaksanaan 2nd QA" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="item_perubahan" class="col-sm-2 control-label">Item Perubahan</label>
                        <div class="col-sm-12">
                            <input type="text" class="form-control" id="item_perubahan" name="item_perubahan" placeholder="Enter Item Perubahan" required>
                        </div>
                    </div>
                    <!-- Lanjutkan sesuai dengan field yang Anda tambahkan -->
                    <div class="form-group">
                        <label for="no_lembar_instruksi" class="col-sm-2 control-label">No Lembar Instruksi</label>
                        <div class="col-sm-12">
                            <input type="text" class="form-control" id="no_lembar_instruksi" name="no_lembar_instruksi" placeholder="Enter No Lembar Instruksi" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="tanggal_produksi_saat_perubahan" class="col-sm-2 control-label">Tanggal Produksi Saat Perubahan</label>
                        <div class="col-sm-12">
                            <input type="date" class="form-control" id="tanggal_produksi_saat_perubahan" name="tanggal_produksi_saat_perubahan" placeholder="Enter Tanggal Produksi Saat Perubahan" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="shift" class="col-sm-2 control-label">Shift</label>
                        <div class="col-sm-12">
                            <input type="text" class="form-control" id="shift" name="shift" placeholder="Enter Shift" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="part_number_finish_good" class="col-sm-2 control-label">Part Number Finish Good</label>
                        <div class="col-sm-12">
                            <input type="text" class="form-control" id="part_number_finish_good" name="part_number_finish_good" placeholder="Enter Part Number Finish Good" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="kualitas" class="col-sm-2 control-label">Kualitas</label>
                        <div class="col-sm-12">
                            <select class="form-control" id="kualitas" name="kualitas" required>
                                <option value="ok">OK</option>
                                <option value="ng">NG</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="fakta_ng" class="col-sm-2 control-label">Fakta NG</label>
                        <div class="col-sm-12">
                            <input type="text" class="form-control" id="fakta_ng" name="fakta_ng" placeholder="Enter Fakta NG" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="pcdt" class="col-sm-2 control-label">PCDT</label>
                        <div class="col-sm-12">
                            <select class="form-control" id="pcdt" name="pcdt" required>
                                <option value="resived">Resived</option>
                                <option value="not resived">Not Resived</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="tanggal_perubahan_pcdt" class="col-sm-2 control-label">Tanggal Perubahan PCDT</label>
                        <div class="col-sm-12">
                            <input type="date" class="form-control" id="tanggal_perubahan_pcdt" name="tanggal_perubahan_pcdt" placeholder="Enter Tanggal Perubahan PCDT" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="instruksi_kerja" class="col-sm-2 control-label">Instruksi Kerja</label>
                        <div class="col-sm-12">
                            <select class="form-control" id="instruksi_kerja" name="instruksi_kerja" required>
                                <option value="resived">Resived</option>
                                <option value="not resived">Not Resived</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="tanggal_perubahan_instruksi_kerja" class="col-sm-2 control-label">Tanggal Perubahan Instruksi Kerja</label>
                        <div class="col-sm-12">
                            <input type="date" class="form-control" id="tanggal_perubahan_instruksi_kerja" name="tanggal_perubahan_instruksi_kerja" placeholder="Enter Tanggal Perubahan Instruksi Kerja" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="isir" class="col-sm-2 control-label">ISIR</label>
                        <div class="col-sm-12">
                            <select class="form-control" id="isir" name="isir" required>
                                <option value="resived">Resived</option>
                                <option value="not resived">Not Resived</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="tanggal_perubahan_isir" class="col-sm-2 control-label">Tanggal Perubahan ISIR</label>
                        <div class="col-sm-12">
                            <input type="date" class="form-control" id="tanggal_perubahan_isir" name="tanggal_perubahan_isir" placeholder="Enter Tanggal Perubahan ISIR" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="pemahaman" class="col-sm-2 control-label">Pemahaman</label>
                        <div class="col-sm-12">
                            <select class="form-control" id="pemahaman" name="pemahaman" required>
                                <option value="paham">Paham</option>
                                <option value="kurang paham">Kurang Paham</option>
                                <option value="tidak paham sama sekali">Tidak Paham Sama Sekali</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary add_prodak">Save</button>
                </div>
            </div>
        </div>
    </form>
</div>