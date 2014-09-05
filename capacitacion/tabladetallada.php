<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
         <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <title>TABLA DETALLADA</title>
        <link href="css/movil.css" rel="stylesheet" type="text/css">
        <link href="css/tabla2.css" rel="stylesheet" type="text/css">
        <link href="css/estilos.css" rel="stylesheet" type="text/css">
       <?php
            require 'usarBD.php';                
       ?>
        </head>
     <body>
         <?php
                $consulta = "SELECT * FROM general WHERE taller=\"GERENCIA DE INGENIERIA\";";
                $hacerConsulta = mysql_query($consulta, $conexion);
                $numeroDeRegistros = mysql_num_rows($hacerConsulta);    
                $numeroColumnas = mysql_num_fields($hacerConsulta);
         ?>
           <table border="1" cellpadding="2" cellspacing="1">
           <tr> 
               <th colspan="<?php echo $numeroColumnas?>">Datos generales</th></tr>
           <tr>
                <th>Expediente</th>
                <th>Nombre</th>
                <th>Puesto</th>
                <th>Adscripción</th>
                <th>Ubicación</th>
                <th>Plaza</th>
                <th>Plaza SIDEN</th>
           <th>Calidad</th>
           <th>Area</th>
           <th>Horario</th>
           <th>Descanso</th>
          </tr>   
         
        <?php
        for ($contador=0; $contador<$numeroDeRegistros; $contador ++){           
            $expediente=mysql_result ($hacerConsulta, $contador, "expediente");
            $nombre=mysql_result ($hacerConsulta, $contador, "nombre");
            $puesto=mysql_result ($hacerConsulta, $contador, "puesto");
            $adscripcion=mysql_result ($hacerConsulta, $contador, "adscripcion");
            $taller=mysql_result ($hacerConsulta, $contador, "taller");
            $plaza=mysql_result ($hacerConsulta, $contador, "plaza");
            $siden=mysql_result ($hacerConsulta, $contador, "siden");
            $calidad=mysql_result ($hacerConsulta, $contador, "calidad");
            $area=mysql_result ($hacerConsulta, $contador, "area");
            $horario=mysql_result ($hacerConsulta, $contador, "horario");
            $descanso=mysql_result ($hacerConsulta, $contador, "descanso");            
          ?>
          <tr>
          <td><?php echo $expediente; ?></td>
          <td><?php echo $nombre; ?></td>          
          <td><?php echo $puesto; ?></td>
          <td><?php echo $adscripcion; ?></td>
          <td><?php echo $taller; ?></td>
          <td><?php echo $plaza; ?></td>
          <td><?php echo $siden; ?></td>
          <td><?php echo $calidad; ?></td>
          <td><?php echo $area; ?></td>
          <td><?php echo $horario; ?></td>
          <td><?php echo $descanso; ?></td>          
          </tr>
          <?php 
        }
        ?>
            <tr><th colspan=" 11" >
              Total =  <?php
            echo $numeroDeRegistros;
        ?>
              </th> </tr>
        </table>
            
    
    </body>
</html>
