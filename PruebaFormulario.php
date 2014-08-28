
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
     <form action="" method="post" class="smart-green">
    <h1>CAPTURA DE INSTRUCTORES
        <span>INGRESA LOS SIGUIENTES DATOS PARA AGREGAR UN INSTRUCTOR</span>
    </h1>
    <label>
        <span>Expediente:</span>
        <input type="text" name="expediente" required/>
    </label>
    <label>
        <span>Nombre:</span>
        <input type="text" name="nombre" required/>
    </label>
   
    <label>
        <span>Puesto:</span>
        <input type="text" name="puesto" required/>
    </label>
     <label>
        <span>Adscripcion:</span><select name='Adscripción' required>
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
    </label>  
   <label>
        <span>Plaza:</span>
        <input type="text" name="plaza" required/>
    </label>
   <label>
        <span>Siden:</span>
        <input type="text" name="siden" required/>
    </label>
    <label> <span>Calidad:</span></label>
            <input type="radio" name='calidad' value='base' required/> BASE
            <input type="radio" name='calidad' value='confianza' required/> CONFIANZA
            <input type="radio" name='calidad' value='estructura' required/> ESTRUCTURA
            <input type="radio" name='calidad' value='honorarios' required/> HONORARIOS
            
    <label>
        <span>Área:</span>
        <input type="text" name="area" required/>
    </label>
    <label>
        <span>Horario:</span>
        <input type="text" name="horario" placeholder='EJEMPLO:07:00 A 15:00' required/>
    </label>
    <label>
        <span>Descanso:</span>
        <input type="text" name="descanso" placeholder='EJEMPLO: S Y D, L Y M.' required/>
    </label>
    <label>
        <span>Ultimo grado de estudios:</span><select name='estudios' required>
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
    </label>
    <label> <span>¿Concluido?:</span></label>
           <input type="radio" name='concluido' value='si' required/> Si
           <input type="radio" name='concluido' value='no' required/> No
    
    <label>
        <span>Extension:</span>
        <input type="text" name="extension" required/>
    </label>        
   <label>
        <span>Correo:</span>
        <input type="text" name="correo"  required/>
    </label> 
           
    <label> <span>Instructor:</span></label>
           <input type="radio" name='instructor' value='si' required/> Si
            <input type="radio" name='instructor' value='no' required/> No
            <br>   
    <label>
        <span>¿Tomo el curso de formación de instructores?</span></label>
        <input type="radio" name='formacion' value='si' required/> Si
        <input type="radio" name='formacion' value='no' required/> No
    
        <br>   
        <br>
        
     <label>
        
        <input type="button" class="button" value="enviar datos" />
    </label>    
</form>
            </div>
    </div>
</body>
</html>