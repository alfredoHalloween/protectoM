<?php
    class empleado {
        public $expediente;
        public $nombre;
        public $puesto;
        public $adscripcion;
        public $ubicacion;
        public $coordinacion;
        public $plaza;
        public $siden;
        public $calidad;
        public $area;
        public $horario;
        public $descanso;
        public $grado;
        public $concluido;
        public $extension;
        public $correo;
        public $instructor;
        public $formacion;
                
        function asignar($hacerConsulta, $contador) {
            $this->expediente = mysql_result($hacerConsulta, $contador, "expediente");
            $this->nombre = mysql_result($hacerConsulta, $contador, "nombre");
            $this->puesto = mysql_result($hacerConsulta, $contador, "puesto");
            $this->adscripcion = mysql_result($hacerConsulta, $contador, "adscripcion");
            $this->ubicacion = mysql_result($hacerConsulta, $contador, "ubicacion");
            $this->coordinacion = mysql_result($hacerConsulta, $contador, "coordinacion");
            $this->plaza = mysql_result($hacerConsulta, $contador, "plaza");
            $this->siden = mysql_result($hacerConsulta, $contador, "siden");
            $this->calidad = mysql_result($hacerConsulta, $contador, "calidad");
            $this->area = mysql_result($hacerConsulta, $contador, "area");
            $this->horario = mysql_result($hacerConsulta, $contador, "horario");
            $this->descanso = mysql_result($hacerConsulta, $contador, "descanso");
            $this->grado = mysql_result($hacerConsulta, $contador, "grado");
            if($this->grado == NULL) {
                $this->grado = "NO INDICADO";
            }
            $this->concluido = mysql_result($hacerConsulta, $contador, "concluido");
            if($this->concluido == TRUE) {
                $this->concluido = "CONCLUIDOS";
            } else {
                $this->concluido = "NO CONCLUIDOS";
            }            
            $this->extension = mysql_result($hacerConsulta, $contador, "extension");
            $this->correo = mysql_result($hacerConsulta, $contador, "correo");
            if($this->correo == NULL || $this->correo == 0) {
                $this->correo = "SIN CORREO";
            }             
            $this->instructor = mysql_result($hacerConsulta, $contador, "instructor"); 
            if($this->instructor == TRUE) {
                $this->instructor="SI";
            } else {
                $this->instructor="NO";
            }
            $this->formacion = mysql_result($hacerConsulta, $contador, "formacion");
            if($this->formacion == TRUE) {
                $this->formacion="SI";
            } else {
                $this->formacion="NO";
            }
        }             
        function imprimirEmpleado() {
            echo "<tr>";
            echo "<td>$this->expediente</td>";
            echo "<td>$this->nombre</td>";
            echo "<td>$this->puesto</td>";
            echo "<td>$this->adscripcion</td>";
            echo "<td>$this->ubicacion</td>";
            echo "<td>$this->coordinacion</td>";
            echo "<td>$this->plaza</td>";
            echo "<td>$this->siden</td>";
            echo "<td>$this->calidad</td>";
            echo "<td>$this->area</td>";
            echo "<td>$this->horario</td>";
            echO "<td>$this->descanso</td>";
            echo "<td>$this->grado</td>";
            echo "<td>$this->concluido</td>";
            echo "<td>$this->extension</td>";
            echo "<td>$this->correo</td>";
            echo "<td>$this->instructor</td>"; 
            echo "<td>$this->formacion</td>"; 
            echo "<tr>";
        }
    }    
    
    function imprimirCabecera() {
        echo "<tr>
            <th>Expediente</th>
            <th>Nombre</th>
            <th>Puesto</th>
            <th>Adscripción</th>
            <th>Ubicación</th>
            <th>Coordinación</th>
            <th>Plaza</th>
            <th>Siden</th>
            <th>Calidad</th>
            <th>Área</th>
            <th>Horario</th>
            <th>Descanso</th>
            <th>Último grado de estudios</th>
            <th>¿Estudios concluidos?</th>
            <th>Extensión</th>
            <th>E-MAIL</th>
            <th>¿Es instructor?</th>
            <th>¿Tomó curso de formación?</th>
        </tr>";
    }
    
    class empleadoPersonal extends empleado {
        public $cadenaCurso;
        public $numCursos;
        public $annio;
        public $temporalAnnio;
                function asignar($hacerConsulta) {
            parent::asignar($hacerConsulta, 0);
        }

        function imprimir($hacerCursos) {            
            $this->numCursos = mysql_num_rows($hacerCursos);
            for($i = 0; $i < $this->numCursos; $i++) {                
                $this->temporalAnnio = mysql_result($hacerCursos, $i, "ini_curso");
                $this->temporalAnnio = substr($this->temporalAnnio, 0, 4);   
                if($this->temporalAnnio != $this->annio) {
                    $this->annio = $this->temporalAnnio;
                    if($this->annio == 0000) {                        
                        $this->cadenaCurso.="<font color=\"\#00FF00\">SIN FECHA DEFINIDA</font><br>";
                    } else {
                        $this->cadenaCurso.="<font color=\"\#00FF00\">$this->annio</font><br>";
                    }
                }
                $this->temporal=mysql_result($hacerCursos, $i, "nom_curso");
                $this->cadenaCurso.="*$this->temporal<br>";
            }

            echo "<table border=\"1\" cellpadding=\"2\" cellspacing=\"1\">
                    <tr> 
                        <th colspan=\"2\">DATOS PERSONALES</th>
                    </tr>
                    <tr>
                        <th>Expediente</th>
                        <td>$this->expediente</td> 
                    </tr>           
                    <tr>
                        <th>Nombre</th>
                        <td>$this->nombre</td>          
                    </tr>           
                    <tr>
                        <th>Puesto</th>
                        <td>$this->puesto</td> 
                    </tr>           
                    <tr>
                        <th>Adscripción</th>
                        <td>$this->adscripcion</td>
                    </tr>           
                    <tr>
                        <th>Ubicación</th>
                        <td>$this->ubicacion</td> 
                    </tr>           
                    <tr>
                    <th>Coordinación</th>
                        <td>$this->coordinacion</td> 
                    </tr>                     
                    <tr>
                        <th>Plaza</th>
                        <td>$this->plaza</td>
                    </tr>           
                    <tr>
                        <th>Plaza SIDEN</th>
                        <td>$this->siden</td>
                    </tr>           
                    <tr>
                        <th>Calidad</th>
                        <td>$this->calidad</td>
                    </tr>           
                    <tr>
                        <th>Area</th>
                        <td>$this->area</td>           
                    </tr>           
                    <tr>
                        <th>Horario</th>          
                        <td>$this->horario</td>
                    </tr>           
                    <tr>
                        <th>Descanso</th>
                        <td>$this->descanso</td>           
                    </tr>         
                    <tr>
                        <th>Ultimo grado de estudios</th>
                        <td>$this->grado</td>           
                    </tr>
                    <tr>
                        <th>¿Concluido?</th>
                        <td>$this->concluido</td> 
                    </tr>                     
                    <tr>
                        <th>Extensión</th>
                        <td>$this->extension</td> 
                    </tr>
                    <tr>
                        <th>Correo</th>
                        <td>$this->correo</td> 
                    </tr>                     
                    <tr>
                        <th>¿Es instructor?</th>
                        <td>$this->instructor</td> 
                    </tr>              
                    <tr>
                        <th>¿Tomó el curso de formación de instructores?</th>
                        <td>$this->formacion</td> 
                    </tr>   
                    <tr>
                   <th>Cantidad de cursos tomados</th>";
                    if ($this->numCursos == 0) {
                        echo "<td>NINGUNO</td>";
                    } else {                       
                        echo "<td>$this->numCursos</td>";
                        echo "</tr>
                        <tr>
                        <th>Cursos tomados</th>
                        <td>$this->cadenaCurso</td>"; 
                    }
                    echo "</tr>";  
            echo "</table>";
        }
    }
    
    class cursos {
        public $totalCurso;
        public $fechaDeInicio;
        public $fechaDeTermino;
        public $comprobacion;
        public $indice = "";
        public $bandera;
                        
        function imprimirListaCurso($hacerCursos, $fechaSeleccionada) {
            if($fechaSeleccionada != NULL) {            
                $this->totalCurso = mysql_num_rows($hacerCursos);
                if($this->totalCurso != 0) {
                    echo "<table cellpadding='2' cellspacing='2' border='2'>
                        <tr>
                            <th>NOMBRE CURSOS (AL $fechaSeleccionada)</th>
                            <th>FECHA DE INICIO</th>
                            <th>FECHA DE TÉRMINO</th>
                        </tr>";
                    for($i=0; $i < $this->totalCurso; $i++){
                        $this->nombreCurso = mysql_result($hacerCursos, $i, "nom_curso");
                        $this->fechaDeInicio = mysql_result($hacerCursos, $i, "ini_curso");
                        $this->fechaDeTermino = mysql_result($hacerCursos, $i, "fin_curso");
                        $this->comprobacion = "$this->nombreCurso $this->fechaDeInicio $this->fechaDeTermino";
                        $this->bandera = strcmp($this->comprobacion, $this->indice);
                    
                        if($this->bandera != 0) {
                            echo "<tr>";
                            echo "<td>$this->nombreCurso</td>";
                            echo "<td>$this->fechaDeInicio</td>";
                            echo "<td>$this->fechaDeTermino</td>";
                            echo "</tr>";                    
                            $this->indice = $this->comprobacion;
                        }
                    }                         
                } else {
                    echo "<table cellpadding='2' cellspacing='2' border='2'>
                        <td>NO HAY CURSOS DISPONIBLLES</td>";
                }
                echo "</table>";
            }    
        }
    }
    
    function totalCapacitados($hacerConsulta, $conexion) {  
        require 'usarBD.php'; 
        $contarCursos = 0;
        $totalEnGerencia = mysql_num_rows($hacerConsulta);
        for ($i = 0; $i < $totalEnGerencia; $i++) {
            $expedienteCurso = mysql_result($hacerConsulta, $i, "expediente");
            $cursosTomados = "SELECT * FROM cursos WHERE expediente = $expedienteCurso;";
            $hacerCursosTomados = mysql_query($cursosTomados, $conexion);
            $totalHacerCursosTomados = @mysql_num_rows($hacerCursosTomados);
            if ($totalHacerCursosTomados != 0) 
                $contarCursos++;
        }
        return $contarCursos;
    }
?>