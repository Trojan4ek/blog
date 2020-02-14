<div class="form-group">
    <img src="/uploads/{{$seriya->season->serial->path}}" width="160" height="190" alt="">
</div>

<div class="form-group">
    {!! Form::label('serial_id', 'Сериал:') !!}
    <p>{{ $seriya->season->serial->title  }}</p>
</div>
<div class="form-group">
    {!! Form::label('season_id', 'Сезон:') !!}
    <p>{{ $seriya->season->title  }}</p>
</div>

<!-- Title Field -->
<div class="form-group">
    {!! Form::label('title', '№ серии:') !!}
    <p>{{ $seriya->title }}</p>
</div>

<!-- Description Field -->
<div class="form-group">
    {!! Form::label('description', 'Описание:') !!}
    <p>{{ $seriya->description }}</p>
</div>

