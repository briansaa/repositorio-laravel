<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adopta una Mascota</title>
    <style>
        /* Reset de estilos */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        /* Estilos generales */
        body {
            font-family: Arial, sans-serif;
            background-color: #f9f9f9;
            color: #333;
            line-height: 1.6;
        }

        .container {
            width: 80%;
            margin: 0 auto;
            overflow: hidden;
        }

        /* Estilos de la barra de navegación */
        nav {
            background-color: #333;
            color: #fff;
            padding: 10px 0;
        }

        .logo {
            float: left;
        }

        .nav-links {
            float: right;
        }

        .nav-links li {
            display: inline;
            margin-right: 20px;
        }

        .nav-links li:last-child {
            margin-right: 0;
        }

        .nav-links li a {
            color: #fff;
            text-decoration: none;
        }

        /* Estilos de la sección del héroe */
        .hero {
            background-image: url('https://via.placeholder.com/1500x500');
            background-size: cover;
            color: #fff;
            text-align: center;
            padding: 100px 0;
        }

        .hero h1 {
            font-size: 3em;
            margin-bottom: 20px;
        }

        .hero p {
            font-size: 1.2em;
            margin-bottom: 30px;
        }

        /* Estilos de la sección de mascotas disponibles */
        .pets {
            padding: 50px 0;
            text-align: center;
        }

        .pet {
            margin-bottom: 30px;
        }

        .pet img {
            width: 100%;
            border-radius: 5px;
        }

        .pet h3 {
            margin-top: 10px;
        }

        /* Estilos del botón */
        .btn {
            display: inline-block;
            background-color: #f60;
            color: #fff;
            text-decoration: none;
            padding: 10px 20px;
            border-radius: 5px;
            transition: background-color 0.3s;
        }

        .btn:hover {
            background-color: #e25800;
        }

        /* Estilos del pie de página */
        footer {
            background-color: #333;
            color: #fff;
            text-align: center;
            padding: 20px 0;
            margin-top: 50px;
        }

        footer p {
            margin: 0;
        }
    </style>
</head>
<body>
    <header>
        <nav>
            <div class="container">
                <div class="logo">
                    <a href="#">Adopta una Mascota</a>
                </div>
                <ul class="nav-links">
                    <li><a href="#">Inicio</a></li>
                    <li><a href="#">Mascotas Disponibles</a></li>
                    <li><a href="#">Cómo Adoptar</a></li>
                    <li><a href="#">Contacto</a></li>
                </ul>
            </div>
        </nav>
    </header>

    <section class="hero">
        <div class="container">
            <h1>Encuentra a tu compañero fiel</h1>
            <p>¡Adopta una mascota hoy y cambia su vida!</p>
            <a href="#" class="btn">Ver mascotas disponibles</a>
        </div>
    </section>

    <section class="pets">
        <div class="container">
            <h2>Mascotas Disponibles</h2>
            <div class="pet">
                <img src="https://via.placeholder.com/300" alt="Perro">
                <h3>Nombre del Perro</h3>
                <p>Edad: X años | Género: X | Raza: X</p>
                <a href="#" class="btn">Adoptar</a>
            </div>
            <div class="pet">
                <img src="https://via.placeholder.com/300" alt="Gato">
                <h3>Nombre del Gato</h3>
                <p>Edad: X años | Género: X | Raza: X</p>
                <a href="#" class="btn">Adoptar</a>
            </div>
            <!-- Agregar más mascotas si es necesario -->
        </div>
    </section>

    <footer>
        <div class="container">
            <p>&copy; 2024 Adopta una Mascota. Todos los derechos reservados.</p>
        </div>
    </footer>
</body>
</html>
