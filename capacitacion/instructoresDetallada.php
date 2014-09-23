<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>INSTRUCTORES DETALLADA</title>
        <link href="../css/movil.css" rel="stylesheet" type="text/css">
        <link href="../css/tabla2_1.css" rel="stylesheet" type="text/css">
        <?php
            require 'conexion.php';
            require 'claseEmpleado.php'
        ?>
    </head>
    <body>
         <div id="content">
            <div id="nav">
                <ul>
                    <li><a href="capa1.php" title="Regresar"><img src="../img/baatras.png"></a></li>
                    <li><a href="../menu.php" title="Inicio"><img src="../img/bahome.png"></a></li>
                    <li><a href="ayuda.php" title="Ayuda"><img src="../img/baayuda.png"></a></li>
                    <li><a href="close.php" title="Salir"><img src="../img/baasalir.png"></a></li>
                </ul>
            </div>
             <?php
                $consulta="SELECT * FROM general WHERE instructor=TRUE;";
                $hacerConsulta=  mysql_query($consulta, $conexion);
                $numInstructores=  mysql_num_rows($hacerConsulta);                                                
                if($numInstructores != 0) {
                    echo "<table class='estiloTabla'>
                            <tr class='cabeceraTabla'>
                                <th colspan='9'>TABLA GENERAL</th>
                                <th colspan='2'>Total = $numInstructores</th>
                            </tr>"; 
                    
                    $tablaDetallada= new empleado();                                                    
                    $tablaDetallada->imprimirCabecera();
                    for($i = 0; $i < $numInstructores; $i++) {                        
                        $tablaDetallada->asignar($hacerConsulta, $i);
                        $tablaDetallada->imprimirEmpleado();
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
