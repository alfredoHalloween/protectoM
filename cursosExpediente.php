<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title> CURSOS POR EXPEDIENTE</title>
        <link href="css/movil.css" rel="stylesheet" type="text/css">
        <link href="css/tabla2.css" rel="stylesheet" type="text/css">
       
        <?php
            require 'usarBD.php';
        ?>
    </head>
    <body>
         <div id="content">
            <div id="nav">
                <ul>
                    <li><a href="personal1.php" title="Regresar"><img src="img/baatras.png"></a></li>
                    <li><a href="menu.php" title="Inicio"><img src="img/bahome.png"></a></li>
                    <li><a href="ayuda.php" title="Ayuda"><img src="img/baayuda.png"></a></li>
                    <li><a href="close.php" title="Salir"><img src="img/baasalir.png"></a></li>
                </ul>
            
           
        
           <?php
            $postExpediente  = $_POST['consulta'];
            $consulta = "SELECT expediente, nombre FROM general WHERE expediente = ".$postExpediente.";";
            $consultaCursos = "SELECT nom_curso, ini_curso, fin_curso FROM cursos WHERE expediente = ".$postExpediente.";";
            $hacerConsulta = mysql_query($consulta, $conexion);                                    
            $hacerCursos = mysql_query($consultaCursos, $conexion);                       
            $numeroRegistros = mysql_num_rows($hacerCursos);
            
            $expediente = mysql_result($hacerConsulta, 0, "expediente");

            $nombre = mysql_result($hacerConsulta, 0, "nombre");
        ?>
        
        <table  cellpadding='2' cellspacing='2' border='2'>
            <tr>
                <td colspan='2'><b>NOMBRE:</b> <?php echo $nombre; ?></td>               
                <th><b>EXPEDIENTE: </b><?php echo $expediente; ?></th>
            </tr>
            <tr>
                <th>Nombre del curso</th>
                <th>Fecha de inicio</th>
                <th>Fecha de termino</th>
            </tr>
            <?php
                for ($contador=0; $contador<$numeroRegistros; $contador++) {
                    $cursos = mysql_result($hacerCursos, $contador, "nom_curso");                
                    $fecha_inicio = mysql_result($hacerCursos, $contador, "ini_curso");
                    $fecha_final = mysql_result($hacerCursos, $contador, "fin_curso");
            ?>
            <tr>
                <td><?php echo $cursos; ?></td>
                <td><?php echo $fecha_inicio; ?></td>
                <td><?php echo $fecha_final; ?></td>
            </tr>
            <?php
                }
            ?>
        </table> 
    </div>
    </div>
    </body>
</html>
