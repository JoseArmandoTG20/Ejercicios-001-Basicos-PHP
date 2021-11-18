<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<body>
    <h1>Ejercicios Basicos PHP.</h1>
    <h2>1.-Saludar Usuario.</h2>
    <form method="get" action="/saludarUsuario.php">
        <input type="text" name="nombre"/>
        <input type="submit" value="Enviar"/>
    </form>
    <h2>2.-¿Cual es tu edad?</h2>
    <form method="get" action="/mayorEdad.php">
        <input type="text" name="edad"/>
        <input type="submit" value="Enviar"/>
    </form>
    <h2>3.-Calificacion.</h2>
    <h3>Ingrese una Calificacion del 0 al 10.</h3>
    <form method="get" action="/calificaciones.php">
        <input type="text" name="calificacion"/>
        <input type="submit" value="Enviar"/>
    </form>
    <h2>4.-Promedio.</h2>
    <form method="post" action="/promedio.php">
        <?php for($i=1; $i<=10; $i++) { ?>
            <div>
                <label for="Calificacion #<?=$i?>">Agregue Su Calificacion:</label>
                </br>
                <input type="number" min="0" max="10" name="calificacion[]" id="calificacion<?=$i?>"/>
            </div>
        <?php } ?>
        <input type="submit" value="Enviar"/>
    </form>
</body>
</html>