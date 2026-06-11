<?php
function editarEvento($conn) {

    limpiarPantalla();
    titulo("EDITAR EVENTO", 102);

    listarEventos($conn);

    $id = (int) readline("\n  ID a editar: ");

    if ($id === 0) return;

    $e = buscarEvento($conn, $id);

    if (!$e) {
        echo "\n  Evento no encontrado.\n";
        esperarEnter();
        return;
    }

    echo "\n  (Enter para conservar el valor actual)\n\n";

    $nombre = readline("  Nombre [{$e['nombre']}]: ");
    if ($nombre === '') $nombre = $e['nombre'];

    $fecha = readline("  Fecha [{$e['fecha']}]: ");
    if ($fecha === '') $fecha = $e['fecha'];

    $lugar = readline("  Lugar [{$e['lugar']}]: ");
    if ($lugar === '') $lugar = $e['lugar'];

    $capStr = readline("  Capacidad [{$e['capacidad']}]: ");
    $capacidad = ($capStr !== '') ? (int)$capStr : $e['capacidad'];

    actualizarEvento($conn, $id, $nombre, $fecha, $lugar, $capacidad);

    echo "\n  Evento actualizado.\n";
    esperarEnter();
}
