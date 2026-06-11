<?php

require_once 'funciones.php';

$conn = conectar();

$salir = false;

while (!$salir) {

    limpiarPantalla();

    echo "\n";
    echo "╔════════════════════════════════════════╗\n";
    echo "║      SISTEMA DE EVENTOS               ║\n";
    echo "╠════════════════════════════════════════╣\n";
    echo "║ 1. Ver eventos                        ║\n";
    echo "║ 2. Agregar evento                     ║\n";
    echo "║ 3. Registrar asistente                ║\n";
    echo "║ 4. Ver asistentes                     ║\n";
    echo "║ 0. Salir                              ║\n";
    echo "╚════════════════════════════════════════╝\n";

    $opcion = readline(" Opcion: ");

    switch ($opcion) {

        case '1':
            menuEventos($conn);
            break;

        case '2':
            agregarEvento($conn);
            break;

        case '3':
            registrarAsistente($conn);
            break;

        case '4':
            menuAsistentes($conn);
            break;

        case '0':
            $salir = true;
            break;

        default:
            echo "Opcion no valida.\n";
            readline("Enter para continuar...");
    }
}

$conn->close();

echo "\nHasta luego.\n";
