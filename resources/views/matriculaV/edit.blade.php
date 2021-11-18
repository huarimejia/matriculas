@extends('layouts.app')
@section('content')
<div class="container">
    <h1>EDITAR ESTUDIANTE</h1>
    <form action="{{ route('estudiante.actualizar', $estudiante->slug) }}" method="post">
        @csrf
        @method('patch')
        <div class="form-group">
            <label for="">CODIGO:</label>
            <input type="text" name="codigo" value="{{ $estudiante->codigo }}">
        </div>
        <div class="form-group">
            <label for="">NOMBRE:</label>
            <input type="text" name="nombre" value="{{ $estudiante->nombre }}">
        </div>
        <div class="form-group">
            <label for="">APELLIDO PATERNO</label>
            <input type="text" name="apaterno" value="{{ $estudiante->apaterno }}">
        </div>
        <div class="form-group">
            <label for="">APELLIDO MATERNO:</label>
            <input type="text" name="amaterno" value="{{ $estudiante->amaterno }}">
        </div>
        <div class="form-group">
            <label for="">DNI:</label>
            <input type="text" name="dni" value="{{ $estudiante->dni }}">
        </div>
        <div class="form-group">
            <label for="">CORREO PERSONAL</label>
            <input type="text" name="email" value="{{ $estudiante->email }}">
        </div>
        <div class="form-group">
            <label for="">CORREO INSTITUCIONAL:</label>
            <input type="text" name="correo" value="{{ $estudiante->correo }}">
        </div>
        <div class="form-group">
            <label for="">TELEFONO:</label>
            <input type="text" name="telefono" value="{{ $estudiante->telefono }}">
        </div>
        <div class="form-group">
            <label for="">SEXO:</label>
            <input type="text" name="sexo" value="{{ $estudiante->sexo }}">
        </div>
        <div class="form-group">
            <label for="">CARRERA:</label>
            <input type="text" name="carrera" value="{{ $estudiante->carrera }}">
        </div>
        <div class="form-group">
            <label for="">SEMESTRE:</label>
            <input type="text" name="semestre" value="{{ $estudiante->semestre }}">
        </div>
        <div class="form-group">
            <label for="">TIPO DE MATRICULA</label>
            <input type="text" name="tipo" value="{{ $estudiante->tipo }}">
        </div>





        <div class="form-group" style="margin-top: 24px;">
            <input type="submit" value="ACTUALIZAR">
        </div>
</div>
</div>
@endsection