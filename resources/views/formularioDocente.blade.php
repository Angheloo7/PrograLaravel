<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Docente</title>
</head>
<body>
    <form method="POST" action="{{ route('docentes.guardar') }}" enctype="multipart/form-data">

    @csrf
        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" id="nombre">

        <label for="materia1">Materia 1:</label>
        <input type="text" name="materia1" id="materia1">

        <label for="materia2">Materia 2:</label>
        <input type="text" name="materia2" id="materia2">

        <label for="edad">Edad:</label>
        <input type="number" name="edad" id="edad">

        <button type=submit>Enviar</button>
    </form>
</body>
</html>
