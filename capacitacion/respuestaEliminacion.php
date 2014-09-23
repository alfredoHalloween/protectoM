<!DOCTYPE HTML>
<html>
    <head>
        <link href="css/menudespegable.css" rel="stylesheet" type="text/css">
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <title>RESPUESTA DE OPERACIÓN</title>
        <link href="../css/movil.css" rel="stylesheet" type="text/css">    
        <link href="../css/tabla2.css" rel="stylesheet" type="text/css"> 
        <?php            
            require 'conexion.php';            
            if(isset($_GET['expediente']) && !empty($_GET['expediente']) && is_numeric($_GET['expediente'])) {
                $expediente = $_GET['expediente'];
                $consultaValidacion = "SELECT * FROM general WHERE expediente=$expediente";                
                if (mysql_num_rows($consultaValidacion) != 0) {
                    
                }
            } else {
                $expediente =  "";
            }
        ?>
    </head>
    <body>
        <div id="content">
            <div id="nav">
                <ul>
                    <li><a href="eliminarCursos.php?expediente=<?php echo $expediente; ?>" title="Regresar"><img src="../img/baatras.png"></a></li>
                    <li><a href="../menu.php" title="Inicio"><img src="../img/bahome.png"></a></li>
                    <li><a href="contacto.php" title="Ayuda"><img src="../img/baayuda.png"></a></li>
                    <li><a href="close.php" title="Salir"><img src="../img/baasalir.png"></a></li>
                </ul>
                <br>
                <br>                
                <?php                    
                    if(!isset($_GET['id']) && empty($_GET['id']) || !is_numeric($_GET['id'])){
                        echo "<img src='../img/errorPagina.png' style='width: 600px; height: 400px;'>";
                    } else {                        
                        $id = $_GET['id'];
                        $consultaEliminacion = "DELETE FROM metro_disponibilidad.cursos WHERE cursos.id=$id;";
                        $hacerConsultaEliminacion = mysql_query($consultaEliminacion);
                        
                        echo "<table cellpadding='2' cellspacing='2' border='2'>
                                <tr>
                                    <td>OPERACIÓN EXITOSA</td>
                                </tr>
                            </table>";
                    }
                ?>
            </div>                     
        </div>
     </body>
</html>