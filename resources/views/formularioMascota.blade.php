<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mascota</title>
</head>
<body>
    <form method="POST" action="{{ route('mascotas.guardar') }}" enctype="multipart/form-data">

    @csrf
        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" id="nombre">

        <label for="nombreDuenio">Nombre Dueño:</label>
        <input type="text" name="nombreDuenio" id="nombreDuenio">

        <label for="edad">Edad:</label>
        <input type="number" name="edad" id="edad">

        <label for="Raza">Raza:</label>
        <input type="text" name="raza" id="raza">

        <label for="descripcion">Descripcion:</label>
        <input type="text" name="descripcion" id="descripcion">

        <label for="imagen">Imagen:</label>
        <input type="file" name="imagen" id="imagen">

        <button type=submit>Enviar</button>
    </form>
</body>
</html>