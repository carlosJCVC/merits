@extends('admin.layouts.app')

@section('htmlheader_title')
    Requirements
@endsection

@section('content')
    <div class="card" style="height: 100vh">
        <div class="card-header text-center title-panel">PANEL DE CONTROL</div>
        <div class="card-body" style="background-image: url('{{ asset('images/adinfondo.jpg') }}'); background-size: cover; background-repeat: no-repeat">
            <div class="row">
                <div class="col-3">
                    <div class="card border-info shadow_card special-card">
                        <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                            <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">REQUISITOS INDISPENSABLES</a>
                            <a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false">REQUISITOS GENERALES</a>
                            <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false">CONSULTAS</a>
                        </div>
                    </div>
                </div>
                <div class="col-9">
                    <div class="card">
                        <div class="tab-content" id="v-pills-tabContent">
                            <div class="tab-pane fade show active" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                                @include('admin.announcements.requirements.partials.list', [ 'items' => $announcements->requiredRequirements() ])
                            </div>
                            <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
                                @include('admin.announcements.requirements.partials.list', [ 'items' => $announcements->generalRequirements() ])
                            </div>
                            <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">
                                CHAT
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>




    <!-- Modal-->
    <div class="modal fade" id="requirement_file" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-primary modal-md" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" style="text-transform: uppercase;">Subir archivo</h4>
                    <button type="button" class="close" data-dismiss="modal">
                        <span aria-hidden="true">&times;</span><span class="sr-only">Cerrar</span>
                    </button>
                </div>

                <div class="modal-body">
                    <div class="container">
                        <input type="file"
                               class="filepond"
                               name="file"
                               data-allow-image-preview="false"
                               data-instant-upload="false"
                               data-max-file-size="3MB"
                               multiple="false">
                    </div>
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
        let anouncement_modal = $("#requirement_file")

        const show_form = () => {
            anouncement_modal.modal()
        }

        var url = '{{ route('admin.requirements.file', [ 'announcement' => 1, 'requirement' => 1 ]) }}?file=';

        const inputElement = document.querySelector('input[type="file"]');
        const pond = FilePond.create( inputElement, {
            server: {
                //process: './ssss',
                load: (source, load, error, progress, abort, headers) => {
                    error('oh my goodness');
                    progress(false, 0, 1024);

                    const data = { name: 'world.text' };
                    const blob = new Blob([JSON.stringify(data, null, 2)], {
                        type: 'application/json'
                    });



                    var file = new File(['foo', 'bar'], 'foobar.txt');

                    load(file);

                    return {
                        abort: () => {
                            abort();
                        }
                    };
                },
                //revert: './hhhhhhh',
                //restore: null
            },
            files: [{
                source: '1',
                options: {
                    type: 'local',
                    //file: {
                    //    name: 'ggg.jpeg'
                    //}
                }
            }]
        } )

    </script>
    {{--
    <script>
        const pond = document.querySelector('.filepond--root');
        pond.addEventListener('FilePond:addfile', e => {
            console.log('File added', e.detail);
        });


        // override default options
        FilePond.setOptions({
            dropOnPage: true,
            dropOnElement: true,
        });
        const data = { hello: 'world' };
        const blob = new Blob([JSON.stringify(data, null, 2)], {
            type: 'application/json'
        });

        const inputElement = document.querySelector('input[type="file"]');
        const pond = FilePond.create( inputElement, {
            server: {
                url: '{{ route('admin.requirements.upload', [ 'announcement' => 1, 'requirement' => 1 ]) }}',
                headers: {
                    //'Content-Type': 'application/x-www-form-urlencoded; charset=UTF-8',
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                load: () => {
                    alert()
                },
                fetch: 'getFile'
            },
            files: [{
                source: '12345',
                options: {
                    type: 'local',
                    file: {
                        name: 'carlos.jpeg'
                    }
                }
            }],
            onprocessfile: (blob) => { alert('finished') },
            labelFileProcessingComplete: 'completado',
            labelIdle: 'Arratra y suelta tu archivo',
            imagePreviewHeight: 170,
            imageCropAspectRatio: '1:1',
            imageResizeTargetWidth: 200,
            imageResizeTargetHeight: 200,
        } );

        let anouncement_modal = $("#requirement_file")

        const show_form = () => {
            anouncement_modal.modal()
        }

        const clear = () => {
            title.html('')
            content.html('')
            list_requirements.html('')
            list_extra.html('')
        }
    </script>
    --}}
@endsection