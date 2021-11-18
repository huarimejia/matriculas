<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous"> 
</head>

<body style="background-image:linear-gradient(to right,red,green)">
    <div>
        <main>
            <table>
                <tr>
                    <td style="padding:2px; background:orange; border:1px brown solid "><a href="{{ route('estudiante.agregar') }}"> NUEVA MATRICULA </a></td>
                    <td style="padding:2px; background:yellow; border:1px brown solid"><a href="{{ route('estudiante.listar') }}"> VER LISTA DE MATRICULADOS</a></td>
                </tr>
            </table>
            @yield('content')
        </main>
    </div>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script> 

</body>

</html>