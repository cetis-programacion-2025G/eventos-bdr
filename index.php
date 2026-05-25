<?php
// Ejecutar: php index.php

require_once 'datos.php';
require_once 'funciones.php';

$datos      = datosEventos();
$eventos    = &$datos['eventos'];
$asistentes = &$datos['asistentes'];
$salir      = false;

while (!$salir) {
    system('clear');
    echo "\n";
    echo "╔════════════════════════════════════════╗\n";
    echo "║      SISTEMA DE EVENTOS               ║\n";
    echo "╠════════════════════════════════════════╣\n";
    echo "║ 1. Ver eventos                        ║\n";
    echo "║ 2. Agregar evento                     ║\n";
    echo "║ 3. Registrar asistente                ║\n";
    echo "║ 4. Ver asistentes de un evento        ║\n";
    echo "║ 0. Salir                              ║\n";
    echo "╚════════════════════════════════════════╝\n";

    $opcion = readline("\nOpcion: ");

    switch ($opcion) {
        case '1': verEventos($eventos);                              break;
        case '2': agregarEvento($eventos);                           break;
        case '3': registrarAsistente($eventos, $asistentes);        break;
        case '4': verAsistentesPorEvento($eventos, $asistentes);    break;
        case '0': $salir = true;                                     break;
        default:
            echo "Opcion no valida.\n";
            readline("Enter para continuar...");
    }
}

echo "\nHasta luego.\n";
