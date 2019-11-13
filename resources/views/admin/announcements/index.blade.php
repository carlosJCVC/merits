@extends('admin.layouts.app')

@section('htmlheader_title')
   Announcements
@endsection


@section('content')
    <div class="content-wrapper">
        <section class="content-header">

            <h1>
                Lista de Convocatorias
            </h1>

            <ol class="breadcrumb">
                <li>
                    <a href="{{ route('admin.dashboard') }}"><i class="fa fa-dashboard"></i>Inicio</a>
                </li>
                <li class="active">Lista de Convocatorias</li>
            </ol>

        </section>

        <section class="content">
            <div class="box">
                <div class="box-header with-border">
                    <h3 class="box-title">
                        <a href="{{ route('admin.announcements.create') }}" class="btn btn-info">
                            <i class="fa fa-plus"></i> realizar convocatorias
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
                                <th>Fecha Inicio</th>
                                <th>Fecha Fin</th>
                                <th>Fecha calificacion</th>
                                <th>Fecha calificacion fin</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($announcements as $announcemet)
                            <tr>
                                <td>{{ $loop->index+1 }}</td>
                                <td>
                                    <span class="lead">
                                        {{ $announcemet->title }}
                                    </span>
                                </td>
                                <td>
                                    <span class="lead">
                                        {{ $announcemet->start_date_announcement }}
                                    </span>
                                </td>
                                <td>
                                    <span class="lead">
                                        {{ $announcemet->end_date_announcement }}
                                    </span>
                                </td>
                                <td>
                                    <span class="lead">
                                        {{ $announcemet->start_date_calification }}
                                    </span>
                                </td>
                                <td>
                                    <span class="lead">
                                        {{ $announcemet->end_date_calification }}
                                    </span>
                                </td>
                                <td>
                                    <div class="btn-group">
                                        <a class="btn btn-info" href="{{ route('admin.announcements.edit', $announcemet->id) }}">
                                            <i class="fa fa-edit"></i> editar
                                        </a>
                                        <a class="btn btn-success" href="{{ route('admin.announcements.edit', $announcemet->id) }}">
                                            <i class="fa fa-edit"></i> Requerimientos
                                        </a>
                                        <form action="{{ route('admin.announcements.destroy', $announcemet->id) }}"
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
                                <th>Titulo</th>
                                <th>Fecha Inicio</th>
                                <th>Fecha Fin</th>
                                <th>Fecha calificacion</th>
                                <th>Fecha calificacion fin</th>
                                <th>Acciones</th>
                            </tr>

                        </tfooter>
                    </table>
                </div>
            </div>
        </section>
@endsection
