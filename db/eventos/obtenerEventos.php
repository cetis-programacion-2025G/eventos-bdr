<?php
function obtenerEventos($conn) {

    $sql = "SELECT * FROM eventos";
    $result = $conn->query($sql);

    if (!$result) {
        return [];
    }

    return $result->fetch_all(MYSQLI_ASSOC);
}
