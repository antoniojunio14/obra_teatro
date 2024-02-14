<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/mystyle1.css" />
    <title>Registrar Cliente</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <!-- Creamos un menú -->
    <div class="icon-bar">
        <a href="home.html"><i class="fa fa-home"></i></a>
        <a href="clientes.php"><i class="fa fa-user"></i></a>
    </div>

    <h2>REGISTRAR CLIENTE</h2>
    <hr>

    <!-- Creo un formulario para registrar los datos del cliente -->
    <form action="guardar_cliente.php" method="POST">
        <div class="container">
            <label for="Id_Reservas"><b>ID de Reservas:</b></label>
            <input type="text" placeholder="Ingrese el ID de Reservas" name="Id_Reservas" required>

            <label for="Id_usuarios"><b>ID de Usuarios:</b></label>
            <input type="text" placeholder="Ingrese el ID de Usuarios" name="Id_usuarios" required>

            <label for="Estado"><b>Estado:</b></label>
            <select name="Estado" required>
                <option value="1">Activo</option>
                <option value="0">Inactivo</option>
                </select>

<label for="Tipo"><b>Tipo:</b></label>
<select name="Tipo" required>
    <option value="regular" >Regular</option>
    <option value="turista" >Turista</option>
</select>

            <button type="submit">Registrar Cliente</button>
        </div>
    </form>
</body>

</html>
