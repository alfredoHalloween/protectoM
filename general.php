<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <title>INFORMACIÓN GENERAL</title>
        <link href="css/movil.css" rel="stylesheet" type="text/css">
        <link href="css/tabla2.css" rel="stylesheet" type="text/css">
        
        
        <?php
        require 'usarBD.php';
        $consulta = "SELECT * FROM general;";
        $hacerconsulta= mysql_query($consulta,$conexion);
        $numeroColumnas = mysql_num_fields($hacerconsulta);
        $numeroDeRegistros= mysql_num_rows($hacerconsulta);        
        ?>
    </head>
    <body >
        
         <div id="content">
            <div id="nav">
                <ul>
                    <li><a href="personal1.php" title="Regresar"><img src="img/baatras.png"></a></li>
                    <li><a href="menu.php" title="Inicio"><img src="img/bahome.png"></a></li>
                    <li><a href="ayuda.php" title="Ayuda"><img src="img/baayuda.png"></a></li>
                    <li><a href="close.php" title="Salir"><img src="img/baasalir.png"></a></li>
                </ul>
            </div>
           </div>
        <table border="1" cellpadding="2" cellspacing="1">
           <tr> 
               <th colspan=" 9">Datos generales</th> <th colspan=" 2"> Total =  <?php echo $numeroDeRegistros;?></th> </tr>
           
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
            $expediente=mysql_result ($hacerconsulta, $contador, "expediente");
            $nombre=mysql_result ($hacerconsulta, $contador, "nombre");
            $puesto=mysql_result ($hacerconsulta, $contador, "puesto");
            $adscripcion=mysql_result ($hacerconsulta, $contador, "adscripcion");
            $ubicacion=mysql_result ($hacerconsulta, $contador, "ubicacion");
            $plaza=mysql_result ($hacerconsulta, $contador, "plaza");
            $siden=mysql_result ($hacerconsulta, $contador, "siden");
            $calidad=mysql_result ($hacerconsulta, $contador, "calidad");
            $area=mysql_result ($hacerconsulta, $contador, "area");
            $horario=mysql_result ($hacerconsulta, $contador, "horario");
            $descanso=mysql_result ($hacerconsulta, $contador, "descanso");            
          ?>
          <tr>
          <td><?php echo $expediente; ?></td>
          <td><?php echo $nombre; ?></td>          
          <td><?php echo $puesto; ?></td>
          <td><?php echo $adscripcion; ?></td>
          <td><?php echo $ubicacion; ?></td>
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
            
        </table>
     </body>
