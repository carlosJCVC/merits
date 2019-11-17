@extends('admin.layouts.app')

@section('htmlheader_title')
    Requisitos
@endsection

@section('styles')
    <link href="{{ asset('assets/css/font-awesome-4.6.1/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/css/util.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/css/main.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/css/animate.css') }}" rel="stylesheet" type="text/css" />
@endsection

@section('content')
    <div class="content-wrapper">
        <section class="content-header">
            <h1>
                Editar requisito
            </h1>
            <ol class="breadcrumb">
                <li>
                    <a href="{{ route('admin.dashboard') }}"><i class="fa fa-dashboard"></i>Inicio</a>
                </li>
                <li>
                    <a href="{{ route('admin.requirements.index', $announcement->id) }}"><i class="fa fa-dashboard"></i>Lista requisitos</a>
                </li>
                <li class="active">Editar requisito</li>
            </ol>
        </section>

        <section class="content">
            <div class="box">
                <div class="box-header with-border">
                    <h3 class="box-title">&nbsp;</h3>
                    <div class="box-tools pull-right">

                        <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
                            <i class="fa fa-minus"></i>
                        </button>

                        <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
                            <i class="fa fa-times"></i>
                        </button>

                    </div>
                </div>

                <div class="box-body">
                    <div class="row">
                        <div class="col-md-10 col-md-offset-1">

                            <form id="register-form" action="{{ route('admin.requirements.update', [ 'announcement' => $announcement, 'requirement' => $requirement ] ) }}" method="POST" class="validate-form form-horizontal" autocomplete="off">
                                {{ method_field('PUT')}}
                                {{ csrf_field() }}

                                <div class="box-solid">
                                    @include('admin.announcements.requirements.form')
                                </div>

                                <div class="box-footer text-center">
                                    <div class="row">

                                        <div class="col-md-6 col-xs-6">
                                            <button class="login100-form-btn">
                                                Actualizar
                                            </button>
                                        </div>

                                        <div class="col-md-6 col-xs-6">
                                            <a href="{{ route('admin.requirements.index', $announcement->id)  }}" class="btn100-form">Cancelar</a>
                                        </div>

                                    </div>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

@endsection


@section('scripts')
    <script src="{{ asset('assets/js/plugins/select2/select2.js') }}"></script>
    {{--<script src="{{ asset('assets/js/plugins/ckeditor/ckeditor.js')  }}"></script>
    <script>
        CKEDITOR.replace( 'description' );
    </script>--}}
    <script>
        (function () {
            const root = document.querySelector('.ex-inputs');
            const rootC = document.querySelector('.ex-inputs-calification');
            const txtDurationStart = document.querySelector('.ex-inputs-start');
            const txtDurationEnd = document.querySelector('.ex-inputs-end');
            const txtCalificationStart = document.querySelector('.ex-inputs-calification-start');
            const txtCalificationEnd = document.querySelector('.ex-inputs-calification-end');
            const containerDuration = document.querySelector('.ex-inputs-picker');
            const containerCalification = document.querySelector('.ex-inputs-calification-picker');

            let options = {
                lang: {
                    months: [
                        'Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio',
                        'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'
                    ]
                }
            }

            const openPicker = (container, txtStart, txtEnd) => {
                // Inject DateRangePicker into our container
                DateRangePicker.DateRangePicker(container, {
                    startOpts: options
                })
                    .on('statechange', function (_, picker) {
                        // Update the inputs when the state changes
                        var range = picker.state;
                        console.log('aaaa', range.start)
                        txtStart.value = range.start ? range.start.toDateString() : '';
                        txtEnd.value = range.end ? range.end.toDateString() : '';
                    });
            }

            openPicker(containerDuration, txtDurationStart, txtDurationEnd)
            openPicker(containerCalification, txtCalificationStart, txtCalificationEnd)

            // When the inputs gain focus, show the date range picker
            txtDurationStart.addEventListener('focus', showDurationPicker);
            txtDurationEnd.addEventListener('focus', showDurationPicker);
            txtCalificationStart.addEventListener('focus', showCalificationPicker);
            txtCalificationEnd.addEventListener('focus', showCalificationPicker);

            function showDurationPicker() {
                containerDuration.classList.add('ex-inputs-picker-visible');
            }

            function showCalificationPicker() {
                containerCalification.classList.add('ex-inputs-picker-visible');
            }

            const closePicker = (rootContainer, container) => {
                // If focus leaves the root element, it is not in the date
                // picker or the inputs, so we should hide the date picker
                // we do this in a setTimeout because redraws cause temporary
                // loss of focus.
                let previousTimeout;
                rootContainer.addEventListener('focusout', function hidePicker() {
                    clearTimeout(previousTimeout);
                    previousTimeout = setTimeout(function() {
                        if (!rootContainer.contains(document.activeElement)) {
                            container.classList.remove('ex-inputs-picker-visible');
                        }
                    }, 10);
                });
            }

            closePicker(root, containerDuration)
            closePicker(rootC, containerCalification)


            $('.js-example-basic-multiple').select2({
                placeholder: "Seleccione un valor",
                allowClear: true
            });

        }());
    </script>
@endsection