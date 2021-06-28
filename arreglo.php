<html>
    <head>
        <meta charset="utf-8">
        <title>ARREGLO ASOCIATIVO</title>
    </head>
    <body>
        <?php

        if(isset($_POST['btn']) && $_POST['btn']=='Agregar'){

            $empleado[0]=[ 'Nombre'=>$_POST['nombre1'], 'Apellido'=>$_POST['apellido1'],
            'Cedula'=>$_POST['cedula1'],'Direccion'=>$_POST['direccion1'],
            'Lugar de Trabajo'=>$_POST['trabajo1']];

            $empleado[1]=[ 'Nombre'=>$_POST['nombre2'], 'Apellido'=>$_POST['apellido2'],
            'Cedula'=>$_POST['cedula2'],'Direccion'=>$_POST['direccion2'],
            'Lugar de Trabajo'=>$_POST['trabajo2']];

            $empleado[2]=[ 'Nombre'=>$_POST['nombre3'], 'Apellido'=>$_POST['apellido3'],
            'Cedula'=>$_POST['cedula3'],'Direccion'=>$_POST['direccion3'],
            'Lugar de Trabajo'=>$_POST['trabajo3']];
        }
            if(isset($_POST['nombre1']) && !empty($_POST['nombre1']) 
            && isset($_POST['nombre2']) && !empty($_POST['nombre2'])
            && isset($_POST['nombre3']) && !empty($_POST['nombre3'])
            && isset($_POST['apellido1']) && !empty($_POST['apellido1']) 
            && isset($_POST['apellido2']) && !empty($_POST['apellido2'])
            && isset($_POST['apellido3']) && !empty($_POST['apellido3'])
            &&isset($_POST['cedula1']) && !empty($_POST['cedula1']) 
            && isset($_POST['cedula2']) && !empty($_POST['cedula2'])
            && isset($_POST['cedula3']) && !empty($_POST['cedula3'])
            && isset($_POST['direccion1']) && !empty($_POST['direccion1']) 
            && isset($_POST['direccion2']) && !empty($_POST['direccion2'])
            && isset($_POST['direccion3']) && !empty($_POST['direccion3'])
            && isset($_POST['trabajo1']) && !empty($_POST['trabajo1']) 
            && isset($_POST['trabajo2']) && !empty($_POST['trabajo2'])
            && isset($_POST['trabajo3']) && !empty($_POST['trabajo3'])){

                echo "<h2 align='center'>Arreglo Asociativo</h3>";
                echo '<hr>';

                foreach($empleado as $clave){
    
                    echo '<h3> Datos del Empleado</h3>';
                    echo '<hr>';
                    echo '<h3> Su nombre es: '.$clave['Nombre'] .'</h3>';
                    echo '<h3> Su apellido es: '.$clave['Apellido'] .'</h3>';
                    echo '<h3> Su cedula es: '.$clave['Cedula'] .'</h3>';
                    echo '<h3> Su direccion es: '.$clave['Direccion'] .'</h3>';
                    echo '<h3> Su lugar de trabajo es: '.$clave['Lugar de Trabajo'] .'</h3>';
                    echo '<hr>';
                    }

                echo "<a href='datos.html'>Volver al Inicio</a>";
                unset($_POST['btn']);
                

            }
            else{
                echo "<h2 align='center'>Arreglo Asociativo</h2>";
                echo "<h3 align='center'>Por favor Verifique todos los Campos.</h3>";
                echo"<br/>";
                echo "<a href='datos.html'>Volver al Inicio</a>";
                unset($_POST['btn']);
            }
        
        ?>
    </body>
</html>