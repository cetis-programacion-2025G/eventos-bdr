<?php
function listarEventos(&$datos) {
    $eventos = obtenerEventos($datos);
    $filas = [];
    foreach ($eventos as $e) {
        $disponibles = $e['capacidad'] - $e['boletos_vendidos'];
        $filas[] = [
            'id'               => $e['id'],
            'nombre'           => $e['nombre'],
            'fecha'            => $e['fecha'],
            'lugar'            => $e['lugar'],
            'capacidad'        => $e['capacidad'],
            'boletos_vendidos' => $e['boletos_vendidos'],
            'disponibles'      => $disponibles <= 0 ? 'Agotado' : $disponibles,
        ];
    }
    $columnas = [
        ['titulo' => 'ID',          'clave' => 'id',               'ancho' => 4],
        ['titulo' => 'Nombre',      'clave' => 'nombre',           'ancho' => 22],
        ['titulo' => 'Fecha',       'clave' => 'fecha',            'ancho' => 12],
        ['titulo' => 'Lugar',       'clave' => 'lugar',            'ancho' => 20],
        ['titulo' => 'Cap.',        'clave' => 'capacidad',        'ancho' => 5],
        ['titulo' => 'Vendidos',    'clave' => 'boletos_vendidos', 'ancho' => 8],
        ['titulo' => 'Disponibles', 'clave' => 'disponibles',     'ancho' => 11],
    ];
    echo "\n";
    titulo('LISTA DE EVENTOS', 102);
    dibujarTabla($filas, $columnas);
}
