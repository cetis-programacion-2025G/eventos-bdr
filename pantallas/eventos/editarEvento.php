<?php
function editarEvento(&$datos) {
    limpiarPantalla();
    echo "\n";
    titulo("EDITAR EVENTO", 102);
    listarEventos($datos);
    if (empty($datos['eventos'])) {
        return;
    }
    echo "  (0 para cancelar)\n";
    $id = (int)readline("\n  ID a editar: ");
    if ($id === 0) {
        return;
    }
    $e  = buscarEvento($datos, $id);
    if (!$e) {
        echo "\n  Evento no encontrado.\n";
        esperarEnter();
        return;
    }

    echo "\n  (Enter para conservar el valor actual)\n\n";
    $nombre    = readline("  Nombre    [{$e['nombre']}]: ")    ?: $e['nombre'];
    $fecha     = readline("  Fecha     [{$e['fecha']}]: ")     ?: $e['fecha'];
    $lugar     = readline("  Lugar     [{$e['lugar']}]: ")     ?: $e['lugar'];
    $capStr    = readline("  Capacidad [{$e['capacidad']}]: ");
    $capacidad = ($capStr !== '') ? (int)$capStr : $e['capacidad'];

    actualizarEvento($datos, $id, [
        'nombre'    => $nombre,
        'fecha'     => $fecha,
        'lugar'     => $lugar,
        'capacidad' => $capacidad,
    ]);
    echo "\n  Evento actualizado.\n";
    esperarEnter();
}
