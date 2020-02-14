<!-- Name Field -->
<div class="form-group">
    {!! Form::label('roles[]', 'Roles') !!}
    <p>{!! $user->roles->implode('name', ', ') !!}</p>
</div>

<div class="form-group">
    {!! Form::label('name', 'Name:') !!}
    <p>{!! $user->name !!}</p>
</div>

<!-- Email Field -->
<div class="form-group">
    {!! Form::label('email', 'Email:') !!}
    <p>{!! $user->email !!}</p>
</div>
