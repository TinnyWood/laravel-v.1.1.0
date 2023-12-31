<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">

    <title>Hello, world!</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <h2 class="my-5 text-center">Latihan crud Laravel 9 With Ajax</h2>
                <a href="" class="btn btn-primary my-3" data-bs-toggle="modal" data-bs-target="#addModal">add</a>
                <table class="table table-bordererd">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name Latihan</th>
                            <th scope="col">Price latihan</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>Mark</td>
                            <td>Otto</td>
                            <td>
                                <a href="" class="btn btn-warning"><i class="las la-edit"></i></a>
                                <a href="" class="btn btn-danger"><i class="las la-trash"></i></a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    @include('latihan.add_latihan_modal')
    @include('latihan.latihan_js')
</body>

</html>