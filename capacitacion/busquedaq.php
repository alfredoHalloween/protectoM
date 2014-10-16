<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <title>BÚSQUEDA POR EXPEDIENTE</title>
        <link href="../css/movil.css" rel="stylesheet" type="text/css">
        <link href="../css/estilos.css" rel="stylesheet" type="text/css">
    </head>
    <body>        
        <div id="content">
            <div id="nav">
                <ul>
                    <li><a href="personal1.php" title="Regresar"><img src="../img/baatras.png"></a></li>
                    <li><a href="../menu.php" title="Inicio"><img src="../img/bahome.png"></a></li>
                    <li><a href="ayuda.php" title="Ayuda"><img src="../img/baayuda.png"></a></li>
                    <li><a href="close.php" title="Salir"><img src="../img/baasalir.png"></a></li>
                </ul>            
           </div>                     
            <?php
                require 'conexion.php';
            ?>
            <form id='busqueda' name='busqueda' action='resultado.php' method='get'>
                <ul>
                    Expediente: <input type='text' id='consulta' name='consulta' placeholder='Teclee el expediente'>
                    <li>
                        <button type="submit">Enviar</button>
                    </li>
                </ul>
            </form>
        </div>
    </body>    
</html>
