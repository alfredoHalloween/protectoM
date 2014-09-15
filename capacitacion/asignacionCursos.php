<!DOCTYPE html>
<html>
    <head>       
        <?php 
            if(isset($_POST['datepicker']) AND isset($_POST['datepicker2'])) {
                $datepicker = $_POST['datepicker'];
                $datepicker2 = $_POST['datepicker2'];
                echo $datepicker;
                echo $datepicker2;
            } else {
                $datepicker = date("0000-00-00");
                $datepicker2 = date("0000-00-00");
            }
        ?>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <title>CURSOS DISPONIBLES AL DIA <?php echo $datepicker;?></title>
        <link rel="stylesheet" type="text/css" href="../css/jquery-ui-1.7.2.custom.css" />
        <link href="../css/movil.css" rel="stylesheet" type="text/css">  
        <script type="text/javascript" src="../js/jquery-1.9.1.js"></script>
        <script type="text/javascript" src="../js/jquery-1.9.1d.js"></script>
        <script type="text/javascript" src="../js/jquery-ui-1.10.3.custom.min.js"></script>
        <script type="text/javascript" src="../js/jquery.ui.datepicker-es.js"></script>

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
                    $("#datepicker2").datepicker({
                        changeMonth: true
                    });
                });
        </script>
    </head>                
    <body>            
        <div id="content">
            <div id="nav">
                <ul>
                    <li><a href="Cursos2.php" title="Regresar"><img src="../img/baatras.png"></a></li>
                    <li><a href="../menu.php" title="Inicio"><img src="../img/bahome.png"></a></li>
                    <li><a href="contacto.php" title="Ayuda"><img src="../img/baayuda.png"></a></li>
                    <li><a href="close.php" title="Salir"><img src="../img/baasalir.png"></a></li>                    
                
                <?php
                    require 'conexion.php';
                    require_once 'claseEmpleado.php';                    
                ?>
                <br>
                <br>
                <div>	                  
                    <form action="<?php echo "asignacionCursos.php?datepicker=".$datepicker."&datepicker2=".$datepicker2; ?>" name="formFecha" id="formFecha" method="post">
                        <label> Seleccionar Fecha inicio:</label>
                        <input type="text" name="datepicker" id="datepicker" readonly="readonly" size="12"  value="<?php echo $datepicker;?>"/>
                        <label> Seleccionar Fecha fin:</label>
                        <input type="text" name="datepicker2" id="datepicker2" readonly="readonly" size="12"  value="<?php echo $datepicker2;?>"/>
                        <button type="submit">Enviar</button>
                    </form>
                </div>
                <br>
                <br>
                </ul> 
            </div>
        </div>
    </body>
</html>