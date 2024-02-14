<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #b3e0ff; /* Azul claro */
            overflow: hidden; /* Evita barras de desplazamiento */
        }

        .header {
            background-color:#0d07c4;
            color: white;
            text-align: center;
            padding: 40px;
            margin-bottom: 40px;
        }

        .header h1 {
            font-size: 3em;
            margin: 0;
        }

        .content {
            position: relative;
            z-index: 1; /* Asegúrate de que el contenido esté encima de los fuegos artificiales */
            padding: 10px;
            background-color: #fff;
            border-radius: 30px;
            box-shadow: 0 14px 18px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        .content p {
            color: #555;
            font-size: 2.2em;
        }

        .login-link {
            display: inline-block;
            margin-top: 20px;
            color: white;
            text-decoration: none;
            font-weight: bold;
            background-color: #0d07c4;
            padding: 10px 30px;
            border-radius: 15px;
            transition: background-color 0.3s, transform 0.2s;
        }

        .login-link:hover {
            background-color:#0d07c3;
            transform: scale(1.1);
        }

        .fireworks {
            position: absolute;
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
            pointer-events: none;
            z-index: 20; /* Asegúrate de que los fuegos artificiales estén detrás del contenido */
        }

        .firework {
            position: absolute;
            background-color: #ffcc00; /* Amarillo */
            width: 10px;
            height: 10px;
            border-radius: 50%;
            opacity: 0;
            animation: explode 1s ease-out;
            pointer-events: none;
        }

        @keyframes explode {
            0% {
                transform: scale(0);
                opacity: 1;
            }
            100% {
                transform: scale(1);
                opacity: 0;
            }
        }
    </style>
    <title>Sistema de Gestión de Obras de Teatro</title>
</head>
<body>

<div class="header">
    <h1>Sistema de Gestión de Obras de Teatro</h1>
</div>

<div class="content">
    <p>¡Bienvenido al sistema de gestión de obras de teatro!</p>
    <p>Aquí puedes gestionar todas tus obras, funciones y más.</p>
    <a href="login.html" class="login-link">Iniciar Sesión</a>
</div>

<div class="fireworks"></div> <!-- Contenedor de fuegos artificiales -->

<script>
    document.addEventListener('DOMContentLoaded', function() {
        createFireworks();
    });

    function createFireworks() {
        const fireworksContainer = document.querySelector('.fireworks');

        setInterval(function() {
            const firework = document.createElement('div');
            firework.className = 'firework';
            firework.style.left = Math.random() * window.innerWidth + 'px';
            firework.style.animationDuration = Math.random() * 10 + 10 + 's';
            fireworksContainer.appendChild(firework);

            setTimeout(function() {
                fireworksContainer.removeChild(firework);
            }, 1000);
        }, 300);
    }
</script>

</body>
</html>

