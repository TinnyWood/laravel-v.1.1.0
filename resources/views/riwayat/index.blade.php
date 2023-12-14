@extends('layout.main')

@section('content')
<h1>Riwayat</h1>

<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#tambahDataModal">
    Tambah Data
</button>
<table id="riwayat-table" class="table">
    <thead>
        <tr>
            <th>Nama Proses</th>
            <th>Klasifikasi Perubahan</th>
            <th>Pelaksanaan 2nd QA</th>
            <th>Item Perubahan</th>
            <th>No Lembar Instruksi</th>
            <th>Tanggal Produksi Saat Perubahan</th>
            <th>Shift</th>
            <th>Part Number Finish Good</th>
            <th>Kualitas</th>
            <th>Fakta NG</th>
            <th>PCDT</th>
            <th>Tanggal Perubahan PCDT</th>
            <th>Instruksi Kerja</th>
            <th>Tanggal Perubahan Instruksi Kerja</th>
            <th>ISIR</th>
            <th>Tanggal Perubahan ISIR</th>
            <th>Pemahaman</th>
            <th>Aksi</th>
        </tr>
    </thead>
</table>
<!-- Modal Tambah Data -->
<div class="modal fade" id="tambahDataModal" tabindex="-1" role="dialog" aria-labelledby="tambahDataModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="tambahDataModalLabel">Tambah Data Riwayat</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="POST" action="{{ route('riwayat.store') }}">
                    @csrf
                    <div class="form-group">
                        <label for="nama_proses">Nama Proses:</label>
                        <input type="text" class="form-control" id="nama_proses" name="nama_proses" required>
                    </div>

                    <div class="form-group">
                        <label for="klasifikasi_perubahan">Klasifikasi Perubahan:</label>
                        <select class="form-control" id="klasifikasi_perubahan" name="klasifikasi_perubahan" required>
                            <option value="design">Design</option>
                            <option value="proses">Proses</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="pelaksanaan2ndQA">Pelaksanaan 2nd QA:</label>
                        <select class="form-control" id="pelaksanaan2ndQA" name="pelaksanaan2ndQA" required>
                            <option value="ada">Ada</option>
                            <option value="tidak">Tidak</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="item_perubahan">Item Perubahan:</label>
                        <input type="text" class="form-control" id="item_perubahan" name="item_perubahan" required>
                    </div>

                    <div class="form-group">
                        <label for="no_lembar_instruksi">No Lembar Instruksi:</label>
                        <input type="text" class="form-control" id="no_lembar_instruksi" name="no_lembar_instruksi">
                    </div>

                    <div class="form-group">
                        <label for="tanggal_produksi_saat_perubahan">Tanggal Produksi Saat Perubahan:</label>
                        <input type="date" class="form-control" id="tanggal_produksi_saat_perubahan" name="tanggal_produksi_saat_perubahan" required>
                    </div>

                    <div class="form-group">
                        <label for="shift">Shift:</label>
                        <select class="form-control" id="shift" name="shift" required>
                            <option value="sift1">Shift 1</option>
                            <option value="sift2">Shift 2</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="part_number_finish_good">Part Number Finish Good:</label>
                        <input type="text" class="form-control" id="part_number_finish_good" name="part_number_finish_good" required>
                    </div>

                    <div class="form-group">
                        <label for="kualitas">Kualitas:</label>
                        <select class="form-control" id="kualitas" name="kualitas" required>
                            <option value="ok">OK</option>
                            <option value="ng">NG</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="fakta_ng">Fakta NG:</label>
                        <input type="text" class="form-control" id="fakta_ng" name="fakta_ng">
                    </div>

                    <div class="form-group">
                        <label for="pcdt">PCDT:</label>
                        <select class="form-control" id="pcdt" name="pcdt" required>
                            <option value="resived">Resived</option>
                            <option value="not resived">Not Resived</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="tanggal_perubahan_pcdt">Tanggal Perubahan PCDT:</label>
                        <input type="date" class="form-control" id="tanggal_perubahan_pcdt" name="tanggal_perubahan_pcdt">
                    </div>

                    <div class="form-group">
                        <label for="instruksi_kerja">Instruksi Kerja:</label>
                        <select class="form-control" id="instruksi_kerja" name="instruksi_kerja" required>
                            <option value="resived">Resived</option>
                            <option value="not resived">Not Resived</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="tanggal_perubahan_instruksi_kerja">Tanggal Perubahan Instruksi Kerja:</label>
                        <input type="date" class="form-control" id="tanggal_perubahan_instruksi_kerja" name="tanggal_perubahan_instruksi_kerja">
                    </div>

                    <div class="form-group">
                        <label for="isir">ISIR:</label>
                        <select class="form-control" id="isir" name="isir" required>
                            <option value="resived">Resived</option>
                            <option value="not resived">Not Resived</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="tanggal_perubahan_isir">Tanggal Perubahan ISIR:</label>
                        <input type="date" class="form-control" id="tanggal_perubahan_isir" name="tanggal_perubahan_isir">
                    </div>

                    <div class="form-group">
                        <label for="pemahaman">Pemahaman:</label>
                        <select class="form-control" id="pemahaman" name="pemahaman" required>
                            <option value="paham">Paham</option>
                            <option value="kurang paham">Kurang Paham</option>
                            <option value="tidak paham sama sekali">Tidak Paham Sama Sekali</option>
                        </select>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- modal edit -->
<!-- Modal Edit Data -->
<div class="modal fade" id="editDataModal" tabindex="-1" role="dialog" aria-labelledby="editDataModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editDataModalLabel">Edit Data Riwayat</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="editDataForm">
                    @csrf
                    <input type="hidden" id="edit_id" name="edit_id">

                    <div class="form-group">
                        <label for="edit_nama_proses">Nama Proses:</label>
                        <input type="text" class="form-control" id="edit_nama_proses" name="nama_proses" required>
                    </div>

                    <div class="form-group">
                        <label for="klasifikasi_perubahan">Klasifikasi Perubahan:</label>
                        <select class="form-control" id="klasifikasi_perubahan" name="klasifikasi_perubahan" required>
                            <option value="design">Design</option>
                            <option value="proses">Proses</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="pelaksanaan2ndQA">Pelaksanaan 2nd QA:</label>
                        <select class="form-control" id="pelaksanaan2ndQA" name="pelaksanaan2ndQA" required>
                            <option value="ada">Ada</option>
                            <option value="tidak">Tidak</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="item_perubahan">Item Perubahan:</label>
                        <input type="text" class="form-control" id="item_perubahan" name="item_perubahan" required>
                    </div>

                    <div class="form-group">
                        <label for="no_lembar_instruksi">No Lembar Instruksi:</label>
                        <input type="text" class="form-control" id="no_lembar_instruksi" name="no_lembar_instruksi">
                    </div>

                    <div class="form-group">
                        <label for="tanggal_produksi_saat_perubahan">Tanggal Produksi Saat Perubahan:</label>
                        <input type="date" class="form-control" id="tanggal_produksi_saat_perubahan" name="tanggal_produksi_saat_perubahan" required>
                    </div>

                    <div class="form-group">
                        <label for="shift">Shift:</label>
                        <select class="form-control" id="shift" name="shift" required>
                            <option value="sift1">Shift 1</option>
                            <option value="sift2">Shift 2</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="part_number_finish_good">Part Number Finish Good:</label>
                        <input type="text" class="form-control" id="part_number_finish_good" name="part_number_finish_good" required>
                    </div>

                    <div class="form-group">
                        <label for="kualitas">Kualitas:</label>
                        <select class="form-control" id="kualitas" name="kualitas" required>
                            <option value="ok">OK</option>
                            <option value="ng">NG</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="fakta_ng">Fakta NG:</label>
                        <input type="text" class="form-control" id="fakta_ng" name="fakta_ng">
                    </div>

                    <div class="form-group">
                        <label for="pcdt">PCDT:</label>
                        <select class="form-control" id="pcdt" name="pcdt" required>
                            <option value="resived">Resived</option>
                            <option value="not resived">Not Resived</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="tanggal_perubahan_pcdt">Tanggal Perubahan PCDT:</label>
                        <input type="date" class="form-control" id="tanggal_perubahan_pcdt" name="tanggal_perubahan_pcdt">
                    </div>

                    <div class="form-group">
                        <label for="instruksi_kerja">Instruksi Kerja:</label>
                        <select class="form-control" id="instruksi_kerja" name="instruksi_kerja" required>
                            <option value="resived">Resived</option>
                            <option value="not resived">Not Resived</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="tanggal_perubahan_instruksi_kerja">Tanggal Perubahan Instruksi Kerja:</label>
                        <input type="date" class="form-control" id="tanggal_perubahan_instruksi_kerja" name="tanggal_perubahan_instruksi_kerja">
                    </div>

                    <div class="form-group">
                        <label for="isir">ISIR:</label>
                        <select class="form-control" id="isir" name="isir" required>
                            <option value="resived">Resived</option>
                            <option value="not resived">Not Resived</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="tanggal_perubahan_isir">Tanggal Perubahan ISIR:</label>
                        <input type="date" class="form-control" id="tanggal_perubahan_isir" name="tanggal_perubahan_isir">
                    </div>

                    <div class="form-group">
                        <label for="pemahaman">Pemahaman:</label>
                        <select class="form-control" id="pemahaman" name="pemahaman" required>
                            <option value="paham">Paham</option>
                            <option value="kurang paham">Kurang Paham</option>
                            <option value="tidak paham sama sekali">Tidak Paham Sama Sekali</option>
                        </select>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary" onclick="simpanEdit()">Simpan Perubahan</button>
            </div>
        </div>
    </div>
</div>

<script>
    $(document).ready(function() {
        $('#riwayat-table').DataTable({
            processing: true,
            serverSide: true,
            ajax: "{{ route('riwayat.data') }}",
            columns: [{
                    data: 'nama_proses',
                    name: 'nama_proses'
                },
                {
                    data: 'klasifikasi_perubahan',
                    name: 'klasifikasi_perubahan'
                },
                {
                    data: 'pelaksanaan2ndQA',
                    name: 'pelaksanaan2ndQA'
                },
                {
                    data: 'item_perubahan',
                    name: 'item_perubahan'
                },
                {
                    data: 'no_lembar_instruksi',
                    name: 'no_lembar_instruksi'
                },
                {
                    data: 'tanggal_produksi_saat_perubahan',
                    name: 'tanggal_produksi_saat_perubahan'
                },
                {
                    data: 'shift',
                    name: 'shift'
                },
                {
                    data: 'part_number_finish_good',
                    name: 'part_number_finish_good'
                },
                {
                    data: 'kualitas',
                    name: 'kualitas'
                },
                {
                    data: 'fakta_ng',
                    name: 'fakta_ng'
                },
                {
                    data: 'pcdt',
                    name: 'pcdt'
                },
                {
                    data: 'tanggal_perubahan_pcdt',
                    name: 'tanggal_perubahan_pcdt'
                },
                {
                    data: 'instruksi_kerja',
                    name: 'instruksi_kerja'
                },
                {
                    data: 'tanggal_perubahan_instruksi_kerja',
                    name: 'tanggal_perubahan_instruksi_kerja'
                },
                {
                    data: 'isir',
                    name: 'isir'
                },
                {
                    data: 'tanggal_perubahan_isir',
                    name: 'tanggal_perubahan_isir'
                },
                {
                    data: 'pemahaman',
                    name: 'pemahaman'
                },
                {
                    data: 'aksi',
                    name: 'aksi',
                    orderable: false,
                    searchable: false
                },
            ]
        });
    });

    function tambahData() {
        $.ajax({
            type: 'POST',
            url: '{{ route("riwayat.store") }}',
            data: formData,
            dataType: 'json',
            success: function(response) {
                // Tindakan setelah AJAX berhasil
                console.log(response);
                $("#modalTambah").hide();
                // Display SweetAlert for success
                Swal.fire({
                    icon: 'success',
                    title: 'Data Berhasil Ditambahkan!',
                    showConfirmButton: false,
                    timer: 1500
                });

                // Close the modal and reload the DataTable
                $('#tambahDataModal').modal('hide');
                $('#riwayat-table').DataTable().ajax.reload();
            },
            error: function(error) {
                console.error(error);
            }
        });
    }


    function editData(id) {
        $.ajax({
            url: "{{ route('riwayat.edit', ':id') }}".replace(':id', id),
            method: "GET",
            success: function(response) {
                var data = response.data;

                // Isi formulir edit dengan data yang diambil
                $('#edit_id').val(data.id);
                $('#nama_proses').val(data.nama_proses);
                $('#klasifikasi_perubahan').val(data.klasifikasi_perubahan);
                $('#pelaksanaan2ndQA').val(data.pelaksanaan2ndQA);
                $('#item_perubahan').val(data.item_perubahan);
                $('#no_lembar_instruksi').val(data.no_lembar_instruksi);
                $('#tanggal_produksi_saat_perubahan').val(data.tanggal_produksi_saat_perubahan);
                $('#shift').val(data.shift);
                $('#part_number_finish_good').val(data.part_number_finish_good);
                $('#kualitas').val(data.kualitas);
                $('#fakta_ng').val(data.fakta_ng);
                $('#pcdt').val(data.pcdt);
                $('#tanggal_perubahan_pcdt').val(data.tanggal_perubahan_pcdt);
                $('#instruksi_kerja').val(data.instruksi_kerja);
                $('#tanggal_perubahan_instruksi_kerja').val(data.tanggal_perubahan_instruksi_kerja);
                $('#isir').val(data.isir);
                $('#tanggal_perubahan_isir').val(data.tanggal_perubahan_isir);
                $('#pemahaman').val(data.pemahaman);

                // Tampilkan modal edit
                $('#editDataModal').modal('show');
            },
            error: function(error) {
                console.error(error);
            }
        });
    }



    function simpanEdit() {
        $.ajax({
            url: "{{ route('riwayat.update') }}",
            method: "PUT",
            data: $('#editDataForm').serialize(),
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            success: function(response) {
                console.log(response);
                $('#editDataModal').modal('hide');
                $('#riwayat-table').DataTable().ajax.reload();
            },
            error: function(error) {
                console.error(error);
            }
        });
    }
</script>

@endsection