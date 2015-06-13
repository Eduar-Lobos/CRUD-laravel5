@extends('layout/template')
@section('content')
    <h1>Ver Alumno</h1>

    <form class="form-horizontal">
        
        <div class="form-group">
            <label for="nombre" class="col-sm-2 control-label">Nombre</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="nombre" placeholder={{alumno->nombre}} readonly>
            </div>
        </div>
        <div class="form-group">
            <label for="edad" class="col-sm-2 control-label">Edad</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="edad" placeholder={{alumno->edad}} readonly>
            </div>
        </div>
        <div class="form-group">
            <label for="sexo" class="col-sm-2 control-label">Sexo</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="sexo" placeholder={{alumno->sexo}} readonly>
            </div>
        </div>
        <div class="form-group">
            <label for="seccion" class="col-sm-2 control-label">Seccion</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="seccion" placeholder={{alumno->seccion}} readonly>
            </div>
        </div>
        <div class="form-group">
            <label for="carrera" class="col-sm-2 control-label">Carrera</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="carrera" placeholder={{alumno->carrera}} readonly>
            </div>
        </div>

        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <a href="{{ url('alumno')}}" class="btn btn-primary">Atras</a>
            </div>
        </div>
    </form>
@stop