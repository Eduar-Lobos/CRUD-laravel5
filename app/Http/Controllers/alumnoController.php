<?php namespace App\Http\Controllers;

/*
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

 */
use App\alumno;
use App\Http\Requests; //revissa esta porque no se sabe si es por la ruta que esta mala esta y todas las de abajo ok
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Input;
class alumnoController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
		//
        $alumno=alumno::all();
        return view('alumno.index',compact('alumno'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
		return view('alumno.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
		 $alumno=Input::all();
   Alumno::create($alumno);
   return redirect('alumno');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
		$alumno=Alumno::find($id);
   return view('alumno.show',compact('alumno'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
		 $alumno=Alumno::find($id);
   return view('alumno.edit',compact('alumno'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
		$alumnoUpdate=Input::all();
   $alumno=Alumno::find($id);
   $alumno->update($alumnoUpdate);
   return redirect('alumno');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
		Alumno::find($id)->delete();
   return redirect('alumno');
	}





}

