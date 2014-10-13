<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 3.2 Final//EN">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>FORMULARIO DE MODIFICACIÓN</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <link href="../css/movil.css" rel="stylesheet" type="text/css">
        <link href="../css/estilos.css" rel="stylesheet" type="text/css">
        <link href="../css/tabla2_1.css" rel="stylesheet" type="text/css">
    </head>
    <body>
        <?php
            $limpiaExp = mysql_real_escape_string($_GET['expediente']);
        ?>
        <div id="content">
            <div id="nav">
                <ul>
                    <li><a href="modificarDatos.php?consulta=<?php echo $limpiaExp?>" title="Regresar"><img src="../img/baatras.png"></a></li>
                    <li><a href="../menu.php" title="Inicio"><img src="../img/bahome.png"></a></li>
                    <li><a href="ayuda.php" title="Ayuda"><img src="../img/baayuda.png"></a></li>
                    <li><a href="close.php" title="Salir"><img src="../img/baasalir.png"></a></li>    
                </ul>
            </div>
        </div>
        <?php
            require 'conexion.php';
            $limpiaOp = mysql_real_escape_string($_GET['op']);
            if(isset($limpiaOp) AND !empty($limpiaOp)) {
                switch ($limpiaOp) {
                    case 1:
                        $limpiaNombre = strtr(strtoupper(mysql_real_escape_string($_POST['nombre'])), "áéíóú", "ÁÉÍÓÚ");                        
                        if(isset($limpiaNombre) AND !empty($limpiaNombre) AND isset($limpiaExp) AND !empty($limpiaExp)){
                            $modificar = "UPDATE general SET nombre='$limpiaNombre' WHERE expediente=$limpiaExp;";
                            echo $modificar;
                            $hacerModificar = mysql_query($modificar);
                            echo "LA MODIFICACIÓN HA SIDO EXITOSA";
                        }                        
                        break;
                    case 2:
                        $limpiaPuesto = strtr(strtoupper(mysql_real_escape_string($_POST['puesto'])),"áéíóú","ÁÉÍÓÚ");                        
                        if(isset($limpiaPuesto) AND !empty($limpiaPuesto) AND isset($limpiaExp) AND !empty($limpiaExp)){
                            $modificar = "UPDATE general SET puesto='$limpiaPuesto' WHERE expediente=$limpiaExp;";
                            echo $modificar;
                            $hacerModificar = mysql_query($modificar);
                            echo "LA MODIFICACIÓN HA SIDO EXITOSA";
                        }
                        break;
                    case 3:
                        $limpiaAdscripcion = strtr(strtoupper(mysql_real_escape_string($_POST['adscripcion'])),"áéíóú","ÁÉÍÓÚ");
                        if(isset($limpiaAdscripcion) AND !empty($limpiaAdscripcion) AND isset($limpiaExp) AND !empty($limpiaExp)){
                            $modificar = "UPDATE general SET adscripcion='$limpiaAdscripcion' WHERE expediente=$limpiaExp;";
                            echo $modificar;
                            $hacerModificar = mysql_query($modificar);
                            echo "LA MODIFICACIÓN HA SIDO EXITOSA";
                        }
                        break;
                    case 4:
                        $limpiaUbicacion = strtr(strtoupper(mysql_real_escape_string($_POST['ubicacion'])),"áéíóú","ÁÉÍÓÚ");
                        if(isset($limpiaUbicacion) AND !empty($limpiaUbicacion) AND isset($limpiaExp) AND !empty($limpiaExp)) {
                            $modificar = "UPDATE general SET ubicacion='$limpiaUbicacion' WHERE expediente=$limpiaExp;";
                            echo $modificar;
                            $hacerModificar = mysql_query($modificar);
                            echo "LA MODIFICACIÓN HA SIDO EXITOSA";
                        }
                        break;
                    case 5:
                        $limpiaCoordinacion = strtr(strtoupper(mysql_real_escape_string($_POST['coordinacion'])),"áéíóú","ÁÉÍÓÚ");
                        if(isset($limpiaCoordinacion) AND !empty($limpiaCoordinacion) AND isset($limpiaExp) AND !empty($limpiaExp)) {
                            $modificar = "UPDATE general SET coordinacion='$limpiaCoordinacion' WHERE expediente=$limpiaExp;";
                            echo $modificar;
                            $hacerModificar = mysql_query($modificar);
                            echo "LA MODIFICACIÓN HA SIDO EXITOSA";
                        }
                        break;
                    case 6:
                        $limpiaPlaza = strtr(strtoupper(mysql_real_escape_string($_POST['plaza'])),"áéíóú","ÁÉÍÓÚ");
                        if (isset($limpiaPlaza) AND !empty($limpiaPlaza) AND isset($limpiaExp) AND !empty($limpiaExp)) {
                            if(is_numeric($limpiaPlaza)) {
                                $modificar = "UPDATE general SET plaza='$limpiaPlaza' WHERE expediente=$limpiaExp;";
                                echo $modificar;
                                $hacerModificar = mysql_query($modificar);
                                echo "LA MODIFICACIÓN HA SIDO EXITOSA";
                            } else {
                                echo "EL VALOR INGRESADO NO ES UN NÚMERO";
                            }
                        }
                        break;
                    case 7:
                        $limpiaSIDEN = strtr(strtoupper(mysql_real_escape_string($_POST['siden'])),"áéíóú","ÁÉÍÓÚ");
                        if(isset($limpiaSIDEN) AND !empty($limpiaSIDEN) AND isset($limpiaExp) AND !empty($limpiaExp)) {
                            if (is_numeric($limpiaSIDEN)) {
                                $modificar = "UPDATE general SET siden='$limpiaSIDEN' WHERE expediente=$limpiaExp;";
                                echo $modificar;
                                $hacerModificar = mysql_query($modificar);
                                echo "LA MODIFICACIÓN HA SIDO EXITOSA";
                            } else {
                                echo "EL VALOR INGRESADO NO ES UN NÚMERO";
                            }
                        }                        
                        break;
                    case 8:
                        $limpiaCalidad = strtr(strtoupper(mysql_real_escape_string($_POST['calidad'])),"áéíóú","ÁÉÍÓÚ");
                        if(isset($limpiaCalidad) AND !empty($limpiaCalidad) AND isset($limpiaExp) AND !empty($limpiaExp)) {
                            $modificar = "UPDATE general SET calidad='$limpiaCalidad' WHERE expediente=$limpiaExp;";
                            echo $modificar;
                            $hacerModificar = mysql_query($modificar);
                            echo "LA MODIFICACIÓN HA SIDO EXITOSA";
                        }
                    case 9:
                        $limpiaArea = strtr(strtoupper(mysql_real_escape_string($_POST['area'])), "áéíóú", "ÁÉÍÓÚ");
                        if(isset($limpiaArea) AND !empty($limpiaArea) AND isset($limpiaExp) AND !empty($limpiaExp)) {
                            $modificar = "UPDATE general SET area='$limpiaArea' WHERE expediente=$limpiaExp;";
                            echo $modificar;
                            $hacerModificar = mysql_query($modificar);
                            echo "LA MODIFICACIÓN HA SIDO EXITOSA";
                        }
                        break;
                    case 10:
                        $limpiaHorario = strtr(strtoupper(mysql_real_escape_string($_POST['horario'])), "áéíóú", "ÁÉÍÓÚ");
                        if(isset($limpiaHorario) AND !empty($limpiaHorario) AND isset($limpiaExp) AND !empty($limpiaExp)) {
                            $modificar = "UPDATE general SET horario='$limpiaHorario' WHERE expediente=$limpiaExp;";
                            echo $modificar;
                            $hacerModificar = mysql_query($modificar);
                            echo "LA MODIFICACIÓN HA SIDO EXITOSA";
                        }
                        break;
                    case 11:
                        $limpiaDescanso = strtr(strtoupper(mysql_real_escape_string($_POST['descanso'])), "áéíóú", "ÁÉÍÓÚ");
                        if(isset($limpiaDescanso) AND !empty($limpiaDescanso) AND isset($limpiaExp) AND !empty($limpiaExp)) {
                            $modificar = "UPDATE general SET descanso='$limpiaDescanso' WHERE expediente=$limpiaExp;";
                            echo $modificar;
                            $hacerModificar = mysql_query($modificar);
                            echo "LA MODIFICACIÓN HA SIDO EXITOSA";
                        }                        
                        break;
                    case 12:
                        $limpiaGrado = strtr(strtoupper(mysql_real_escape_string($_POST['estudios'])), "áéíóú", "ÁÉÍÓÚ");
                        if(isset($limpiaGrado) AND !empty($limpiaGrado) AND isset($limpiaExp) AND !empty($limpiaExp)) {
                            $modificar = "UPDATE general SET grado='$limpiaGrado' WHERE expediente=$limpiaExp;";
                            echo $modificar;
                            $hacerModificar = mysql_query($modificar);
                            echo "LA MODIFICACIÓN HA SIDO EXITOSA";
                        }
                        break;
                    case 13:
                        $limpiaConcluido = $_POST['concluido'];
                        if(isset($limpiaConcluido) AND !empty($limpiaConcluido) AND isset($limpiaExp) AND !empty($limpiaExp)) {
                            $modificar = "UPDATE general SET concluido=$limpiaConcluido WHERE expediente=$limpiaExp;";
                            echo $modificar;
                            $hacerModificar = mysql_query($modificar);
                            echo "LA MODIFICACIÓN HA SIDO EXITOSA";
                        }
                        break;
                    case 14:
                        $limpiaExtension = strtr(strtoupper(mysql_real_escape_string($_POST['extension'])), "áéíóú", "ÁÉÍÓÚ");;
                        if(isset($limpiaExtension) AND !empty($limpiaExtension) AND isset($limpiaExp) AND !empty($limpiaExp)) {
                            $modificar = "UPDATE general SET extension='$limpiaExtension' WHERE expediente=$limpiaExp;";
                            echo $modificar;
                            $hacerModificar = mysql_query($modificar);
                            echo "LA MODIFICACIÓN HA SIDO EXITOSA";
                        }
                        break;
                    case 15:
                        $limpiaCorreo = mysql_real_escape_string($_POST['correo']);
                        if(isset($limpiaCorreo) AND !empty($limpiaCorreo) AND isset($limpiaExp) AND !empty($limpiaExp)) {
                            $modificar = "UPDATE general SET correo='$limpiaCorreo' WHERE expediente=$limpiaExp;";
                            echo $modificar;
                            $hacerModificar = mysql_query($modificar);
                            echo "LA MODIFICACIÓN HA SIDO EXITOSA";
                        }
                        break;    
                    default:
                        break;
                }                
            }                        
        ?>
    </body>
</html>
