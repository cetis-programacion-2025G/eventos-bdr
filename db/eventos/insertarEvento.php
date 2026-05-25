<?php
// TODO (MySQL):
function insertarEvento(&$datos, $nombre, $fecha, $lugar, $capacidad) {
    $nuevo = [
        'id'               => count($datos['eventos']) + 1,
        'nombre'           => $nombre,
        'fecha'            => $fecha,
        'lugar'            => $lugar,
        'capacidad'        => $capacidad,
        'boletos_vendidos' => 0,
    ];
    $datos['eventos'][] = $nuevo;
    return $nuevo['id'];
}
