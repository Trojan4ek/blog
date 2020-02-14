@extends('Front.app')

@section('content')
    @foreach($serials as $serial)
        <div  class="hex col-sm-6  templatemo-hex-top2">
            <div>
                <div class="hexagon hexagon2 gallery-item">
                    <div class="hexagon-in1">
                        <div class="hexagon-in2" style="background-image: url({{'uploads/'.$serial->path}})">
                            <div class="overlay">
                                <a href="{{ route('Front.seasons', [$serial->id]) }}"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
@endsection
