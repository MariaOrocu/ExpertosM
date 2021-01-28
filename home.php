<!DOCTYPE html>
<html>
    <head>
        <title>Inicio</title>
        <meta content="text/html; charset=UTF-8" http-equiv="content-type">
        <meta http-equiv="CONTENT-TYPE" content="text/html; charset=utf-8">
        <meta name="generator" content="Bluefish 2.2.2" >
        <link rel="stylesheet" href="./css/menu.css">
        <link rel="stylesheet" href="./templates/styles.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    </head>

    <script>
        $(document).ready(function () {
            $('.menu').load('./menu/menu.php');
        });
    </script>

    <body>

        <div class="container-fluid">
            <div class="row">
                <div class="column1">
                    <img src="./img/logo.png" alt="Logo">
                </div>
                <div class="column2">
                    <div class="menu"></div>
                </div>
            </div>
            <div class="saludo" >
                <h1 >Bienvenido a Viajeros Costa Rica</h1>
            </div>

            <div class="bienvenida">
                <div class="c1" >
                    <p>Un sitio en el que encontrarás las mejores recomendaciones de 
                        lugares turísticos para visitar con tu familia, pareja o amigos
                    </p>
                </div>
                <div class="c2">
                    <img src="./img/bienvenida.jpg" alt="bienvenida" width="500" height="320">
                </div>
            </div>
        </div>

    </body>
</html>
