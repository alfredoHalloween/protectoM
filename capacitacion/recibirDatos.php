<!DOCTYPE HTML>
<html>
<head>
   
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>ALTA </title>
    <link href="../css/movil.css" rel="stylesheet" type="text/css">
    <link href="../css/tabla2.css" rel="stylesheet" type="text/css">
    
</head>
<body>
<div id="content">
            <div id="nav">
                <ul>
                    <li><a href="PruebaFormulario.php" title="Regresar"><img src="../img/baatras.png"></a></li>
                    <li><a href="../menu.php" title="Inicio"><img src="../img/bahome.png"></a></li>
                    <li><a href="contacto.php" title="Ayuda"><img src="../img/baayuda.png"></a></li>
                    <li><a href="close.php" title="Salir"><img src="../img/baasalir.png"></a></li>
                </ul>
                <?php
                    if((empty($_POST['expediente']) || !isset($_POST['expediente']))
                    || (empty($_POST['ini_curso']) || !isset($_POST['ini_curso']))
                    || (empty($_POST ['fin_curso']) || !isset($_POST['fin_curso']))
                    || (empty($_POST ['nombreCursos']) || !isset($_POST['nombreCursos'])))
                    {
                             
                        echo " <table cellpadding='2' cellspacing='2' border='2'>
                            <tr><td> <a href='altaCursos.php?expediente=".$_POST['expediente']."&ini_curso=".$_POST['ini_curso']."&fin_curso=".$_POST['fin_curso']."
                            &nombreCursos=".$_POST['nombreCursos']."'> Datos Incompletos <BR> regresar</a></td></tr></table>";
                   } else {                 
                        require 'conexion.php'; 
                        
                        $expediente = strtoupper(mysql_real_escape_string($_POST['expediente']));
                        $ini_curso = strtoupper(mysql_real_escape_string($_POST['ini_curso']));
                        $fin_curso = strtoupper(mysql_real_escape_string($_POST['fin_curso']));
                        $nombreCursos= mysql_real_escape_string($_POST['nombreCursos']);
                        
                        $consulta1= "SELECT * FROM cursos  WHERE expediente= '$expediente' AND ini_curso = '$ini_curso' AND fin_curso = '$fin_curso' AND  
                                          nom_curso = '$nombreCursos';";
                        $registro1 =  mysql_query($consulta1) or die (mysql_error());               
                        if(mysql_num_rows($registro1)== 0) {
                            
                            $consulta = "INSERT INTO cursos (expediente,ini_curso,fin_curso,nom_curso) VALUES ('$expediente','$ini_curso','$fin_curso','$nombreCursos');";
                            $realizarconsulta= mysql_query($consulta,$conexion) or die (mysql_error());
                         echo "<table cellpading='2' cellspacing='2' border='2'>
                             <tr><td>ALTA DE CURSOS EXITOSA</td></tr></table>";                                                 
                        }         
                   }
                ?>
   </div>
    
           
     </div>
     </body>
</html>