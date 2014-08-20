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
            $this->concluido = mysql_result($hacerConsulta, $contador, "concluido");
            $this->extension = mysql_result($hacerConsulta, $contador, "extension");
            $this->correo = mysql_result($hacerConsulta, $contador, "correo");
            $this->instructor = mysql_result($hacerConsulta, $contador, "instructor"); 
            $this->formacion = mysql_result($hacerConsulta, $contador, "formacion");
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
            
            if($this->concluido == TRUE) {
                echo "<td>CONCLUIDOS</td>";
            } else {
                echo "<td>NO CONCLUIDOS</td>";
            }                      
           
            echo "<td>$this->extension</td>";
            
            if($this->correo != NULL) {
                echo "<td>$this->correo";
            } else {
                echo "<td>SIN CORREO</td>";
            }            
            
            if ($this->instructor == TRUE) {
                echo "<td>SI</td>";
            } else {
                echo "<td>NO</td>";
            }                   
           
            if ($this->formacion == TRUE) {
                echo "<td>SI</td>";
            } else {
                echo "<td>NO</td>";
            } 
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
?>