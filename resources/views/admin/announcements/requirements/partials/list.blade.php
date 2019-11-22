@forelse($items as $requirement)
    <div class="container d-inline-block mb-2">
        <label class="switch switch-3d switch-primary">
            <input class="switch-input" type="checkbox" name="{{ $requirement->title }}" checked="checked">
            <span class="switch-slider"></span>
        </label>
        <span> {{ $requirement->description }}</span>
        <div class="pull-right">
            <a href="#" class="btn btn-outline-success" onclick="show_form()">Subir</a>
            <a href="#" class="btn btn-outline-primary">Cambiar</a>
        </div>
    </div>
@empty
    <p>Vacio</p>
@endforelse