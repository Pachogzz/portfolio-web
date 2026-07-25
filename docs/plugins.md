# 🔌 Plugins - pachogonzalez.click

Lista de plugins a instalar en WordPress con instrucciones de configuración.

---

## Instalación Rápida

**Ruta:** WordPress Admin > Plugins > Añadir Nuevo > Buscar

---

## 1. Kadence Blocks (Gratis)

**Buscar:** `Kadence Blocks`
**Autor:** Kadence WP

### ¿Para qué?
Bloques avanzados del editor Gutenberg que complementan el tema Kadence. Permite crear layouts complejos, tabs, acordeones, sliders, y más sin código.

### Configuración post-instalación:
1. Activar el plugin
2. Ir a Kadence Blocks > Settings
3. Activar los bloques que necesitamos:
   - ✅ Row Layout
   - ✅ Advanced Heading
   - ✅ Advanced Button
   - ✅ Icon
   - ✅ Tabs
   - ✅ Info Box
   - ✅ Spacer
   - ✅ Testimonials
4. Desactivar bloques no necesarios para performance

---

## 2. Yoast SEO (Gratis)

**Buscar:** `Yoast SEO`
**Autor:** Team Yoast

### ¿Para qué?
SEO on-page: meta titles, meta descriptions, sitemaps XML, schema markup básico, análisis de contenido.

### Configuración post-instalación:
1. Completar el asistente de configuración inicial
2. En SEO > General:
   - Nombre del sitio: "Pacho González - Diseño Web Profesional"
   - Tipo de organización: Person
   - Nombre: Francisco (Pacho) González
3. En SEO > Apariencia en buscadores:
   - Title separator: `|`
   - Homepage title: personalizar según `seo-config.md`
4. Verificar que el sitemap se genera en `/sitemap_index.xml`
5. **NO** activar el schema automático de Yoast (usaremos schema custom - ver `seo-config.md`)

---

## 3. LiteSpeed Cache (Gratis)

**Buscar:** `LiteSpeed Cache`
**Autor:** LiteSpeed Technologies

### ¿Para qué?
Cache de página completa, optimización de imágenes (WebP), minificación CSS/JS, lazy loading. Funciona con cualquier hosting (no solo LiteSpeed servers).

### Configuración post-instalación:
1. En LiteSpeed Cache > General:
   - Activar cache: ON
2. En Page Optimization:
   - CSS Minify: ON
   - CSS Combine: ON (monitorear que no rompa estilos)
   - JS Minify: ON
   - JS Combine: OFF (puede causar conflictos)
3. En Image Optimization:
   - WebP Replacement: ON
   - Lazy Load Images: ON
   - Responsive Placeholder: ON
4. En Cache > Browser:
   - Browser Cache: ON
   - Browser Cache TTL: 2592000 (30 días)

### Nota:
Si el hosting es Hostinger (recomendado), LiteSpeed funciona al 100% nativamente. Si es otro hosting, igual funciona pero sin server-level cache.

---

## 4. Wordfence Security (Gratis)

**Buscar:** `Wordfence Security`
**Autor:** Wordfence

### ¿Para qué?
Firewall de aplicación web (WAF), escaneo de malware, protección contra fuerza bruta, monitoreo de tráfico en tiempo real.

### Configuración post-instalación:
1. Completar el asistente inicial (poner email de alertas)
2. En Firewall:
   - Activar modo "Learning" las primeras 2 semanas
   - Después cambiar a "Enabled and Protecting"
3. En Brute Force Protection:
   - Lock out after: 5 login failures
   - Lock out duration: 60 minutes
   - Immediately lock out invalid usernames: ON
4. En Scan Settings:
   - Scan schedule: Weekly
5. **Activar 2FA** para la cuenta admin

---

## 5. WPForms Lite (Gratis)

**Buscar:** `WPForms Lite`
**Autor:** WPForms

### ¿Para qué?
Formulario de contacto drag-and-drop. Simple, ligero, y con integración a email.

### Configuración post-instalación:
1. Crear formulario "Contacto" con campos:
   - Nombre (requerido)
   - Email (requerido)
   - Mensaje (requerido, textarea)
2. En Settings del formulario:
   - Send To Email: pachogzzm@gmail.com
   - Subject: "Nuevo mensaje desde pachogonzalez.click - {field_name}"
   - Reply-To: {field_email}
3. Confirmación:
   - Tipo: Message
   - Texto: "¡Gracias por tu mensaje! Te responderé en menos de 24 horas."

### Alternativa:
El formulario principal del sitio usará integración directa con WhatsApp (ya configurada en functions.php via shortcode `[pacho_whatsapp]`). WPForms es respaldo para quienes prefieran email.

---

## 6. Polylang (Gratis)

**Buscar:** `Polylang`
**Autor:** WP FLAVOR

### ¿Para qué?
Soporte multilingüe ES/EN sin crear multisite. Permite traducir páginas, posts, menús, widgets y strings del tema.

### Configuración post-instalación:
1. En Languages > Settings:
   - Añadir idioma: Español (México) - `es_MX`
   - Añadir idioma: English (United States) - `en_US`
   - Idioma por defecto: Español
2. En Languages > Settings > URL Modifications:
   - URL modification: `The language is set from the directory name in pretty permalinks`
   - Resultado: `pachogonzalez.click/` (ES) y `pachogonzalez.click/en/` (EN)
3. En Languages > Settings > Detect browser language:
   - Activar: ON (redirige automáticamente según idioma del navegador)
4. En Languages > Strings translations:
   - Traducir todas las strings registradas del child theme (ver functions.php)
5. Para cada página:
   - Crear versión ES y versión EN
   - Vincularlas como traducciones

### Estructura de URLs final:
```
pachogonzalez.click/               → Inicio (ES)
pachogonzalez.click/en/            → Home (EN)
pachogonzalez.click/servicios/     → Servicios (ES)
pachogonzalez.click/en/services/   → Services (EN)
pachogonzalez.click/contacto/      → Contacto (ES)
pachogonzalez.click/en/contact/    → Contact (EN)
```

---

## 📋 Resumen de Instalación

| # | Plugin | Prioridad | Tiempo est. |
|---|--------|-----------|-------------|
| 1 | Kadence Blocks | Alta | 5 min |
| 2 | Yoast SEO | Alta | 10 min |
| 3 | LiteSpeed Cache | Media | 10 min |
| 4 | Wordfence Security | Alta | 10 min |
| 5 | WPForms Lite | Media | 5 min |
| 6 | Polylang | Alta | 15 min |

**Tiempo total estimado:** ~55 minutos para instalar y configurar todo.

---

## ⚠️ Notas Importantes

- **No instalar** plugins de page builder (Elementor, Divi, etc.) - Kadence + Kadence Blocks es suficiente
- **No instalar** plugins de SEO adicionales (solo Yoast)
- **No instalar** plugins de cache adicionales (solo LiteSpeed)
- Mantener el número de plugins al mínimo para performance
- Actualizar plugins regularmente (activar auto-updates para parches de seguridad)
