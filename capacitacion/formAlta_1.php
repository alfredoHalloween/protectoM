<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        <?php
            if(!isset($_POST['expediente']) || empty($_POST['expediente'])
                    || !isset($_POST['nombre']) || empty($_POST['nombre'])) {
                echo "Te falta llenar ";
                echo "<a href='formularioAlta_1.php?expediente=".$_POST['expediente']."&nombre=".$_POST['nombre']."'>regresar</a>";
            } else {
                $expediente = mysql_real_escape_string($unescaped_string);
            }
            echo $_POST['expediente'];
            echo $_POST['nombre'];
            
        ?>
    </body>
</html>
