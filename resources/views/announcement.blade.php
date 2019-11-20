@extends('layouts.app')

@section('content')
    <div class="animated fadeIn">

        <h1 class="text-center mb-3" style="font-family: cursive">CONVOCATORIAS</h1>
        <div class="card-columns">

            @foreach($announcements as $announcement)
                @include('layouts.announcement', [ 'item' => $announcement ])
            @endforeach

        </div>
    </div>

    <!-- Modal-->
    <div class="modal fade" id="announcement" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-primary modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="announcement_id" style="text-transform: uppercase;">Este es mi primer trabajo </h4>
                    <button type="button" class="close" data-dismiss="modal">
                        <span aria-hidden="true">&times;</span><span class="sr-only">Cerrar</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row" style="text-transform: uppercase; padding:15px" id="announcement_content">
                        ESPACIO PARA TEXTO ESPACIO PARA TEXTO ESPACIO PARA TEXTO ESPACIO PARA TEXTO ESPACIO PARA TEXTO
                        ESPACIO PARA TEXTO ESPACIO PARA TEXTO ESPACIO PARA TEXTO ESPACIO PARA TEXTO ESPACIO PARA TEXTO ESPACIO PARA TEXTO ESPACIO PARA TEXTO ESPACIO PARA TEXTO ESPACIO PARA TEXTO
                    </div>

                    <div style="text-transform: uppercase; padding:15px">
                        <span style="color: red;"><b>REQUISITOS OBLIGATORIOS</b></span>
                        <ul id="list_requirements_required"></ul>
                    </div>

                    <div style="text-transform: uppercase; padding:15px">
                        <span style="color: red"><b>REQUISITOS EXTRA</b></span>
                        <ul id="list_requirements"></ul>
                    </div>

                </div>

                <div class="modal-footer">
                    <a class="btn btn-secondary btn-block" href="{{ route('postulans.create') }}">POSTULARSE</a>
                </div>


                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script>
        let title = $("#announcement_id")
        let content = $("#announcement_content")
        let list_requirements = $("#list_requirements_required")
        let list_extra = $("#list_requirements")

        const show_announcement = (announcement, requeriments) => {
            clear()
            requeriments.forEach(item => {
                if (item.required == true)
                    list_requirements.append('<li><b>' + item.description + '</b></li>')
                else
                    list_extra.append('<li><b>' + item.description + '</b></li>')
            })

            title.html("<b class='text-center'>" + announcement.title + "</b>")
            content.html("<b class='text-center'>" + announcement.description + "</b>")
            list_requirements.html()

            $("#announcement").modal()
        };

        const clear = () => {
            title.html('')
            content.html('')
            list_requirements.html('')
            list_extra.html('')
        }
    </script>
@endsection