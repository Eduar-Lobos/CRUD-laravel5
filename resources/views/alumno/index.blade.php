@extends('layout/template')

@section('content')
 <h1>Registro de Alumnos</h1>
 <a href="{{url('/alumno/create')}}" class="btn btn-success">Registro Nuevo</a>
 <hr>
 <table class="table table-striped table-bordered table-hover">
     <thead>
     <tr class="bg-info">
         <th>Id</th>
         <th>nombre</th>
         <th>edad</th>
         <th>sexo</th>
         <th>seccion</th>
         <th>carrera</th>
         <th colspan="3">Actions</th>
     </tr>
     </thead>
     <tbody>
     @foreach ($alumno as $alumno)
         <tr>
             <td>{{ $alumno->id }}</td>
             <td>{{ $alumno->nombre }}</td>
             <td>{{ $alumno->edad }}</td>
             <td>{{ $alumno->sexo }}</td>
             <td>{{ $alumno->seccion }}</td>
             <td>{{ $alumno->carrera }}</td>
             <td><a href="{{url('alumno',$alumno->id)}}" class="btn btn-primary">Ver</a></td>
             <td><a href="{{route('alumno.edit',$alumno->id)}}" class="btn btn-warning">Actualizar</a></td>
             <td>
             {!! Form::open(['method' => 'DELETE', 'route'=>['alumno.destroy', $alumno->id]]) !!}
             {!! Form::submit('Borrar', ['class' => 'btn btn-danger']) !!}
             {!! Form::close() !!}
             </td>
         </tr>
     @endforeach

     </tbody>

 </table>
@endsection