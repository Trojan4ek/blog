@extends('Front.app')
@section('content')
             <img src="/uploads/{{$seriya->season->serial->path}}" width="160" height="190" alt=""><br><br>

             {!! Form::label('serial_id', 'Сериал:') !!}<br>
             <span style="color: #DF7401; font-size: 2em">{{$seriya->season->serial->title}}</span><br><br>

             {!! Form::label('season_id', 'Сезон:') !!}<br>
             <td>{{ $seriya->season->title }}</td><br><br>

             {!! Form::label('title', '№ серии:') !!}<br>
             <td>{{ $seriya->title }}</td><br><br>

             {!! Form::label('description', 'Описание:') !!}<br>
             <td>{{ $seriya->description }}</td><br>

             <a href="{{ route('Front.episods', $seriya->season) }}" class="btn btn-default">Back</a>
@endsection
