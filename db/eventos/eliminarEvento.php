<?php
function eliminarEvento(&$datos, $id) {
    for ($i = 0; $i < count($datos['eventos']); $i++) {
        if ($datos['eventos'][$i]['id'] === $id) {
            array_splice($datos['eventos'], $i, 1);
            return true;
        }
    }
    return false;
}
