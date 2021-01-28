<!DOCTYPE html>
<html>
    <head>
        <title>Buscar</title>
        <meta content="text/html; charset=UTF-8" http-equiv="content-type">
        <meta http-equiv="CONTENT-TYPE" content="text/html; charset=utf-8">
        <meta name="generator" content="Bluefish 2.2.2" >
        <link rel="stylesheet" href="./css/menu.css">
        <link rel="stylesheet" href="./css/search.css">
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
                    <input type="search" class="searchB" name="searchB" placeholder="Ingrese su opción aquí">
                    <input class="bSearch"type="submit" value="Buscar">
                </div>
            </div>
            
            <div class="searchC">
               
                <a class="btnSearchC btn-block" href="credits.php">Búsqueda por criterios</a>
            </div>
            <div class="suggestion">
            
                <div class="sug1" >
                    <h4> Hotel Villa Lapas</h4>
                    <a href="hotelVillaLapas.php"><img src="./img/villaLapas.jpg" alt="hRiu" width="315" height="250"></a>
                </div>
                <div class="sug2">
                    <h4>Espino Blanco</h4>
                    <a href="espinoBlanco.php"><img src="./img/espinoBlanco.jpg" alt="selina" width="315" height="250"></a>
                </div>

                <div class="sug3" >
                    <h4> Hotel Riu Palace Guanacaste</h4>
                    <a href="riu.php"><img src="./img/hRiu.jpg" alt="hRiu" width="315" height="250"></a>
                </div>
                <div class="sug4">
                    <h4> Selina La Fortuna</h4>
                    <a href="riu.php"><img src="./img/selina.jpg" alt="selina" width="315" height="250"></a>
                </div>
            </div>
        </div>

    </body>
</html>

