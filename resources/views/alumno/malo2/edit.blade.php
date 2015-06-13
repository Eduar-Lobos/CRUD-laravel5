@extends('layout.template')
@section('content')
    <h1>Actualizar Registro</h1>
    {!! Form::model($alumnos,['method' => 'PATCH','route'=>['Alumnos.update',$alumnos->id]]) !!}
    <div class="form-group">
        {!! Form::label('nombre', 'nombre:') !!}
        {!! Form::text('nombre',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('edad', 'edad:') !!}
        {!! Form::text('edad',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('sexo', 'genero:') !!}
        {!! Form::text('sexo',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('seccion', 'seccion:') !!}
        {!! Form::text('seccion',null,['class'=>'form-control']) !!}
    </div>
    
    <div class="form-group">
        {!! Form::submit('Update', ['class' => 'btn btn-primary']) !!}
    </div>
    {!! Form::close() !!}
@stop