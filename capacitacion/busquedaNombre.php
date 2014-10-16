<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 3.2 Final//EN">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <title>BUSQUEDA POR NOMBRE</title>
        <link rel="stylesheet" type="text/css" href="../css/movil.css">
        <link rel="stylesheet" type="text/css" href="../css/estilos.css">
        <link rel="stylesheet" type="text/css" href="../css/tabla2_1.css">
    </head>
    <body>        
        <div id="content">
            <div id="nav">
                <ul>
                    <li><a href="hojaW.php" title="Regresar"><img src="../img/baatras.png"></a></li>
                    <li><a href="menu.php" title="Inicio"><img src="../img/bahome.png"></a></li>
                    <li><a href="ayuda.php" title="Ayuda"><img src="../img/baayuda.png"></a></li>
                    <li><a href="close.php" title="Salir"><img src="../img/baasalir.png"></a></li>
                </ul>    
            </div>
            <form name="nombre" id="nombre" method="get" action="busquedaNombre.php">
                Nombre: <input type="text" name="busNombre" id="busNombre" placeholder="Introducir nombre">
                <button type="submit">Buscar</button>
            </form>            
            <?php
                if(isset($_GET['busNombre']) and !empty($_GET['busNombre'])) {
                    include 'conexion.php';
                    $chequeo = mysql_real_escape_string(strtr(strtoupper($_GET['busNombre']), "áéíóú", "ÁÉÍÓÚ"));                
                    $consultaNombre = "SELECT expediente, nombre FROM general WHERE nombre LIKE '%$chequeo%'";
                    $hacerConsultaNombre = mysql_query($consultaNombre);
                    $resultados = mysql_num_rows($hacerConsultaNombre);
                    $archivoActual = basename($_SERVER['PHP_SELF']);
                    if($resultados != 0) {
                        echo "<br>
                              <br>
                              <table class='estiloTabla' style='width: 65%; margin: 0 auto;'>
                                <tr class='cabeceraTabla'>
                                    <th colspan='4'>RESULTADOS: $resultados</th>
                                </tr>
                                <tr class='cabeceraTabla'>
                                    <th>#</th>
                                    <th>Expediente</th>
                                    <th>Nombre</th>
                                    <th>Enlace</th>
                                </tr>";                               
                        for($i = 0; $i < $resultados; $i++) {
                            $numero = $i + 1;
                            $expediente = mysql_result($hacerConsultaNombre, $i, "expediente");
                            $nombre = mysql_result($hacerConsultaNombre, $i, "nombre");
                            
                            echo "<tr>
                                    <td>$numero</td>
                                    <td>$expediente</td>
                                    <td>$nombre</td>
                                    <td><a href='resultado.php?consulta=$expediente&pag=$archivoActual'>Ir al enlace</a></td>
                                  </tr>";
                        }
                        echo "</table>";                                                
                    } else {
                        echo "NO SE HAN ENCONTRADO RESULTADOS";
                    }                        
                }                
            ?>
        </div>        
    </body>   
</html>
