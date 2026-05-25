<?php
function agregarEvento(&$datos) {
    limpiarPantalla();
    echo "\n";
    titulo("AGREGAR EVENTO", 102);
    $nombre    = readline("Nombre              : ");
    $fecha     = readline("Fecha (AAAA-MM-DD)  : ");
    $lugar     = readline("Lugar               : ");
    $capacidad = (int)readline("Capacidad           : ");
    $id = insertarEvento($datos, $nombre, $fecha, $lugar, $capacidad);
    echo "\n  Evento agregado con ID $id.\n";
    esperarEnter();
}
