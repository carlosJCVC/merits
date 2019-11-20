@extends('admin.layouts.app')

@section('htmlheader_title')
   Announcements
@endsection


@section('content')

    <div class="card">
        <div class="card-header">
            <i class="fa fa-align-justify"></i> Convocatorias
            <a class="btn btn-secondary" href="{{ route('admin.announcements.create') }}">
                <i class="icon-plus"></i>&nbsp;Nuevo
            </a>
        </div>
        <div class="card-body">
            <table class="table table-bordered table-striped table-sm">
                <thead>
                <tr>
                    <th>Titulo</th>
                    <th>Fecha Inicio</th>
                    <th>Fecha Fin</th>
                    <th>Fecha calificacion</th>
                    <th>Fecha calificacion fin</th>
                    <th>Opciones</th>
                </tr>
                </thead>
                <tbody>
                @foreach($announcements as $announcement)
                    <tr>
                        <td>{{ $announcement->title }}</td>
                        <td>{{ $announcement->start_date_announcement }}</td>
                        <td>{{ $announcement->end_date_announcement }}</td>
                        <td>{{ $announcement->start_date_calification }}</td>
                        <td>{{ $announcement->end_date_calification }}</td>
                        <td>
                            <a class="btn btn-warning btn-sm" href="{{ route('admin.announcements.edit', $announcement->id) }}">
                                <i class="icon-pencil"></i>
                            </a> &nbsp;
                            <a class="btn btn-success" href="{{ route('admin.requirements.index', $announcement->id) }}">
                                <i class="fa fa-edit"></i> Requerimientos
                            </a>
                            <form action="{{ route('admin.announcements.destroy', $announcement->id) }}"
                                  style="display:inline-block;"
                                  method="POST">

                                {{ csrf_field() }}
                                {{ method_field('DELETE') }}

                                <button type="button" class="btn btn-danger btn-sm"
                                        onclick="delete_action(event);">
                                    <i class="icon-trash"></i>
                                </button>
                            </form>

                        </td>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>

@endsection
