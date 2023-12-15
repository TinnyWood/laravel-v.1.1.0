<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    <link rel="stylesheet" href="http://cdn.bootcss.com/toastr.js/latest/css/toastr.min.css">
    <title>Hello, world!</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <h2 class="my-5 text-center">Laravel 9 Ajax Crud</h2>
                <a href="" class="btn btn-primary my-3" data-bs-toggle="modal" data-bs-target="#addModal">add</a>
                <div class="table-data">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Name</th>
                                <th scope="col">Price</th>
                                <th scope="col">Nama proses</th>
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
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($prodaks as $row=>$prodak)
                            <tr>
                                <th scope="row">{{$row+1}}</th>
                                <td>{{$prodak->name}}</td>
                                <td>Rp.@php echo number_format ($prodak->price) @endphp</td>
                                <td>{{$prodak->nama_proses}}</td>
                                <td>{{$prodak->pelaksanaan2ndQA}}</td>
                                <td>{{$prodak->item_perubahan}}</td>
                                <td>{{$prodak->no_lembar_instruksi}}</td>
                                <td>{{$prodak->tanggal_produksi_saat_perubahan}}</td>
                                <td>{{$prodak->shift}}</td>
                                <td>{{$prodak->part_number_finish_good}}</td>
                                <td>{{$prodak->kualitas}}</td>
                                <td>{{$prodak->fakta_ng}}</td>
                                <td>{{$prodak->pcdt}}</td>
                                <td>{{$prodak->tanggal_perubahan_pcdt}}</td>
                                <td>{{$prodak->instruksi_kerja}}</td>
                                <td>{{$prodak->tanggal_perubahan_instruksi_kerja}}</td>
                                <td>{{$prodak->isir}}</td>
                                <td>{{$prodak->tanggal_perubahan_isir}}</td>
                                <td>{{$prodak->pemahaman}}</td>
                                <td>
                                    <a href="#" class="btn btn-warning updateProdakForm" data-bs-toggle="modal" data-bs-target="#updateModal" data-id="{{ $prodak->id }}" data-name="{{ $prodak->name }}" data-price="{{ $prodak->price }}" data-nama_proses="{{ $prodak->nama_proses }}" data-klasifikasi_perubahan="{{ $prodak->klasifikasi_perubahan }}" data-pelaksanaan2ndQA="{{ $prodak->pelaksanaan2ndQA }}" data-item_perubahan="{{ $prodak->item_perubahan }}" data-no_lembar_instruksi="{{ $prodak->no_lembar_instruksi }}" data-tanggal_produksi_saat_perubahan="{{ $prodak->tanggal_produksi_saat_perubahan }}" data-shift="{{ $prodak->shift }}" data-part_number_finish_good="{{ $prodak->part_number_finish_good }}" data-kualitas="{{ $prodak->kualitas }}" data-fakta_ng="{{ $prodak->fakta_ng }}" data-pcdt="{{ $prodak->pcdt }}" data-tanggal_perubahan_pcdt="{{ $prodak->tanggal_perubahan_pcdt }}" data-instruksi_kerja="{{ $prodak->instruksi_kerja }}" data-tanggal_perubahan_instruksi_kerja="{{ $prodak->tanggal_perubahan_instruksi_kerja }}" data-isir="{{ $prodak->isir }}" data-tanggal_perubahan_isir="{{ $prodak->tanggal_perubahan_isir }}" data-pemahaman="{{ $prodak->pemahaman }}">
                                        <i class="las la-edit"></i>
                                    </a>

                                    <a href="" class="btn btn-danger delete_prodak" data-id="{{ $prodak->id }}"><i class="las la-times"></i></a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {!! $prodaks->links() !!}
                </div>
            </div>
        </div>
    </div>
    @extends('prodak.update_prodak_modal')
    @extends('prodak.add_prodak_modal')
    @extends('prodak.prodak_js')
    {!! Toastr::message() !!}
</body>

</html>