@extends('auth.layouts.auth')

@section('htmlheader_title')
    Register
@endsection

@section('content')
    <form class="login100-form validate-form" action="{{ route('auth.register_store') }}" method="POST">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">

        <span class="login100-form-title">
            REGISTRARSE
        </span>

        <div class="wrap-input100 validate-input {{ $errors->has('name')? 'alert-validate' : '' }}" data-validate="{{ $errors->has('name')? $errors->first('name') : 'Nombre completo es requerido' }}">
            <input class="input100" type="text" name="name" placeholder="Nombre completo"  value="{{ old('name')}}">
            <span class="focus-input100"></span>
            <span class="symbol-input100">
                <i class="fa fa-lock" aria-hidden="true"></i>
            </span>
        </div>

        <div class="wrap-input100 validate-input {{ $errors->has('email')? 'alert-validate' : '' }}" data-validate="{{ $errors->has('email')? $errors->first('email') : 'E-mail valido es requerido: example@abc.xyz' }}">
            <input class="input100" type="text" name="email" placeholder="Email" value="{{ old('email') }}">
            <span class="focus-input100"></span>
            <span class="symbol-input100">
                <i class="fa fa-envelope" aria-hidden="true"></i>
            </span>
        </div>

        <div class="wrap-input100 validate-input {{ $errors->has('password')? 'alert-validate' : '' }}" data-validate="{{ $errors->has('password')? $errors->first('password') : 'Password es requerido' }}">
            <input class="input100" type="password" name="password" placeholder="Password">
            <span class="focus-input100"></span>
            <span class="symbol-input100">
                <i class="fa fa-lock" aria-hidden="true"></i>
            </span>
        </div>

        <div class="wrap-input100 validate-input {{ $errors->has('password_confirm')? 'alert-validate' : '' }}" data-validate="{{ $errors->has('password_confirm')? $errors->first('password_confirm') : 'Password es requerido' }}">
            <input class="input100" type="password" name="password_confirm" placeholder="Repite la contrasenia">
            <span class="focus-input100"></span>
            <span class="symbol-input100">
                <i class="fa fa-lock" aria-hidden="true"></i>
            </span>
        </div>

        <div class="container-login100-form-btn">
            <button class="login100-form-btn">
                Register
            </button>
        </div>

        <div class="text-center p-t-136">
            <a class="txt2" href="{{ url('/login') }}">
                I already have a membership
                <i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
            </a>
        </div>
    </form>

    @include('auth.scripts')
</body>

@endsection
