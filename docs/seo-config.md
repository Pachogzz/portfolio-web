# 🔍 SEO Configuration - pachogonzalez.click

Configuración completa de SEO: title tags, meta descriptions, schema JSON-LD, hreflang, y checklists.

---

## 📑 Title Tags & Meta Descriptions

### Inicio / Home

**ES:**
- Title: `Diseño Web Profesional | Pacho González - Monterrey, México`
- Meta Description: `Diseño y desarrollo web profesional con WordPress. Más de 15 años de experiencia creando sitios modernos, rápidos y 100% administrables. Clientes en USA, Canadá y más.`
- Caracteres title: 60 | Meta: 158

**EN:**
- Title: `Professional Web Design | Pacho González - Monterrey, Mexico`
- Meta Description: `Professional web design and development with WordPress. Over 15 years of experience creating modern, fast, and fully manageable websites. Clients in USA, Canada, and more.`
- Caracteres title: 62 | Meta: 165

---

### Servicios / Services

**ES:**
- Title: `Servicios de Diseño Web | Planes desde $150 USD | Pacho González`
- Meta Description: `3 planes de diseño web profesional: Semilla ($150-200), Raíz ($350-500) y Cosecha ($700-1000 USD). WordPress administrable, SEO incluido. Chatbot IA disponible.`
- Caracteres title: 65 | Meta: 159

**EN:**
- Title: `Web Design Services | Plans from $150 USD | Pacho González`
- Meta Description: `3 professional web design plans: Seed ($150-200), Root ($350-500) and Harvest ($700-1000 USD). Manageable WordPress, SEO included. AI Chatbot available.`
- Caracteres title: 60 | Meta: 153

---

### Sobre Mí / About

**ES:**
- Title: `Sobre Mí | Francisco González - Desarrollador WordPress 15+ Años`
- Meta Description: `Desarrollador web con 15+ años de experiencia. Especialista en WordPress, diseño UX/UI y desarrollo web moderno. Clientes internacionales. Basado en Monterrey, México.`
- Caracteres title: 66 | Meta: 166

**EN:**
- Title: `About Me | Francisco González - WordPress Developer 15+ Years`
- Meta Description: `Web developer with 15+ years of experience. WordPress specialist, UX/UI design, and modern web development. International clients. Based in Monterrey, Mexico.`
- Caracteres title: 62 | Meta: 159

---

### Contacto / Contact

**ES:**
- Title: `Contacto | Pacho González - Diseño Web Profesional`
- Meta Description: `Hablemos de tu proyecto web. Respuesta en menos de 24 horas por WhatsApp o email. Diseño web profesional desde Monterrey, México para clientes globales.`
- Caracteres title: 52 | Meta: 153

**EN:**
- Title: `Contact | Pacho González - Professional Web Design`
- Meta Description: `Let's talk about your web project. Response within 24 hours via WhatsApp or email. Professional web design from Monterrey, Mexico for global clients.`
- Caracteres title: 53 | Meta: 151

---

## 🏗 Schema JSON-LD

### Person Schema (insertar en todas las páginas via header)

```json
{
    "@context": "https://schema.org",
    "@type": "Person",
    "@id": "https://pachogonzalez.click/#person",
    "name": "Francisco González",
    "alternateName": "Pacho González",
    "jobTitle": "Web Developer & Designer",
    "description": "Professional WordPress developer with 15+ years of experience specializing in custom web development and UX/UI design.",
    "url": "https://pachogonzalez.click",
    "image": "https://pachogonzalez.click/wp-content/uploads/pacho-gonzalez-profile.jpg",
    "email": "pachogzzm@gmail.com",
    "telephone": "+525281191846320",
    "address": {
        "@type": "PostalAddress",
        "addressLocality": "Monterrey",
        "addressRegion": "Nuevo León",
        "postalCode": "64370",
        "addressCountry": "MX"
    },
    "sameAs": [
        "https://github.com/Pachogzz",
        "https://pachogzz.github.io"
    ],
    "knowsAbout": [
        "WordPress Development",
        "Web Design",
        "UX/UI Design",
        "WooCommerce",
        "PHP",
        "JavaScript",
        "CSS",
        "SEO"
    ]
}
```

### LocalBusiness Schema (insertar en página de inicio)

```json
{
    "@context": "https://schema.org",
    "@type": "ProfessionalService",
    "@id": "https://pachogonzalez.click/#business",
    "name": "Pacho González - Diseño Web Profesional",
    "description": "Professional web design and WordPress development services for international clients.",
    "url": "https://pachogonzalez.click",
    "telephone": "+525281191846320",
    "email": "pachogzzm@gmail.com",
    "address": {
        "@type": "PostalAddress",
        "addressLocality": "Monterrey",
        "addressRegion": "Nuevo León",
        "postalCode": "64370",
        "addressCountry": "MX"
    },
    "geo": {
        "@type": "GeoCoordinates",
        "latitude": "25.6866",
        "longitude": "-100.3161"
    },
    "priceRange": "$150 - $1000 USD",
    "openingHoursSpecification": {
        "@type": "OpeningHoursSpecification",
        "dayOfWeek": ["Monday", "Tuesday", "Wednesday", "Thursday", "Friday"],
        "opens": "09:00",
        "closes": "18:00"
    },
    "areaServed": [
        {"@type": "Country", "name": "United States"},
        {"@type": "Country", "name": "Canada"},
        {"@type": "Country", "name": "United Kingdom"},
        {"@type": "Country", "name": "Australia"},
        {"@type": "Country", "name": "Mexico"}
    ],
    "founder": {"@id": "https://pachogonzalez.click/#person"},
    "hasOfferCatalog": {
        "@type": "OfferCatalog",
        "name": "Web Design Services",
        "itemListElement": [
            {
                "@type": "Offer",
                "itemOffered": {
                    "@type": "Service",
                    "name": "Plan Semilla / Seed Plan",
                    "description": "One-page professional landing page, responsive, SEO optimized"
                },
                "priceSpecification": {
                    "@type": "PriceSpecification",
                    "priceCurrency": "USD",
                    "minPrice": "150",
                    "maxPrice": "200"
                }
            },
            {
                "@type": "Offer",
                "itemOffered": {
                    "@type": "Service",
                    "name": "Plan Raíz / Root Plan",
                    "description": "Complete WordPress website with multiple pages, blog, and admin panel"
                },
                "priceSpecification": {
                    "@type": "PriceSpecification",
                    "priceCurrency": "USD",
                    "minPrice": "350",
                    "maxPrice": "500"
                }
            },
            {
                "@type": "Offer",
                "itemOffered": {
                    "@type": "Service",
                    "name": "Plan Cosecha / Harvest Plan",
                    "description": "Premium website with advanced features, eCommerce or multilingual"
                },
                "priceSpecification": {
                    "@type": "PriceSpecification",
                    "priceCurrency": "USD",
                    "minPrice": "700",
                    "maxPrice": "1000"
                }
            }
        ]
    }
}
```

### Service Schema (insertar en página de servicios)

```json
{
    "@context": "https://schema.org",
    "@type": "Service",
    "@id": "https://pachogonzalez.click/servicios/#service",
    "serviceType": "Web Design and Development",
    "provider": {"@id": "https://pachogonzalez.click/#person"},
    "areaServed": [
        {"@type": "Country", "name": "United States"},
        {"@type": "Country", "name": "Canada"},
        {"@type": "Country", "name": "United Kingdom"},
        {"@type": "Country", "name": "Australia"},
        {"@type": "Country", "name": "Mexico"}
    ],
    "availableChannel": {
        "@type": "ServiceChannel",
        "serviceUrl": "https://pachogonzalez.click/contacto/",
        "servicePhone": "+525281191846320"
    },
    "offers": [
        {
            "@type": "Offer",
            "name": "Plan Semilla",
            "priceCurrency": "USD",
            "price": "150",
            "priceSpecification": {
                "@type": "PriceSpecification",
                "minPrice": "150",
                "maxPrice": "200",
                "priceCurrency": "USD"
            }
        },
        {
            "@type": "Offer",
            "name": "Plan Raíz",
            "priceCurrency": "USD",
            "price": "350",
            "priceSpecification": {
                "@type": "PriceSpecification",
                "minPrice": "350",
                "maxPrice": "500",
                "priceCurrency": "USD"
            }
        },
        {
            "@type": "Offer",
            "name": "Plan Cosecha",
            "priceCurrency": "USD",
            "price": "700",
            "priceSpecification": {
                "@type": "PriceSpecification",
                "minPrice": "700",
                "maxPrice": "1000",
                "priceCurrency": "USD"
            }
        }
    ]
}
```

---

## 🌐 Hreflang Configuration

Insertar en el `<head>` de cada página (Polylang lo hace automáticamente si se configura bien, pero documentamos la estructura esperada):

### Página Inicio:
```html
<link rel="alternate" hreflang="es-MX" href="https://pachogonzalez.click/" />
<link rel="alternate" hreflang="en-US" href="https://pachogonzalez.click/en/" />
<link rel="alternate" hreflang="x-default" href="https://pachogonzalez.click/" />
```

### Página Servicios:
```html
<link rel="alternate" hreflang="es-MX" href="https://pachogonzalez.click/servicios/" />
<link rel="alternate" hreflang="en-US" href="https://pachogonzalez.click/en/services/" />
<link rel="alternate" hreflang="x-default" href="https://pachogonzalez.click/servicios/" />
```

### Página Sobre Mí:
```html
<link rel="alternate" hreflang="es-MX" href="https://pachogonzalez.click/sobre-mi/" />
<link rel="alternate" hreflang="en-US" href="https://pachogonzalez.click/en/about/" />
<link rel="alternate" hreflang="x-default" href="https://pachogonzalez.click/sobre-mi/" />
```

### Página Contacto:
```html
<link rel="alternate" hreflang="es-MX" href="https://pachogonzalez.click/contacto/" />
<link rel="alternate" hreflang="en-US" href="https://pachogonzalez.click/en/contact/" />
<link rel="alternate" hreflang="x-default" href="https://pachogonzalez.click/contacto/" />
```

### Notas hreflang:
- `x-default` apunta a la versión ES (idioma por defecto del sitio)
- Polylang genera estos tags automáticamente cuando las traducciones están vinculadas
- Verificar con Google Search Console que no haya errores de hreflang

---

## ♿ Checklist WCAG AA Básico

### Contraste de colores
- [x] Texto principal (#e2e8f0) sobre fondo oscuro (#0f172a) = ratio 13.5:1 ✅ (mínimo AA: 4.5:1)
- [x] Texto secundario (#94a3b8) sobre fondo oscuro (#0f172a) = ratio 6.3:1 ✅
- [x] Color accent (#06b6d4) sobre fondo oscuro (#0f172a) = ratio 6.8:1 ✅
- [x] Texto blanco (#ffffff) sobre botón cyan (#06b6d4) = ratio 3.1:1 ⚠️ (usar peso bold para compensar en texto grande)
- [x] Texto blanco sobre botón hover (#0891b2) = ratio 3.9:1 ✅ (texto grande/bold)

### Navegación y estructura
- [ ] Todos los links tienen texto descriptivo (no "click aquí")
- [ ] Menú navegable con teclado (Tab, Enter, Escape)
- [ ] Skip navigation link al inicio de la página
- [ ] Heading hierarchy correcta (h1 > h2 > h3, sin saltos)
- [ ] Aria-labels en iconos y botones sin texto visible

### Imágenes y media
- [ ] Todas las imágenes tienen alt text descriptivo
- [ ] Imágenes decorativas tienen alt="" (vacío)
- [ ] No hay contenido importante solo en imágenes

### Formularios
- [ ] Todos los campos tienen labels asociados
- [ ] Mensajes de error son claros y específicos
- [ ] Los campos requeridos están marcados (aria-required)
- [ ] Focus visible en todos los campos interactivos

### Responsividad
- [ ] Contenido legible al 200% de zoom
- [ ] No hay scroll horizontal en mobile
- [ ] Touch targets mínimo 44x44px
- [ ] Texto no está contenido en imágenes

### Animaciones
- [ ] Respetar `prefers-reduced-motion`
- [ ] No hay contenido que parpadea >3 veces/segundo
- [ ] Animaciones no bloquean la interacción

### Implementación:
Añadir al child theme (style.css):
```css
@media (prefers-reduced-motion: reduce) {
    .pacho-animate,
    [data-aos] {
        animation: none !important;
        transition: none !important;
    }
}
```

---

## 🌍 Checklist Cross-Browser

### Navegadores a testear:

| Navegador | Versión | Prioridad | Notas |
|-----------|---------|-----------|-------|
| Chrome | Últimas 2 | Alta | ~65% del tráfico |
| Safari | Últimas 2 | Alta | iOS traffic |
| Firefox | Última | Media | ~5% del tráfico |
| Edge | Última | Media | Windows users |
| Samsung Internet | Última | Baja | Android users |

### Checklist por navegador:

- [ ] Layout correcto (no overflow, no elementos cortados)
- [ ] Fuentes cargan correctamente (Inter de Google Fonts)
- [ ] Colores y gradientes se ven bien
- [ ] Animaciones CSS funcionan
- [ ] Botones y links son clickeables
- [ ] Formulario envía correctamente
- [ ] WhatsApp link abre la app correctamente
- [ ] Imágenes cargan (incluyendo WebP fallbacks)
- [ ] Menú responsive funciona en mobile
- [ ] Scroll suave funciona
- [ ] `backdrop-filter: blur()` funciona (Safari necesita -webkit-)

### Propiedades CSS a verificar compatibilidad:

```css
/* Verificar soporte: */
backdrop-filter: blur(10px);      /* Safari: -webkit-backdrop-filter */
background-clip: text;             /* Safari: -webkit-background-clip */
gap: 1rem;                        /* OK en flexbox desde 2021 */
clamp();                          /* Soporte universal moderno */
:has()                            /* No usar aún, soporte limitado */
```

### Fallbacks necesarios:
```css
/* Backdrop filter fallback */
.site-header {
    background-color: rgba(15, 23, 42, 0.95);
    -webkit-backdrop-filter: blur(10px);
    backdrop-filter: blur(10px);
}

/* Gradient text fallback */
.gradient-text {
    color: #06b6d4; /* fallback para navegadores sin background-clip */
    background: linear-gradient(135deg, #22d3ee, #0891b2);
    -webkit-background-clip: text;
    background-clip: text;
    -webkit-text-fill-color: transparent;
}
```

---

## 📊 Configuración Google Analytics (GA4)

### Implementación:
- Usar LiteSpeed Cache > Page Optimization > Tuning > Add tracking code
- O insertar via Kadence > Customizer > Header > Scripts
- Código de seguimiento: obtener de analytics.google.com (crear propiedad GA4 para pachogonzalez.click)

### Eventos custom a configurar:
1. `whatsapp_click` - Click en botón de WhatsApp
2. `form_submit` - Envío de formulario de contacto
3. `plan_view` - Scroll a la sección de planes
4. `language_switch` - Cambio de idioma ES/EN

---

## 🚀 Checklist Pre-Launch

- [ ] Verificar todos los title tags y meta descriptions
- [ ] Verificar hreflang en cada página
- [ ] Schema JSON-LD insertado y validado (schema.org validator)
- [ ] Sitemap XML accesible en /sitemap_index.xml
- [ ] robots.txt correcto (no bloquear CSS/JS)
- [ ] Registro en Google Search Console
- [ ] Registro en Bing Webmaster Tools
- [ ] WCAG AA checklist completado
- [ ] Cross-browser testing completado
- [ ] Performance: PageSpeed score >90 (mobile)
- [ ] SSL/HTTPS funcionando correctamente
- [ ] Canonical URLs correctas
- [ ] Open Graph tags para redes sociales
- [ ] Favicon y app icons configurados
- [ ] 404 page personalizada
- [ ] Redirects configurados si necesario
