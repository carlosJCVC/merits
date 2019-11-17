@extends('admin.layouts.app')

@section('htmlheader_title')
   Requirements
@endsection


@section('content')
    <div class="content-wrapper">
        <section class="content-header">

            <h1>
                Lista de Requisitos
            </h1>

            <ol class="breadcrumb">
                <li>
                    <a href="{{ route('admin.dashboard') }}"><i class="fa fa-dashboard"></i>Inicio</a>
                </li>
                <li class="active">Lista de Requisitos</li>
            </ol>

        </section>

        <section class="content">
            <div class="box">
                <div class="box-header with-border">
                    <h3 class="box-title">
                        <a href="{{ route('admin.requirements.create', $announcement->id) }}" class="btn btn-info">
                            <i class="fa fa-plus"></i> Agregar Requisito
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
                                <th>Titulo</th>
                                <th>Fecha creada</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                        @forelse($requirements as $requirement)
                            <tr>
                                <td>{{ $loop->index+1 }}</td>
                                <td>
                                    <span class="lead">
                                        {{ $requirement->title }}
                                    </span>
                                </td>
                                <td>
                                    <span class="lead">
                                        {{ $requirement->created_at }}
                                    </span>
                                </td>
                                <td>
                                    <div class="btn-group">
                                        <a class="btn btn-info" href="{{ route('admin.requirements.edit', [ 'announcement' => $announcement->id, 'requirement' => $requirement->id ]) }}">
                                            <i class="fa fa-edit"></i> editar
                                        </a>
                                        <form action="{{ route('admin.requirements.destroy', [ 'announcement' => $announcement->id, 'requirement' => $requirement->id ]) }}"
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
                        @empty
                            Vacio
                        @endforelse
                        </tbody>
                        <tfooter>
                            <tr>
                                <th>#</th>
                                <th>Titulo</th>
                                <th>Fecha creada</th>
                                <th>Acciones</th>
                            </tr>

                        </tfooter>
                    </table>
                </div>
            </div>
        </section>
@endsection
