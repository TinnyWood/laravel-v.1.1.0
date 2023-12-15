@extends('adminlte::page')

@section('title', 'Machine List')

@section('content_header')
    <div class="row mb-2">
        <div class="col-sm-6">
            <h1 class="m-0">Machine List</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item">
                    <a href="/home"><i class="fas fa-home"></i></a>
                </li>
                <li class="breadcrumb-item"><a href="/machine">Machines</a></li>
                <li class="breadcrumb-item active">Index</li>
            </ol>
        </div><!-- /.col -->
    </div>
@stop

@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Machine List</h3>
            <div class="card-tools">
                @if(\Auth::user()->can('create-machine'))
                <a href="/machine/create" class="btn btn-default btn-sm" title="Create New machine">
                    <i class="fas fa-pencil-alt"></i>
                </a>                
                <button type="button" id="btn-import" class="btn btn-default btn-sm" title="Import Data">
                    <i class="fas fa-upload"></i>
                </button>
                @endif
                @if(\Auth::user()->can('delete-machine'))
                <button type="button" id="btn-delete" class="btn btn-default btn-sm" title="Delete Selected machine">
                    <i class="fas fa-trash-alt"></i>
                </button>
                @endif
            </div>
        </div>
        <div class="card-body">
            <table id="table-machine" class="table table-bordered" style="width:100%">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Code</th>
                        <th>Name</th>
                        <th>Description</th>
                        <th>Machine No</th>
                        <th>Line</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                    </tr>
                </tfoot>
                <tbody></tbody>
            </table>
        </div>
        <div class="card-footer">
            <div id="machine-table-button-tools" class=""></div>
        </div>
    </div>

    <!--Modal Delete Machine-->
    <div class="modal fade" data-backdrop="static" id="modal-delete-machine">
        <div class="modal-dialog">
            <div class="modal-content">
                <form class="form-horizontal" id="form-delete-machine" action="{{ url('/machine/delete') }}" method="POST">
                    @csrf
                    <div class="modal-header">
                        <h4 class="modal-title">Delete Machine Confirmation</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <p><i class="fas fa-info-circle"></i> Selected data will be deleted</p>
                    </div>
                    <div class="modal-footer justify-content-between">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-danger"><i class="fas fa-trash-alt"></i> Delete</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!--ENDModal Delete Machine-->

    <!--Modal Import Machine-->
    <div class="modal fade" data-backdrop="static" id="modal-import-machine">
        <div class="modal-dialog">
            <div class="modal-content">
                <form class="form-horizontal" id="form-import-machine" action="{{ url('/machine/import') }}" method="POST">
                    @csrf
                    <div class="modal-header">
                        <h4 class="modal-title">Import Machine Confirmation</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group row">
                            <label for="file" class="col-sm-3 col-form-label">File</label>
                            <div class="col-sm-9">
                                <input type="file" name="file">
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer justify-content-between">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-primary"><i class="fas fa-import"></i> Import</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!--ENDModal Import Machine-->
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script type="text/javascript">
        //Block Machine Datatable Object
        // Setup - add a text input to each footer cell
        $('#table-machine tfoot th').each(function(i) {
            let title = $('#table-machine thead th').eq($(this).index()).text();
            if ($(this).index() != 0 && $(this).index() != 6) {
                $(this).html('<input type="text" placeholder="Search ' + title + '" data-index="' + i + '" />');
            } else {
                $(this).html(title);
            }
        });
        //Main machine Datatable object
        var dTable = $('#table-machine').DataTable({
            processing: true,
            serverSide: true,
            select: {
                style: 'multi',
                selector: 'td:first-child'
            },
            ajax: "{{ url('machine/datatables') }}",
            columns: [{
                    data: 'DT_RowIndex',
                    name: 'DT_RowIndex',
                    className: 'text-center',
                    orderable: false,
                    searchable: false
                },
                
                {
                    data: 'code',
                    name: 'code',
                    render: function(data, type, row, meta) {
                        let code_template = '';
                        code_template += '<a href="/machine/' + row.id + '">';
                        code_template += data;
                        code_template += '</a>';
                        return code_template;
                    }
                },
                {
                    data: 'name',
                    name: 'name'
                },
                {
                    data: 'description',
                    name: 'description'
                },
                {
                    data: 'machine_no',
                    name: 'machine_no'
                },
                {
                    data: 'line.name',
                    name: 'line.name',
                    render: function(data, type, row, meta) {
                        if (row.line) return row.line.name;
                        return '';
                    }
                },
                {
                    data: 'action',
                    name: 'action',
                    orderable: false,
                    searchable: false,
                    className: 'text-center',
                    render: function(data, type, row, meta) {
                        let action = '';
                        action += '<a class="btn btn-default btn-xs btn-edit" title="Edit" href="/machine/' + row.id + '/edit">';
                        action += '<i class="fas fa-edit"></i>';
                        action += '</a>';
                        return action;
                    }
                },
            ],
            order: [
                [1, "asc"]
            ],
            scrollY: "100vh",
            scrollX: true,
            scrollCollapse: true,
            fixedColumns: {
                leftColumns: 1
            }
        });

        // Block Filter event handler
        $(dTable.table().container()).on('keyup', 'tfoot input', function() {
            dTable
                .column($(this).data('index'))
                .search(this.value)
                .draw();
        });

        //Block data table button tools object
        var machineTableButtonTools = new $.fn.dataTable.Buttons(dTable, {
            buttons: [{
                extend: 'excelHtml5',
                text: 'Export Excel',
                className: 'fa fa-file-excel',
                exportOptions: {
                    columns: [1, 2, 3,5]
                }
            }, ],
        }).container().appendTo($('#machine-table-button-tools'));
        //ENDBlock data table button tools object

        //ENDBlock Machine Datatable Object

        //Block Delete Trigger
        $('#btn-delete').on('click', function(event) {
            event.preventDefault();
            let selected_machines = dTable.rows({
                selected: true
            });
            $('#form-delete-machine').find("input[name='id[]']").remove();
            if (selected_machines.count() < 1) {
                Swal.fire({
                    toast: false,
                    position: 'center',
                    showConfirmButton: false,
                    timer: 3000,
                    icon: 'warning',
                    title: 'Please select some data'
                });
            } else {
                console.log(selected_machines.data());
                selected_machines.every(function() {
                    let d = this.data();
                    $('#form-delete-machine').append('<input type="hidden" name="id[]" value="' + d.id + '"/>');
                });
                $('#modal-delete-machine').modal('show');
            }
        });
        //ENDBlock Delete Trigger

        //Block Delete submission
        $('#form-delete-machine').on('submit', function(event) {
            event.preventDefault();
            let url = $(this).attr('action');
            $.ajax({
                type: 'post',
                url: url,
                data: $(this).serialize(),
                dataType: 'json',
                beforeSend: function() {
                    $('#form-delete-machine').find("button[type='submit']").prop('disabled', true);
                },
                success: function(data) {
                    console.log(data);
                    if (data.status == true) {
                        $('#form-delete-machine')[0].reset();
                        $('#modal-delete-machine').modal('hide');
                        Swal.fire({
                            toast: true,
                            position: 'top-end',
                            showConfirmButton: false,
                            timer: 3000,
                            icon: 'success',
                            title: data.message
                        });
                        dTable.ajax.reload();
                        $('#form-delete-machine').find("button[type='submit']").prop('disabled', false);
                    } else {
                        $('#form-delete-machine').find("button[type='submit']").prop('disabled', false);
                    }
                },
                error: function(jqXHR, textStatus, errorThrown) {
                    let errors = jqXHR.responseJSON;
                    //console.log(errors);
                    let error_template = "";
                    //console.log(textStatus);
                    $.each(errors.errors, function(key, value) {
                        console.log(value);
                        error_template += '<p>' + value + '</p>'; //showing only the first error.
                    });
                    console.log(error_template);
                    $(document).Toasts('create', {
                        class: 'bg-danger',
                        position: 'bottomRight',
                        autohide: true,
                        delay: 5000,
                        icon: 'fas fa-exclamation-circle',
                        title: 'Error',
                        subtitle: 'Validation error',
                        body: error_template
                    });
                    $('#form-delete-machine').find("button[type='submit']").prop('disabled', false);
                }
            });
        });
        //ENDBlock Delete submission

        //Block Import
        $('#btn-import').on('click', function(event) {
            event.preventDefault();
            $('#modal-import-machine').modal('show');
        });
        //ENDBlock Import

        //Block Import submission
        $('#form-import-machine').on('submit', function(event) {
            event.preventDefault();
            let url = $(this).attr('action');
            let formData = new FormData(this);
            $.ajax({
                type: 'post',
                url: url,
                data: formData,
                cache: false,
                contentType: false,
                processData: false,
                beforeSend: function() {
                    $('#form-import-machine').find("button[type='submit']").prop('disabled', true);
                },
                success: function(data) {
                    console.log(data);
                    if (data.status == true) {
                        $('#form-import-machine')[0].reset();
                        $('#modal-import-machine').modal('hide');
                        Swal.fire({
                            toast: true,
                            position: 'top-end',
                            showConfirmButton: false,
                            timer: 3000,
                            icon: 'success',
                            title: data.message
                        });
                        dTable.ajax.reload();
                        $('#form-import-machine').find("button[type='submit']").prop('disabled', false);
                    } else {
                        $('#form-import-machine').find("button[type='submit']").prop('disabled', false);
                    }
                },
                error: function(jqXHR, textStatus, errorThrown) {
                    let errors = jqXHR.responseJSON;
                    console.log(errors);
                    let error_template = "";
                    $.each(errors.errors, function(key, value) {
                        console.log(value);
                        error_template += '<p>' + value + '</p>'; //showing only the first error.
                    });
                    $(document).Toasts('create', {
                        class: 'bg-danger',
                        position: 'bottomRight',
                        autohide: true,
                        delay: 5000,
                        icon: 'fas fa-exclamation-circle',
                        title: 'Error',
                        subtitle: 'Error occured',
                        body: error_template
                    });
                    $('#form-import-machine').find("button[type='submit']").prop('disabled', false);
                }
            });
        });
        //ENDBlock Import submission
    </script>
@stop
