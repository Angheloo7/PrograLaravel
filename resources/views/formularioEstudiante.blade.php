<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estudiante</title>
</head>
<body>
    <form method="POST" action="{{ route('estudiantes.guardar') }}" enctype="multipart/form-data">

    @csrf
        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" id="nombre">

        <label for="materia">Materia:</label>
        <input type="text" name="materia" id="materia">

        <label for="edad">Edad:</label>
        <input type="number" name="edad" id="edad">

        <label for="anio">Año Curso:</label>
        <input type="number" name="anio" id="anio">

        <button type=submit>Enviar</button>
    </form>
</body>
</html>
