<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="{{route('editar_proveedor')}}" method="post">
        <input type="text" placeholder="{{$proveedor->$id}}" hidden>
        <input type="text" name="nombre" placeholder="{{$proveedor->nombre}}">
        <input type="text" name="direccion" placeholder="{{$proveedor->direccion}}">
        <input type="tel" name="telefono" placeholder="{{$proveedor->telefono}}">
        <input type="email" name="correo" placeholder="{{$proveedor->correo}}">
        <input type="tel" name="contacto" placeholder="{{$proveedor->contacto}}">
        <textarea name="descripcion" cols="30" rows="10" value="{{{{$proveedor->descripcion}}}}">

        </textarea>
        <input type="submit" value="editar Proveedor">
    </form>
</body>
</html>