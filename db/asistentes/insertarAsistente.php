<?php
function insertarAsistente(&$datos, $nombre, $email, $id_evento, $cantidad = 1) {
    $nuevo = [
        'id'        => count($datos['asistentes']) + 1,
        'nombre'    => $nombre,
        'email'     => $email,
        'id_evento' => $id_evento,
        'cantidad'  => $cantidad,
    ];
    $datos['asistentes'][] = $nuevo;
    for ($i = 0; $i < count($datos['eventos']); $i++) {
        if ($datos['eventos'][$i]['id'] === $id_evento) {
             $datos['eventos'][$i]['boletos_vendidos'] += $cantidad;
             break;
        }
    }
    return $nuevo['id'];
}
