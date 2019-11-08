<div class="box-body">
    <div class="form-group {{ $errors->has('name') ? ' has-error' : '' }}">
        <label for="name" class="col-sm-2 control-label">Nombre(*)</label>
        <div class="col-sm-10">
            <input type="name" class="form-control" id="name" name="name" value="{{ old('name', isset($role) ? $role->name : '') }}"
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

    <div class=" {{ $errors->has('permissions') ? ' has-error' : '' }}">
        <label for="role" class="col-sm-2 control-label">Permisos(*)</label>
        <div class="col-sm-10">
            <select class="form-control js-example-basic-multiple" name="permissions[]" multiple="multiple">
                @foreach($permissions as $item)
                    <option value="{{ $item->name }}" {{ (isset($role) && $role->permissions->contains('name', $item->name)) ? 'selected' : '' }}>{{ $item->name }}</option>
                @endforeach
            </select>

            @if ($errors->has('permissions'))
                <span class="help-block">
                    <strong>{{ $errors->first('permissions') }}</strong>
                </span>
            @endif
        </div>
    </div>

</div>