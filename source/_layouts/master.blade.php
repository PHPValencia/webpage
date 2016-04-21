<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon" />
    <title>PHP Valencia</title>
    <meta name="description" content="phpvalencia.es es un grupo local de desarrolladores web que usan el lenguaje #PHP." />
    <meta name="author" content="Valentin Rusev, Carlos Reig, Stephen O'Flynn, David Peña" />
    <meta name="viewport" content="width=device-width" />
    <link href='http://fonts.googleapis.com/css?family=Rambla:400,700' rel='stylesheet' type='text/css' />
    <link rel="stylesheet" href="/css/normalize.css" />
    <link rel="stylesheet" href="/css/style.css" />
    <script src="/js/libs/modernizr.min.js"></script>
</head>

<body>
<!--[if lt IE 7]>
<p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
<![endif]-->
<div id="container">
    @include('_partials.header')
    <div id="main" role="main" class="clearfix">
        @yield('contents')
    </div>
    @include('_partials.footer')
</div>
<!--! end of #container -->
</body>

</html>
