<!DOCTYPE html>
<html>
<head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <title></title>
        <link href="css/movil.css" rel="stylesheet" type="text/css">
        
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
             
    <form  action="" method="POST">
        <table>
             <tr><td>Expediente: </td><td><input type="text" name="nombre" required/></td></tr>
             <tr><td>Nombre: </td><td><input type="text" name="nombre" required/></td></tr>
             <tr><td>Puesto: </td><td><input type="text" name="nombre" required/></td></tr>
             <tr><td>Adscripción:</td><td>   
             <select name='Adscripción' >
                <option value='COORDINACIÓN DE MANTENIMIENTO MAYOR TICOMAN'>COORDINACIÓN DE MANTENIMIENTO MAYOR TICOMAN</option>
                <option value='COORDINACIÓN DE MANTENIMIENTO MAYOR ZARAGOZA'>COORDINACIÓN DE MANTENIMIENTO MAYOR ZARAGOZA</option>
                <option value='COORDINACIÓN DE MANTENIMIENTO SISTEMÁTICO CD. AZTECA'>COORDINACIÓN DE MANTENIMIENTO SISTEMÁTICO CD. AZTECA</option>
                <option value='COORDINACIÓN DE MANTENIMIENTO SISTEMÁTICO CONSTTUCIÓN DE 1917'>COORDINACIÓN DE MANTENIMIENTO SISTEMÁTICO CONSTTUCIÓN DE 1917</option>
                <option value='COORDINACIÓN DE MANTENIMIENTO SISTEMÁTICO LA PAZ'>COORDINACIÓN DE MANTENIMIENTO SISTEMÁTICO LA PAZ</option>
                <option value='COORDINACIÓN DE MANTENIMIENTO SISTEMÁTICO ROSARIO'>COORDINACIÓN DE MANTENIMIENTO SISTEMÁTICO ROSARIO</option>
                <option value='COORDINACIÓN DE MANTENIMIENTO SISTEMÁTICO TAXQUEÑA'>COORDINACIÓN DE MANTENIMIENTO SISTEMÁTICO TAXQUEÑA</option>
                <option value='COORDINACIÓN DE MANTENIMIENTO SISTEMÁTICO TICOMAN'>COORDINACIÓN DE MANTENIMIENTO SISTEMÁTICO TICOMAN</option>
                <option value='COORDINACIÓN DE MANTENIMIENTO SISTEMÁTICO ZARAGOZA'>COORDINACIÓN DE MANTENIMIENTO SISTEMÁTICO ZARAGOZA</option>
                <option value='COORDINACIÓN DE PROGRAMACIÓN Y EVALUACIÓN'>COORDINACIÓN DE PROGRAMACIÓN Y EVALUACIÓN</option>
                <option value='COORDINACIÓN DE REHABILITACIÓN DE TRENES'>COORDINACIÓN DE REHABILITACIÓN DE TRENES</option>
                <option value='COORDINACIÓN DE REHABILITACIÓN DE TRENES'>COORDINACIÓN DE REHABILITACIÓN DE TRENES</option>
                <option value='COORDINACIÓN ELECTRÓNICA'>COORDINACIÓN ELECTRÓNICA</option>
                <option value='DIRECCIÓN DE MANTENIMIENTO DE MATERIAL RODANTE'>DIRECCIÓN DE MANTENIMIENTO DE MATERIAL RODANTE</option>
                <option value='GERENCIA DE INGENIERÍA'>GERENCIA DE INGENIERÍA</option>
                <option value='GERENCIA DE INSTALACIONES FIJAS'>GERENCIA DE INSTALACIONES FIJAS</option>
                <option value='SUBGERENCIA DE MANTENIMIENTO MAYOR Y REHABILITACIÓN'>SUBGERENCIA DE MANTENIMIENTO MAYOR Y REHABILITACIÓN</option>
                <option value='SUBGERENCIA DE MANTENIMIENTO SISTEMÁTICO I'>SUBGERENCIA DE MANTENIMIENTO SISTEMÁTICO I</option>
                <option value='SUBGERENCIA DE MANTENIMIENTO SISTEMÁTICO II'>SUBGERENCIA DE MANTENIMIENTO SISTEMÁTICO II</option>
             </select>
            
            </td></tr>
            <tr><td>Plaza: </td><td><input type="text" name="Plaza" required/></td></tr>
            <tr><td>Siden: </td><td><input type="text" name="Siden" required/></td></tr>
            <tr><td>Calidad: </td><td>
            <input type="radio" name='calidad' value='Base'/> BASE
            <input type="radio" name='calidad' value='Confianza'/> CONFIANZA
            <input type="radio" name='calidad' value='Estructura'/> Estructura
            <input type="radio" name='calidad' value='Honorarios'/> Honorarios
            </td></tr>
            <tr><td>Área: </td><td><input type="text" name="Area" required/></td></tr>
            <tr><td>Horario: </td><td><input type="text" name="Horario" placeholder='EJEMPLO:07:00 A 15:00' required/></td></tr>
            <tr><td>Descanso: </td><td><input type="text" name="Descanso" placeholder='EJEMPLO: S Y D, L Y M.' required/></td></tr>
            <tr><td>Ultimo grado de estudios:</td><td>  
            <select name='estudios'>
                       <option value='Primaria'>Primaria</option>
                       <option value='Secundaria'>Secundaria</option>
                       <option value='Especialidades'>Especialidades(Carrera Tecnica)</option>
                       <option value='Media'>Media Superior</option>
                       <option value='Superior'>Superior</option>
                       <option value='Posgrado'>Posgrado</option>
                       <option value='Maestria'>Maestria</option>
                       <option value='Doctorado'>Doctorado</option>
            </select>
           </td></tr>
            <tr><td>Concluido: </td><td>
            <input type="radio" name='concluido' value='si'/> Si
            <input type="radio" name='concluido' value='no'/> No
            </td></tr>
            <tr><td>Extension: </td><td><input type="text" name="extension" /></td></tr>
            <tr><td>Correo: </td><td><input type="text" name="correo" /></td></tr>
            <tr><td>Instructor: </td><td>
            <input type="radio" name='instructor' value='si'/> Si
            <input type="radio" name='instructor' value='no'/> No
            </td></tr>
            <tr><td>¿Tomo el curso de formación de instructores? </td><td>
            <input type="radio" name='formacion' value='si'/> Si
            <input type="radio" name='formacion' value='no'/> No
            </td></tr>
               
        </table>
      
    </form>
    
     </div>
</div>
</body>
</html>