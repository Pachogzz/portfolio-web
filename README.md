# 🌐 Portfolio Web - pachogonzalez.click

Portafolio profesional de servicios web freelance de Francisco (Pacho) González.

## 📁 Estructura del Proyecto

```
portfolio-web/
├── README.md                          # Este archivo
├── child-theme/
│   └── pacho-portfolio-child/
│       ├── style.css                  # Child theme styles + variables CSS
│       ├── functions.php              # Funciones del child theme
│       └── theme.json                 # Configuración global de colores/tipografías
├── pacho-portfolio-child.zip          # Child theme empaquetado listo para WordPress
└── docs/
    ├── plugins.md                     # Lista de plugins + guía de instalación
    ├── contenido.md                   # Contenido bilingüe ES/EN para todas las secciones
    └── seo-config.md                  # Schema JSON-LD, hreflang, checklists
```

## 🎨 Identidad Visual

Basada en el portafolio actual (pachogzz.github.io):

| Elemento | Valor |
|----------|-------|
| Tema | Dark mode (fondo oscuro slate) |
| Color primario | Cyan/Teal (#06b6d4) |
| Tipografía | Inter (Google Fonts) |
| Estilo | Minimalista, profesional, moderno |

### Paleta de Colores

| Token | Hex | Uso |
|-------|-----|-----|
| primary-50 | #ecfeff | Backgrounds muy sutiles |
| primary-100 | #cffafe | Highlights |
| primary-200 | #a5f3fc | Borders, elementos secundarios |
| primary-300 | #67e8f9 | Iconos, badges |
| primary-400 | #22d3ee | Textos destacados, links hover |
| primary-500 | #06b6d4 | Color principal (CTAs, botones) |
| primary-600 | #0891b2 | Botones hover |
| primary-700 | #0e7490 | Acentos oscuros |
| primary-800 | #155e75 | Headers en secciones dark |
| primary-900 | #164e63 | Backgrounds de cards |
| slate-900 | #0f172a | Fondo principal del sitio |
| slate-800 | #1e293b | Fondo de secciones alternas |
| slate-200 | #e2e8f0 | Texto principal |

## 🚀 Instrucciones de Instalación

### Requisitos Previos
1. WordPress 6.x instalado
2. Tema Kadence (gratuito) instalado y activado
3. Hosting con PHP 8.0+ y MySQL 5.7+

### Pasos
1. Instalar tema Kadence desde WordPress > Apariencia > Temas
2. Subir `pacho-portfolio-child.zip` como tema y activarlo
3. Instalar plugins según `docs/plugins.md`
4. Configurar contenido según `docs/contenido.md`
5. Configurar SEO según `docs/seo-config.md`

## 🔗 Links

- **Sitio en producción:** https://pachogonzalez.click
- **Portafolio actual (referencia):** https://pachogzz.github.io
- **Hosting recomendado:** Hostinger

## 📝 Notas de Desarrollo

- Branch `main`: versión estable/producción
- Branch `dev`: desarrollo activo
- Child theme de Kadence (no editar el parent theme)
- Preparado para bilingüe ES/EN con Polylang

---

© 2026 Francisco (Pacho) González - Monterrey, México
