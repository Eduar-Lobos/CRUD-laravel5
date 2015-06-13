@extends('layout.template')
@section('content')
    <h1>Registrar Alumnos</h1>
    {!! Form::open(['url' => 'Alumnos']) !!}
    <div class="form-group">
        {!! Form::label('nombre', 'nombre:') !!}
        {!! Form::text('nombre',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('edad', 'edad:') !!}
        {!! Form::text('edad',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('sexo', 'Genero:') !!}
        {!! Form::text('sexo',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('Seccion', 'Seccion:') !!}
        {!! Form::text('seccion',null,['class'=>'form-control']) !!}
    </div>
    
    <div class="form-group">
        {!! Form::submit('Save', ['class' => 'btn btn-primary form-control']) !!}
    </div>
    {!! Form::close() !!}
@stop