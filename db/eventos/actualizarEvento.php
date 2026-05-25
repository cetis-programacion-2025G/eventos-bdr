<?php
function actualizarEvento(&$datos, $id, $cambios) {
    for ($i = 0; $i < count($datos['eventos']); $i++) {
        if ($datos['eventos'][$i]['id'] === $id) {
            $datos['eventos'][$i]['nombre']    = $cambios['nombre'];
            $datos['eventos'][$i]['fecha']     = $cambios['fecha'];
            $datos['eventos'][$i]['lugar']     = $cambios['lugar'];
            $datos['eventos'][$i]['capacidad'] = $cambios['capacidad'];
            return $datos['eventos'][$i];
        }
    }
    return null;
}
