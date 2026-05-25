<?php
function menuEventos(&$datos) {
    $salir = false;
    while (!$salir) {
        limpiarPantalla();
        echo "\n";
        titulo("EVENTOS", 102);
        echo str_repeat("─", 104) . "\n";
        echo " 1. Ver eventos\n";
        echo " 2. Agregar evento\n";
        echo " 3. Editar evento\n";
        echo " 4. Eliminar evento\n";
        echo " 0. Regresar\n";
        echo str_repeat("─", 104) . "\n";

        $op = pedirEntero("Opcion", [0, 1, 2, 3, 4]);
        switch ($op) {
            case 1:
                limpiarPantalla();
                listarEventos($datos);
                esperarEnter();
                break;
            case 2:
                limpiarPantalla();
                agregarEvento($datos);
                break;
            case 3:
                editarEvento($datos);
                break;
            case 4:
                pantallaEliminarEvento($datos);
                break;
            case 0:
                $salir = true;
                break;
        }
    }
}
