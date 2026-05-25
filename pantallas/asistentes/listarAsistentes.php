<?php
function listarAsistentes(&$datos) {
    $filas = obtenerAsistentes($datos);
    $columnas = [
        ['titulo' => 'ID',       'clave' => 'id',       'ancho' => 4],
        ['titulo' => 'Nombre',   'clave' => 'nombre',   'ancho' => 22],
        ['titulo' => 'Email',    'clave' => 'email',    'ancho' => 24],
        ['titulo' => 'Entradas', 'clave' => 'cantidad', 'ancho' => 8],
        ['titulo' => 'Evento',   'clave' => 'evento',   'ancho' => 22],
    ];
    echo "\n";
    titulo('LISTA DE ASISTENTES', 94);
    dibujarTabla($filas, $columnas);
}
