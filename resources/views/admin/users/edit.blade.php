@extends('admin.layouts.app')

@section('htmlheader_title')
    Usuario
@endsection

@section('styles')
    <link href="{{ asset('assets/css/font-awesome-4.6.1/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/css/util.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/css/main.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/css/animate.css') }}" rel="stylesheet" type="text/css" />

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
@endsection

@section('content')
    <div class="content-wrapper">
        <section class="content-header">
            <h1>
                Editar de Usuario
            </h1>
            <ol class="breadcrumb">
                <li>
                    <a href="{{ route('admin.dashboard') }}"><i class="fa fa-dashboard"></i>Inicio</a>
                </li>
                <li class="active">Editar de Usuario</li>
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
                        <div class="col-md-8 col-md-offset-2">

                            <form id="register-form" action="{{ route('admin.users.update', $user->id) }}" method="POST" class="validate-form form-horizontal" autocomplete="off">
                                {{ method_field('PUT')}}
                                {{ csrf_field() }}

                                <div class="box-solid">
                                    @include('admin.users.form')
                                </div>

                                <div class="box-footer text-center">
                                    <div class="row">

                                        <div class="col-md-6 col-xs-6">
                                            <button class="login100-form-btn">
                                                Actualizar
                                            </button>
                                        </div>

                                        <div class="col-md-6 col-xs-6">
                                            <a href="{{ route('admin.users.index')  }}" class="btn100-form">Cancelar</a>
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
    <script src="{{ asset('js/app.js') }}"></script>
@endsection