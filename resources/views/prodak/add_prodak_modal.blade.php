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

                    <!-- NAMA PROSES -->
                    <div class="row mb-3">
                        <div class="col-md-3">
                            <label for="nama_proses" class="form-control" style="font-size: 15px; text-align: center">Nama Proses</label>
                        </div>
                        <div class="col-md-9">
                            <input type="text" class="form-control" name="nama_proses" id="nama_proses" placeholder="Insert Text (Area Text)" style="text-align: center" />
                        </div>
                    </div>
                    <!-- END OF NAMA PROSES -->

                    <!-- KLASIFIKASI PERUBAHAN -->
                    <div class="row mb-3">
                        <div class="col-md-3">
                            <label for="klasifikasi_perubahan" class="form-control" style="font-size: 15px; text-align: center">Klasifikasi Perubahan</label>
                        </div>
                        <div class="col-md-9">
                            <label class="btn btn-outline-primary" style="width: 100%;">
                                <input class="form-check-input" type="radio" name="klasifikasi_perubahan" value="design" required>
                                Design
                            </label>

                            <label class="btn btn-outline-primary" style="width: 100%;">
                                <input class="form-check-input" type="radio" name="klasifikasi_perubahan" value="proses" required>
                                Proses
                            </label>
                        </div>
                    </div>
                    <!-- END OF KLASIFIKASI PERUBAHAN -->

                    <!-- PELAKSANAAN 2ND QA -->
                    <div class="row mb-3">
                        <div class="col-md-3">
                            <label for="pelaksanaan2ndQA" class="form-control" style="font-size: 15px; text-align: center">Pelaksanaan 2nd QA</label>
                        </div>
                        <div class="col-md-9 pt-1">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" id="changesMade" name="pelaksanaan2ndQA" value="ada" />
                                <label class="form-check-label" for="changesMade">
                                    Ada
                                </label>
                            </div>

                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" id="newProducts" name="pelaksanaan2ndQA" value="tidak" />
                                <label class="form-check-label" for="newProducts">
                                    Tidak Ada
                                </label>
                            </div>
                        </div>
                    </div>
                    <!-- END OF PELAKSANAAN 2ND QA -->

                    <!-- ITEM PERUBAHAN -->
                    <div class="row mb-3">
                        <div class="col-md-3">
                            <label for="item_perubahan" class="form-control" style="font-size: 15px; text-align: center">Item Perubahan</label>
                        </div>
                        <div class="col-md-9">
                            <input type="text" class="form-control" name="item_perubahan" id="item_perubahan" placeholder="Insert Text (Area Text)" style="text-align: center" />
                        </div>
                    </div>
                    <!-- END OF ITEM PERUBAHAN -->

                    <!-- LEMBAR INSTRUKSI -->
                    <div class="row mb-3">
                        <div class="col-md-3">
                            <label for="no_lembar_instruksi" class="form-control" style="font-size: 15px; text-align: center">Lembar Instruksi</label>
                        </div>
                        <div class="col-md-9">
                            <input type="text" class="form-control" name="no_lembar_instruksi" id="no_lembar_instruksi" placeholder="Insert Text (Area Text)" style="text-align: center" />
                        </div>
                    </div>
                    <!-- END OF LEMBAR INSTRUKSI -->

                    <!-- PRODUKSI SAAT PERUBAHAN -->
                    <div class="row mb-3">
                        <div class="col-md-3">
                            <label for="tanggal_produksi_saat_perubahan" class="form-control" style="font-size: 15px; text-align: center">Tanggal Produksi saat Perubahan</label>
                        </div>
                        <div class="col-md-9">
                            <input class="form-control" type="date" id="tanggal_produksi_saat_perubahan" name="tanggal_produksi_saat_perubahan" />
                        </div>
                    </div>
                    <!-- END OF PRODUKSI SAAT PERUBAHAN -->

                    <!-- PART NUMBER FINISH GOOD -->
                    <div class="row mb-3">
                        <div class="col-md-3">
                            <label for="part_number_finish_good" class="form-control" style="font-size: 15px; text-align: center">Part Number Finish Good</label>
                        </div>
                        <div class="col-md-9">
                            <input type="text" class="form-control" name="part_number_finish_good" id="part_number_finish_good" placeholder="Insert Text (Area Text)" style="text-align: center" />
                            <small class="form-text text-muted">Part number pertama yang diproduksi pertama kali saat terjadi perubahan</small>
                        </div>
                    </div>
                    <!-- END OF PART NUMBER -->

                    <!-- KUALITAS -->
                    <div class="row mb-3">
                        <div class="col-md-3">
                            <label for="kualitas" class="form-control" style="font-size: 15px; text-align: center">Kualitas</label>
                        </div>
                        <div class="col-md-9 pt-1">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" id="kualitasOK" name="kualitas" value="OK" />
                                <label class="form-check-label" for="kualitasOK">
                                    OK
                                </label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" id="kualitasNG" name="kualitas" value="NG" />
                                <label class="form-check-label" for="kualitasNG">
                                    NG
                                </label>
                            </div>
                        </div>
                    </div>
                    <!-- END OF KUALITAS -->

                    <!-- FAKTA - FAKTA NG -->
                    <div class="row mb-3">
                        <div class="col-md-3">
                            <label for="fakta_ng" class="form-control" style="font-size: 15px; text-align: center">Fakta-Fakta NG</label>
                        </div>
                        <div class="col-md-9">
                            <input type="text" class="form-control" name="fakta_ng" id="fakta_ng" placeholder="Insert Text (Area Text)" style="text-align: center" />
                        </div>
                    </div>
                    <!-- END OF FAKTA NG -->

                    <!-- PCDT -->
                    <div class="row mb-3">
                        <div class="col-md-3">
                            <label for="pcdt" class="form-control" style="font-size: 15px; text-align: center">PCDT</label>
                        </div>
                        <div class="col-md-9 pt-1">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" id="pcdtRevised" name="pcdt" value="Revised" />
                                <label class="form-check-label" for="pcdtRevised">
                                    Revised
                                </label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" id="pcdtNotRevised" name="pcdt" value="Not Revised" />
                                <label class="form-check-label" for="pcdtNotRevised">
                                    Not Revised
                                </label>
                            </div>
                            <div class="col-md-3">
                                <label for="issued_date_pcdt" class="form-control" style="font-size: 15px; text-align: center">Issued Date</label>
                            </div>
                            <div class="col space-between">
                                <input class="form-control" type="date" id="issued_date_pcdt" name="issued_date_pcdt" />
                            </div>
                        </div>
                    </div>
                    <!-- END OF PCDT -->

                    <!-- INSTRUKSI KERJA -->
                    <div class="row g-3">
                        <div class="col-md-3">
                            <label class="form-label">Instruksi Kerja</label>
                        </div>
                        <div class="col-md-3 pt-1">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" id="instruksi_revised" name="instruksi" value="revised">
                                <label class="form-check-label" for="instruksi_revised">Revised</label>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <label class="form-label">Not Revised</label>
                        </div>
                        <div class="col-md-3">
                            <input class="form-control" type="date" id="example-date-input" name="instruksi_date" />
                        </div>
                    </div>
                    <!-- END OF INSTRUKSI KERJA -->

                    <!-- ISIR -->
                    <div class="row g-3">
                        <div class="col-md-3">
                            <label class="form-label">ISIR</label>
                        </div>
                        <div class="col-md-3 pt-1">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" id="isir_revised" name="isir" value="revised">
                                <label class="form-check-label" for="isir_revised">Revised</label>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <label class="form-label">Not Revised</label>
                        </div>
                        <div class="col-md-3">
                            <input class="form-control" type="date" id="example-date-input" name="isir_date" />
                        </div>
                    </div>
                    <!-- END OF ISIR -->

                    <!-- PEMAHAMAN BEFORE AFTER -->
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
                    <!-- END OF BEFORE AFTER -->

                    <!-- ULASAN -->
                    <div class="row mb-3 mt-2">
                        <div class="col-md-3">
                            <label for="fakta_ng" class="form-control" style="font-size: 15px; text-align: center">Ulasan</label>
                        </div>
                        <div class="col-md-9">
                            <input type="text" class="form-control" name="fakta_ng" id="fakta_ng" placeholder="Insert Text (Area Text)" style="text-align: center" />
                        </div>
                    </div>
                    <!-- END OF ULASAN -->

                    <!-- HANCHOU -->
                    <div class="row g-3">
                        <div class="col-md-3">
                            <label class="form-label">Hanchou</label>
                        </div>
                        <div class="col-md-4">
                            <script>
                                // Simulasikan proses login
                                var user = {
                                    name: "Nama Hanchou"
                                };
                                localStorage.setItem("user", JSON.stringify(user));

                                // Isi input dengan nama pengguna yang login saat itu
                                window.onload = function() {
                                    var loggedInUser = JSON.parse(
                                        localStorage.getItem("user")
                                    );
                                    if (loggedInUser) {
                                        document.getElementById("username").value =
                                            loggedInUser.name;
                                    }
                                };
                            </script>

                            <div class="col-md-10">
                                <input type="text" class="form-control" id="username" placeholder="Nama Hanchou" disabled />
                            </div>
                        </div>
                    </div>
                    <!-- END OF HANCHOU -->



                    <!-- TOMBOL SUBMIT -->
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary add_prodak">Save</button>
                    </div>
                </div>
            </div>
    </form>
</div>