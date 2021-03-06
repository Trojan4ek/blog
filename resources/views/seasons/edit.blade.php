@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Сезон
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($season, ['route' => ['seasons.update', $season->id], 'method' => 'patch']) !!}

                        @include('seasons.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection
