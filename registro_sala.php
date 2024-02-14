<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/mystyle1.css" />
    <title>Ingresar Sala</title>
</head>

<body>

    
<div class="icon-bar">
        <a href="home.html"><i class="fa fa-home"></i></a>
        <a href="salas.php"><i class="fa fa-building"></i></a>
    </div>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <h2>REGISTRO DE SALA</h2>
    <hr>
    <form action="guardar_sala.php" method="POST">
       
    <div class="container">
            <label for="Nombre"><b>Nombre:</b></label>
            <input type="text" placeholder="Ingrese el nombre" name="Nombre" required>

            <label for="Tipo"><b>Tipo:</b></label>
            <input type="text" placeholder="Ingrese el tipo" name="Tipo" required>


            <label for="Capacidad"><b>Capacidad:</b></label>
            <input type="number" placeholder="Ingrese la capacidad" name="Capacidad" required>

            <label for="Estado"><b>Estado:</b></label>
            <select name="Estado" required>
                <option value="1">Activo</option>
                <option value="0">Inactivo</option>
            </select>

            <button type="submit">Guardar Sala</button>
        </div>
    </form>
</body>

</html>
