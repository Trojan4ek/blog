<!-- Season Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('season_id', 'Сезон:') !!}
    {!! Form::select('season_id', App\Models\Season::pluck('title', 'id'), null, ['class' => 'form-control select2']) !!}
</div>

<!-- Title Field -->
<div class="form-group col-sm-6">
    {!! Form::label('title', '№ серии:') !!}
    {!! Form::text('title', null, ['class' => 'form-control']) !!}
</div>

<!-- Description Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('description', 'Описание:') !!}
    {!! Form::textarea('description', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('seriyas.index') }}" class="btn btn-default">Cancel</a>
</div>
