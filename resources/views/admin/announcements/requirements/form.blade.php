<div class="box-body">
     <div class="form-group {{ $errors->has('title') ? ' has-error' : '' }}">
        <label for="title" class="col-sm-2 control-label">Titulo(*)</label>
        <div class="col-sm-10">

            <input type="text" class="form-control" id="title" name="title" value="{{ old('title', isset($requirement) ? $requirement->title : '') }}"
                   placeholder="Titulo del requisito">

            @if ($errors->has('title'))
                <span class="help-block">
                    <strong>{{ $errors->first('title') }}</strong>
                </span>
            @else
                <span class="help-block">
                    <strong>Ingrese titulo de requisito</strong>
                </span>
            @endif
        </div>
     </div>

     <div class="form-group {{ $errors->has('description') ? ' has-error' : '' }}">
         <label for="description" class="col-sm-2 control-label">Descripcion(*)</label>
         <div class="col-sm-10">
             <textarea type="text" class="form-control" name="description"
                       placeholder="Descripcion de requisito">{{ old('description', isset($requirement) ? $requirement->description : '') }}</textarea>

             @if ($errors->has('description'))
                 <span class="help-block">
                    <strong>{{ $errors->first('description') }}</strong>
                </span>
             @else
                 <span class="help-block">
                    <strong>Descripcion</strong>
                </span>
             @endif
         </div>
     </div>

    <div class="form-group {{ $errors->has('required') ? ' has-error' : '' }}">
        <label for="required" class="col-sm-2 control-label">Selecciona (*)</label>
        <div class="col-sm-10">
            <select class="form-control" id="required" name="required">
                <option selected disabled hidden>Seleccione una opcion</option>
                <option value=true>Obligatorio</option>
                <option value=false>Extra</option>
            </select>
            @if ($errors->has('required'))
                <span class="help-block">
                    <strong>{{ $errors->first('required') }}</strong>
                </span>
            @endif
        </div>
    </div>


    </div>
