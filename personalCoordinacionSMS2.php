<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <title>SUBGERENCIA DE MANTENIMIENTO SISTEMÁTICO II</title>
        <link href="css/movil.css" rel="stylesheet" type="text/css">
        <link href="css/tabla2.css" rel="stylesheet" type="text/css">
        <?php
            require 'usarBD.php';            
            require 'claseEmpleado.php';
            $consulta = "SELECT * FROM general WHERE instructor=TRUE AND coordinacion=\"SUBGERENCIA DE MANTENIMIENTO SISTEMÁTICO II\";";
            $hacerConsulta = mysql_query($consulta, $conexion);
            $numeroDeRegistros = mysql_num_rows($hacerConsulta);
        ?>  
    </head>
    <body>
        <div id="content">
            <div id="nav">
                <ul>
                    <li><a href="coordinacion2.php" title="Regresar"><img src="img/baatras.png"></a></li>
                    <li><a href="menu.php" title="Inicio"><img src="img/bahome.png"></a></li>
                    <li><a href="ayuda.php" title="Ayuda"><img src="img/baayuda.png"></a></li>
                    <li><a href="close.php" title="Salir"><img src="img/baasalir.png"></a></li>
                </ul>
            </div>
            <?php
                if($numeroDeRegistros != 0) {
                    echo "<table cellpadding='2' cellspacing='2' border='2'>
                            <tr>
                                <th colspan='9'>TABLA GENERAL</th>
                                <th colspan='2'>Total = $numeroDeRegistros</th>
                            </tr>";                
                    imprimirCabecera();
                    $empleadoActual = new empleado();
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