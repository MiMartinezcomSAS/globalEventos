<!DOCTYPE html>
<!--[if lt IE 7]>
<html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>
<html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>
<html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html lang="es">
<head>

    <title><?php echo $title ?></title>

    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="author" content="juan2ramos"/>
    <meta name="contact" content="juan2ramos@gmail.com"/>
    <meta name="description" content="Global Artistas"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0 maximum-scale=1"/>
    <!-- Meta Facebook -->
    <meta property="og:url" content="">
    <meta property="og:title" content="Global Artistas"/>
    <meta property="og:description" content=".."/>
    <meta property="og:image" content="images/logo.png"/>


    <link rel="shortcut icon" href="favicon.png">
    <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700,900,300italic,400italic,700italic,900italic'
          rel='stylesheet' type='text/css'>

    <!-- Estilos -->
    <script src="js/prefixfree.min.js"></script>
    <link rel="stylesheet" href="css/normalize.css"/>
    <link rel="stylesheet" href="css/style.css"/>


</head>
<body>

<header>
    <div class="margen flex">
        <figure>
            <img src="" alt=""/>
        </figure>
        <form action="">
            <input type="search" class="radius" placeholder="Buscar Artistas, Generos, Canciones..."/>
            <button><span class="icon-">l</span></button>
        </form>
        <div class="header-top-right">
            <a href="">Ingresar</a>
            <button class="new-account radius">Crear una cuenta</button>
            <button class="tools"><span class="icon-"></span></button>
        </div>
    </div>
</header>
<nav>
    <ul>
        <li><a href="">Genero</a></li>
        <li><a href="">Popular</a></li>
        <li><a href="">Norteña</a></li>
        <li><a href="">Ranchera</a></li>
        <li><a href="">Vallenato</a></li>
        <li><a href="">Tropical</a></li>
        <li><a href="">Merengue</a></li>

    </ul>
</nav>
<h1>Artistas Destacados</h1>
<span>Septiembre-2014</span>
<div id="wrapper">
    <?php include $fileName; ?>
</div>
<footer></footer>
<!-- JavaScript -->
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script type="text/javascript" src="js/jquery.flexslider-min.js"></script>
<script src="js/script.js"></script>

</body>
</html>
