<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Sistema</title>
</head>
<body>
  @guest
    primero debes autenticar
    <form action="{{route('validacion')}}" method="post">
      @csrf
      Nombre: <input type="text" name="nombre" id=""><br>
      Clave: <input type="text" name="clave" id=""><br>
      <input type="submit" value="Enviar">
    </form>
  @else
    bienvenido aqui seleccionaras
  @endguest
  

</body>
</html>