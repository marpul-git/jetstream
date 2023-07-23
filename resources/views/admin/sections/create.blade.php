@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Crear sección</h1>
@stop

@section('content')
<div class='card'>
    <!--
            <div class="card-header">
                <a class="btn btn-success " href="{{ route('admin.courts.create') }}">Agregar Pista</a>
            </div>
        -->
    <div class='card-body'>

        {!! Form::open(['route' => 'admin.sections.store']) !!}

        @include('admin.sections.partials.form')

        {!! Form::submit('Crear sección', ['class' => 'btn btn-primary']) !!}


        {!! Form::close() !!}

    </div>
</div>
@stop

