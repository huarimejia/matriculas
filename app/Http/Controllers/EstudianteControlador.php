<?php

namespace App\Http\Controllers;

use App\Models\estudiante;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class EstudianteControlador extends Controller
{
    public function CrearEstudiante()
    {
        return view('matriculaV.create');

    }
    public function registrarEstudiante(Request $request)
    {
        $reglas = [
            'codigo' => 'required',
            'nombre' => 'required',
            'apaterno' => 'required',
            'amaterno' => 'required',
            'dni' => 'required',
            'email' => 'required',
            'correo' => 'required',
            'telefono' => 'required',
            'sexo' => 'required',
            'carrera' => 'required',
            'semestre' => 'required',
            'tipo' => 'required'

        ];
        $mensajeDeError = [
            'required' => 'Ingreso de datos erróneo'
        ];
        $this->validate($request, $reglas, $mensajeDeError);
        estudiante::create([
            'codigo' => $request->codigo,
            'slug' => Str::slug($request->codigo),
            'nombre' => $request->nombre,
            'apaterno' => $request->apaterno,
            'amaterno' => $request->amaterno,
            'dni' => $request->dni,
            'email' => $request->email,
            'correo' => $request->correo,
            'telefono' => $request->telefono,
            'sexo' => $request->sexo,
            'carrera' => $request->carrera,
            'semestre' => $request->semestre,
            'tipo' => $request->tipo
        ]);
        $this->mensaje('message', 'matricula correcta!');
        return redirect()->back();
    }
    public function listarEstudiantes()
    {
        $estudiantes = estudiante::toBase()->get();
        return view('matriculaV.index', compact('estudiantes'));
    }
    public function formularioEditarEstudiante(estudiante $estudiante)
    {
        echo "Formulario De Edicion";
        return view('matriculaV.edit', compact('estudiante'));
    }
    public function ActualizarEstudiante(Request $request, estudiante $estudiante)
    {
        echo "FORMULARIO PARA EDITAR ESTUDIANTE";
        $reglas = [
            'codigo' => 'required',
            'nombre' => 'required',
            'apaterno' => 'required',
            'amaterno' => 'required',
            'dni' => 'required',
            'email' => 'required',
            'correo' => 'required',
            'telefono' => 'required',
            'sexo' => 'required',
            'carrera' => 'required',
            'semestre' => 'required',
            'tipo' => 'required'

        ];
        $mensajeDeError = [
            'required' => 'Ingreso de datos erróneo'
        ];
        $this->validate($request, $reglas, $mensajeDeError);
        $estudiante->update([
            'codigo' => $request->codigo,
            'slug' => Str::slug($request->codigo),
            'nombre' => $request->nombre,
            'apaterno' => $request->apaterno,
            'amaterno' => $request->amaterno,
            'dni' => $request->dni,
            'email' => $request->email,
            'correo' => $request->correo,
            'telefono' => $request->telefono,
            'sexo' => $request->sexo,
            'carrera' => $request->carrera,
            'semestre' => $request->semestre,
            'tipo' => $request->tipo
        ]);
        $this->mensaje('message', 'Estudiante Actualizado Correctamente!');
        return redirect()->back();
    }
    public function VerEstudiante(estudiante $estudiante)
    {
        return view('matriculaV.view', compact('estudiante'));
    }
    public function EliminarEstudiante(estudiante $estudiante)
    {
        $estudiante->delete();
        $this->mensaje('message', 'Estudiante Eliminado Correctamente');
        return redirect()->back();
    }
    public function mensaje(string $codigo = null, string $mensaje = null)
    {
        return session()->flash($codigo, $mensaje);
    }





}
