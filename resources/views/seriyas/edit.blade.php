@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Серия
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($seriya, ['route' => ['seriyas.update', $seriya->id], 'method' => 'patch']) !!}

                        @include('seriyas.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection
