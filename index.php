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

    <div class="contenedor contenido-principal">
        <main class="blog">
            <h3>Nuestro Blog</h3>
            <article class="entrada">
                <div class="entrada__imagen">
                    <img loading="lazy" src="blog1.jpg" alt="imagen blog">
                </div>

                <div class="entrada__contenido">
                    <h4 class="no-margin">Tipos de Grano de Café</h4>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. At repellat, sunt consectetur aliquid placeat nam amet modi in natus exercitationem esse dolorum, obcaecati temporibus, sint facilis? Maiores maxime ducimus reprehenderit?</p>
                    <a href="entrada.php" class="boton boton--primario">Leer Entrada</a>
                </div>
            </article>

            <article class="entrada">
                <div class="entrada__imagen">
                    <img loading="lazy" src="blog2.jpg" alt="imagen blog">
                </div>

                <div class="entrada__contenido">
                    <h4 class="no-margin">3 Deliciosas Recetas de Café</h4>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. At repellat, sunt consectetur aliquid placeat nam amet modi in natus exercitationem esse dolorum, obcaecati temporibus, sint facilis? Maiores maxime ducimus reprehenderit?</p>
                    <a href="entrada.php" class="boton boton--primario">Leer Entrada</a>
                </div>
            </article>

            <article class="entrada">
                <div class="entrada__imagen">
                    <img loading="lazy" src="blog3.jpg" alt="imagen blog">
                </div>

                <div class="entrada__contenido">
                    <h4 class="no-margin">Beneficios del Café</h4>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. At repellat, sunt consectetur aliquid placeat nam amet modi in natus exercitationem esse dolorum, obcaecati temporibus, sint facilis? Maiores maxime ducimus reprehenderit?</p>
                    <a href="entrada.php" class="boton boton--primario">Leer Entrada</a>
                </div>
            </article>

        </main>
        <aside class="sidebar">
            <h3>Nuestros Cursos y Talleres</h3>
            <ul class="cursos no-padding">
                <li class="widget-curso">
                    <h4 class="no-margin">Técnicas de Extracción de Café</h4>
                    <p class="widget-curso__label">Precio:
                        <span class="widget-curso__info">Gratis</span>
                    </p>
                    <p class="widget-curso__label">Cupo:
                        <span class="widget-curso__info">20</span>
                    </p>
                    <a href="entrada.php" class="boton boton--secundario">Más Información</a>
                </li>

                <li class="widget-curso">
                    <h4 class="no-margin">4 Recetas de Café para principiantes</h4>
                    <p class="widget-curso__label">Precio:
                        <span class="widget-curso__info">Gratis</span>
                    </p>
                    <p class="widget-curso__label">Cupo:
                        <span class="widget-curso__info">20</span>
                    </p>
                    <a href="entrada.php" class="boton boton--secundario">Más Informacion</a>
                </li>
        
            </ul>
        </aside>
    </div>

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