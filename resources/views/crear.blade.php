<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <center>Vista Crear</center>
    <br>
    <form action="{{route('proyecto.formdata')}}" method="POST" >
        <label for="">
            Nombre Proyecto:
            <input type="text" name="nombreProyecto">
        </label><br>
        <label for="">
            Fuente de los Fondos:
            <input type="text" name="fuenteFondos">
        </label><br>
        <label for="">
            Monto Planificado:
            <input type="text" name="montoPlanificado">
        </label><br>
        <label for="">
            Monto Patrocinado:
            <input type="text" name="montoPatrocinado">
        </label><br>
        <label for="">
            Monto Fondos Propios:
            <input type="text" name="montoFondosPropios">
        </label><br>
        <button type="submit">Enviar</button>
    </form>
</body>
</html>