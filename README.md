# Proyecto Final BDR – Eventos con MySQL

## 1. Historia del problema

Una empresa pequeña organiza eventos escolares y comunitarios. Actualmente registra asistentes y boletos en listas manuales, lo que dificulta saber quién está inscrito a cada evento y cuántos lugares quedan disponibles.

La organización necesita una solución sencilla en terminal que permita guardar la información de forma permanente usando una base de datos relacional.

---

## 2. Objetivo del proyecto

Crear un sistema CLI para administrar eventos, asistentes e inscripciones básicas.

El sistema base será entregado por el docente funcionando con arreglos en memoria.  
El equipo deberá refactorizarlo para que funcione con **PHP-CLI + MySQL**.

---

## 3. Situación inicial

El programa ya funciona, pero guarda los datos en arreglos.

Eso significa que:

- Al cerrar el programa, los datos se pierden.
- No existe una base de datos real.
- No hay tablas, llaves primarias ni relaciones persistentes.

---

## 4. Misión del equipo

Modificar el sistema para que los datos se almacenen en MySQL.

El equipo debe conservar el flujo principal del programa y reemplazar el uso de arreglos por operaciones con base de datos.

---

## 5. Funciones mínimas del sistema

- Ver eventos: lista nombre, fecha, lugar, capacidad, boletos vendidos y disponibles.
  Cuando un evento llega a su capacidad máxima debe indicar **Agotado** en la columna de disponibles.
- Agregar evento
- Editar evento
- Eliminar evento
- Registrar asistente: seleccionar evento, ingresar nombre, email y **cantidad de entradas** (máximo = disponibles restantes); `boletos_vendidos` del evento aumenta en esa cantidad.
- Ver asistentes: lista nombre, email, entradas compradas y nombre del evento.

---

## 6. Consulta o reporte obligatorio

Reporte de evento: mostrar nombre del evento, fecha, lugar, capacidad, boletos vendidos y lista de asistentes registrados con sus entradas.

Esta consulta debe obtener información relacionada desde más de una tabla.

---

## 7. Requisitos de base de datos

El proyecto debe incluir:

- Creación de tablas con `CREATE TABLE`.
- Llaves primarias.
- Al menos una llave foránea.
- Operaciones `INSERT`, `SELECT`, `UPDATE` y/o `DELETE` según aplique.
- Al menos una consulta con `JOIN` entre tablas.

---

## 8. Alcance limitado

Para que el proyecto sea posible en dos semanas, **no se pide**:

- No se requiere pago real
- No se requiere código QR
- No se requiere control avanzado de tipos de boleto

---

## 9. Reglas importantes

- No se debe cambiar el objetivo principal del sistema.
- No se deben usar arreglos como almacenamiento final.
- Los datos deben permanecer guardados después de cerrar y volver a abrir el programa.
- La evaluación se enfoca en la integración con MySQL, no en rediseñar toda la aplicación.

---

## 10. Entregable esperado

El equipo debe entregar:

- Código PHP-CLI funcionando.
- Script SQL con la estructura de tablas y datos iniciales (con `FOREIGN KEY` declaradas).
- Archivo `ER.mermaid` con el diagrama entidad-relación.
- Evidencia de pruebas.
- Breve explicación del modelo de datos.
