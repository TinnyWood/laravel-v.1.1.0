@extends('layout.main')

@section('content')
<!-- Main Content -->

<div class="pagetitle">
    <h1>Histori Perubahan Proses dan Perubahan Desain</h1>
</div><!-- End Page Title -->

<!-- Pills Tabs -->
<div class="mb-3">
    <ul class="nav nav-pills mb-2 mt-1" nav-fill id="pills-tab" role="tablist" style="border-color: black;">
        <li class="nav-item" role="presentation">
            <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">LINE 1</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">LINE 2</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">LINE 3</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">LINE 4</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">LINE 5</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">LINE 6</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">LINE 7</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">LINE 8</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">LINE 9</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">LINE 10</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">LINE 11</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">LINE 12</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">LINE 13</button>
        </li>
    </ul>
</div>


<section class="section dashboard">

    <!---------------------------------------------------------- BUTTON ------------------------------------------------------------------------------>

    <form class="row g-3 align-items-center mb-3" style="size: 10px;">
        <div class="col">
            <div class="input-group">
                <span class="input-group-text" id="inputGroup-sizing-default1">Tanggal Perubahan</span>
                <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default1">
            </div>
        </div>
        <div class="col">
            <div class="input-group">
                <span class="input-group-text" id="inputGroup-sizing-default2">Part Number</span>
                <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default2">
            </div>
        </div>
        <div class="col">
            <div class="input-group">
                <span class="input-group-text" id="inputGroup-sizing-default3">Nama Perubahan</span>
                <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default3">
            </div>
        </div>
        <div class="col-auto">
            <button type="submit" class="btn btn-primary">Search</button>
        </div>
    </form>
    <div class="d-flex md-4 justify-content-end">
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#ExtralargeModal">
            ADD +
        </button>
    </div>
    <div class="table-responsive mt-3">
        <table class="table table-bordered">
            <thead class="table-primary">
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">2nd QA</th>
                    <th scope="col">Klasifikasi Informasi Perubahan</th>
                    <th scope="col">No Lembar Instruksi</th>
                    <th scope="col">Item Perubahan</th>
                    <th scope="col">Nama Proses</th>
                    <th scope="col">Tanggal Produksi saat Perubahan</th>
                    <th scope="col">Part Number Finish Good yang berubah</th>
                    <th scope="col">Kuantitas</th>
                    <th scope="col">Fakta NG</th>
                    <th scope="col">PCDT</th>
                    <th scope="col">Tanggal Issue PCDT</th>
                    <th scope="col">IK</th>
                    <th scope="col">Tanggal Issue IK</th>
                    <th scope="col">ISIR</th>
                    <th scope="col">Tanggal Issue ISIR</th>
                    <th scope="col">Pemahaman Before & After</th>
                    <th scope="col">Hanchou</th>
                    <th scope="col">Kaka Richo</th>
                    <th scope="col">MGR MFG</th>
                    <th scope="col">GM MFG</th>
                    <th scope="col">MGR QC</th>
                    <th scope="col">Note from QC</th>
                </tr>
            </thead>
            <tbody>
                <!-- DISINI BUAT FOREACH PHP -->
                <tr>
                    <th scope="row">ID</th>
                    <td>Data</td>
                    <td>Data</td>
                    <td>Data</td>
                    <td>Data 3</td>
                    <td>Data 3</td>
                    <td>Data 3</td>
                    <td>Data 3</td>
                    <td>Data 3</td>
                    <td>Data 3</td>
                    <td>Data 3</td>

                </tr>
                <!-- Baris lainnya di sini -->
            </tbody>
        </table>
    </div>
    <!-- ============================================================ MODAL ======================================================================= -->
    <div class="modal fade" id="ExtralargeModal" tabindex="-1">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Tambah Data</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">

                    <!-- NAMA PROSES -->
                    <form class="row g-3">
                        <div class="col-md-3">
                            <label class="form-control" style="font-size: 15px; text-align: center;">Nama Proses</label>
                        </div>

                        <div class="col-md-9">
                            <input type="text" class="form-control" placeholder="Insert Text (Area Text)" style="text-align: center;">
                        </div>
                        <!-- END OF NAMA PROSES -->

                        <!-- KLASIFIKASI PERUBAHAN -->
                        <div class="col-md-3">
                            <label class="form-control" style="font-size: 15px; text-align: center;">Klasifikasi Perubahan</label>
                        </div>

                        <div class="col-md-9">
                            <ul class="nav nav-pills d-flex" id="pills-tab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-selected="true">Home</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">Profile</button>
                                </li>
                            </ul>
                        </div>
                        <!-- END OF KLASIFIKASI PERUBAHAN -->

                        <!-- PELAKSANAAN 2ND QA -->
                        <div class="col-md-3">
                            <label class="form-control" style="font-size: 15px; text-align: center;">Pelaksanaan 2nd QA</label>
                        </div>
                        <div class="col-md-9 pt-1">
                            <div class="row">
                                <div class="col">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="changesMade">
                                        <label class="form-check-label" for="changesMade">
                                            Ada
                                        </label>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="newProducts">
                                        <label class="form-check-label" for="newProducts">
                                            Tidak Ada
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- END OF 2ND QA -->

                        <!-- ITEM PERUBAHAN -->
                        <div class="col-md-3">
                            <label class="form-control" style="font-size: 15px; text-align: center;">Item Perubahan</label>
                        </div>

                        <div class="col-md-9">
                            <input type="text" class="form-control" placeholder="Insert Text (Area Text)" style="text-align: center;">
                        </div>
                        <!-- END OF ITEM PERUBAHAN -->

                        <!-- LEMBAR INSTRUKSI -->
                        <div class="col-md-3">
                            <label class="form-control" style="font-size: 15px; text-align: center;">Lembar Instruksi</label>
                        </div>

                        <div class="col-md-9">
                            <input type="text" class="form-control" placeholder="Insert Text (Area Text)" style="text-align: center;">
                        </div>
                        <!-- END OF LEMBAR INSTRUKSI -->

                        <!-- PRODUKSI SAAT PERUBAHAN -->
                        <div class="row g-3">
                            <div class="col-md-3">
                                <label class="form-control" style="font-size: 15px; text-align: center;">Tanggal Produksi saat Perubahan</label>
                            </div>

                            <div class="col-md-3">
                                <input class="form-control" type="date" id="example-date-input">
                            </div>

                            <div class="col-md-3">
                                <label class="form-control" style="font-size: 15px; text-align: center;">Shift</label>
                            </div>

                            <div class="col-md-3 pt-1">
                                <div class="row">
                                    <div class="col">
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="checkbox" id="changesMade">
                                            <label class="form-check-label" for="changesMade">
                                                Shift 1
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="checkbox" id="newProducts">
                                            <label class="form-check-label" for="newProducts">
                                                Shift 2
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- END OF PRODUKSI SAAT PERUBAHAN -->

                        <!-- PART NUMBER FINISH GOOD -->
                        <div class="col-md-3">
                            <label class="form-control" style="font-size: 15px; text-align: center;">Part Number Finish Good</label>
                        </div>

                        <div class="col-md-9">
                            <input type="text" class="form-control" placeholder="Insert Text (Area Text)" style="text-align: center;">
                            <small class="form-text text-muted" style="size: 1px;">Part number pertama yang di produksi pertama kali saat terjadi perubahan</small>
                        </div>
                        <!-- END OF PART NUMBER -->

                        <!-- KUALITAS -->
                        <div class="col-md-3">
                            <label class="form-control" style="font-size: 15px; text-align: center;">Kualitas</label>
                        </div>
                        <div class="col-md-9 pt-1">
                            <div class="row">
                                <div class="col">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="changesMade">
                                        <label class="form-check-label" for="changesMade">
                                            OK
                                        </label>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="newProducts">
                                        <label class="form-check-label" for="newProducts">
                                            NG
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- END OF KUALITAS -->

                        <!-- FAKTA - FAKTA NG -->
                        <div class="col-md-3">
                            <label class="form-control" style="font-size: 15px; text-align: center;">Fakta-Fakta NG</label>
                        </div>
                        <div class="col-md-9">
                            <input type="text" class="form-control" placeholder="Insert Text (Area Text)" style="text-align: center;">
                        </div>
                        <!-- END OF FAKTA NG -->

                        <!-- PCDT -->
                        <div class="col-md-3">
                            <label class="form-control" style="font-size: 15px; text-align: center;">PCDT</label>
                        </div>
                        <div class="col-md-9 pt-1">
                            <div class="row">
                                <div class="col">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="changesMade">
                                        <label class="form-check-label" for="changesMade">
                                            REVISIED
                                        </label>
                                    </div>
                                </div>
                                <div class="col pt-1">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="newProducts">
                                        <label class="form-check-label" for="newProducts">
                                            NOT REVISIED
                                        </label>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <label class="form-control" style="font-size: 15px; text-align: center;">Issued Date</label>
                                </div>

                                <div class="col space-between">
                                    <input class="form-control" type="date" id="example-date-input">
                                </div>
                            </div>
                        </div>
                        <!-- END OF PCDT -->

                        <!-- INSTRUKSI KERJA -->
                        <div class="col-md-3">
                            <label class="form-control" style="font-size: 15px; text-align: center;">Instruksi Kerja</label>
                        </div>
                        <div class="col-md-9 pt-1">
                            <div class="row">
                                <div class="col">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="changesMade">
                                        <label class="form-check-label" for="changesMade">
                                            REVISIED
                                        </label>
                                    </div>
                                </div>
                                <div class="col pt-1">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="newProducts">
                                        <label class="form-check-label" for="newProducts">
                                            NOT REVISIED
                                        </label>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <label class="form-control" style="font-size: 15px; text-align: center;">Issued Date</label>
                                </div>

                                <div class="col space-between">
                                    <input class="form-control" type="date" id="example-date-input">
                                </div>
                            </div>
                        </div>
                        <!-- END OF INSTRUKSI KERJA -->

                        <!-- ISIR -->
                        <div class="col-md-3">
                            <label class="form-control" style="font-size: 15px; text-align: center;">ISIR</label>
                        </div>
                        <div class="col-md-9 pt-1">
                            <div class="row">
                                <div class="col">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="changesMade">
                                        <label class="form-check-label" for="changesMade">
                                            REVISIED
                                        </label>
                                    </div>
                                </div>
                                <div class="col pt-1">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="newProducts">
                                        <label class="form-check-label" for="newProducts">
                                            NOT REVISIED
                                        </label>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <label class="form-control" style="font-size: 15px; text-align: center;">Issued Date</label>
                                </div>

                                <div class="col space-between">
                                    <input class="form-control" type="date" id="example-date-input">
                                </div>
                            </div>
                        </div>
                        <!-- END OF ISIR -->


                        <!-- PEMAHAMAN BEFORE AFTER -->
                        <div class="col-md-3">
                            <label class="form-control" style="font-size: 15px; text-align: center;">Pemahaman Before & After</label>
                        </div>
                        <div class="col-md-9 pt-1">
                            <div class="row">
                                <div class="col">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="changesMade">
                                        <label class="form-check-label" for="changesMade">
                                            Paham
                                        </label>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="newProducts">
                                        <label class="form-check-label" for="newProducts">
                                            Kurang Paham
                                        </label>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="newProducts">
                                        <label class="form-check-label" for="newProducts">
                                            Tidak Sama Sekali
                                        </label>
                                    </div>
                                </div>
                                <div class="col"></div>
                            </div>
                            <small class="form-text text-muted" style="size: 1px;">Pemahaman sebelum dan sesudah perubahan</small>
                        </div>
                        <!-- END OF BEFORE AFTER -->



                        <!-- HANCHOU -->
                        <div class="col-md-3">
                            <label class="form-control" style="font-size: 15px; text-align: center;">Hanchou</label>
                        </div>
                        <div class="col-md-4">
                            <script>
                                // Simulasikan proses login
                                var user = {
                                    name: "Ganes"
                                };
                                localStorage.setItem('user', JSON.stringify(user));

                                // Isi input dengan nama pengguna yang login saat itu
                                window.onload = function() {
                                    var loggedInUser = JSON.parse(localStorage.getItem('user'));
                                    if (loggedInUser) {
                                        document.getElementById('username').value = loggedInUser.name;
                                    }
                                };
                            </script>

                            <div class="col-md-10">
                                <input type="text" class="form-control" id="username" placeholder="Nama Hanchou" disabled>
                            </div>

                        </div>
                        <!-- END OF HANCHOU -->

                        <!-- TOMBOL SUBMIT -->
                        <div class="text-end">
                            <button type="submit" class="btn btn-dark">Submit</button>
                        </div>

                        <!-- DAH GITU AJA -->
                    </form><!-- End No Labels Form -->

                </div><!--End of modal body-->
            </div>
        </div>
    </div><!-- End Extra Large Modal-->
</section>
</div>
@endsection