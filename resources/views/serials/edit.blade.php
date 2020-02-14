@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Сериал
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($serial, ['route' => ['serials.update', $serial->id], 'method' => 'patch', 'files' => true]) !!}

                        @include('serials.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection
