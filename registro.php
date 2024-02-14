<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/mystyle1.css" />
    <title>Ingresar Datos</title>
</head>

<body>
    <!-- Creamos un menú -->
    <div class="icon-bar">
        <a href="home.html"><i class="fa fa-home"></i></a>
        <a href="usuarios.php"><i class="fa fa-user"></i></a>
    </div>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <h2>REGISTRO</h2>
    <hr>
    <!-- Creo un formulario para ingresar los datos -->
    <form action="guardar.php" method="POST">
        <div class="container">
            <label for="Nombre"><b>Nombre:</b></label>
            <input type="text" placeholder="Ingrese su nombre" name="Nombre" required>

            <label for="Apellido"><b>Apellido:</b></label>
            <input type="text" placeholder="Ingrese su apellido" name="Apellido" required>

            <label for="Direccion"><b>Dirección:</b></label>
            <input type="text" placeholder="Ingrese su dirección" name="Direccion" required>

            <label for="Telefono"><b>Teléfono:</b></label>
            <input type="text" placeholder="Ingrese su teléfono" name="Telefono" required>

            <label for="Contrasena"><b>Contraseña:</b></label>
            <input type="password" placeholder="Ingrese su contraseña" name="Contrasena" required>

            <label for="Nacionalidad"><b>Nacionalidad:</b></label>
            <select name="Nacionalidad" required>
                <option value="Argentina">Argentina</option>
                <option value="Brasil">Brasil</option>
                <option value="Colombia">Colombia</option>
                <option value="Ecuatoriana">Ecuatoriana</option>
            </select>

            <label for="Genero"><b>Género:</b></label>
            <select name="Genero" required>
                <option value="M">M</option>
                <option value="F">F</option>
               
              
            </select>

            <label for="Rol"><b>Rol:</b></label>
            <select name="Rol" required>
                <option value="Usuario">Usuario</option>
                <option value="Administrador">Administrador</option>
                <option value="Actor">Actor</option>
                <option value="Productor">Productor</option>
               
               
            </select>

            <label for="Estado"><b>Estado:</b></label>
            <select name="Estado" required>
                <option value="1">Activo</option>
                <option value="0">Inactivo</option>
               
            </select>

            <button type="submit">Guardar</button>
        </div>
    </form>
</body>

</html>
