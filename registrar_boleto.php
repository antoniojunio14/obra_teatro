<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/mystyle1.css" />
    <title>Registrar Boleto</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <!-- Creamos un menú -->
    <div class="icon-bar">
        <a href="home.html"><i class="fa fa-home"></i></a>
        <a href="boletos.php"><i class="fa fa-ticket"></i></a>
    </div>

    <h2>REGISTRAR BOLETO</h2>
    <hr>

    <!-- Creo un formulario para registrar los datos del boleto -->
    <form action="guardar_boleto.php" method="POST">
        <div class="container">
            <label for="Id_funciones"><b>ID de Función:</b></label>
            <input type="text" placeholder="Ingrese el ID de la función" name="Id_funciones" required>

            <label for="Id_clientes"><b>ID de Cliente:</b></label>
            <input type="text" placeholder="Ingrese el ID del cliente" name="Id_clientes" required>

            <label for="Id_categorias"><b>ID de Categoría:</b></label>
            <input type="text" placeholder="Ingrese el ID de la categoría" name="Id_categorias" required>

            <label for="Cantidad"><b>Cantidad:</b></label>
            <input type="text" placeholder="Ingrese la cantidad de boletos" name="Cantidad" required>

            <label for="Estado"><b>Estado:</b></label>
            <select name="Estado" required>
                <option value="1">Activo</option>
                <option value="0">Inactivo</option>
            </select>

            <button type="submit">Guardar Boleto</button>
        </div>
    </form>
</body>

</html>
