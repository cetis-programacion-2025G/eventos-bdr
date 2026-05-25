<?php
function pantallaEliminarEvento(&$datos) {
    limpiarPantalla();
    echo "\n";
    titulo("ELIMINAR EVENTO", 102);
    listarEventos($datos);
    if (empty($datos['eventos'])) return;
    echo "  (0 para cancelar)\n";
    $id = (int)readline("\n  ID a eliminar: ");
    if ($id === 0) return;
    $ok = eliminarEvento($datos, $id);
    echo $ok ? "\n  Evento eliminado.\n" : "\n  Evento no encontrado.\n";
    esperarEnter();
}
