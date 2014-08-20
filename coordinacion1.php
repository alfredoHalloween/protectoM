<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Cantidad de edo_instructoreses</title>
        <link href="css/movil.css" rel="stylesheet" type="text/css">
        <link href="css/tabla2.css" rel="stylesheet" type="text/css">
        <?php
        $total = 0;
            require 'usarBD.php';
        ?>
    </head>
    <body>  
        <div id="content">
            <div id="nav">
                <ul>
                    <li><a href="resumen.php" title="Regresar"><img src="img/baatras.png"></a></li>
                    <li><a href="menu.php" title="Inicio"><img src="img/bahome.png"></a></li>
                    <li><a href="ayuda.php" title="Ayuda"><img src="img/baayuda.png"></a></li>
                    <li><a href="close.php" title="Salir"><img src="img/baasalir.png"></a></li>
                </ul>
            
        
        <table id="edo_instructoreses" cellpadding="2" cellspacing="2" border="2">
            <tr>
                <th colspan="3">RESUMEN POR COORDINACIÓN</th>
            </tr>
            <tr>
                
                <th>COORDINACION</th>
                <th>TOTAL DE PERSONAS</th>
                <th>CAPACITACIÓN 2014</th>
            </tr>
            
            
            <?php
                $consulta = "SELECT * FROM general WHERE adscripcion=\"GERENCIA DE INGENIERIA\";";
                $hacerConsulta = mysql_query($consulta, $conexion);
                $numeroDeRegistros = mysql_num_rows($hacerConsulta);
                $total=$total+$numeroDeRegistros;
            ?>
            <tr>
                <td>GERENCIA DE INGENIERIA</td>
                <td><?php echo $numeroDeRegistros;?></td>
            </tr>
            
            <?php
                $consulta = "SELECT * FROM general WHERE adscripcion=\"COORDINACIÓN DE SUPERVISIÓN DE FABRICACIÓN DE TRENES\";";
                $hacerConsulta = mysql_query($consulta, $conexion);
                $numeroDeRegistros = mysql_num_rows($hacerConsulta);
                $total=$total+$numeroDeRegistros;
            ?>
            <tr>
                <td>COORDINACIÓN DE SUPERVISIÓN DE FABRICACIÓN DE TRENES</td>
                <td><?php echo $numeroDeRegistros;?></td>
            </tr>
            
            <?php
                $consulta = "SELECT * FROM general WHERE adscripcion=\"COORDINACIÓN ELECTRÓNICA\";";
                $hacerConsulta = mysql_query($consulta, $conexion);
                $numeroDeRegistros = mysql_num_rows($hacerConsulta);    
                $total=$total+$numeroDeRegistros;
            ?>
            <tr>
                <td>COORDINACIÓN ELECTRÓNICA</td>
                <td><?php echo $numeroDeRegistros;?></td>
            </tr>
            
            <?php
                $consulta = "SELECT * FROM general WHERE adscripcion=\"COORDINACIÓN DE PROGRAMACIÓN Y EVALUACIÓN\";";
                $hacerConsulta = mysql_query($consulta, $conexion);
                $numeroDeRegistros = mysql_num_rows($hacerConsulta);  
                $total=$total+$numeroDeRegistros;
            ?>
            <tr>
                <td>COORDINACIÓN DE PROGRAMACIÓN Y EVALUACIÓN</td>
                <td><?php echo $numeroDeRegistros;?></td>
            </tr>
            
            <?php
                $consulta = "SELECT * FROM general WHERE adscripcion=\"COORDINACIÓN DE MANTENIMIENTO SISTEMÁTICO ZARAGOZA\";";
                $hacerConsulta = mysql_query($consulta, $conexion);
                $numeroDeRegistros = mysql_num_rows($hacerConsulta);  
                $total=$total+$numeroDeRegistros;
            ?>
            
            <tr>
                <td>COORDINACIÓN DE MANTENIMIENTO SISTEMÁTICO ZARAGOZA</td>
                <td><?php echo $numeroDeRegistros;?></td>
            </tr>
            
            <?php
                $consulta = "SELECT * FROM general WHERE adscripcion=\"COORDINACIÓN DE MANTENIMIENTO SISTEMÁTICO CONSTITUCIÓN DE 1917\";";
                $hacerConsulta = mysql_query($consulta, $conexion);
                $numeroDeRegistros = mysql_num_rows($hacerConsulta);   
                $total=$total+$numeroDeRegistros;
            ?>
            
            <tr>
                <td>COORDINACIÓN DE MANTENIMIENTO SISTEMÁTICO CONSTITUCIÓN DE 1917</td>
                <td><?php echo $numeroDeRegistros;?></td>
            </tr>
            
            <?php
                $consulta = "SELECT * FROM general WHERE adscripcion=\"COORDINACIÓN DE MANTENIMIENTO SISTEMÁTICO TAXQUEÑA\";";
                $hacerConsulta = mysql_query($consulta, $conexion);
                $numeroDeRegistros = mysql_num_rows($hacerConsulta);   
                $total=$total+$numeroDeRegistros;
            ?>
            
            <tr>
                <td>COORDINACIÓN DE MANTENIMIENTO SISTEMÁTICO TAXQUEÑA</td>
                <td><?php echo $numeroDeRegistros;?></td>
            </tr>
            
            <?php
                $consulta = "SELECT * FROM general WHERE adscripcion=\"COORDINACIÓN DE MANTENIMIENTO TLAHUAC\";";
                $hacerConsulta = mysql_query($consulta, $conexion);
                $numeroDeRegistros = mysql_num_rows($hacerConsulta); 
                $total=$total+$numeroDeRegistros;
                
            ?>
            
            <tr>
                <td>COORDINACIÓN DE MANTENIMIENTO TLAHUAC</td>
                <td><?php echo $numeroDeRegistros;?></td>
            </tr>  
            
            <?php
                $consulta = "SELECT * FROM general WHERE adscripcion=\"SUBGERENCIA DE MANTENIMIENTO SISTEMÁTICO II\";";
                $hacerConsulta = mysql_query($consulta, $conexion);
                $numeroDeRegistros = mysql_num_rows($hacerConsulta);   
                $total=$total+$numeroDeRegistros;
            ?>
            
            <tr>
                <td>SUBGERENCIA DE MANTENIMIENTO SISTEMÁTICO II</td>
                <td><?php echo $numeroDeRegistros;?></td>
            </tr> 
            
            <?php
                $consulta = "SELECT * FROM general WHERE adscripcion=\"COORDINACIÓN DE MANTENIMIENTO SISTEMÁTICO ROSARIO\";";
                $hacerConsulta = mysql_query($consulta, $conexion);
                $numeroDeRegistros = mysql_num_rows($hacerConsulta);  
                $total=$total+$numeroDeRegistros;
            ?>
            
            <tr>
                <td>COORDINACIÓN DE MANTENIMIENTO SISTEMÁTICO ROSARIO</td>
                <td><?php echo $numeroDeRegistros;?></td>
            </tr>
            
            <?php
                $consulta = "SELECT * FROM general WHERE adscripcion=\"COORDINACIÓN DE MANTENIMIENTO SISTEMÁTICO LA PAZ\";";
                $hacerConsulta = mysql_query($consulta, $conexion);
                $numeroDeRegistros = mysql_num_rows($hacerConsulta);  
                $total=$total+$numeroDeRegistros;
            ?>
            
            <tr>
                <td>COORDINACIÓN DE MANTENIMIENTO SISTEMÁTICO LA PAZ</td>
                <td><?php echo $numeroDeRegistros;?></td>
            </tr>
            
            <?php
                $consulta = "SELECT * FROM general WHERE adscripcion=\"COORDINACIÓN DE MANTENIMIENTO SISTEMÁTICO TICOMAN\";";
                $hacerConsulta = mysql_query($consulta, $conexion);
                $numeroDeRegistros = mysql_num_rows($hacerConsulta); 
                $total=$total+$numeroDeRegistros;
            ?>
            <tr>
                <td>COORDINACIÓN DE MANTENIMIENTO SISTEMÁTICO TICOMAN</td>
                <td><?php echo $numeroDeRegistros; ?></td>
            </tr>
            
            <?php
                $consulta = "SELECT * FROM general WHERE adscripcion=\"COORDINACIÓN DE MANTENIMIENTO SISTEMÁTICO CD. AZTECA\";";
                $hacerConsulta = mysql_query($consulta, $conexion);
                $numeroDeRegistros = mysql_num_rows($hacerConsulta);   
                $total=$total+$numeroDeRegistros;
            ?>
            <tr>
                <td>COORDINACIÓN DE MANTENIMIENTO SISTEMÁTICO CD. AZTECA</td>
                <td><?php echo $numeroDeRegistros; ?></td>                
            </tr>
            
            <?php
                $consulta = "SELECT * FROM general WHERE adscripcion=\"SUBGERENCIA DE MANTENIMIENTO MAYOR Y REHABILITACIÓN\";";
                $hacerConsulta = mysql_query($consulta, $conexion);
                $numeroDeRegistros = mysql_num_rows($hacerConsulta);  
                $total=$total+$numeroDeRegistros;
            ?>
            <tr>
                <td>SUBGERENCIA DE MANTENIMIENTO MAYOR Y REHABILITACIÓN</td>
                <td><?php echo $numeroDeRegistros; ?></td>                
            </tr>
            
            <?php
                $consulta = "SELECT * FROM general WHERE adscripcion=\"COORDINACIÓN DE MANTENIMIENTO MAYOR ZARAGOZA\";";
                $hacerConsulta = mysql_query($consulta, $conexion);
                $numeroDeRegistros = mysql_num_rows($hacerConsulta); 
                $total=$total+$numeroDeRegistros;
            ?>
            <tr>
                <td>COORDINACIÓN DE MANTENIMIENTO MAYOR ZARAGOZA</td>
                <td><?php echo $numeroDeRegistros; ?></td>                
            </tr>
            
            <?php
                $consulta = "SELECT * FROM general WHERE adscripcion=\"COORDINACIÓN DE MANTENIMIENTO MAYOR TICOMAN\";";
                $hacerConsulta = mysql_query($consulta, $conexion);
                $numeroDeRegistros = mysql_num_rows($hacerConsulta); 
                $total=$total+$numeroDeRegistros;
            ?>
            <tr>
                <td>COORDINACIÓN DE MANTENIMIENTO MAYOR TICOMAN</td>
                <td><?php echo $numeroDeRegistros; ?></td>                
            </tr>
            
            <?php
                $consulta = "SELECT * FROM general WHERE adscripcion=\"COORDINACIÓN REHABILITACIÓN DE TRENES\";";
                $hacerConsulta = mysql_query($consulta, $conexion);
                $numeroDeRegistros = mysql_num_rows($hacerConsulta);     
                $total=$total+$numeroDeRegistros;
            ?>
            <tr>
                <td>COORDINACIÓN REHABILITACIÓN DE TRENES</td>
                <td><?php echo $numeroDeRegistros; ?></td>                
            </tr>
            <tr>
                <th colspan="3">
                    <?php
                    echo "total:".$total;
                    ?>
                </th>
            </tr>
        </table>
     </div>
    </div>
    </body>
</html>
