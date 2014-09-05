<!DOCTYPE html>
<html>
<head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <title>Formulario de alta</title>
        <link href="css/movil.css" rel="stylesheet" type="text/css">
        <link href="css/prueba.css" rel="stylesheet" type="text/css">       
        
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
             <tr><td><LABEL for="expediente">Expediente: </LABEL> </td><td><input type="text" name="expediente" required/></td></tr>
             <tr><td><LABEL for="nombre">Nombre: </LABEL></td><td><input type="text" name="nombre" required/></td></tr>
             <tr><td><LABEL for="puesto">Puesto: </LABEL></td><td><input type="text" name="puesto" required/></td></tr>
             <tr><td>Adscripción:</td><td>   
             <select name='Adscripción' required>
                <option></option>
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
            <tr><td><LABEL for="plaza">Plaza: </LABEL></td><td><input type="text" name="plaza" required/></td></tr>
            <tr><td><LABEL for="side">Siden:</LABEL></td><td><input type="text" name="siden" required/></td></tr>
            <tr><td><LABEL for="calidad">Calidad: </LABEL></td><td>
            <input type="radio" name='calidad' value='base' required/> BASE
            <input type="radio" name='calidad' value='confianza' required/> CONFIANZA
            <input type="radio" name='calidad' value='estructura' required/> ESTRUCTURA
            <input type="radio" name='calidad' value='honorarios' required/> HONORARIOS
            </td></tr>
            <tr><td><LABEL for="area">ÁREA:</LABEL></td><td><input type="text" name="area" required/></td></tr>
            <tr><td><LABEL for="horario">Horario:</LABEL></td><td><input type="text" name="horario" placeholder='EJEMPLO:07:00 A 15:00' required/></td></tr>
            <tr><td><LABEL for="descanso">Descanso: </LABEL></td><td><input type="text" name="descanso" placeholder='EJEMPLO: S Y D, L Y M.' required/></td></tr>
            <tr><td>Ultimo grado de estudios:</td><td>  
            <select name='estudios' required>
                       <option></option>
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
            <tr><td><LABEL for="concluido">¿Concluido?: </LABEL> </td><td>
            <input type="radio" name='concluido' value='si' required/> Si
            <input type="radio" name='concluido' value='no' required/> No
            </td></tr>
            <tr><td><LABEL for="extension">Extension: </LABEL></td><td><input type="text" name="extension" required/></td></tr>
            <tr><td><LABEL for="correo">Correo: </LABEL></td><td><input type="text" name="correo"  required/></td></tr>
            <tr><td><LABEL for="instructor">Instructor: </LABEL></td><td>
            <input type="radio" name='instructor' value='si' required/> Si
            <input type="radio" name='instructor' value='no' required/> No
            </td></tr>
            <tr><td><LABEL for="formacion">¿Tomo el curso de formación de instructores? </LABEL></td><td>
            <input type="radio" name='formacion' value='si' required/> Si
            <input type="radio" name='formacion' value='no' required/> No
            </td></tr>
            <tr ><td>
               <button class="submit" type="submit">Enviar Datos</button>
            </td></tr>
               
        </table>
      
    </form>
    
     </div>
</div>
</body>
</html>