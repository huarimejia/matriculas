create.blade.php
@extends('layouts.app')
@section('content')
<div class="container">
    <h1>NUEVO matricula</h1>
    <form action="{{ route('estudiante.guardar') }}" method="post">
        @csrf
        <!-- Correo -->

        <label for="Correo">
                <h2>Correo</h2>
            </label>
            <input type="text" name="email"  placeholder="Tu Respuesta" value="{{ old('email') }}">


            <!-- Correo  institucional -->

            <label for="institucional">
                <h2>Correo institucional (ejemplo: jlinares.211DS41@istta.edu.pe)</h2>
            </label>
            <input type="text" name="correo"  placeholder="Tu Respuesta" value="{{ old('correo') }}">


            <!-- CODIGO -->

            <label for="Codigo">
                <h2>CODIGO</h2>
            </label>
            <input type="text" name="codigo"  placeholder="Tu Respuesta" value="{{ old('codigo') }}">


            <!-- APELLIDO PATERNO -->

            <label for="PATERNO">
                <h2>APELLIDO PATERNO</h2>
            </label>
            <input type="text" name="apaterno"  placeholder="Tu Respuesta" value="{{ old('apaterno') }}">

            <!-- APELLIDO MATERNO -->

            <label for="MATERNO">
                <h2>APELLIDO MATERNO</h2>
            </label>
            <input type="text" name="amaterno" placeholder="Tu Respuesta" value="{{ old('amaterno') }}">

            <!-- NOMBRE -->

            <label for="NOMBRE">
                <h2>NOMBRE</h2>
            </label>
            <input type="text" name="nombre"  placeholder="Tu Respuesta" value="{{ old('nombre') }}">

            <!-- DNI -->

            <label for="DNI">
                <h2>DNI</h2>
            </label>
            <input type="number" name="dni"  placeholder="Tu Respuesta" value="{{ old('dni') }}">

            <!-- NUMERO -->

            <label for="NUMERO">
                <h2>CELULAR O TELEFONO</h2>
            </label>
            <input type="number" name="telefono"  placeholder="Tu Respuesta" value="{{ old('numero') }}">

            <!-- SEXO -->
            <label for="">
                <h2>SEXO</h2>
            </label>
            <input type="radio" name="sexo" value="Masculino" value="{{ old('sexo') }}">
            <label for=""><b>Masculino</b></label>
            <input type="radio" name="sexo" value="Femenino" value="{{ old('sexo') }}">
            <label for=""><b>Femenino</b></label>
            <br />
            <br />
            <br />

            <!-- PROGRAMA DE ESTUDIO -->
            <label for="">
                <h2>PROGRAMA DE ESTUDIO</h2>
            </label>
            <select name="carrera" value="{{ old('carrera') }}">
                <option value="Contabilidad">Contabilidad</option>
                <option value="Hosteleria">Administracion de Servicios de Hosteleria/Administracion de Servicios de Hosteleria y Restaurantes</option>
                <option value="Informatica">Computacion e Informatica/Desarrolo de Sistemas de información </option>
                <option value="Electronica">Electronica Industrial / Electricidad Industrial</option>
                <option value="Enfermeria">Enfermeria Técnica</option>
                <option value="Turismo">Guía Oficial de Turismo</option>
                <option value="Automotriz">Mecanica Automotriz </option>
                <option value="Produccion">Mecanica de Producción / Mecanica de Producción Industrial</option>
                <option value="Laboratorio">Técnica en Laboratorio Clínico / Laboratorio Clinico y Anatomía Patológica </option>
            </select>
            <br>
            <br>

            <!-- Tipo de Semestre -->
            <label for="">
                <h2>Selecciones el semestre a matricularse:</h2>
            </label>
            <input type="radio" name="semestre" value="Primero" value="{{ old('semestre') }}">
            <label for=""><b>Primero</b></label><br>
            <input type="radio" name="semestre" value="Segundo"  value="{{ old('semestre') }}">
            <label for=""><b>Segundo</b></label><br>
            <input type="radio" name="semestre" value="Tercero"  value="{{ old('semestre') }}">
            <label for=""><b>Tercero</b></label>
            <input type="radio" name="semestre" value="Cuarto"  value="{{ old('semestre') }}">
            <label for=""><b>Cuarto</b></label><br>
            <input type="radio" name="semestre" value="Quinto"  value="{{ old('semestre') }}">
            <label for=""><b>Quinto</b></label><br>
            <input type="radio" name="semestre" value="Sexto"  value="{{ old('semestre') }}">
            <label for=""><b>Sexto</b></label>
            <br><br><br>

            <!-- Tipo de Matricula -->
            <label for="">
                <h2>Tipo de Matricula</h2>
            </label>
            <input type="radio" name="tipo" value="Regular"  value="{{ old('tipo') }}">
            <label for=""><b>Regular (Semestre Completo)</b></label><br>
            <input type="radio" name="tipo" value="Matricula por curso" value="{{ old('tipo') }}">
            <label for=""><b>Matricula por curso</b></label><br>
            <input type="radio" name="tipo" value="Regular y Matricula por curso" value="{{ old('tipo') }}">
            <label for=""><b>Regular (Semestre Completo) + Matricula por curso</b></label>
            <br><br><br>


            <input type="submit" value=">> REGISTRAR <<">
        
</div>
@endsection