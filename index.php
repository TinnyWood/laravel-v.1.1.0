<?php
include 'config.php';
$data = query("SELECT * FROM line1");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Page Title</title>
    <!-- Link to Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Your Custom CSS (if any) -->
    <!-- SweetAlert CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@10">

    <!-- SweetAlert JS -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

    <style>
        body {
            padding-top: 56px;
            /* Adjusted for fixed navbar height */
        }

        .sidebar {
            height: 100%;
            width: 250px;
            position: fixed;
            z-index: 1;
            top: 0;
            left: 0;
            background-color: #111;
            padding-top: 20px;
            padding-left: 10px;
            color: white;
        }

        .content {
            margin-left: 260px;
            /* Adjusted for sidebar width */
            padding: 20px;
        }
    </style>
</head>

<body>
    <div class="content">
        <!-- Navigation Bar -->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
            <a class="navbar-brand" href="#">Your Website</a>
        </nav>

        <!-- Sidebar -->
        <div class="sidebar">
            <ul class="nav flex-column">
                <li class="nav-item">
                    <a class="nav-link active" href="#">Dashboard</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Menu Item 1</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Menu Item 2</a>
                </li>
                <!-- Add more menu items as needed -->
            </ul>
        </div>
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
            Add New Data
        </button>
        <div class="modal" id="myModal">
            <div class="modal-dialog">
                <div class="modal-content">

                    <!-- Modal Header -->
                    <div class="modal-header">
                        <h4 class="modal-title">Add New Data</h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>

                    <!-- Modal Body -->
                    <div class="modal-body">
                        <!-- Add your form fields here -->
                        <form action="" method="POST" id="dataForm">
                            <!-- Add your input fields corresponding to the database columns -->
                            <div class="form-group">
                                <label for="name">Name:</label>
                                <input type="text" class="form-control" id="name" name="name" required>
                            </div>
                            <div class="form-group">
                                <label for="price">Price:</label>
                                <input type="number" class="form-control" id="price" name="price" required>
                            </div>

                            <!-- Continue adding input fields for the remaining columns -->
                            <div class="form-group">
                                <label for="nama_proses">Nama Proses:</label>
                                <input type="text" class="form-control" id="nama_proses" name="nama_proses">
                            </div>

                            <div class="form-group">
                                <label for="klasifikasi_perubahan">Klasifikasi Perubahan:</label>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="klasifikasi_perubahan" id="design" value="Design">
                                    <label class="form-check-label" for="design">Design</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="klasifikasi_perubahan" id="proses" value="Proses">
                                    <label class="form-check-label" for="proses">Proses</label>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="pelaksanaan2ndQA">Pelaksanaan 2nd QA:</label>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="pelaksanaan2ndQA" id="pelaksanaan2ndQA_O" value="O">
                                    <label class="form-check-label" for="pelaksanaan2ndQA_O">O</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="pelaksanaan2ndQA" id="pelaksanaan2ndQA_X" value="X">
                                    <label class="form-check-label" for="pelaksanaan2ndQA_X">X</label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="item_perubahan">Item Perubahan:</label>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="item_perubahan" id="item_perubahan_O" value="O">
                                    <label class="form-check-label" for="item_perubahan_O">O</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="item_perubahan" id="item_perubahan_X" value="X">
                                    <label class="form-check-label" for="item_perubahan_X">X</label>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="no_lembar_instruksi">No Lembar Instruksi:</label>
                                <input type="text" class="form-control" id="no_lembar_instruksi" name="no_lembar_instruksi">
                            </div>

                            <div class="form-group">
                                <label for="tanggal_produksi_saat_perubahan">Tanggal Produksi Saat Perubahan:</label>
                                <input type="date" class="form-control" id="tanggal_produksi_saat_perubahan" name="tanggal_produksi_saat_perubahan">
                            </div>

                            <div class="form-group">
                                <label for="shiftt">Shift:</label>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="shiftt" id="shiftt_a" value="shift a">
                                    <label class="form-check-label" for="shiftt_a">Shift A</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="shiftt" id="shiftt_b" value="shift b">
                                    <label class="form-check-label" for="shiftt_b">Shift B</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="shiftt" id="shiftt_c" value="shift c">
                                    <label class="form-check-label" for="shiftt_c">Shift C</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="shiftt" id="shiftt_non_shift" value="non shift">
                                    <label class="form-check-label" for="shiftt_non_shift">Non Shift</label>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="part_number_finish_good">Part Number Finish Good:</label>
                                <input type="text" class="form-control" id="part_number_finish_good" name="part_number_finish_good">
                            </div>

                            <div class="form-group">
                                <label for="kualitas">Kualitas:</label>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="kualitas" id="kualitas_O" value="O">
                                    <label class="form-check-label" for="kualitas_O">O</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="kualitas" id="kualitas_X" value="X">
                                    <label class="form-check-label" for="kualitas_X">X</label>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="fakta_ng">Fakta NG:</label>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="fakta_ng" id="fakta_ng_O" value="O">
                                    <label class="form-check-label" for="fakta_ng_O">O</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="fakta_ng" id="fakta_ng_X" value="X">
                                    <label class="form-check-label" for="fakta_ng_X">X</label>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="pcdt">PCDT:</label>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="pcdt" id="pcdt_O" value="O">
                                    <label class="form-check-label" for="pcdt_O">O</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="pcdt" id="pcdt_X" value="X">
                                    <label class="form-check-label" for="pcdt_X">X</label>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="tanggal_perubahan_pcdt">Tanggal Perubahan PCDT:</label>
                                <input type="date" class="form-control" id="tanggal_perubahan_pcdt" name="tanggal_perubahan_pcdt">
                            </div>

                            <div class="form-group">
                                <label for="instruksi_kerja">Instruksi Kerja:</label>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="instruksi_kerja" id="instruksi_kerja_O" value="O">
                                    <label class="form-check-label" for="instruksi_kerja_O">O</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="instruksi_kerja" id="instruksi_kerja_X" value="X">
                                    <label class="form-check-label" for="instruksi_kerja_X">X</label>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="tanggal_perubahan_instruksi_kerja">Tanggal Perubahan Instruksi Kerja:</label>
                                <input type="date" class="form-control" id="tanggal_perubahan_instruksi_kerja" name="tanggal_perubahan_instruksi_kerja">
                            </div>

                            <div class="form-group">
                                <label for="isir">ISIR:</label>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="isir" id="isir_O" value="O">
                                    <label class="form-check-label" for="isir_O">O</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="isir" id="isir_X" value="X">
                                    <label class="form-check-label" for="isir_X">X</label>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="tanggal_perubahan_isir">Tanggal Perubahan ISIR:</label>
                                <input type="date" class="form-control" id="tanggal_perubahan_isir" name="tanggal_perubahan_isir">
                            </div>

                            <div class="form-group">
                                <label for="pemahaman">Pemahaman:</label>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="pemahaman" id="pemahaman_paham" value="paham">
                                    <label class="form-check-label" for="pemahaman_paham">Paham</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="pemahaman" id="pemahaman_belum_paham" value="belum paham">
                                    <label class="form-check-label" for="pemahaman_belum_paham">Belum Paham</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="pemahaman" id="pemahaman_tidak_paham" value="tidak paham sama sekali">
                                    <label class="form-check-label" for="pemahaman_tidak_paham">Tidak Paham Sama Sekali</label>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="ulasan">Ulasan:</label>
                                <textarea class="form-control" id="ulasan" name="ulasan" rows="3"></textarea>
                            </div>
                            <!-- Modal Footer -->
                            <div class="modal-footer">
                                <button type="submit" name="" class="btn btn-primary" id="submitForm">>Save</button>
                                <button type="reset" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- Konten Anda di sini -->
        <table border="1" class="bordered">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Price</th>
                <th scope="col">Nama proses</th>
                <th scope="col">klasifikasi perubahan</th>
                <th scope="col">Pelaksanaan 2nd QA</th>
                <th scope="col">Item Perubahan</th>
                <th scope="col">No Lembar Instruksi</th>
                <th scope="col">Tanggal Produksi Saat Perubahan</th>
                <th scope="col">Shift</th>
                <th scope="col">Part Number Finish Good</th>
                <th scope="col">Kualitas</th>
                <th scope="col">Fakta NG</th>
                <th scope="col">PCDT</th>
                <th scope="col">Tanggal Perubahan PCDT</th>
                <th scope="col">Instruksi Kerja</th>
                <th scope="col">Tanggal Perubahan Instruksi Kerja</th>
                <th scope="col">ISIR</th>
                <th scope="col">Tanggal Perubahan ISIR</th>
                <th scope="col">Pemahaman</th>
                <th scope="col">Ulasan</th>
                <th scope="col">Action</th>
            </tr>
            <?php $i = 1;
            foreach ($data as $row) : ?>
                <tr>
                    <td><?= $i++; ?></td>
                    <td><?= $row['name'] ?></td>
                    <td><?= $row['price'] ?></td>
                    <td><?= $row['nama_proses'] ?></td>
                    <td><?= $row['klasifikasi_perubahan'] ?></td>
                    <td><?= $row['pelaksanaan2ndQA'] ?></td>
                    <td><?= $row['item_perubahan'] ?></td>
                    <td><?= $row['no_lembar_instruksi'] ?></td>
                    <td><?= $row['tanggal_produksi_saat_perubahan'] ?></td>
                    <td><?= $row['shiftt'] ?></td>
                    <td><?= $row['part_number_finish_good'] ?></td>
                    <td><?= $row['kualitas'] ?></td>
                    <td><?= $row['fakta_ng'] ?></td>
                    <td><?= $row['pcdt'] ?></td>
                    <td><?= $row['tanggal_perubahan_pcdt'] ?></td>
                    <td><?= $row['instruksi_kerja'] ?></td>
                    <td><?= $row['tanggal_perubahan_instruksi_kerja'] ?></td>
                    <td><?= $row['isir'] ?></td>
                    <td><?= $row['tanggal_perubahan_isir'] ?></td>
                    <td><?= $row['pemahaman'] ?></td>
                    <td><?= $row['ulasan'] ?></td>
                    <td><a href="" class="btn btn-success">view</a>
                        <a href="" class="btn btn-danger">delete</a>
                    </td>
                </tr>
            <?php endforeach ?>
    </div>

    <!-- Bootstrap JS (requires Popper.js and jQuery) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <!-- AJAX Script -->
    <script>
        $(document).ready(function() {
            // Handle form submission
            $('#submitForm').click(function() {
                $.ajax({
                    type: 'POST',
                    url: 'config.php', // Replace with the actual path to your PHP script
                    data: $('#dataForm').serialize(),
                    success: function(response) {
                        // Handle the response from the server
                        // Use SweetAlert for a user-friendly message
                        Swal.fire({
                            icon: 'success',
                            title: 'Success',
                            text: response,
                        });

                        // You can update the UI or perform any other actions here
                    },
                    error: function(error) {
                        // Use SweetAlert for error message
                        Swal.fire({
                            icon: 'error',
                            title: 'Error',
                            text: 'Something went wrong!',
                        });

                        console.log(error);
                    }
                });
            });
        });
    </script>

</body>

</html>