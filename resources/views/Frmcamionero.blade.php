<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Formulario Camionero</title>
</head>
<body>
    <form action="{{route('frmcamioneros.store')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <label>
            Ingrese el nombre
            <br>
            <input type="text" name="nombre">
            <br>
        </label>
        <label>
            Ingrese la poblacion
            <br>
            <input type="text" name="poblacion">
            <br>
        </label>
        <label>
            Ingrese el dni
            <br>
            <input type="text" name="dni">
            <br>
        </label>
        <label>
            Ingrese el telefono
            <br>
            <input type="text" name="tfno">
            <br>
        </label>
        <label>
            Ingrese la direccion
            <br>
            <input type="text" name="direccion">
            <br>
        </label>
        <label>
            Ingrese el salario
            <br>
            <input type="text" name="salario">
            <br>
        </label>
            <br><br>
            <button type="submit">Enviar Formulario:</button>
            </form>
</body>
</html>
