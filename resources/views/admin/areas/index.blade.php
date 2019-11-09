@extends('admin.layouts.app')

@section('htmlheader_title')
    Areas
@endsection


@section('content')
    <div class="content-wrapper">
        <section class="content-header">

            <h1>
                Lista de Areas
            </h1>

            <ol class="breadcrumb">
                <li>
                    <a href="{{ route('admin.dashboard') }}"><i class="fa fa-dashboard"></i>Inicio</a>
                </li>
                <li class="active">Lista de Areas</li>
            </ol>

        </section>

        <section class="content">
            <div class="box">
                <div class="box-header with-border">
                    <h3 class="box-title">
                        <a href="{{ route('admin.areas.create') }}" class="btn btn-info">
                            <i class="fa fa-plus"></i> registrar area
                        </a>
                    </h3>

                    <div class="box-tools pull-right">

                        <button type="button"
                                class="btn btn-box-tool"
                                data-widget="collapse"
                                data-toggle="tooltip"
                                title="Collapse">

                            <i class="fa fa-minus"></i>
                        </button>

                        <button type="button"
                                class="btn btn-box-tool"
                                data-widget="remove"
                                data-toggle="tooltip"
                                title="Remove">
                            <i class="fa fa-times"></i>
                        </button>
                    </div>
                </div>

                <div class="box-body table-responsive no-padding">
                    <table class="table table-hover">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Nombre</th>
                            <th>Acciones</th>
                            <th>&nbsp;</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($areas as $area)
                            <tr>
                                <td>{{ $loop->index+1 }}</td>
                                <td>
                                    <span class="lead">
                                        {{ $area->name }}
                                    </span>
                                </td>
                                <td>
                                    <div class="btn-group">
                                        <a class="btn btn-info" href="{{ route('admin.areas.edit', $area->id) }}">
                                            <i class="fa fa-edit"></i> editar
                                        </a>
                                        <form action="{{ route('admin.areas.destroy', $area->id) }}"
                                              style="display:inline-block;"
                                              method="POST">

                                            {{ csrf_field() }}
                                            {{ method_field('DELETE') }}

                                            <button class="btn btn-danger"
                                                    type="button"
                                                    onclick="delete_action(event);">
                                                <i class="fa fa-remove"></i> eliminar
                                            </button>

                                        </form>
                                    </div>
                                </td>
                        @endforeach
                        </tbody>
                        <tfooter>
                            <tr>
                                <th>#</th>
                                <th>Nombre</th>
                                <th>Acciones</th>
                            </tr>
                        </tfooter>
                    </table>
                </div>
            </div>
        </section>
@endsection
