<div class="form-group">
    <img src="/uploads/{{$serial->path}}" width="160" height="190" alt="">
</div>

<div class="form-group">
    {!! Form::label('title', 'Название:') !!}
    <p>{{ $serial->title }}</p>
</div>

<!-- Description Field -->
<div class="form-group">
    {!! Form::label('description', 'Описание:') !!}
    <p>{{ $serial->description }}</p>
</div>

<!-- Start Field -->
<div class="form-group">
    {!! Form::label('start', 'Start:') !!}
    <p>{{ $serial->start }}</p>
</div>

<!-- Finish Field -->
<div class="form-group">
    {!! Form::label('finish', 'Finish:') !!}
    <p>{{ $serial->finish }}</p>
</div>



