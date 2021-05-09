<!DOCTYPE html>
<html lang="es">

<head>
    <!-- etiquetas metas -->
    <meta charset="<?= config('codification') ?>">
    <!-- <meta http-equiv="X-UA-Compatible" content="IE=edge"> -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?= config('web_description') ?>" />
    <meta name="keywords" content="<?= config('web_keyboards') ?>" />
    <meta name="author" content="<?= config('autor-name') . ' ' . config('autor-surname') ?>" />
    <meta name="copyright" content="<?= config('title') ?>" />
    <meta name="robots" content="index, follow" />
    <title><?= config('title') . config('addtitle') ?></title>
    <link rel="shortcut icon" href="<?= assets('img/osoliam.png') ?>" type="image/x-icon">
    <!--estilos personalizados Bootstrap-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">

    <!--estilos personalizados css-->
    <link rel="stylesheet" href="<?= assets('css/style.css') ?>">

    <!--font osward -->
    <link href="https://fonts.googleapis.com/css2?family=Didact+Gothic&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Londrina+Shadow&display=swap" rel="stylesheet">

    <!--FONT AWESONE-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">

    <!-- javascript -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>

</head>

<body>
    <div class="contaiter-fluid text-center mx-auto ">
        <div class="first"></div>
        <div class="container-fluid py-2 nav-logo mb-5 d-flex justify-content-start pl-5">
            <h2 class=" logo ">Aloc_Raise</h2>
        </div>
        <div class=" container pb-3 border-bottom">
            <h1>Routes System Aloc_Raise</h1>
        </div>
        <div class="container justify-content-around py-3 ">
            <p class="font-weight-bolder">DIRECT ROUTE THROUGHT './app/routes/routes.php'</p>
            <p><a href="<?= SERVERURL ?>">INDEX</a> throught the this https://<\site-name\>/</p>
            <p><a href="<?= SERVERURL ?>page-404">PAGE-404</a> throught the this https://<\site-name\>/page-404</p>

        </div>
        <div class="container border-top py-3">
            <p class="font-weight-bolder">ROUTE THROUGH OF THE CONTROLLER './app/controller/example.controller.php'</p>
            <p><a href="<?= SERVERURL ?>example/example1">EXAMPLE1</a> throught the this https://<\site-name\>/example/example1</p>
            <p><a href="<?= SERVERURL ?>example/example2">EXAMPLE2</a> throught the this https://<\site-name\>/example/example2</p>
            <p><a href="<?= SERVERURL ?>example/example3">EXAMPLE2</a> throught the this https://<\site-name\>/example/example3</p>
        </div>
        <p class="border-bottom  pb-1 text-danger mb-5">"This finished the head" </p>