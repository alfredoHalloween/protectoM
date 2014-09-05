<html>
    <head>
        <title>EXPEDIENTE INDIVIDUAL</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">  
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <link href="../css/tabla2.css" rel="stylesheet" type="text/css">
        <link href="../css/movil.css" rel="stylesheet" type="text/css">        
    </head>
    <body>        
         <div id="content">
            <div id="nav">
                <ul>
                    <li><a href="busquedaq.php" title="Regresar"><img src="../img/baatras.png"></a></li>
                    <li><a href="../menu.php" title="Inicio"><img src="../img/bahome.png"></a></li>
                    <li><a href="ayuda.php" title="Ayuda"><img src="../img/baayuda.png"></a></li>
                    <li><a href="close.php" title="Salir"><img src="../img/baasalir.png"></a></li>
                </ul>
                <br>    
                <br>
                 <?php
                    require 'conexion.php';
                    require 'claseEmpleado.php';
                    if(!isset($_POST['consulta']) || empty($_POST['consulta'])) {
                        echo "<table>
                            <tr>
                                <td>NO SE HA INTRODUCIDO NINGÚN EXPEDIENTE <a href=busquedaq.php>REGRESAR</a></td>
                            </tr>
                            </table>";
                    } else {     
                        $sujeto = mysql_real_escape_string($_POST['consulta']);
                        $consulta = "SELECT * FROM general WHERE expediente=\"$sujeto\"; ";                                                                            
                        $cursos = "SELECT * FROM cursos WHERE expediente=\"$sujeto\" ORDER BY ini_curso DESC;";
                        $hacerconsulta= mysql_query($consulta,$conexion);
                        $hacerCursos = mysql_query($cursos, $conexion);
                        $comprobacion = mysql_num_rows($hacerconsulta);
                        if($comprobacion != 0) {
                            $personal = new empleadoPersonal();
                            $personal->asignar($hacerconsulta);
                            $personal->imprimir($hacerCursos);
                        } else {
                            echo "<table>
                                <tr>
                                    <td>EL EXPEDIENTE TECLEADO NO EXISTE <a href=busquedaq.php>REGRESAR</a></td>
                                </tr>
                                </table>";
                        }
                    }
                ?>
            </div>
        </div>
    </body>
</html>
