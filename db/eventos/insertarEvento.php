<?php

function insertarEvento($conn, $nombre, $fecha, $lugar, $capacidad) {

    $sql = "INSERT INTO eventos (nombre, fecha, lugar, capacidad, boletos_vendidos)
            VALUES (?, ?, ?, ?, 0)";

    $stmt = $conn->prepare($sql);

    if (!$stmt) {
        die("Error prepare: " . $conn->error);
    }

    $stmt->bind_param("sssi", $nombre, $fecha, $lugar, $capacidad);

    $stmt->execute();

    $id = $conn->insert_id;

    $stmt->close();

    return $id;
}
