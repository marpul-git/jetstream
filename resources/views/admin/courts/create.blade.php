@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Crear nueva pista</h1>
@stop

@section('content')
    <div class='card'>
        <!--
                <div class="card-header">
                    <a class="btn btn-success " href="{{ route('admin.courts.create') }}">Agregar Pista</a>
                </div>
            -->
        <div class='card-body'>

            {!! Form::open(['route' => 'admin.courts.store']) !!}

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

            {!! Form::submit('Crear pista', ['class' => 'btn btn-primary']) !!}


            {!! Form::close() !!}

        </div>
    </div>
@stop
