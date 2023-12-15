@extends('adminlte::page')

@section('title', 'Machine:: ' . $machine->code)

@section('content_header')
    <div class="row mb-2">
        <div class="col-sm-6">
            <h1 class="m-0">Machine Detail</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item">
                    <a href="/home"><i class="fas fa-home"></i></a>
                </li>
                <li class="breadcrumb-item"><a href="/machine">Machines</a></li>
                <li class="breadcrumb-item active">Show</li>
            </ol>
        </div><!-- /.col -->
    </div>
@stop

@section('content')
    <div class="row">
        <!--General Information-->
        <div class="col-md-3">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">General Information</h3>
                    <div class="card-tools">
                        <a href="{{ url('machine/' . $machine->id . '/edit') }}" class="btn btn-default btn-sm" title="Edit machine">
                            <i class="fas fa-edit"></i>
                        </a>
                    </div>
                </div>
                <div class="card-body">
                    <strong>Line</strong>
                    <p class="text-muted">
                        @if($machine->line)
                            {{ $machine->line->name }}
                        @else
                            -
                        @endif
                    </p>
                    <hr>
                    <strong>Code</strong>
                    <p class="text-muted">
                        {{ $machine->code }}
                    </p>
                    <hr>
                    <strong>Name</strong>
                    <p class="text-muted">
                        {{ $machine->name }}
                    </p>
                    <hr>
                    <strong>Description</strong>
                    <p class="text-muted">
                        {{ $machine->description }}
                    </p>
                    <hr>
                    <strong>Machine no</strong>
                    <p class="text-muted">
                        {{ $machine->machine_no }}
                    </p>
                    <hr>
                </div>
            </div>
        </div>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script type="text/javascript">
    </script>
@stop
