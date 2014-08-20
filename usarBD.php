<?php
    $conexion = @mysql_connect("localhost", "root", "");       
    mysql_select_db("capa", $conexion);
    mysql_set_charset('utf8');
?>
