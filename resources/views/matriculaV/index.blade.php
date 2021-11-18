@extends('layouts.app')
@section('content')
<div class="container">
    <h1>LISTA DE ESTUDIANTES</h1>
    <table>
        <tr>
            <th style="border:1px brown solid; background:#12c2e9">ID</th>
            <th style="border:1px brown solid; background:#c471ed">Codigo </th>
            <th style="border:1px brown solid; background:#f64f59">Nombre </th>
            <th style="border:1px brown solid; background:#c471ed">Apellido Paterno </th>
            <th style="border:1px brown solid; background:#12c2e9">Apellido Materno</th>
            <th style="border:1px brown solid; background:#c471ed">DNI </th>
            <th style="border:1px brown solid; background:#f64f59">Correo Personal </th>
            <th style="border:1px brown solid; background:#f64f59">Correo institucional </th>
            <th style="border:1px brown solid; background:#c471ed">Telefono </th>
            <th style="border:1px brown solid; background:#c471ed">Sexo </th>
            <th style="border:1px brown solid; background:#c471ed">Carrera </th>
            <th style="border:1px brown solid; background:#c471ed">Semestre </th>
            <th style="border:1px brown solid; background:#c471ed">Tipo </th>
            <th style="border:1px brown solid; background:#99f2c8">Acciones</th>
        </tr>
        <tbody>
            @forelse ($estudiantes as $estudiante)
            <tr style="border:1px brown solid">
                <td style="border:1px brown solid; background:#12c2e9">{{ $estudiante->id}}</td>
                <td style="border:1px brown solid; background:#c471ed">{{ $estudiante->codigo }}</td>
                <td style="border:1px brown solid; background:#f64f59">{{ $estudiante->nombre }}</td>
                <td style="border:1px brown solid; background:#f64f59">{{ $estudiante->apaterno }}</td>
                <td style="border:1px brown solid; background:#12c2e9">{{ $estudiante->amaterno}}</td>
                <td style="border:1px brown solid; background:#c471ed">{{ $estudiante->dni }}</td>
                <td style="border:1px brown solid; background:#f64f59">{{ $estudiante->email }}</td>
                <td style="border:1px brown solid; background:#f64f59">{{ $estudiante->correo }}</td>
                <td style="border:1px brown solid; background:#12c2e9">{{ $estudiante->telefono}}</td>
                <td style="border:1px brown solid; background:#c471ed">{{ $estudiante->sexo }}</td>
                <td style="border:1px brown solid; background:#f64f59">{{ $estudiante->carrera }}</td>
                <td style="border:1px brown solid; background:#f64f59">{{ $estudiante->semestre }}</td>
                <td style="border:1px brown solid; background:#12c2e9">{{ $estudiante->tipo}}</td>
                <td style="border:1px brown solid; background:#99f2c8">
                    <a href="{{ route('estudiante.editar', $estudiante->slug) }}">Editar</a>
                    <a href="{{ route('estudiante.ver', $estudiante->slug) }}">Ver</a>
                    <a href="" onclick="if(confirm('¿Eliminar {{ $estudiante->codigo }} ?'))event.preventDefault();
document.getElementById('borrar-{{ $estudiante->slug }}').submit();">Eliminar</a>
                    <form id="borrar-{{ $estudiante->slug }}" method="post" action="{{ route('estudiante.eliminar', $estudiante->slug) }}">
                        @csrf

                        @method('DELETE')
                    </form>

                </td>
            </tr>
            @empty
            <p> No hay estudianets!</p>
            @endforelse
        </tbody>
    </table>
</div>
@endsection