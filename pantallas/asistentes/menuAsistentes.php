<?php
function menuAsistentes(&$datos) {
    $salir = false;
    while (!$salir) {
        limpiarPantalla();
        echo "\n";
        titulo("ASISTENTES", 94);
        echo str_repeat("─", 96) . "\n";
        echo " 1. Ver asistentes\n";
        echo " 2. Registrar asistente\n";
        echo " 0. Regresar\n";
        echo str_repeat("─", 96) . "\n";

        $op = pedirEntero("Opcion", [0, 1, 2]);
        switch ($op) {
            case 1:
                limpiarPantalla();
                listarAsistentes($datos);
                esperarEnter();
                break;
            case 2:
                limpiarPantalla();
                registrarAsistente($datos);
                break;
            case 0:
                $salir = true;
                break;
        }
    }
}
