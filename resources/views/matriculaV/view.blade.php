@extends('layouts.app')
@section('content')
<div class="container">
    <h1>VISTA DEL MATRICULADO</h1>
    <div>
        <label for="">ID:</label>
        <input type="text" name="id" value="{{ $estudiante->id }}" readonly>
    </div>
    <div>
        <label for="">CODIGO:</label>
        <input type="text" name="codigo" value="{{ $estudiante->codigo }}" readonly>
    </div>
    <div>
        <label for="">NOMBRE:</label>
        <input type="text" name="nombre" value="{{ $estudiante->nombre }}" readonly>
    </div>
    <div>
        <label for="">APELLIDO PATERNO:</label>
        <input type="text" name="apaterno" value="{{ $estudiante->apaterno }}" readonly>
    </div>
    <div>
        <label for="">APELLIDO MATERNO:</label>
        <input type="text" name="amaterno" value="{{ $estudiante->amaterno }}" readonly>
    </div>
    <div>
        <label for="">DNI:</label>
        <input type="text" name="dni" value="{{ $estudiante->dni }}" readonly>
    </div>
    <div>
        <label for="">CORREO PERSONAL:</label>
        <input type="text" name="email" value="{{ $estudiante->email }}" readonly>
    </div>
    <div>
        <label for="">CORREO INTITUCIONAL:</label>
        <input type="text" name="correo" value="{{ $estudiante->correo }}" readonly>
    </div>
    <div>
        <label for="">TELEFONO:</label>
        <input type="text" name="telefono" value="{{ $estudiante->telefono }}" readonly>
    </div>
    <div>
        <label for="">SEXO:</label>
        <input type="text" name="sexo" value="{{ $estudiante->sexo }}" readonly>
    </div>
    <div>
        <label for="">CARRERA:</label>
        <input type="text" name="carrera" value="{{ $estudiante->carrera }}" readonly>
    </div>
    <div>
        <label for="">SEMESTE:</label>
        <input type="text" name="semestre" value="{{ $estudiante->semestre }}" readonly>
    </div>
    <div>
        <label for="">TIPO DE MATRICULA:</label>
        <input type="text" name="tipo" value="{{ $estudiante->tipo }}" readonly>
    </div>
    <div>
        <a href="{{ route('estudiante.listar') }}"> REGRESAR</a>
    </div>
</div>
@endsection