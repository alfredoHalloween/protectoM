<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <title>MANUALES</title>
        <link href="css/movil.css" rel="stylesheet" type="text/css">
        <link href="css/tabla2.css" rel="stylesheet" type="text/css">
        
        
        <?php
        if(isset($_GET['status'])) {
            $status=$_GET['status'];
        }
        require 'conexion.php';
        $consulta = "SELECT * FROM manuales WHERE status=$status;";
        $hacerconsulta= mysql_query($consulta,$conexion);
        $numeroColumnas = mysql_num_fields($hacerconsulta);
        $numeroDeRegistros= mysql_num_rows($hacerconsulta);        
        ?>
    </head>
    <body >
        
         <div id="content">
            <div id="nav">
                <ul>
                    <li><a href="capacitacion.php" title="Regresar"><img src="../img/baatras.png"></a></li>
                    <li><a href="../menu.php" title="Inicio"><img src="../img/bahome.png"></a></li>
                    <li><a href="contacto.php" title="Ayuda"><img src="../img/baayuda.png"></a></li>
                    <li><a href="close.php" title="Salir"><img src="../img/baasalir.png"></a></li>
                </ul>
            </div> 
           </div>
     <table border="1" cellpadding="2" cellspacing="1">
        <tr> 
            <th colspan=" 9">Lista de Manuales</th> 
        </tr>
           <tr>
           <th>Clave</th>
           <th>Titulo</th>
           <th></th>
           <th>Recuperado</th>
           <th>Linea</th>

   
          </tr>   

        <?php
        for ($contador=0; $contador<$numeroDeRegistros; $contador ++){           
            $id=mysql_result ($hacerconsulta, $contador, "id");
            $nombreTren=mysql_result ($hacerconsulta, $contador, "nombreTren");
            $fechaDetenido=mysql_result ($hacerconsulta, $contador, "fechaDetenido");
            $fechaRecuperado=mysql_result ($hacerconsulta, $contador, "fechaRecuperado");
            $linea=mysql_result ($hacerconsulta, $contador, "linea");
            switch ($linea) {
                case "1":
                    $imagenLinea="bbbnegro1.png";
                    break;
                case "3":
                    $imagenLinea="bbbnegro3.png";
                    break;
                case "5":
                    $imagenLinea="bbbnegro5.png";
                    break;
                case "7":
                    $imagenLinea="bbbnegro7.png";
                    break;
                 case "8":
                    $imagenLinea="bbbnegro8.png";
                    break;
                case "9":
                    $imagenLinea="bbbnegro9.png";
                    break;
                case "A":
                    $imagenLinea="bbbnegroA.png";
                    break;
                case "B":
                    $imagenLinea="bbbnegroB.png";
                    break;
                default:
                    break;
            }

          ?>
          <tr>
          <td><?php echo $id; ?></td>
          <td><?php echo $nombreTren; ?></td>          
          <td><?php echo $fechaDetenido; ?></td>
          <td><?php echo $fechaRecuperado; ?></td>
          
          <?php
            if($status==1) {
                echo "<td><a href='hojaY1.php?nombreTren=$nombreTren' title='Regresar'><img src='img/$imagenLinea' width='60' height='40'></a></td>";
            } else {
                echo "<td><img src='img/$imagenLinea' width='60' height='40'></td>";
            }
          ?>
                    
          </tr>
          
          <?php 
        }
        ?>
          <th colspan=" 8"> Total =  <?php echo $numeroDeRegistros;?></th>
      </table>
   </body>