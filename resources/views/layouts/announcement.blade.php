<div class="col-sm-4">
    <div class="card card-default">
        <div class="card-header"><b>{{ $item->title }}</b></div>
        <div class="card-body card-6-6">
            <div class="card-img">
                <img src="{{ asset('assets/images/icons/task.svg') }}" class="img-responsive">
            </div>
            <p>{{ $item->description }}</p>
        </div>
        <div class="card-footer">
            <a class="btn btn-custom" onclick="show_announcement({{ $item }}, {{ $item->requirements }})">Ver Convocatoria</a>
        </div>
    </div>
</div>
