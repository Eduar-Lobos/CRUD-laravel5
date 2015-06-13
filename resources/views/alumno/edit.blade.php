@extends('layout.template')
@section('content')
    <h1>Actualizando Registro</h1>
    {!! Form::model($alumno,['method' => 'PATCH','route'=>['alumno.update',$alumno->id]]) !!}
    <div class="form-group">
        {!! Form::label('Nombre', 'Nombre:') !!}
        {!! Form::text('nombre',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('Edad', 'Edad:') !!}
        {!! Form::text('edad',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('Sexo', 'Sexo:') !!}
        {!! Form::text('sexo',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('Seccion', 'Seccion:') !!}
        {!! Form::text('seccion',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('Carrera', 'Carrera:') !!}
        {!! Form::text('carrera',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::submit('Update', ['class' => 'btn btn-primary']) !!}
    </div>
    {!! Form::close() !!}
@stop