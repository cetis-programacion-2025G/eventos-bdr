<?php
// ============================================================
//  funciones.php — Carga todos los modulos del sistema
//  Cada carpeta = un tema, cada archivo = una funcion
// ============================================================

// --- Utilidades ---
require_once 'funciones/centrar.php';
require_once 'funciones/titulo.php';
require_once 'funciones/limpiarPantalla.php';
require_once 'funciones/esperarEnter.php';
require_once 'funciones/pedirEntero.php';
require_once 'funciones/dibujarTabla.php';
require_once 'funciones/datos.php';
require_once 'funciones/conexion.php';

// --- DB: Eventos ---
require_once 'db/eventos/obtenerEventos.php';
require_once 'db/eventos/buscarEvento.php';
require_once 'db/eventos/insertarEvento.php';
require_once 'db/eventos/actualizarEvento.php';
require_once 'db/eventos/eliminarEvento.php';

// --- DB: Asistentes ---
require_once 'db/asistentes/obtenerAsistentes.php';
require_once 'db/asistentes/insertarAsistente.php';

// --- Pantallas: Eventos ---
require_once 'pantallas/eventos/listarEventos.php';
require_once 'pantallas/eventos/agregarEvento.php';
require_once 'pantallas/eventos/editarEvento.php';
require_once 'pantallas/eventos/eliminarEvento.php';
require_once 'pantallas/eventos/menuEventos.php';

// --- Pantallas: Asistentes ---
require_once 'pantallas/asistentes/listarAsistentes.php';
require_once 'pantallas/asistentes/registrarAsistente.php';
require_once 'pantallas/asistentes/menuAsistentes.php';
