<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <title></title>
        <link href="css/movil.css" rel="stylesheet" type="text/css">
        <link href="css/tabla2.css" rel="stylesheet" type="text/css">
        <?php
            require 'usarBD.php';            
            require 'claseEmpleado.php';
            $consulta = "SELECT * FROM general WHERE ubicacion=\"COORDINACIÓN DE MANTENIMIENTO MAYOR TICOMÁN\";";
            $hacerConsulta = mysql_query($consulta, $conexion);
            $numeroDeRegistros = mysql_num_rows($hacerConsulta);
        ?>  
    </head>
    <body>
        <table cellpadding="2" cellspacing="2" border="2">
            <tr>
                <th colspan="9">TABLA GENERAL</th>
                <th colspan='2'>Total = <?php echo $numeroDeRegistros; ?></th>
            </tr>
            <?php
                imprimirCabecera();
                $empleadoActual = new empleado();
                for ($i = 0; $i < $numeroDeRegistros; $i++) {
                    $empleadoActual->asignar($hacerConsulta, $i);
                    $empleadoActual->imprimirEmpleado();
                }
            ?>
        </table>
    </body>
</html>
