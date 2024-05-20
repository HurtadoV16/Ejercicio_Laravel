<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Formulario camion</title>
</head>
<body>
    <form action="{{route('frmcamion.store')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <label>
            Ingrese la potencia
            <br>
            <input type="text" name="potencia">
            <br>
        </label>
        <label>
            Ingrese la matricula
            <br>
            <input type="text" name="matricula">
            <br>
        </label>
        <label>
            Ingrese el modelo
            <br>
            <input type="text" name="modelo">
            <br>
        </label>
        <label>
            Ingrese el tipo
            <br>
            <input type="text" name="tipo">
            <br>
        </label>
        <label>
            Ingrese el id del camionero
            <br>
            <input type="text" name="camionero_id">
            <br>
        </label>
            <br><br>
            <button type="submit">Enviar Formulario:</button>
            </form>
</body>
</html>
