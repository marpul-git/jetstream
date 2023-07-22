@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Editar Pista</h1>
@stop

@section('content')
{{--
@if (session('info'))
    <div class="alert alert-success">
        <strong>{{session('info')}}</strong>
    </div>
    
@endif
  --}}  
<div class='card'>
    
                    
    <div class='card-body'>

        {!! Form::Model($court,['route' => ['admin.courts.update',$court],'method'=>'put']) !!}

        <div class="form-group">
            {!! Form::label('name', 'Nombre') !!}
            {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el nombre de la pista']) !!}

            @error('name')
                <span class="text-danger">{{ $message }}</span>
            @enderror
            
        </div>
        <div class="form-group">
            {!! Form::label('type', 'Tipo') !!}
            {!! Form::text('type', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el tipo de pista']) !!}
            
            @error('type')
                <span class="text-danger">{{ $message }}</span>
            @enderror

        </div>

        {!! Form::submit('Actualizar pista', ['class' => 'btn btn-primary']) !!}


        {!! Form::close() !!}

    </div>
    <div class="card-footer">
        <a class="btn btn-success " href="{{ route('admin.courts.index') }}">Listado de pistas</a>
    </div>
</div>

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop