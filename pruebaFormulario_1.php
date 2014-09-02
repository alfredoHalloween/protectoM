<?php
//       require("conexion.php");
//       require("insert.php");
//       $status = "";
//        if((empty($_POST['nombre']) || !isset($_POST['nombre']))
//        || (empty($_POST['expediente']) || !isset($_POST['expediente']))
//                    || (empty($_POST['taller']) || !isset($_POST['taller']))
//                                || (empty($_POST['msg']) || !isset($_POST['msg'])))
//      {
//    echo 'Datos Incompletos';
//    echo "<a href='contacto.php'>  regresar   </a>";
//    exit();
//       }      
//    
//    date_default_timezone_set("America/Mexico_City");
////     echo date('Y-m-d H:i:s');
//    
//       $nombre=  mysql_real_escape_string($_POST['nombre']);
//       $taller=  mysql_real_escape_string($_POST['taller']);
//       $mensaje=  mysql_real_escape_string($_POST['mensaje']);
//       $expediente= mysql_real_escape_string($_POST['expediente']);
//     
////       echo '<br>' . $nombre;
////       echo '<br>' . $taller;
////       echo '<br>' . $msg;
//       
   


 if((empty($_POST['expediente']) || !isset($_POST['expediente']))
         || (empty($_POST['nombre']) || !isset($_POST['nombre']))
         || (empty($_POST ['puesto']) || !isset($_POST['puesto']))
         || (empty($_POST ['Adscripción']) || !isset($_POST['Adscripción']))
         || (empty($_POST ['coordinacion']) || !isset($_POST['coordinacion']))
         || (empty($_POST ['ubicacion']) || !isset($_POST['ubicacion']))
         || (empty($_POST ['plaza']) || !isset($_POST['plaza']))
         || (empty($_POST ['siden']) || !isset($_POST['siden']))
         || (empty($_POST ['area']) || !isset($_POST['area']))
         || (empty($_POST ['horario']) || !isset($_POST['horario']))
         || (empty($_POST ['descanso']) || !isset($_POST['descanso']))
         || (empty($_POST ['estudios']) || !isset($_POST['estudios']))
         || (empty($_POST ['concluido']) || !isset($_POST['concluido']))
         || (empty($_POST ['extension']) || !isset($_POST['extension']))
         || (empty($_POST ['correo']) || !isset($_POST['correo']))
         || (empty($_POST ['instructor']) || !isset($_POST['instructor']))
         || (empty($_POST ['formacion']) || !isset($_POST['formacion'])))
     {
    echo 'Datos Incompletos';
    echo "<a href='PruebaFormulario.php?'>  regresar   </a>";
    exit();
       }
       
$servidor = "localhost"; //el servidor que utilizaremos, en este caso será el localhost
$usuario = "root"; //El usuario que acabamos de crear en la base de datos
$contraseña = ""; //La contraseña del usuario que utilizaremos
$BD = "mensajes"; //El nombre de la base de datos
 
/*Aquí abrimos la conexión en el servidor.
Normalmente se envian 3 parametros (los datos del servidor, usuario y contraseña) a la función mysql_connect,
si no hay ningún error la conexión será un éxito
El @ que se ponde delante de la funcion, es para que no muestre el error al momento de ejecutarse, ya crearemos un código para eso*/
$conexion = @mysql_connect($servidor, $usuario, $contraseña); //validar
 
/* Aquí preguntamos si la conexión no pudo realizarse, de ser así lanza un mensaje en la pantalla con el siguiente texto "No pudo conectarse:"
y le agrega el error ocurrido con "mysql_error()"
*/
//if (!$conexion) {
//    die('<strong>No pudo conectarse:</strong> ' . mysql_error());
//}else{
////La siguiente linea no es necesaria, simplemente la pondremos ahora para poder observar que la conexión ha sido realizada
//echo 'Conectado  satisfactoriamente al servidor <br />';
//}
/*En esta linea seleccionaremos la BD con la que trabajaremos y le pasaremos como referencia la conexión al servidor.
Para saber si se conecto o no a la BD podríamos utilizar el IF de la misma forma que la utilizamos al momento de conectar al servidor, pero usaremos otra forma de comprobar eso usando die().
*/
mysql_select_db($BD, $conexion) or die(mysql_error($conexion));
mysql_query("SET NAMES utf8");

?>