<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Lista ordenada por ubicacion</title>
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
                    <li><a href="capa1.php" title="Regresar"><img src="img/baatras.png"></a></li>
                    <li><a href="menu.php" title="Inicio"><img src="img/bahome.png"></a></li>
                    <li><a href="ayuda.php" title="Ayuda"><img src="img/baayuda.png"></a></li>
                    <li><a href="close.php" title="Salir"><img src="img/baasalir.png"></a></li>
                </ul>
            </div>
        <?php
            $consulta = "SELECT expediente, nombre, puesto, horario, descanso, instructor FROM general WHERE ubicacion=\"GERENCIA DE INGENIERIA\" AND instructor=TRUE ORDER BY nombre;";
            $hacerConsulta = mysql_query($consulta, $conexion);            
            $numeroDeRegistros = mysql_num_rows($hacerConsulta);                        
        ?>
        <table border="1" cellpadding="2" cellspacing="1">
            <tr>
                <th colspan="<?php echo $numeroColumnas?>">GERENCIA DE INGENIERIA</th>
            </tr>
            <?php
                imprimirCabeceraInstruccctores();
                

                   
            ?>
            <tr>
                <td><?php echo $expediente; ?></td>
                <td><?php echo $nombre; ?></td>
                <td><?php echo $puesto; ?></td>
                <td><?php echo $horario; ?></td>
                <td><?php echo $descanso; ?></td>        
                
            </tr>
            <tr>
                <th colspan="<?php echo $numeroColumnas;?>"><?php
                    echo "Total = ".$numeroDeRegistros;
                ?></th>
            </tr>
        </table>
        
        
        <?php
            $consulta = "SELECT expediente, nombre, puesto, horario, descanso, instructor FROM general WHERE ubicacion=\"COORDINACIÓN DE SUPERVISIÓN DE FABRICACIÓN DE TRENES\" AND instructor=TRUE ORDER BY nombre;";
            $hacerConsulta = mysql_query($consulta, $conexion);
            $numeroColumnas = mysql_num_fields($hacerConsulta);
            $numeroDeRegistros = mysql_num_rows($hacerConsulta);
            
            
        ?>        
        <br>
        <br>        
        <table border="1" cellpadding="2" cellspacing="1">
            <tr>
                <th colspan="<?php echo $numeroColumnas?>">COORDINACIÓN DE SUPERVISIÓN DE FABRICACIÓN DE TRENES</th>
            </tr>
            <tr>
                <th>Expediente</th>
                <th>Nombre</th>
                <th>Puesto</th>
                <th>Horario</th>
                <th>Descanso</th>
                <th>Cursos que imparte</th>
            </tr>
            <?php
                for ($contador=0; $contador<$numeroDeRegistros; $contador ++){           
                    $expediente=mysql_result ($hacerConsulta, $contador, "expediente");
                    $nombre=mysql_result ($hacerConsulta, $contador, "nombre");
                    $puesto=  mysql_result($hacerConsulta, $contador, "puesto");
                    $horario=mysql_result ($hacerConsulta, $contador, "horario");
                    $descanso=mysql_result ($hacerConsulta, $contador, "descanso");
                    $instructor=  @mysql_result($hacerConsulta, $contador, "instructor");
                   
            ?>
            <tr>
                <td><?php echo $expediente; ?></td>
                <td><?php echo $nombre; ?></td>
                <td><?php echo $puesto; ?></td>
                <td><?php echo $horario; ?></td>
                <td><?php echo $descanso; ?></td>        
                
            </tr>
            <?php 
                }
            ?>
            <tr>
                <th colspan="<?php echo $numeroColumnas;?>"><?php
                    echo "Total = ".$numeroDeRegistros;
                ?></th>
            </tr>
        </table>
        
        
        <?php
            $consulta = "SELECT expediente, nombre, puesto, horario, descanso, instructor FROM general WHERE ubicacion=\"COORDINACIÓN ELECTRÓNICA\" AND instructor=TRUE ORDER BY nombre;";
            $hacerConsulta = mysql_query($consulta, $conexion);
            $numeroColumnas = mysql_num_fields($hacerConsulta);
            $numeroDeRegistros = mysql_num_rows($hacerConsulta);                        
        ?>        
        <br>
        <br>        
        <table border="1" cellpadding="2" cellspacing="1">
            <tr>
                <th colspan="<?php echo $numeroColumnas?>">COORDINACIÓN ELECTRÓNICA</th>
            </tr>
            <tr>
                <th>Expediente</th>
                <th>Nombre</th>
                <th>Puesto</th>
                <th>Horario</th>
                <th>Descanso</th>
                <th>Cursos que imparte</th>
            </tr>
            <?php
                for ($contador=0; $contador<$numeroDeRegistros; $contador ++){           
                    $expediente=mysql_result ($hacerConsulta, $contador, "expediente");
                    $nombre=mysql_result ($hacerConsulta, $contador, "nombre");
                    $puesto=  mysql_result($hacerConsulta, $contador, "puesto");
                    $horario=mysql_result ($hacerConsulta, $contador, "horario");
                    $descanso=mysql_result ($hacerConsulta, $contador, "descanso");
                    $instructor=  @mysql_result($hacerConsulta, $contador, "instructor");
                    
            ?>
            <tr>
                <td><?php echo $expediente; ?></td>
                <td><?php echo $nombre; ?></td>
                <td><?php echo $puesto; ?></td>
                <td><?php echo $horario; ?></td>
                <td><?php echo $descanso; ?></td>        
                
            </tr>
            <?php 
                }
            ?>
            <tr>
                <th colspan="<?php echo $numeroColumnas;?>"><?php
                    echo "Total = ".$numeroDeRegistros;
                ?></th>
            </tr>
        </table>
        
        
        <?php
            $consulta = "SELECT expediente, nombre, puesto, horario, descanso, instructor FROM general WHERE ubicacion=\"COORDINACIÓN DE PROGRAMACIÓN Y EVALUACIÓN\" AND instructor=TRUE ORDER BY nombre;";
            $hacerConsulta = mysql_query($consulta, $conexion);
            $numeroColumnas = mysql_num_fields($hacerConsulta);
            $numeroDeRegistros = mysql_num_rows($hacerConsulta);                        
        ?>        
        <br>
        <br>        
        <table border="1" cellpadding="2" cellspacing="1">
            <tr>
                <th colspan="<?php echo $numeroColumnas?>">COORDINACIÓN DE PROGRAMACIÓN Y EVALUACIÓN</th>
            </tr>
            <tr>
                <th>Expediente</th>
                <th>Nombre</th>
                <th>Puesto</th>
                <th>Horario</th>
                <th>Descanso</th>
                <th>Cursos que imparte</th>
            </tr>
            <?php
                for ($contador=0; $contador<$numeroDeRegistros; $contador ++){           
                    $expediente=mysql_result ($hacerConsulta, $contador, "expediente");
                    $nombre=mysql_result ($hacerConsulta, $contador, "nombre");
                    $puesto=  mysql_result($hacerConsulta, $contador, "puesto");
                    $horario=mysql_result ($hacerConsulta, $contador, "horario");
                    $descanso=mysql_result ($hacerConsulta, $contador, "descanso");
                    $instructor=  @mysql_result($hacerConsulta, $contador, "instructor");
                    
            ?>
            <tr>
                <td><?php echo $expediente; ?></td>
                <td><?php echo $nombre; ?></td>
                <td><?php echo $puesto; ?></td>
                <td><?php echo $horario; ?></td>
                <td><?php echo $descanso; ?></td>        
                
            </tr>
            <?php 
                }
            ?>
            <tr>
                <th colspan="<?php echo $numeroColumnas;?>"><?php
                    echo "Total = ".$numeroDeRegistros;
                ?></th>
            </tr>
        </table>
        
        
        <?php
            $consulta = "SELECT expediente, nombre, puesto, horario, descanso, instructor FROM general WHERE ubicacion=\"SUBGERENCIA DE MANTENIMIENTO SISTEMÁTICO I\" AND instructor=TRUE ORDER BY nombre;";
            $hacerConsulta = mysql_query($consulta, $conexion);
            $numeroColumnas = mysql_num_fields($hacerConsulta);
            $numeroDeRegistros = mysql_num_rows($hacerConsulta);                        
        ?>        
        <br>
        <br>        
        <table border="1" cellpadding="2" cellspacing="1">
            <tr>
                <th colspan="<?php echo $numeroColumnas?>">SUBGERENCIA DE MANTENIMIENTO SISTEMÁTICO I</th>
            </tr>
            <tr>
                <th>Expediente</th>
                <th>Nombre</th>
                <th>Puesto</th>
                <th>Horario</th>
                <th>Descanso</th>
                <th>Cursos que imparte</th>
            </tr>
            <?php
                for ($contador=0; $contador<$numeroDeRegistros; $contador ++){           
                    $expediente=mysql_result ($hacerConsulta, $contador, "expediente");
                    $nombre=mysql_result ($hacerConsulta, $contador, "nombre");
                    $puesto=  mysql_result($hacerConsulta, $contador, "puesto");
                    $horario=mysql_result ($hacerConsulta, $contador, "horario");
                    $descanso=mysql_result ($hacerConsulta, $contador, "descanso");
                    $instructor=  @mysql_result($hacerConsulta, $contador, "instructor");
                    
            ?>
            <tr>
                <td><?php echo $expediente; ?></td>
                <td><?php echo $nombre; ?></td>
                <td><?php echo $puesto; ?></td>
                <td><?php echo $horario; ?></td>
                <td><?php echo $descanso; ?></td>        
                
            </tr>
            <?php 
                }
            ?>
            <tr>
                <th colspan="<?php echo $numeroColumnas;?>"><?php
                    echo "Total = ".$numeroDeRegistros;
                ?></th>
            </tr>
        </table>
        
        <?php
            $consulta = "SELECT expediente, nombre, puesto, horario, descanso, instructor FROM general WHERE ubicacion=\"COORDINACIÓN DE MANTENIMIENTO SISTEMÁTICO ZARAGOZA\" AND instructor=TRUE ORDER BY nombre;";
            $hacerConsulta = mysql_query($consulta, $conexion);
            $numeroColumnas = mysql_num_fields($hacerConsulta);
            $numeroDeRegistros = mysql_num_rows($hacerConsulta);                        
        ?>        
        <br>
        <br>        
        <table border="1" cellpadding="2" cellspacing="1">
            <tr>
                <th colspan="<?php echo $numeroColumnas?>">COORDINACIÓN DE MANTENIMIENTO SISTEMÁTICO ZARAGOZA</th>
            </tr>
            <tr>
                <th>Expediente</th>
                <th>Nombre</th>
                <th>Puesto</th>
                <th>Horario</th>
                <th>Descanso</th>
                <th>Cursos que imparte</th>
            </tr>
            <?php
                for ($contador=0; $contador<$numeroDeRegistros; $contador ++){           
                    $expediente=mysql_result ($hacerConsulta, $contador, "expediente");
                    $nombre=mysql_result ($hacerConsulta, $contador, "nombre");
                    $puesto=  mysql_result($hacerConsulta, $contador, "puesto");
                    $horario=mysql_result ($hacerConsulta, $contador, "horario");
                    $descanso=mysql_result ($hacerConsulta, $contador, "descanso");
                    $instructor=  @mysql_result($hacerConsulta, $contador, "instructor");
                    
            ?>
            <tr>
                <td><?php echo $expediente; ?></td>
                <td><?php echo $nombre; ?></td>
                <td><?php echo $puesto; ?></td>
                <td><?php echo $horario; ?></td>
                <td><?php echo $descanso; ?></td>        
                
            </tr>
            <?php 
                }
            ?>
            <tr>
                <th colspan="<?php echo $numeroColumnas;?>"><?php
                    echo "Total = ".$numeroDeRegistros;
                ?></th>
            </tr>
        </table>
        
        
        <?php
            $consulta = "SELECT expediente, nombre, puesto, horario, descanso, instructor FROM general WHERE ubicacion=\"COORDINACIÓN DE MANTENIMIENTO SISTEMÁTICO CONSTITUCIÓN DE 1917\" AND instructor=TRUE ORDER BY nombre;";
            $hacerConsulta = mysql_query($consulta, $conexion);
            $numeroColumnas = mysql_num_fields($hacerConsulta);
            $numeroDeRegistros = mysql_num_rows($hacerConsulta);                        
        ?>        
        <br>
        <br>        
        <table border="1" cellpadding="2" cellspacing="1">
            <tr>
                <th colspan="<?php echo $numeroColumnas?>">COORDINACIÓN DE MANTENIMIENTO SISTEMÁTICO CONSTITUCIÓN DE 1917</th>
            </tr>
            <tr>
                <th>Expediente</th>
                <th>Nombre</th>
                <th>Puesto</th>
                <th>Horario</th>
                <th>Descanso</th>
                <th>Cursos que imparte</th>
            </tr>
            <?php
                for ($contador=0; $contador<$numeroDeRegistros; $contador ++){           
                    $expediente=mysql_result ($hacerConsulta, $contador, "expediente");
                    $nombre=mysql_result ($hacerConsulta, $contador, "nombre");
                    $puesto=  mysql_result($hacerConsulta, $contador, "puesto");
                    $horario=mysql_result ($hacerConsulta, $contador, "horario");
                    $descanso=mysql_result ($hacerConsulta, $contador, "descanso");
                    $instructor=  @mysql_result($hacerConsulta, $contador, "instructor");
                   
            ?>
            <tr>
                <td><?php echo $expediente; ?></td>
                <td><?php echo $nombre; ?></td>
                <td><?php echo $puesto; ?></td>
                <td><?php echo $horario; ?></td>
                <td><?php echo $descanso; ?></td>        
                
            </tr>
            <?php 
                }
            ?>
            <tr>
                <th colspan="<?php echo $numeroColumnas;?>"><?php
                    echo "Total = ".$numeroDeRegistros;
                ?></th>
            </tr>
        </table>
        
        
        <?php
            $consulta = "SELECT expediente, nombre, puesto, horario, descanso, instructor FROM general WHERE ubicacion=\"COORDINACIÓN DE MANTENIMIENTO SISTEMÁTICO TAXQUEÑA\" AND instructor=TRUE ORDER BY nombre;";
            $hacerConsulta = mysql_query($consulta, $conexion);
            $numeroColumnas = mysql_num_fields($hacerConsulta);
            $numeroDeRegistros = mysql_num_rows($hacerConsulta);                        
        ?>        
        <br>
        <br>        
        <table border="1" cellpadding="2" cellspacing="1">
            <tr>
                <th colspan="<?php echo $numeroColumnas?>">COORDINACIÓN DE MANTENIMIENTO SISTEMÁTICO TAXQUEÑA</th>
            </tr>
            <tr>
                <th>Expediente</th>
                <th>Nombre</th>
                <th>Puesto</th>
                <th>Horario</th>
                <th>Descanso</th>
                <th>Cursos que imparte</th>
            </tr>
            <?php
                for ($contador=0; $contador<$numeroDeRegistros; $contador ++){           
                    $expediente=mysql_result ($hacerConsulta, $contador, "expediente");
                    $nombre=mysql_result ($hacerConsulta, $contador, "nombre");
                    $puesto=  mysql_result($hacerConsulta, $contador, "puesto");
                    $horario=mysql_result ($hacerConsulta, $contador, "horario");
                    $descanso=mysql_result ($hacerConsulta, $contador, "descanso");
                    $instructor=  @mysql_result($hacerConsulta, $contador, "instructor");
                    
            ?>
            <tr>
                <td><?php echo $expediente; ?></td>
                <td><?php echo $nombre; ?></td>
                <td><?php echo $puesto; ?></td>
                <td><?php echo $horario; ?></td>
                <td><?php echo $descanso; ?></td>        
                
            </tr>
            <?php 
                }
            ?>
            <tr>
                <th colspan="<?php echo $numeroColumnas;?>"><?php
                    echo "Total = ".$numeroDeRegistros;
                ?></th>
            </tr>
        </table>
        
        
                
        
        <?php
            $consulta = "SELECT expediente, nombre, puesto, horario, descanso, instructor FROM general WHERE ubicacion=\"COORDINACIÓN DE MANTENIMIENTO TLAHUAC\" AND instructor=TRUE ORDER BY nombre;";
            $hacerConsulta = mysql_query($consulta, $conexion);
            $numeroColumnas = mysql_num_fields($hacerConsulta);
            $numeroDeRegistros = mysql_num_rows($hacerConsulta);                        
        ?>        
        <br>
        <br>        
        <table border="1" cellpadding="2" cellspacing="1">
            <tr>
                <th colspan="<?php echo $numeroColumnas?>">COORDINACIÓN DE MANTENIMIENTO TLAHUAC</th>
            </tr>
            <tr>
                <th>Expediente</th>
                <th>Nombre</th>
                <th>Puesto</th>
                <th>Horario</th>
                <th>Descanso</th>
                <th>Cursos que imparte</th>
            </tr>
            <?php
                for ($contador=0; $contador<$numeroDeRegistros; $contador ++){           
                    $expediente=mysql_result ($hacerConsulta, $contador, "expediente");
                    $nombre=mysql_result ($hacerConsulta, $contador, "nombre");
                    $puesto=  mysql_result($hacerConsulta, $contador, "puesto");
                    $horario=mysql_result ($hacerConsulta, $contador, "horario");
                    $descanso=mysql_result ($hacerConsulta, $contador, "descanso");
                    $instructor=  @mysql_result($hacerConsulta, $contador, "instructor");
                    
            ?>
            <tr>
                <td><?php echo $expediente; ?></td>
                <td><?php echo $nombre; ?></td>
                <td><?php echo $puesto; ?></td>
                <td><?php echo $horario; ?></td>
                <td><?php echo $descanso; ?></td>        
                
            </tr>
            <?php 
                }
            ?>
            <tr>
                <th colspan="<?php echo $numeroColumnas;?>"><?php
                    echo "Total = ".$numeroDeRegistros;
                ?></th>
            </tr>
        </table>
              
        
        <?php
            $consulta = "SELECT expediente, nombre, puesto, horario, descanso, instructor FROM general WHERE ubicacion=\"SUBGERENCIA DE MANTENIMIENTO SISTEMÁTICO II\" AND instructor=TRUE ORDER BY nombre;";
            $hacerConsulta = mysql_query($consulta, $conexion);
            $numeroColumnas = mysql_num_fields($hacerConsulta);
            $numeroDeRegistros = mysql_num_rows($hacerConsulta);                        
        ?>        
        <br>
        <br>        
        <table border="1" cellpadding="2" cellspacing="1">
            <tr>
                <th colspan="<?php echo $numeroColumnas?>">SUBGERENCIA DE MANTENIMIENTO SISTEMÁTICO II</th>
            </tr>
            <tr>
                <th>Expediente</th>
                <th>Nombre</th>
                <th>Puesto</th>
                <th>Horario</th>
                <th>Descanso</th>
                <th>Cursos que imparte</th>
            </tr>
            <?php
                for ($contador=0; $contador<$numeroDeRegistros; $contador ++){           
                    $expediente=mysql_result ($hacerConsulta, $contador, "expediente");
                    $nombre=mysql_result ($hacerConsulta, $contador, "nombre");
                    $puesto=  mysql_result($hacerConsulta, $contador, "puesto");
                    $horario=mysql_result ($hacerConsulta, $contador, "horario");
                    $descanso=mysql_result ($hacerConsulta, $contador, "descanso");
                    $instructor=  @mysql_result($hacerConsulta, $contador, "instructor");
                    
            ?>
            <tr>
                <td><?php echo $expediente; ?></td>
                <td><?php echo $nombre; ?></td>
                <td><?php echo $puesto; ?></td>
                <td><?php echo $horario; ?></td>
                <td><?php echo $descanso; ?></td>        
                
            </tr>
            <?php 
                }
            ?>
            <tr>
                <th colspan="<?php echo $numeroColumnas;?>"><?php
                    echo "Total = ".$numeroDeRegistros;
                ?></th>
            </tr>
        </table>
        
        
        <?php
            $consulta = "SELECT expediente, nombre, puesto, horario, descanso, instructor FROM general WHERE ubicacion=\"COORDINACIÓN DE MANTENIMIENTO SISTEMÁTICO ROSARIO\" AND instructor=TRUE ORDER BY nombre;";
            $hacerConsulta = mysql_query($consulta, $conexion);
            $numeroColumnas = mysql_num_fields($hacerConsulta);
            $numeroDeRegistros = mysql_num_rows($hacerConsulta);                        
        ?>        
        <br>
        <br>        
        <table border="1" cellpadding="2" cellspacing="1">
            <tr>
                <th colspan="<?php echo $numeroColumnas?>">COORDINACIÓN DE MANTENIMIENTO SISTEMÁTICO ROSARIO</th>
            </tr>
            <tr>
                <th>Expediente</th>
                <th>Nombre</th>
                <th>Puesto</th>
                <th>Horario</th>
                <th>Descanso</th>
                <th>Cursos que imparte</th>
            </tr>
            <?php
                for ($contador=0; $contador<$numeroDeRegistros; $contador ++){           
                    $expediente=mysql_result ($hacerConsulta, $contador, "expediente");
                    $nombre=mysql_result ($hacerConsulta, $contador, "nombre");
                    $puesto=  mysql_result($hacerConsulta, $contador, "puesto");
                    $horario=mysql_result ($hacerConsulta, $contador, "horario");
                    $descanso=mysql_result ($hacerConsulta, $contador, "descanso");
                    $instructor=  @mysql_result($hacerConsulta, $contador, "instructor");
                    
            ?>
            <tr>
                <td><?php echo $expediente; ?></td>
                <td><?php echo $nombre; ?></td>
                <td><?php echo $puesto; ?></td>
                <td><?php echo $horario; ?></td>
                <td><?php echo $descanso; ?></td>        
                
            </tr>
            <?php 
                }
            ?>
            <tr>
                <th colspan="<?php echo $numeroColumnas;?>"><?php
                    echo "Total = ".$numeroDeRegistros;
                ?></th>
            </tr>
        </table>
        
        
        <?php
            $consulta = "SELECT expediente, nombre, puesto, horario, descanso, instructor FROM general WHERE ubicacion=\"COORDINACIÓN DE MANTENIMIENTO SISTEMÁTICO LA PAZ\" AND instructor=TRUE ORDER BY nombre;";
            $hacerConsulta = mysql_query($consulta, $conexion);
            $numeroColumnas = mysql_num_fields($hacerConsulta);
            $numeroDeRegistros = mysql_num_rows($hacerConsulta);                        
        ?>        
        <br>
        <br>        
        <table border="1" cellpadding="2" cellspacing="1">
            <tr>
                <th colspan="<?php echo $numeroColumnas?>">COORDINACIÓN DE MANTENIMIENTO SISTEMÁTICO LA PAZ</th>
            </tr>
            <tr>
                <th>Expediente</th>
                <th>Nombre</th>
                <th>Puesto</th>
                <th>Horario</th>
                <th>Descanso</th>
                <th>Cursos que imparte</th>
            </tr>
            <?php
                for ($contador=0; $contador<$numeroDeRegistros; $contador ++){           
                    $expediente=mysql_result ($hacerConsulta, $contador, "expediente");
                    $nombre=mysql_result ($hacerConsulta, $contador, "nombre");
                    $puesto=  mysql_result($hacerConsulta, $contador, "puesto");
                    $horario=mysql_result ($hacerConsulta, $contador, "horario");
                    $descanso=mysql_result ($hacerConsulta, $contador, "descanso");
                    $instructor=  @mysql_result($hacerConsulta, $contador, "instructor");
                   
            ?>
            <tr>
                <td><?php echo $expediente; ?></td>
                <td><?php echo $nombre; ?></td>
                <td><?php echo $puesto; ?></td>
                <td><?php echo $horario; ?></td>
                <td><?php echo $descanso; ?></td>        
               
            </tr>
            <?php 
                }
            ?>
            <tr>
                <th colspan="<?php echo $numeroColumnas;?>"><?php
                    echo "Total = ".$numeroDeRegistros;
                ?></th>
            </tr>
        </table>
        
        
        <?php
            $consulta = "SELECT expediente, nombre, puesto, horario, descanso, instructor FROM general WHERE ubicacion=\"COORDINACIÓN DE MANTENIMIENTO SISTEMÁTICO TICOMAN\" AND instructor=TRUE ORDER BY nombre;";
            $hacerConsulta = mysql_query($consulta, $conexion);
            $numeroColumnas = mysql_num_fields($hacerConsulta);
            $numeroDeRegistros = mysql_num_rows($hacerConsulta);                        
        ?>        
        <br>
        <br>        
        <table border="1" cellpadding="2" cellspacing="1">
            <tr>
                <th colspan="<?php echo $numeroColumnas?>">COORDINACIÓN DE MANTENIMIENTO SISTEMÁTICO TICOMAN</th>
            </tr>
            <tr>
                <th>Expediente</th>
                <th>Nombre</th>
                <th>Puesto</th>
                <th>Horario</th>
                <th>Descanso</th>
                <th>Cursos que imparte</th>
            </tr>
            <?php
                for ($contador=0; $contador<$numeroDeRegistros; $contador ++){           
                    $expediente=mysql_result ($hacerConsulta, $contador, "expediente");
                    $nombre=mysql_result ($hacerConsulta, $contador, "nombre");
                    $puesto=  mysql_result($hacerConsulta, $contador, "puesto");
                    $horario=mysql_result ($hacerConsulta, $contador, "horario");
                    $descanso=mysql_result ($hacerConsulta, $contador, "descanso");
                    $instructor=  @mysql_result($hacerConsulta, $contador, "instructor");
                    
            ?>
            <tr>
                <td><?php echo $expediente; ?></td>
                <td><?php echo $nombre; ?></td>
                <td><?php echo $puesto; ?></td>
                <td><?php echo $horario; ?></td>
                <td><?php echo $descanso; ?></td>        
                
            </tr>
            <?php 
                }
            ?>
            <tr>
                <th colspan="<?php echo $numeroColumnas;?>"><?php
                    echo "Total = ".$numeroDeRegistros;
                ?></th>
            </tr>
        </table>
        
        
        <?php
            $consulta = "SELECT expediente, nombre, puesto, horario, descanso, instructor FROM general WHERE ubicacion=\"COORDINACIÓN DE MANTENIMIENTO SISTEMÁTICO CD. AZTECA\" AND instructor=TRUE ORDER BY nombre;";
            $hacerConsulta = mysql_query($consulta, $conexion);
            $numeroColumnas = mysql_num_fields($hacerConsulta);
            $numeroDeRegistros = mysql_num_rows($hacerConsulta);                        
        ?>        
        <br>
        <br>        
        <table border="1" cellpadding="2" cellspacing="1">
            <tr>
                <th colspan="<?php echo $numeroColumnas?>">COORDINACIÓN DE MANTENIMIENTO SISTEMÁTICO CD. AZTECA</th>
            </tr>
            <tr>
                <th>Expediente</th>
                <th>Nombre</th>
                <th>Puesto</th>
                <th>Horario</th>
                <th>Descanso</th>
                <th>Cursos que imparte</th>
            </tr>
            <?php
                for ($contador=0; $contador<$numeroDeRegistros; $contador ++){           
                    $expediente=mysql_result ($hacerConsulta, $contador, "expediente");
                    $nombre=mysql_result ($hacerConsulta, $contador, "nombre");
                    $puesto=  mysql_result($hacerConsulta, $contador, "puesto");
                    $horario=mysql_result ($hacerConsulta, $contador, "horario");
                    $descanso=mysql_result ($hacerConsulta, $contador, "descanso");
                    $instructor=  @mysql_result($hacerConsulta, $contador, "instructor");
                    
            ?>
            <tr>
                <td><?php echo $expediente; ?></td>
                <td><?php echo $nombre; ?></td>
                <td><?php echo $puesto; ?></td>
                <td><?php echo $horario; ?></td>
                <td><?php echo $descanso; ?></td>        
                
            </tr>
            <?php 
                }
            ?>
            <tr>
                <th colspan="<?php echo $numeroColumnas;?>"><?php
                    echo "Total = ".$numeroDeRegistros;
                ?></th>
            </tr>
        </table>
        
        
        <?php
            $consulta = "SELECT expediente, nombre, puesto, horario, descanso, instructor FROM general WHERE ubicacion=\"SUBGERENCIA DE MANTENIMIENTO MAYOR Y REHABILITACIÓN\" AND instructor=TRUE ORDER BY nombre;";
            $hacerConsulta = mysql_query($consulta, $conexion);
            $numeroColumnas = mysql_num_fields($hacerConsulta);
            $numeroDeRegistros = mysql_num_rows($hacerConsulta);                        
        ?>        
        <br>
        <br>        
        <table border="1" cellpadding="2" cellspacing="1">
            <tr>
                <th colspan="<?php echo $numeroColumnas?>">SUBGERENCIA DE MANTENIMIENTO MAYOR Y REHABILITACIÓN</th>
            </tr>
            <tr>
                <th>Expediente</th>
                <th>Nombre</th>
                <th>Puesto</th>
                <th>Horario</th>
                <th>Descanso</th>
                <th>Cursos que imparte</th>
            </tr>
            <?php
                for ($contador=0; $contador<$numeroDeRegistros; $contador ++){           
                    $expediente=mysql_result ($hacerConsulta, $contador, "expediente");
                    $nombre=mysql_result ($hacerConsulta, $contador, "nombre");
                    $puesto=  mysql_result($hacerConsulta, $contador, "puesto");
                    $horario=mysql_result ($hacerConsulta, $contador, "horario");
                    $descanso=mysql_result ($hacerConsulta, $contador, "descanso");
                    $instructor=  @mysql_result($hacerConsulta, $contador, "instructor");
                    
            ?>
            <tr>
                <td><?php echo $expediente; ?></td>
                <td><?php echo $nombre; ?></td>
                <td><?php echo $puesto; ?></td>
                <td><?php echo $horario; ?></td>
                <td><?php echo $descanso; ?></td>        
                
            </tr>
            <?php 
                }
            ?>
            <tr>
                <th colspan="<?php echo $numeroColumnas;?>"><?php
                    echo "Total = ".$numeroDeRegistros;
                ?></th>
            </tr>
        </table>        
        
        
        <?php
            $consulta = "SELECT expediente, nombre, puesto, horario, descanso, instructor FROM general WHERE ubicacion=\"COORDINACIÓN DE MANTENIMIENTO MAYOR ZARAGOZA\" AND instructor=TRUE ORDER BY nombre;";
            $hacerConsulta = mysql_query($consulta, $conexion);
            $numeroColumnas = mysql_num_fields($hacerConsulta);
            $numeroDeRegistros = mysql_num_rows($hacerConsulta);                        
        ?>        
        <br>
        <br>        
        <table border="1" cellpadding="2" cellspacing="1">
            <tr>
                <th colspan="<?php echo $numeroColumnas?>">COORDINACIÓN DE MANTENIMIENTO MAYOR ZARAGOZA</th>
            </tr>
            <tr>
                <th>Expediente</th>
                <th>Nombre</th>
                <th>Puesto</th>
                <th>Horario</th>
                <th>Descanso</th>
                <th>Cursos que imparte</th>
            </tr>
            <?php
                for ($contador=0; $contador<$numeroDeRegistros; $contador ++){           
                    $expediente=mysql_result ($hacerConsulta, $contador, "expediente");
                    $nombre=mysql_result ($hacerConsulta, $contador, "nombre");
                    $puesto=  mysql_result($hacerConsulta, $contador, "puesto");
                    $horario=mysql_result ($hacerConsulta, $contador, "horario");
                    $descanso=mysql_result ($hacerConsulta, $contador, "descanso");
                    $instructor=  @mysql_result($hacerConsulta, $contador, "instructor");
                    
            ?>
            <tr>
                <td><?php echo $expediente; ?></td>
                <td><?php echo $nombre; ?></td>
                <td><?php echo $puesto; ?></td>
                <td><?php echo $horario; ?></td>
                <td><?php echo $descanso; ?></td>        
                
            </tr>
            <?php 
                }
            ?>
            <tr>
                <th colspan="<?php echo $numeroColumnas;?>"><?php
                    echo "Total = ".$numeroDeRegistros;
                ?></th>
            </tr>
        </table>
        
        
        <?php
            $consulta = "SELECT expediente, nombre, puesto, horario, descanso, instructor FROM general WHERE ubicacion=\"COORDINACIÓN DE MANTENIMIENTO MAYOR TICOMAN\" AND instructor=TRUE ORDER BY nombre;";
            $hacerConsulta = mysql_query($consulta, $conexion);
            $numeroColumnas = mysql_num_fields($hacerConsulta);
            $numeroDeRegistros = mysql_num_rows($hacerConsulta);                        
        ?>        
        <br>
        <br>        
        <table border="1" cellpadding="2" cellspacing="1">
            <tr>
                <th colspan="<?php echo $numeroColumnas?>">COORDINACIÓN DE MANTENIMIENTO MAYOR TICOMAN</th>
            </tr>
            <tr>
                <th>Expediente</th>
                <th>Nombre</th>
                <th>Puesto</th>
                <th>Horario</th>
                <th>Descanso</th>
                <th>Cursos que imparte</th>
            </tr>
            <?php
                for ($contador=0; $contador<$numeroDeRegistros; $contador ++){           
                    $expediente=mysql_result ($hacerConsulta, $contador, "expediente");
                    $nombre=mysql_result ($hacerConsulta, $contador, "nombre");
                    $puesto=  mysql_result($hacerConsulta, $contador, "puesto");
                    $horario=mysql_result ($hacerConsulta, $contador, "horario");
                    $descanso=mysql_result ($hacerConsulta, $contador, "descanso");
                    $instructor=  @mysql_result($hacerConsulta, $contador, "instructor");
                    
            ?>
            <tr>
                <td><?php echo $expediente; ?></td>
                <td><?php echo $nombre; ?></td>
                <td><?php echo $puesto; ?></td>
                <td><?php echo $horario; ?></td>
                <td><?php echo $descanso; ?></td>        
                
            </tr>
            <?php 
                }
            ?>
            <tr>
                <th colspan="<?php echo $numeroColumnas;?>"><?php
                    echo "Total = ".$numeroDeRegistros;
                ?></th>
            </tr>
        </table>
        
        
        <?php
            $consulta = "SELECT expediente, nombre, puesto, horario, descanso, instructor FROM general WHERE ubicacion=\"COORDINACIÓN REHABILITACIÓN DE TRENES\" AND instructor=TRUE ORDER BY nombre;";
            $hacerConsulta = mysql_query($consulta, $conexion);
            $numeroColumnas = mysql_num_fields($hacerConsulta);
            $numeroDeRegistros = mysql_num_rows($hacerConsulta);                        
        ?>        
        <br>
        <br>        
        <table border="1" cellpadding="2" cellspacing="1">
            <tr>
                <th colspan="<?php echo $numeroColumnas?>">COORDINACIÓN REHABILITACIÓN DE TRENES</th>
            </tr>
            <tr>
                <th>Expediente</th>
                <th>Nombre</th>
                <th>Puesto</th>
                <th>Horario</th>
                <th>Descanso</th>
                <th>Cursos que imparte</th>
            </tr>
            <?php
                for ($contador=0; $contador<$numeroDeRegistros; $contador ++){           
                    $expediente=mysql_result ($hacerConsulta, $contador, "expediente");
                    $nombre=mysql_result ($hacerConsulta, $contador, "nombre");
                    $puesto=  mysql_result($hacerConsulta, $contador, "puesto");
                    $horario=mysql_result ($hacerConsulta, $contador, "horario");
                    $descanso=mysql_result ($hacerConsulta, $contador, "descanso");
                    $instructor=  @mysql_result($hacerConsulta, $contador, "instructor");
                    
            ?>
            <tr>
                <td><?php echo $expediente; ?></td>
                <td><?php echo $nombre; ?></td>
                <td><?php echo $puesto; ?></td>
                <td><?php echo $horario; ?></td>
                <td><?php echo $descanso; ?></td>        
                
            </tr>
            <?php 
                }
            ?>
            <tr>
                <th colspan="<?php echo $numeroColumnas;?>"><?php
                    echo "Total = ".$numeroDeRegistros;
                ?></th>
            </tr>
        </table>
         </div>
        
    </body>
</html>
