@extends('adminlte::page')

@section('title', 'Create Machine')

@section('content_header')
    <div class="row mb-2">
        <div class="col-sm-6">
            <h1 class="m-0">Create Machine</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item">
                    <a href="/home"><i class="fas fa-home"></i></a>
                </li>
                <li class="breadcrumb-item"><a href="/machine">Machines</a></li>
                <li class="breadcrumb-item active">Create</li>
            </ol>
        </div><!-- /.col -->
    </div>
@stop

@section('content')
    <div class="card">
        <form class="form-horizontal" id="form-create-machine" action="{{ url('/machine') }}" method="POST">
            @csrf
            <div class="card-header">
                <h3 class="card-title">Form Create Machine</h3>
                <div class="card-tools"></div>
            </div>
            <div class="card-body">
                <div class="form-group row">
                    <label for="line_id" class="col-sm-2 col-form-label">Line</label>
                    <div class="col-sm-4">
                        <select class="form-control" name="line_id" id="line_id"></select>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="code" class="col-sm-2 col-form-label">Code</label>
                    <div class="col-sm-4">
                        <input type="text" class="form-control" name="code" placeholder="Code of the machine">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="name" class="col-sm-2 col-form-label">Name</label>
                    <div class="col-sm-4">
                        <input type="text" class="form-control" name="name" placeholder="Name of the machine">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="description" class="col-sm-2 col-form-label">Description</label>
                    <div class="col-sm-4">
                        <textarea name="description" class="form-control"></textarea>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="machine_no" class="col-sm-2 col-form-label">Machine No</label>
                    <div class="col-sm-4">
                        <input type="number" class="form-control" name="machine_no" placeholder="Block number of the machine">
                    </div>
                </div>
            </div>
            <div class="card-footer">
                <a href="/machine" class="btn btn-default">Cancel</a>
                <button type="submit" class="btn btn-primary float-right"><i class="fas fa-save"></i> Save</button>
            </div>
        </form>
    </div>


@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script type="text/javascript">
        //Block store machine event
        $('#form-create-machine').on('submit', function(event) {
            event.preventDefault();
            let url = $(this).attr('action');
            $.ajax({
                type: 'post',
                url: url,
                data: $(this).serialize(),
                dataType: 'json',
                beforeSend: function() {
                    $('#form-create-machine').find("button[type='submit']").prop('disabled', true);
                },
                success: function(data) {
                    console.log(data);
                    if (data.status == true) {
                        $('#form-create-machine')[0].reset();
                        Swal.fire({
                            toast: true,
                            position: 'top-end',
                            showConfirmButton: false,
                            timer: 3000,
                            icon: 'success',
                            title: data.message
                        });
                        $('#form-create-machine').find("button[type='submit']").prop('disabled', false);
                        window.location.href = data.data.url;
                    } else {
                        $('#form-create-machine').find("button[type='submit']").prop('disabled', false);
                    }
                },
                error: function(jqXHR, textStatus, errorThrown) {
                    let errors = jqXHR.responseJSON;
                    console.log(errors);
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
                        subtitle: ' Validation error',
                        body: error_template
                    });
                    $('#form-create-machine').find("button[type='submit']").prop('disabled', false);
                }
            });
        });
        //ENDBlock store machine event

        //Block filter line id
        $('#line_id').select2({
            placeholder: 'Select Line',
            ajax: {
                url: "{!! url('/line/select2') !!}",
                dataType: 'json',
                delay: 250,
                processResults: function(data, params) {
                    params.page = params.page || 1;
                    return {
                        results: $.map(data.data, function(item) {
                            return {
                                text: item.name,
                                id: item.id,
                                code: item.code,
                            }
                        }),
                        pagination: {
                            more: (params.page * data.per_page) < data.total
                        },
                    };
                },
                cache: true
            },
            allowClear: true,
            templateResult: function(results) {
                if (results.loading) {
                    return "Searching...";
                }
                var markup = '<span>';
                markup += results.code;
                markup += '<br/>';
                markup += results.text;
                markup += '</span>';
                return $(markup);
            },
        });
        //ENDBlock filter line id
    </script>
@stop
