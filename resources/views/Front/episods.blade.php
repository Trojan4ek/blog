@extends('Front.app')

@section('content')
    @foreach($seriyas as $seriya)
        @if ($loop->first)
            <p align="center"><img src="{{ url('uploads/'.$seriya->season->serial->path) }}" alt="img"><br>
            <span style="color: #DF7401; font-size: 2em">{{$seriya->season->serial->title}}</span><br>
            <td>{{ $seriya->season->title }}</td></p>
        @endif
        <p align="center">
        <td>{{ $seriya->title }}</td>
        <td><a href="{{ route('Front.show', [$seriya->id]) }}">{{ \Illuminate\Support\Str::limit($seriya->description) }}</a></td></p>
    @endforeach
    <p align="center"><a href="{{ route('Front.seasons', $seriya->season->serial) }}" class="btn btn-default">Back</a></p>
@endsection
