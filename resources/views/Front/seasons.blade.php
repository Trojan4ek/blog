@extends('Front.app')

@section('content')
    @foreach($seasons as $season)
        @if ($loop->first)
            <p align="center"><a href="{{ route('Front.episods', [$season->id]) }}"><img src="{{ url('uploads/'.$season->serial->path) }}" alt="img"></a><br>
            <td><span style="color: #DF7401; font-size: 2em">{{ $season->serial->title }}</span></td></p>
        @endif

        <td><p align="center">( {{ $season->title }} )</td>
        <td> <a href="{{ route('Front.episods', [$season->id]) }}">{{ \Illuminate\Support\Str::limit($season->description) }}</a></td>
        <td>{{ $season->start }}</td>
        <td>{{ $season->finish }}</td><br><br></p>
    @endforeach
    <p align="center"><a href="{{ route('Front.index') }}" class="btn btn-default">Back</a></p>
@endsection
