<?php
function obtenerAsistentes(&$datos) {
    $resultado = [];
    for ($i = 0; $i < count($datos['asistentes']); $i++) {
        $a = $datos['asistentes'][$i];
        $evento = null;
        for ($j = 0; $j < count($datos['eventos']); $j++) {
            if ($datos['eventos'][$j]['id'] === $a['id_evento']) { $evento = $datos['eventos'][$j]; break; }
        }
        $resultado[] = [
            'id'       => $a['id'],
            'nombre'   => $a['nombre'],
            'email'    => $a['email'],
            'cantidad' => $a['cantidad'] ?? 1,
            'evento'   => $evento ? $evento['nombre'] : '(desconocido)',
        ];
    }
    return $resultado;
}
