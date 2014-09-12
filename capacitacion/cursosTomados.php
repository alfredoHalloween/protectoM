<!DOCTYPE HTML>
<html>
    <head>
        <link href="../css/menudespegable.css" rel="stylesheet" type="text/css">
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <title>CURSOS TOMADOS</title>
        <link href="../css/movil.css" rel="stylesheet" type="text/css">   
        <link href="../css/estilos.css" rel="stylesheet" type="text/css">    
        <link href="../css/tabla2.css" rel="stylesheet" type="text/css">    
    </head>
    <body>
        <div id="content">
            <div id="nav">
                <ul>
                    <li><a href="Cursos2.php" title="Regresar"><img src="../img/baatras.png"></a></li>
                    <li><a href="../menu.php" title="Inicio"><img src="../img/bahome.png"></a></li>
                    <li><a href=".php" title="Ayuda"><img src="../img/baayuda.png"></a></li>
                    <li><a href=".php" title="Salir"><img src="../img/baasalir.png"></a></li>
                </ul>
                <?php
                    $lista = 0;
                    if(isset($_POST['lista'])) {
                        $lista = $_POST['lista'];                        
                    } else {
                        $lista = "ACTITUDES CON PROGRAMACIÓN NEUROLINGUISTICA I";                      
                    }
                    require 'conexion.php';
                    $crearSelect = "SELECT COUNT(*) AS Filas, nom_curso FROM cursos GROUP BY nom_curso ORDER BY nom_curso;";
                    $hacerSelect = mysql_query($crearSelect);
                    $numeroCursos = mysql_num_rows($hacerSelect);
                    $nomCurso = "";
                ?>
                <br>
                <br>
                <form name="cursos" id="cursos" action="cursosTomados.php" method="post">ELIJA UN CURSO DISPONIBLE
                    <select name="lista" id="lista">
                        <option></option>
                        <?php
                            for($i = 0; $i < $numeroCursos; $i++) {
                                $nomCurso = mysql_result($hacerSelect, $i, "nom_curso");
                                echo "<option value='$nomCurso'>$nomCurso</option>";
                            }
                        ?>
                    </select>
                    <button type="submit">Aceptar</button>
                </form>
                <?php
                    $crearTabla = "SELECT general.nombre, general.coordinacion, cursos.nom_curso, cursos.ini_curso, cursos.fin_curso FROM cursos, general WHERE general.expediente = cursos.expediente AND cursos.nom_curso ='$lista';";
                    $hacerCrear = mysql_query($crearTabla);
                    $numInscritos = mysql_num_rows($hacerCrear);                    
                ?>       
                <br>
                <br>
                <table cellpadding="2" cellpadding="2" border="2">
                    <tr>
                        <th colspan="3"> <?php echo $lista; ?></th>
                        <th>TOTAL: <?php echo $numInscritos;?></th>
                    </tr>
                    <tr>
                        <th>NOMBRE</th>
                        <th>COORDINACIÓN</th>
                        <th>FECHA DE INICIO</th>
                        <th>FECHA DE TÉRMINO</th>
                    </tr>
                    <?php
                        for($j = 0; $j < $numInscritos; $j++) {
                            $nombre = mysql_result($hacerCrear, $j, "nombre");
                            $coordinacion = mysql_result($hacerCrear, $j, "coordinacion");
                            $fechaInicio = mysql_result($hacerCrear, $j, "ini_curso");
                            $fechaFin = mysql_result($hacerCrear, $j, "fin_curso");
                            echo "<tr>
                                    <td>$nombre</td>
                                    <td>$coordinacion</td>
                                    <td>$fechaInicio</td>
                                    <td>$fechaFin</td>
                                </tr>";
                        }
                    ?>
                </table>
            </div>                      
        </div>
     </body>
</html>