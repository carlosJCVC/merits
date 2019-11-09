<div class="box-body">
    <div class="form-group {{ $errors->has('name') ? ' has-error' : '' }}">
        <label for="name" class="col-sm-2 control-label">Nombre(*)</label>
        <div class="col-sm-10">
            <input type="name" class="form-control" id="name" name="name" value="{{ old('name', isset($area) ? $area->name : '') }}"
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

    <div class="form-group {{ $errors->has('description') ? ' has-error' : '' }}">
        <label for="description" class="col-sm-2 control-label">Descripcion(*)</label>
        <div class="col-sm-10">
            <textarea type="description" class="form-control" id="description" name="description" placeholder="Descripcion">{{ old('description', isset($area) ? $area->description : '') }}</textarea>

            @if ($errors->has('description'))
                <span class="help-block">
                    <strong>{{ $errors->first('description') }}</strong>
                </span>
            @else
                <span class="help-block">
                    <strong>Ingrese descripcion</strong>
                </span>
            @endif
        </div>
    </div>

</div>