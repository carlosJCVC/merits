<div class="box-body">
     <div class="form-group {{ $errors->has('name') ? ' has-error' : '' }}">
        <label for="name" class="col-sm-2 control-label">Nombre(*)</label>
        <div class="col-sm-10">
            <input type="name" class="form-control" id="name" name="name" value="{{ old('name', isset($user) ? $user->name : '') }}"
                   placeholder="Nombre">

            @if ($errors->has('name'))
                <span class="help-block">
                    <strong>{{ $errors->first('name') }}</strong>
                </span>
            @endif
        </div>
     </div>

    <div class="form-group {{ $errors->has('lastname') ? ' has-error' : '' }}">
        <label for="lastname" class="col-sm-2 control-label">Apellido(*)</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" name="lastname" value="{{ old('lastname', isset($user) ? $user->lastname : '') }}"
                   placeholder="Apellido">

            @if ($errors->has('lastname'))
                <span class="help-block">
                    <strong>{{ $errors->first('lastname') }}</strong>
                </span>
            @endif
        </div>
    </div>

    <div class="form-group {{ $errors->has('gender') ? ' has-error' : '' }}">
        <label for="gender" class="col-sm-2 control-label">Sexo (*)</label>
        <div class="col-sm-10">
            <select class="form-control" name="gender">
                <option disabled hidden selected>Seleccione sexo</option>
                <option value="M" {{ ( isset($user) && $user->gender == 'M') ? 'selected' : '' }}>MASCULINO</option>
                <option value="F" {{ ( isset($user) && $user->gender == 'F') ? 'selected' : '' }}>FEMENINO</option>
            </select>

            @if ($errors->has('gender'))
                <span class="help-block">
                    <strong>{{ $errors->first('gender') }}</strong>
                </span>
            @endif
        </div>
    </div>

     <div class="form-group {{ $errors->has('email') ? ' has-error' : '' }}">
         <label for="email" class="col-sm-2 control-label">Email(*)</label>
         <div class="col-sm-10">
             <input type="email" class="form-control" id="email" name="email" value="{{ old('email', isset($user) ? $user->email : '') }}"
                    placeholder="E-mail">

             @if ($errors->has('email'))
                 <span class="help-block">
                    <strong>{{ $errors->first('email') }}</strong>
                </span>
             @endif
         </div>
     </div>

     <div class="form-group {{ $errors->has('password') ? ' has-error' : '' }}">
         <label for="password" class="col-sm-2 control-label">Password(*)</label>
         <div class="col-sm-10">
             <input type="password" class="form-control" id="password" name="password" value="{{ old('password') }}"
                    placeholder="Password">

             @if ($errors->has('password'))
                 <span class="help-block">
                    <strong>{{ $errors->first('password') }}</strong>
                </span>
             @endif
         </div>
     </div>

    <div class="form-group {{ $errors->has('password_confirm') ? ' has-error' : '' }}">
        <label for="password_confirm" class="col-sm-2 control-label">Confirm Password(*)</label>
        <div class="col-sm-10">
            <input type="password" class="form-control" id="password" name="password_confirm" value="{{ old('password_confirm') }}"
                   placeholder="Confirma el password">

            @if ($errors->has('password_confirm'))
                <span class="help-block">
                    <strong>{{ $errors->first('password_confirm') }}</strong>
                </span>
            @endif
        </div>
    </div>

    <div class=" {{ $errors->has('roles') ? ' has-error' : '' }}">
        <label for="role" class="col-sm-2 control-label">Roles(*)</label>
        <div class="col-sm-10">
            <select class="form-control js-example-basic-multiple" name="roles[]" multiple="multiple">
                @foreach($roles as $item)
                    <option value="{{ $item->name }}" {{ (isset($user) && $user->roles->contains('name', $item->name)) ? 'selected' : '' }}>{{ $item->name }}</option>
                @endforeach
            </select>

            @if ($errors->has('roles'))
                <span class="help-block">
                    <strong>{{ $errors->first('roles') }}</strong>
                </span>
            @endif
        </div>
    </div>

 </div>