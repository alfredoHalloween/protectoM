<html>
    <head>
        <title>Busqueda por expediente</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">  
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <link href="css/tabla2.css" rel="stylesheet" type="text/css">
        <link href="css/movil.css" rel="stylesheet" type="text/css">
        
        <?php
            require 'usarBD.php';
            $sujeto = $_POST['consulta'];
            $consulta = "SELECT * FROM general WHERE expediente=\"$sujeto\"; ";
            $cursos = "SELECT * FROM cursos WHERE expediente=\"$sujeto\";";
            $hacerconsulta= mysql_query($consulta,$conexion);
            $numeroColumnas = mysql_num_fields($hacerconsulta);
            $numeroDeRegistros= mysql_num_rows($hacerconsulta);
        ?>
    </head>
    <body>
        
        <?php
                          
            $expediente=mysql_result ($hacerconsulta, 0, "expediente");
            $nombre=mysql_result ($hacerconsulta, 0, "nombre");
            $puesto=mysql_result ($hacerconsulta, 0, "puesto");
            $adscripcion=mysql_result ($hacerconsulta, 0, "adscripcion");
            $ubicacion=mysql_result ($hacerconsulta, 0, "ubicacion");
            $plaza=mysql_result ($hacerconsulta, 0, "plaza");
            $siden=mysql_result ($hacerconsulta, 0, "siden");
            $calidad=mysql_result ($hacerconsulta, 0, "calidad");
            $area=mysql_result ($hacerconsulta, 0, "area");
            $horario=mysql_result ($hacerconsulta, 0, "horario");
            $descanso=mysql_result ($hacerconsulta,0, "descanso");            
          ?>
        
         <div id="content">
            <div id="nav">
                <ul>
                    <li><a href="busquedaq.php" title="Regresar"><img src="img/baatras.png"></a></li>
                    <li><a href="menu.php" title="Inicio"><img src="img/bahome.png"></a></li>
                    <li><a href="ayuda.php" title="Ayuda"><img src="img/baayuda.png"></a></li>
                    <li><a href="close.php" title="Salir"><img src="img/baasalir.png"></a></li>
                </ul>
                <br>    
                <br>
        
        <table border="1" cellpadding="2" cellspacing="1">
           <tr> 
               <th colspan="2">DATOS PERSONALES</th></tr>
           <tr>
           <th>Expediente</th>
           <td><?php echo $expediente; ?></td> 
           </tr>
           
           <tr>
           <th>Nombre</th>
           <td><?php echo $nombre; ?></td>          
           </tr>
           
           <tr>
           <th>Puesto</th>
           <td><?php echo $puesto; ?></td> 
           </tr>
           
           <tr>
           <th>Adscripción</th>
           <td><?php echo $adscripcion; ?></td>
           </tr>
           
           <tr>
           <th>Ubicación</th>
           <td><?php echo $ubicacion; ?></td> 
           </tr>
           
           <tr>
           <th>Plaza</th>
           <td><?php echo $plaza; ?></td>
           </tr>
           
           <tr>
           <th>Plaza SIDEN</th>
           <td><?php echo $siden; ?></td>
           </tr>
           
           <tr>
           <th>Calidad</th>
           <td><?php echo $calidad; ?></td>
           </tr>
           
           <tr>
           <th>Area</th>
           <td><?php echo $area; ?></td>           
           </tr>
           
           <tr>
           <th>Horario</th>          
           <td><?php echo $horario; ?></td>
           </tr>
           
           <tr>
           <th>Descanso</th>
           <td><?php echo $descanso; ?></td>           
           </tr>   
           
        </table>
      </div>
      </div>
    </body>
</html>
