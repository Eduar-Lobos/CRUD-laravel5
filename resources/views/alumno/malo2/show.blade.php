@extends('layout/template')
@section('content')
    <h1>Informacion de alumno</h1>

    <form class="form-horizontal">
        
        <div class="form-group">
            <label for="nombre" class="col-sm-2 control-label">Nombre</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="nombre" placeholder={{$alumnos->nombre}} readonly>
            </div>
        </div>
        <div class="form-group">
            <label for="edad" class="col-sm-2 control-label">Edad</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="edad" placeholder={{$alumnos->edad}} readonly>
            </div>
        </div>
        <div class="form-group">
            <label for="sexo" class="col-sm-2 control-label">Genero</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="sexo" placeholder={{$alumnos->sexo}} readonly>
            </div>
        </div>
        <div class="form-group">
            <label for="seccion" class="col-sm-2 control-label">Seccion</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="seccion" placeholder={{$alumnos->seccion}} readonly>
            </div>
        </div>

        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <a href="{{ url('Alumnos')}}" class="btn btn-primary">Back</a>
            </div>
        </div>
    </form>
@stop