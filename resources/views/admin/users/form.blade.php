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
            @else
                <span class="help-block">
                    <strong>Ingrese nombre</strong>
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
             @else
                 <span class="help-block">
                    <strong>Ingrese email</strong>
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
             @else
                 <span class="help-block">
                    <strong>Ingrese password</strong>
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
            @else
                <span class="help-block">
                    <strong>Confrima password</strong>
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

            @if ($errors->has('password'))
                <span class="help-block">
                    <strong>{{ $errors->first('password') }}</strong>
                </span>
            @endif
        </div>
    </div>

 </div>