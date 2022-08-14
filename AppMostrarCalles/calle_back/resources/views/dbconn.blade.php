<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="es" lang="es">
    <head>
        <title>Laravel & MySQL DB Connection</title>
    </head>
    <body>
        <div>
            <?php
                if(DB::connection()->getPdo()){
            echo "Conectado a la DB ".DB::connection()->getDatabaseName();
            }
            ?>
        </div>
    </body>
</html>
