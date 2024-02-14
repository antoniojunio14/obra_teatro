<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/mystyle1.css" />
    <title>Registrar Descuento</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <!-- Creamos un menú -->
    <div class="icon-bar">
        <a href="home.html"><i class="fa fa-home"></i></a>
        <a href="descuentos.php"><i class="fa fa-tags"></i></a>
    </div>

    <h2>REGISTRAR DESCUENTO</h2>
    <hr>

    <!-- Creo un formulario para registrar los datos del descuento -->
    <form action="guardar_descuento.php" method="POST">
        <div class="container">
            <label for="Id_boletos"><b>ID de Boletos:</b></label>
            <input type="text" placeholder="Ingrese el ID de boletos" name="Id_boletos" required>

            <label for="Porcentaje_de_descuento"><b>Porcentaje de Descuento:</b></label>
            <input type="text" placeholder="Ingrese el porcentaje de descuento" name="Porcentaje_de_descuento" required>

            <label for="Nombre"><b>Nombre:</b></label>
            <input type="text" placeholder="Ingrese el nombre del descuento" name="Nombre" required>

            <label for="Estado_descuento"><b>Estado:</b></label>
            <select name="Estado_descuento" required>
                <option value="1">Activo</option>
                <option value="0">Inactivo</option>
            </select>

            <button type="submit">Guardar Descuento</button>
        </div>
    </form>
</body>

</html>
