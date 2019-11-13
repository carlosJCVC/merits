<div class="box-body">
     <div class="form-group {{ $errors->has('title') ? ' has-error' : '' }}">
        <label for="title" class="col-sm-2 control-label">Titulo(*)</label>
        <div class="col-sm-10">

            <input type="text" class="form-control" id="title" name="title" value="{{ old('title', isset($announcement) ? $announcement->title : '') }}"
                   placeholder="Titulo">

            @if ($errors->has('announcement'))
                <span class="help-block">
                    <strong>{{ $errors->first('announcement') }}</strong>
                </span>
            @else
                <span class="help-block">
                    <strong>Ingrese titulo</strong>
                </span>
            @endif
        </div>
     </div>

     <div class="form-group {{ $errors->has('description') ? ' has-error' : '' }}">
         <label for="description" class="col-sm-2 control-label">Descripcion(*)</label>
         <div class="col-sm-10">
             <textarea type="email" class="form-control" id="description" name="description"
                       placeholder="Descripcion">{{ old('description', isset($announcement) ? $announcement->description : '') }}</textarea>

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

    <div class="form-group ex-inputs {{ $errors->has('start_date_announcement') ? ' has-error' : '' }}">
        <label for="start_date_announcement" class="col-sm-2 control-label">Fecha de duracion(*)</label>
        <div class="col-sm-5">
             <input
                     type="text"
                     class="form-control ex-inputs-start"
                     name="start_date_announcement"
                     placeholder="Fecha de inicio"
                     value="{{ old('start_date_announcement', isset($announcement) ? date('D M d Y', strtotime($announcement->start_date_announcement)) : '') }}" >

            @if ($errors->has('start_date_announcement'))
                <span class="help-block">
                    <strong>{{ $errors->first('start_date_announcement') }}</strong>
                </span>
            @endif
        </div>

        <div class="col-sm-5">
            <input
                    type="text"
                    class="form-control ex-inputs-end"
                    name="end_date_announcement"
                    placeholder="Fecha de fin"
                    value="{{ old('end_date_announcement', isset($announcement) ? date('D M d Y', strtotime($announcement->end_date_announcement)) : '') }}" >

            @if ($errors->has('end_date_announcement'))
                <span class="help-block">
                    <strong>{{ $errors->first('end_date_announcement') }}</strong>
                </span>
            @endif
        </div>
        <div class="ex-inputs-picker"></div>
    </div>

    <div class="form-group ex-inputs-calification {{ $errors->has('start_date_calification') ? ' has-error' : '' }}">
        <label for="start_date_calification" class="col-sm-2 control-label">Fecha de calificacion(*)</label>
        <div class="col-sm-5">
            <input
                    type="text"
                    class="form-control ex-inputs-calification-start"
                    name="start_date_calification"
                    placeholder="Fecha de inicio"
                    value="{{ old('start_date_calification', isset($announcement) ? date('D M d Y', strtotime($announcement->start_date_calification)) : '') }}" >

            @if ($errors->has('start_date_calification'))
                <span class="help-block">
                    <strong>{{ $errors->first('start_date_calification') }}</strong>
                </span>
            @endif
        </div>

        <div class="col-sm-5">
            <input
                    type="text"
                    class="form-control ex-inputs-calification-end"
                    name="end_date_calification"
                    placeholder="Fecha de fin"
                    value="{{ old('end_date_calification', isset($announcement) ? date('D M d Y', strtotime($announcement->end_date_calification)) : '') }}" >

            @if ($errors->has('end_date_calification'))
                <span class="help-block">
                    <strong>{{ $errors->first('end_date_calification') }}</strong>
                </span>
            @endif
        </div>
        <div class="ex-inputs-calification-picker"></div>
    </div>

    <div class=" {{ $errors->has('areas') ? ' has-error' : '' }}">
        <label for="areas" class="col-sm-2 control-label">Areas de postulacion(*)</label>
        <div class="col-sm-10">
            <select class="form-control js-example-basic-multiple" name="areas[]" multiple="multiple">
                @foreach($areas as $item)
                    <option value="{{ $item->id }}" {{ (isset($announcement) && $announcement->areas->contains('name', $item->name)) ? 'selected' : '' }}>{{ $item->name }}</option>
                @endforeach
            </select>

            @if ($errors->has('areas'))
                <span class="help-block">
                    <strong>{{ $errors->first('areas') }}</strong>
                </span>
            @endif
        </div>
    </div>

 </div>
