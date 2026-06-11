<?php
function buscarEvento($conn, $id) {

    $sql = "SELECT * FROM eventos WHERE id_evento = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $id);
    $stmt->execute();

    return $stmt->get_result()->fetch_assoc();
}
