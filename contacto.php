<!--<!DOCTYPE html>
<html>	
    <head>
        
    </head>
<body>
    <form action='contacto1.php' method='POST'>
        <input type='text' name='nombre'>
        <select name='taller'>
            <option value='CAZ'> CAZ </option>
            <option value='ZAR'> ZAR </option>
            <option value='TAS'> TAS </option>
            <option value='COT'> COT </option>
            <option value='TLA'> TLA </option>
            <option value='TIC'> TIC </option>
            <option value='ROS'> ROS </option>
            <option value='LPZ'> LPZ </option>
        </select>
        <textarea name='msg'></textarea>
        <input type ='submit' value='Enviar'> 
        
    </form>
</body>

</html>-->

<!DOCTYPE html>
<html>	
    <head>
      <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <link href="css/movil.css" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="demo/js/jquery/ui-lightness/jquery-ui-1.10.2.custom.css" />                

    </head>
<body>
       <div id="content">
            <div id="nav">
                <ul>
                    <li><a href="menu.php" title="Regresar"><img src="img/baatras.png"></a></li>
                    <li><a href="menu.php" title="Inicio"><img src="img/bahome.png"></a></li>
                    <li><a href="ayuda.php" title="Ayuda"><img src="img/baayuda.png"></a></li>
                    <li><a href="close.php" title="Salir"><img src="img/baasalir.png"></a></li>
                </ul>
            
    </div>
           
      <table>
         <td style=" font-size:30px; color:orange;text-align: center; background: steelblue; border: 1000px;">
             <strong>DIRECCION DE MANTENIMIENTO DE MATERIAL RODANTE</strong>
                 
        </td>
         
    </table>
      
<!--    <form action='contacto1.php' method='POST'>-->
<div id="contenedorform">
    
      <form class="contact_form" action="filtroTaller.php" method="POST">

           <label for="taller">Taller:</label>
        <select name='taller'>
            <option value='GERENCIA DE INGENIERIA'>GERENCIA DE INGENIERIA</option>
            <option value='COORDINACIÓN DE SUPERVISIÓN DE FABRICACIÓN DE TRENES'>COORDINACIÓN DE SUPERVISIÓN DE FABRICACIÓN DE TRENES</option>
            <option value='COORDINACIÓN ELECTRÓNICA'>COORDINACIÓN ELECTRÓNICA</option>
            <option value='COORDINACIÓN DE PROGRAMACIÓN Y EVALUACIÓN'>COORDINACIÓN DE PROGRAMACIÓN Y EVALUACIÓN</option>
            
            <option value='SUBGERENCIA DE MANTENIMIENTO SISTEMÁTICO I'>SUBGERENCIA DE MANTENIMIENTO SISTEMÁTICO I</option>            
            <option value='COORDINACIÓN DE MANTENIMIENTO SISTEMÁTICO ZARAGOZA'>COORDINACIÓN DE MANTENIMIENTO SISTEMÁTICO ZARAGOZA</option>
            <option value='COORDINACIÓN DE MANTENIMIENTO SISTEMÁTICO CONSTITUCIÓN DE 1917'>COORDINACIÓN DE MANTENIMIENTO SISTEMÁTICO CONSTITUCIÓN DE 1917</option>
            <option value='COORDINACIÓN DE MANTENIMIENTO SISTEMÁTICO TAXQUEÑA'>COORDINACIÓN DE MANTENIMIENTO SISTEMÁTICO TAXQUEÑA</option>
            <option value='COORDINACIÓN DE MANTENIMIENTO TLAHUAC'>COORDINACIÓN DE MANTENIMIENTO TLAHUAC</option>            
            
            <option value='SUBGERENCIA DE MANTENIMIENTO SISTEMÁTICO II'>SUBGERENCIA DE MANTENIMIENTO SISTEMÁTICO II</option>
            <option value='COORDINACIÓN DE MANTENIMIENTO SISTEMÁTICO ROSARIO'>COORDINACIÓN DE MANTENIMIENTO SISTEMÁTICO ROSARIO</option>
            <option value='COORDINACIÓN DE MANTENIMIENTO SISTEMÁTICO LA PAZ'>COORDINACIÓN DE MANTENIMIENTO SISTEMÁTICO LA PAZ</option>
            <option value='COORDINACIÓN DE MANTENIMIENTO SISTEMÁTICO TICOMAN'>COORDINACIÓN DE MANTENIMIENTO SISTEMÁTICO TICOMAN</option>
            <option value='COORDINACIÓN DE MANTENIMIENTO SISTEMÁTICO CD. AZTECA'>COORDINACIÓN DE MANTENIMIENTO SISTEMÁTICO CD. AZTECA</option>
            
            <option value='SUBGERENCIA DE MANTENIMIENTO MAYOR Y REHABILITACIÓN'>SUBGERENCIA DE MANTENIMIENTO MAYOR Y REHABILITACIÓN</option>
            <option value='COORDINACIÓN DE MANTENIMIENTO MAYOR ZARAGOZA'>COORDINACIÓN DE MANTENIMIENTO MAYOR ZARAGOZA</option>
            <option value='COORDINACIÓN DE MANTENIMIENTO MAYOR TICOMAN'>COORDINACIÓN DE MANTENIMIENTO MAYOR TICOMAN</option>
            <option value='COORDINACIÓN REHABILITACIÓN DE TRENES'>COORDINACIÓN REHABILITACIÓN DE TRENES</option>
        </select>
           <input type='submit'>
</form>
 </div> 
 </div>
</body>

</html>
