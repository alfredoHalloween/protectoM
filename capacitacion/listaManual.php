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
        <link href="../css/movil.css" rel="stylesheet" type="text/css">
    </head>
    <body>   
        <?php           
            require 'conexion.php';             
            if(isset($_POST['manual']) and !empty($_POST['manual'])){
                $tipo = $_POST['manual'];
            } else {
               $tipo = "T"; 
            }                        
        ?>
        <div id="content">
            <div id="nav">
                <ul>
                    <li><a href="manuales.php" title="Regresar"><img src="../img/baatras.png"></a></li>
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

                <br>
                <br>
                <form id="tipo" name="tipo" method="post" action="listaManual.php">
                    Tipo de manual: <select name="manual" id="manual">                        
                        <option value="T">TÉCNICOS</option>
                        <option value="DH">DESARROLLO HUMANO</option>
                        <option value="I">INFORMÁTICA</option>
                    </select>
                    <button>Aceptar</button>
                </form>
                <br>
                <br>
                <?php
                    $listado = "SELECT * FROM manuales WHERE tipo='$tipo' ORDER BY titulo;";
                    $hacerListado = mysql_query($listado);
                    $registros = mysql_num_rows($hacerListado);
                    switch ($tipo) {
                        case "T":
                            $etiqueta = "MANUALES TÉCNICOS<br>TOTAL: $registros";
                            break;
                        case "DH":
                            $etiqueta = "MANUALES DE DESARROLLO HUMANO<br>TOTAL: $registros";
                            break;
                        case "I":
                            $etiqueta = "MANUALES DE INFORMÁTICA<br>TOTAL: $registros";
                            break;
                        default:
                            echo "NO HAY CURSOS DISPONIBLES";
                            break;
                    }
                    echo "<div class='titulo'>$etiqueta</div><br><br>";
                ?>
                <table class="estiloTabla" style="width: 100%">
                    <tr class="cabeceraTabla">
                        <th>CLAVE</th>
                        <th>TÍTULO</th>                        
                        <th>STATUS</th>
                        <th>ENLACE</th>
                    </tr>
                <?php                                                            
                    for($i = 0; $i < $registros; $i++){
                        $clave = mysql_result($hacerListado, $i, "clave");
                        $titulo = mysql_result($hacerListado, $i, "titulo");
                        $tipo = mysql_result($hacerListado, $i, "tipo");                        
                        $nombreArchivo = mysql_result($hacerListado, $i, "nombreArchivo");
                        $actualizado = mysql_result($hacerListado, $i, "actualizado");
                        echo "<tr>
                                <td nowrap>$clave</td>
                                <td>$titulo</td>";                                                                
                        if($actualizado == 0) {
                            $actualizado = "NO ACTUALIZADO";
                        } elseif ($actualizado == 1) {
                            $actualizado = "ACTUALIZADO";
                        }                       
                        echo "  <td>$actualizado</td>
                                <td><a href='../ced/$nombreArchivo'>Descargar</a></td>
                            </tr>";
                    }
                ?>
                </table>            
            </div>
        </div>     
    </body>
</html>
