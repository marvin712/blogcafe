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
        <h3 class="centrar-texto">Sobre Nosotros</h3>
        <div class="sobre-nosotros">
            <div class="sobre-nosotros__imagen">
                <img src="nosotros.jpg" alt="imagen nosotros">
            </div>
            <div class="sobre-nosotros__texto">
                <p>  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean mauris ex, dapibus quis rutrum a, laoreet id purus. Sed pharetra, est sit amet porttitor congue, risus est ullamcorper lorem, sit amet convallis ipsum nibh sit amet nisl. Mauris aliquam lacus urna. Vestibulum posuere orci ut est euismod, nec maximus elit porttitor.</p>
              
                <p> Donec id faucibus ex. In hac habitasse platea dictumst. Fusce vitae faucibus leo. Suspendisse dui mauris, rutrum et posuere quis, fringilla in dui. Vestibulum facilisis congue diam, ornare sodales nisi. Donec dictum felis non ex condimentum suscipit. Donec sit amet pretium ante. Pellentesque lacinia placerat nisl ut imperdiet. </p>
               
            </div>
        </div>
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