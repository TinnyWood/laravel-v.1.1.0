<!-- Modal -->
<!-- <div class="modal fade" id="addModal" tabindex="-1" aria-labelledby="addModalLabel" aria-hidden="true">
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
<!-- <div class="form-group">
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
</div> -->


<div class="modal fade" id="addModal" tabindex="-1" aria-labelledby="addModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Tambah Data</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!-- NAMA PROSES -->
                <form action="{{ route('add.prodak') }}" method="post" id="addProdakForm">
                    @csrf
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
                            <div class="d-flex justify-content-between gap-3">
                                <label class="btn btn-outline-primary" for="design" style="width: 100%;">
                                    <input class="form-check-input" type="radio" name="klasifikasi_perubahan" id="design" value="design" required>
                                    Design
                                </label>

                                <label class="btn btn-outline-primary" for="Proses" style="width: 100%;">
                                    <input class="form-check-input" type="radio" name="klasifikasi_perubahan" id="Proses" value="proses" required>
                                    Proses
                                </label>
                            </div>
                        </div>
                    </div>
                    <!-- END OF KLASIFIKASI PERUBAHAN -->

                    <!-- PELAKSANAAN 2ND QA -->
                    <div class="row mb-3">
                        <div class="col-md-3">
                            <label for="pelaksanaan2ndQA" class="form-control" style="font-size: 15px; text-align: center">Pelaksanaan 2nd QA</label>
                        </div>
                        <div class="col-md-9 pt-1">
                            <div class="row">
                                <div class="col">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="changesMade" name="pelaksanaan2ndQA" value="ada" />
                                        <label class="form-check-label" for="changesMade">
                                            Ada
                                        </label>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="newProducts" name="pelaksanaan2ndQA" value="tidak" />
                                        <label class="form-check-label" for="newProducts">
                                            Tidak Ada
                                        </label>
                                    </div>
                                </div>
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
                        <div class="col-md-3">
                            <input class="form-control" type="date" id="tanggal_produksi_saat_perubahan" name="tanggal_produksi_saat_perubahan" />
                        </div>
                        <div class="col-md-3">
                            <label for="shift" class="form-control" style="font-size: 15px; text-align: center">Shift</label>
                        </div>
                        <div class="col-md-3 pt-1">
                            <div class="row">
                                <div class="col">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="shift1" name="shift" value="shift1" />
                                        <label class="form-check-label" for="shift1">
                                            Shift 1
                                        </label>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="shift2" name="shift" value="shift2" />
                                        <label class="form-check-label" for="shift2">
                                            Shift 2
                                        </label>
                                    </div>
                                </div>
                            </div>
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
                            <div class="row">
                                <div class="col">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="kualitasOK" name="kualitas" value="OK" />
                                        <label class="form-check-label" for="kualitasOK">
                                            OK
                                        </label>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="kualitasNG" name="kualitas" value="NG" />
                                        <label class="form-check-label" for="kualitasNG">
                                            NG
                                        </label>
                                    </div>
                                </div>
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
                            <div class="row">
                                <div class="col">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="pcdtRevised" name="pcdt" value="Revised" />
                                        <label class="form-check-label" for="pcdtRevised">
                                            Revised
                                        </label>
                                    </div>
                                </div>
                                <div class="col pt-1">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="pcdtNotRevised" name="pcdt" value="Not Revised" />
                                        <label class="form-check-label" for="pcdtNotRevised">
                                            Not Revised
                                        </label>
                                    </div>
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
                                    <input class="form-check-input" type="checkbox" id="instruksi_revised" name="instruksi" value="revised">
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
                                    <input class="form-check-input" type="checkbox" id="isir_revised" name="isir" value="revised">
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
                            <button type="button" class="btn btn-primary add_prodak">Save</button>
                        </div>

                </form>
                <!-- End No Labels Form -->
            </div>
            <!--End of modal body-->
        </div>
    </div>
</div>