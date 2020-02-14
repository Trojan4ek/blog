<div class="form-group">
    <img src="/uploads/{{$season->serial->path}}" width="160" height="190" alt="">
</div>

<div class="form-group">
    {!! Form::label('serial_id', 'Сериал:') !!}
    <p>{{ $season->serial->title }}</p>
</div>
<!-- Title Field -->
<div class="form-group">
    {!! Form::label('title', 'Сезон:') !!}
    <p>{{ $season->title }}</p>
</div>

<!-- Description Field -->
<div class="form-group">
    {!! Form::label('description', 'Описание:') !!}
    <p>{{ $season->description }}</p>
</div>

<!-- Start Field -->
<div class="form-group">
    {!! Form::label('start', 'Start:') !!}
    <p>{{ $season->start }}</p>
</div>

<!-- Finish Field -->
<div class="form-group">
    {!! Form::label('finish', 'Finish:') !!}
    <p>{{ $season->finish }}</p>
</div>



