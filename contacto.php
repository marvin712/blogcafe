<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BlogDeCafé</title>
    <link rel="stylesheet" href="normalize.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&family=PT+Sans:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header class="header">
        <div class="contenedor">
            <div class="barra">
                <a class="logo" href="index.php">
                   <h1 class="logo__nombre no-margin centrar-texto">Blog<span class="logo__bold">DeCafé</span></h1>
                </a>
                <nav class="navegacion">
                    <a href="nosotros.php" class="navegacion__enlace">Nosotros</a>
                    <a href="cursos.php" class="navegacion__enlace">Cursos</a>
                    <a href="contacto.php" class="navegacion__enlace">contacto</a>
                </nav>
            </div>
        </div>
        <div class="header__texto">
            <h2 class="no-margin">Blog de café con consejos y cursos</h2>
            <p class="no-margin">Aprende de los expertos con las mejores recetas y consejos</p>
        </div>
    </header>

    <main class="contenedor">
        <h3 class="centrar-texto">Contacto</h3>
        <div class="contacto-bg"> </div>
            <form class="formulario">
                <div class="campo">
                    <label class="campo__label" for="nombre">Nombre</label>
                    <input class="campo__field" type="text" placeholder="Tu Nombre" id="nombre">
                </div>

                <div class="campo">
                    <label class="campo__label" for="gmail">E-mail</label>
                    <input class="campo__field" type="email" placeholder="Tu gmail" id="gmail">
                </div>

                <div class="campo">
                    <label class="campo__label" for="mensaje">Mensaje</label>
                    <textarea class="campo__field--textarea campo__field" id="mensaje"></textarea>
                </div>

                <div class="campo">
                    <input type="submit" class="boton boton--primario">
                </div>

            </form>
       
      
    </main>

    <footer class="footer">
        <div class="contenedor">
            <div class="barra">
                <a class="logo" href="index.php">
                   <h1 class="logo__nombre no-margin centrar-texto">Blog<span class="logo__bold">DeCafé</span></h1>
                </a>
                <nav class="navegacion">
                    <a href="nosotros.php" class="navegacion__enlace">Nosotros</a>
                    <a href="cursos.php" class="navegacion__enlace">Cursos</a>
                    <a href="contacto.php" class="navegacion__enlace">contacto</a>
                </nav>
            </div>
        </div>
    </footer>
</body>
</html>