<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <title>INSTRUCTORES POR UBICACIÓN</title>
        <link href="../css/movil.css" rel="stylesheet" type="text/css">
        <link href="../css/tabla2.css" rel="stylesheet" type="text/css"> 
    </head>
    <body>
        <div id="content">
            <div id="nav">
                <ul>
                    <li><a href="ubicacion2.php" title="Regresar"><img src="../img/baatras.png"></a></li>
                    <li><a href="../menu.php" title="Inicio"><img src="../img/bahome.png"></a></li>
                    <li><a href="ayuda.php" title="Ayuda"><img src="../img/baayuda.png"></a></li>
                    <li><a href="close.php" title="Salir"><img src="../img/baasalir.png"></a></li>
                </ul>
            </div>
            <?php                                      
                if (isset($_GET['ubicacion'])) {
                    $ubicacion = mysql_real_escape_string($_GET['ubicacion']);
                } else {
                    $ubicacion="";
                    echo "<table cellpadding='2' cellspacing='2' border='2'>
                        <tr><td>ERROR EN LA PÁGINA</td></tr>
                    </table>";
                }         
                require 'conexion.php';            
                require 'claseEmpleado.php';
                if(strcmp($ubicacion, "COMISIONADOS") == 0) {
                    $consulta = "SELECT * FROM general WHERE instructor=TRUE AND ubicacion<>\"SUBGERENCIA DE MANTENIMIENTO MAYOR Y REHABILITACIÓN\"
                        AND ubicacion<>\"COORDINACIÓN DE MANTENIMIENTO MAYOR ZARAGOZA\"
                        AND ubicacion<>\"COORDINACIÓN DE MANTENIMIENTO MAYOR TICOMÁN\"
                        AND ubicacion<>\"COORDINACIÓN DE REHABILITACIÓN DE TRENES\"
                        AND ubicacion<>\"SUBGERENCIA DE MANTENIMIENTO SISTEMÁTICO I\"
                        AND ubicacion<>\"COORDINACIÓN DE MANTENIMIENTO SISTEMÁTICO ZARAGOZA\"
                        AND ubicacion<>\"COORDINACIÓN DE MANTENIMIENTO SISTEMÁTICO CONSTITUCIÓN 1917\"
                        AND ubicacion<>\"COORDINACIÓN DE MANTENIMIENTO SISTEMÁTICO TASQUEÑA\"
                        AND ubicacion<>\"COORDINACIÓN DE MANTENIMIENTO TLÁHUAC\"
                        AND ubicacion<>\"SUBGERENCIA DE MANTENIMMIENTO SISTEMÁTICO II\"
                        AND ubicacion<>\"COORDINACIÓN DE MANTENIMIENTO SISTEMÁTICO ROSARIO\"
                        AND ubicacion<>\"COORDINACIÓN DE MANTENIMIENTO SISTEMÁTICO LA PAZ\"
                        AND ubicacion<>\"COORDINACIÓN DE MANTENIMIENTO SISTEMÁTICO TICOMÁN\"
                        AND ubicacion<>\"COORDINACIÓN DE MANTENIMIENTO SISTEMÁTICO CD. AZTECA\"
                        AND ubicacion<>\"GERENCIA DE INGENIERIA\"
                        AND ubicacion<>\"COORDINACIÓN DE SUPERVISIÓN DE FABRICACIÓN DE TRENES\"
                        AND ubicacion<>\"COORDINACIÓN DE ELECTRÓNICA\"
                        AND ubicacion<>\"COORDINACIÓN DE PROGRAMACIÓN Y EVALUACIÓN (JEFATURA TICOMÁN)\"
                        AND ubicacion<>\"ADMINISTRACIÓN DE MATERIALES\";";
                } else {
                    $consulta = "SELECT * FROM general WHERE instructor=TRUE AND ubicacion='$ubicacion';";
                }
                $hacerConsulta = mysql_query($consulta, $conexion);
                $numeroDeRegistros = mysql_num_rows($hacerConsulta);
        
                if($numeroDeRegistros != 0) {
                    echo "<table cellpading='2' cellspacing='2' border='2'>
                            <td>$ubicacion</td>
                        </table><br><br>";
                    echo "<table cellpadding='2' cellspacing='2' border='2'>
                            <tr>
                                <th colspan='9'>TABLA DETALLADA</th>
                                <th colspan='2'>Total = $numeroDeRegistros</th>
                            </tr>";                                    
                    $empleadoActual = new empleado();
                    $empleadoActual->imprimirCabecera();
                    for ($i = 0; $i < $numeroDeRegistros; $i++) {
                        $empleadoActual->asignar($hacerConsulta, $i);
                        $empleadoActual->imprimirEmpleado();
                    }
                    echo "</table>";
                } else {                    
                    echo "<table cellpading='2' cellspacing='2' border='2'>
                            <td>NO HAY REGISTROS DISPONIBLES</td>
                        </table>";
                }
            ?>
        </div>
    </body>
</html>