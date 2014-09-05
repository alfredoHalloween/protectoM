<html>
    <head>
        <meta charset="UTF-8">
        <title>Filtro por taller</title>
        <style type="text/css">
            .cd-select
        </style>
    </head>
    <body>
        <select  id="cd-dropdown" class="cd-select">
            <option value="-1" selected>Escoja un taller...</option>
            <option value="1">Ciudad Azteca</option>
            <option value="2">Tasqueña</option>
            <option value="3">Rosario</option>
            <option value="4">Constitución de 1917</option>
         <div class="cd-dropdown">
            <span>Escoja un taller...</span>
            <input type="hidden" name="cd-dropdown">
            <ul>
                <li data-value="1"><span>Ciudad Azteca</span></li>
                <li data-value="2"><span>Tasqueña</span></li>
                <li data-value="3"><span>Rosario</span></li>
                <li data-value="4"><span>Constitución de 1917</span></li>
            </ul>
        </div>
        </select>
    </body>
</html>