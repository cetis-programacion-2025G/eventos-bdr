<?php
function registrarAsistente(&$datos) {
    $continuar = true;
    while ($continuar) {
        limpiarPantalla();
        $eventos = obtenerEventos($datos);
        $filas = [];
        foreach ($eventos as $e) {
            $disponibles = $e['capacidad'] - $e['boletos_vendidos'];
            $filas[] = [
                'id'               => $e['id'],
                'nombre'           => $e['nombre'],
                'fecha'            => $e['fecha'],
                'boletos_vendidos' => $e['boletos_vendidos'],
                'disponibles'      => $disponibles <= 0 ? 'Agotado' : $disponibles,
            ];
        }
        echo "\n";
        titulo('REGISTRO DE ASISTENTES', 69);
        dibujarTabla($filas, [
            ['titulo' => 'ID',          'clave' => 'id',               'ancho' => 4],
            ['titulo' => 'Nombre',      'clave' => 'nombre',           'ancho' => 22],
            ['titulo' => 'Fecha',       'clave' => 'fecha',            'ancho' => 10],
            ['titulo' => 'Vendidos',    'clave' => 'boletos_vendidos', 'ancho' => 8],
            ['titulo' => 'Disponibles', 'clave' => 'disponibles',     'ancho' => 11],
        ]);

        $ids_disponibles = [];
        foreach ($datos['eventos'] as $e) {
            if ($e['boletos_vendidos'] < $e['capacidad']) {
                $ids_disponibles[] = $e['id'];
            }
        }

        if (empty($ids_disponibles)) {
            echo "\n  No hay eventos con boletos disponibles.\n";
            esperarEnter();
            break;
        }

        $validos = array_merge([0], $ids_disponibles);
        $id_evento = pedirEntero("  ID Evento (0 para volver)", $validos);
        if ($id_evento === 0) {
            break;
        }

        $evento = null;
        foreach ($datos['eventos'] as $e) {
            if ($e['id'] === $id_evento) { $evento = $e; break; }
        }
        $disponibles = $evento['capacidad'] - $evento['boletos_vendidos'];

        $nombre = readline("  Nombre del asistente: ");
        $email  = readline("  Email               : ");

        $cantidad = 0;
        while ($cantidad < 1 || $cantidad > $disponibles) {
            $cantidad = (int)readline("  Cantidad de entradas (max $disponibles): ");
            if ($cantidad < 1 || $cantidad > $disponibles) {
                echo "  Cantidad invalida. Ingresa entre 1 y $disponibles.\n";
                $cantidad = 0;
            }
        }

        $id = insertarAsistente($datos, $nombre, $email, $id_evento, $cantidad);
        echo "\n  Asistente registrado con $cantidad entrada(s). ID: $id.\n";

        $resp = strtolower(trim(readline("\n  ¿Registrar otro asistente? (s/n): ")));
        if ($resp !== 's') {
            $continuar = false;
        }
    }
}
