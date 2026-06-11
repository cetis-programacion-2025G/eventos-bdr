<?php

function eliminarEvento($conn, $id) {

    $consulta = "DELETE FROM eventos WHERE id_evento = ?"; //$consulta = "DELETE FROM eventos WHERE id = ?";

    $stmt = $conn->prepare($consulta);
    $stmt->bind_param("i", $id);

    $result = $stmt->execute();

    $stmt->close();

    if (!$result) {
        return false;
    }

    return true;
}
