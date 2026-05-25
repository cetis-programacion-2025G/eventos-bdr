<?php
function buscarEvento(&$datos, $id) {
    for ($i = 0; $i < count($datos['eventos']); $i++) {
        if ($datos['eventos'][$i]['id'] === $id) {
            return $datos['eventos'][$i];
        }
    }
    return null;
}
