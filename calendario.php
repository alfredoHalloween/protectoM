<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
        <link rel="stylesheet" type="text/css" href="css/jquery-ui-1.7.2.custom.css" />
        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"></script>
        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.7.2/jquery-ui.min.js"></script>        
        <script type="text/javascript">
            jQuery(function($){
                $.datepicker.regional['es'] = {
                    closeText: 'Cerrar',
                    prevText: '&#x3c;Ant',
                    nextText: 'Sig&#x3e;',
                    currentText: 'Hoy',
                    monthNames: ['Enero','Febrero','Marzo','Abril','Mayo','Junio',
                    'Julio','Agosto','Septiembre','Octubre','Noviembre','Diciembre'],
                    monthNamesShort: ['Ene','Feb','Mar','Abr','May','Jun',
                    'Jul','Ago','Sep','Oct','Nov','Dic'],
                    dayNames: ['Domingo','Lunes','Martes','Mi&eacute;rcoles','Jueves','Viernes','S&aacute;bado'],
                    dayNamesShort: ['Dom','Lun','Mar','Mi&eacute;','Juv','Vie','S&aacute;b'],
                    dayNamesMin: ['Do','Lu','Ma','Mi','Ju','Vi','S&aacute;'],
                    weekHeader: 'Sm',
                    dateFormat: 'yy-mm-dd',
                    firstDay: 1,
                    isRTL: false,
                    showMonthAfterYear: false,
                    yearSuffix: ''};
                    $.datepicker.setDefaults($.datepicker.regional['es']);
                });    

                $(document).ready(function(){
                    $("#datepicker").datepicker({
                        changeMonth: true 
                    });
                });
        </script>
        <?php
            require 'usarBD.php';
            require_once 'claseEmpleado.php';
            $fechaHoy = date("Y-m-d");
        ?>
    </head>
    <body>
	<div>	      
            <form action="calendario.php" name="formFecha" id="formFecha" method="post">
                <label> Seleccionar Fecha:</label>
                <input type="text" name="datepicker" id="datepicker" readonly="readonly" size="12" />
                <button type="submit">Enviar</button>
            </form>
        </div>
        <?php            
            $fechaSeleccionada=$_POST["datepicker"];
            $consultaFecha = "SELECT COUNT( * ) AS  `Filas` ,  `nom_curso` FROM  `cursos` WHERE ini_curso <= '$fechaSeleccionada' GROUP BY `nom_curso` ORDER BY `nom_curso`"; 
            $hacerFecha = mysql_query($consultaFecha, $conexion);    
            $lista = new cursos();            
        ?>
        <?php
            $lista->imprimirListaCurso($hacerFecha, $fechaSeleccionada);
        ?>
        </table>
          
    </body>
</html>
