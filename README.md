# Visor de Visitas - phpBB Extension

## Descripción

Extensión para phpBB 3.3.15+ que muestra el número de visitas que tiene un tema en el Panel de Control de Moderador. La extensión añade:

1. Un icono con una "i" en la vista del tema que enlaza al MCP (solo para moderadores)
2. Un contador de visitas en la página de información del tema del MCP

## Características

- **Icono en vista del tema**: Aparece un icono de información (i) que solo es visible para usuarios con permisos de moderación
- **Enlace al MCP**: El icono enlaza directamente a la página de información del tema en el Panel de Control de Moderador
- **Mostrador de visitas**: En la página del MCP, se muestra el número de visitas del tema

## Requisitos

- phpBB 3.3.0 o superior
- PHP 7.1.3 o superior

## Instalación

1. Descargar la extensión a `/ext/rbm/visitas/`
2. Ir al Panel de Administración → Personalizar → Extensiones
3. Buscar "Visor de visitas"
4. Hacer clic en "Habilitar"

## Desinstalación

1. Ir al Panel de Administración → Personalizar → Extensiones
2. Buscar "Visor de visitas"
3. Hacer clic en "Deshabilitar"
4. Hacer clic en "Eliminar datos"

## Archivos

- `ext.php` - Punto de entrada de la extensión
- `config/services.yml` - Configuración de servicios
- `event/main_listener.php` - Escuchador de eventos
- `language/es/common.php` - Archivos de idioma (español)
- `styles/all/template/event/viewtopic_body_header_after.html` - Template para icono
- `styles/all/template/event/mcp_topic_postrow_post_before.html` - Template para mostrador de visitas
- `migrations/version_1_0_0.php` - Script de migración

## Autor

RebeldeMule - https://www.rebeldemule.org/

## Licencia

GNU General Public License v2 (GPL-2.0)
