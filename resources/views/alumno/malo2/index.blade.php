
@extends('layout/template')

@section('content')
 <h1>Registro de alumnos</h1>
 <a href="{{url('/Alumnos/create')}}" class="btn btn-success">Registrar nuevo alumno</a>
 <hr>
 <table class="table table-striped table-bordered table-hover">
     <thead>
     <tr class="bg-info">
         <th>Id</th>
         <th>Nombre</th>
         <th>Edad</th>
         <th>Genero</th>
         <th>Seccion</th>
         <th colspan="3">Actions</th>
     </tr>
     </thead>
     <tbody>
     @foreach ($alumnos as $alumnos)
         <tr>
             <td>{{ $alumnos->id }}</td>
             <td>{{ $alumnos->nombre }}</td>
             <td>{{ $alumnos->edad }}</td>
             <td>{{ $alumnos->sexo }}</td>
             <td>{{ $alumnos->seccion }}</td>
             <td><a href="{{url('Alumnos',$alumnos->id)}}" class="btn btn-primary">Ver</a></td>
             <td><a href="{{route('Alumnos.edit',$alumnos->id)}}" class="btn btn-warning">Actualizar</a></td>
             <td>
             {!! Form::open(['method' => 'DELETE', 'route'=>['Alumnos.destroy', $alumnos->id]]) !!}
             {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
             {!! Form::close() !!}
             </td>
         </tr>
     @endforeach

     </tbody>

 </table>
@endsection