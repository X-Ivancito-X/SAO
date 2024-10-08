<?php
    if (!empty($_POST["Modificar"])){
        $Nombre = ($_POST["Nombre"]);
        $Descripcion = $_POST["Descripcion"];

        $Consulta = $Conexion -> query ("UPDATE productos SET Nombre = '$Nombre', Descripcion = '$Descripcion' WHERE Id_Producto = '$Id_Producto'");
        
        if ($Consulta) {
            echo 'Modificado correctamente';

        } 

        else{
            echo 'No modificado';

        }

    }

?>
