<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Categoria</title>
</head>
<body>
    <form action="{{route('categoria.store')}}"method = "post">
        @csrf
        <label for="Nombre">
        <input type="text" name="nombre">
        <input type="submit" value="Guardar">
        </label>
    </form>
</body>
</html>