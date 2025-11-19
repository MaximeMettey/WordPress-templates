# CLAUDE.md - Technical Documentation & Development Notes

## Project Architecture

### Directory Structure
```
WordPress-templates/
├── TODO.md
├── CLAUDE.md
├── README.md
├── fastfood-deluxe/          # Restaurant/Fast-Food Theme
├── bakery-fresh/              # Bakery Theme
├── plumber-pro/               # Plumbing Services Theme
├── creative-agency/           # Communication Agency Theme
├── band-manager/              # Music Band Theme
├── auto-repair-plus/          # Garage Theme
├── taxi-ride/                 # Taxi Service Theme
├── dj-mixer/                  # DJ Theme
├── reflexology-zen/           # Reflexology Theme
├── tearoom-elegance/          # Tea Room Theme
├── catering-events/           # Catering Theme
├── football-club/             # Soccer Club Theme
├── badminton-ace/             # Badminton Club Theme
├── tennis-court/              # Tennis Club Theme
├── chess-master/              # Chess Club Theme
├── equestrian-club/           # Horse Riding Club Theme
├── basketball-hoop/           # Basketball Club Theme
├── handball-arena/            # Handball Club Theme
├── orchestra-symphony/        # Orchestra Theme
├── theater-stage/             # Theater Theme
├── car-detailing/             # Car Cleaning Theme
├── wedding-bliss/             # Wedding Planner Theme
├── sales-pro/                 # Sales Representative Theme
├── photo-portfolio/           # Photography Theme
├── designer-showcase/         # Designer Portfolio Theme
├── webagency-digital/         # Web Agency Theme
├── landscape-garden/          # Landscaping Theme
├── homebuilder-construct/     # Construction Theme
├── electrician-power/         # Electrician Theme
└── painter-brush/             # Painter Theme
```

### Standard Theme Structure
```
theme-name/
├── style.css                  # Main stylesheet with theme header
├── functions.php              # Theme functions and features
├── index.php                  # Main template file
├── header.php                 # Header template
├── footer.php                 # Footer template
├── sidebar.php                # Sidebar template
├── single.php                 # Single post template
├── page.php                   # Page template
├── archive.php                # Archive template
├── search.php                 # Search results template
├── 404.php                    # 404 error template
├── comments.php               # Comments template
├── screenshot.png             # Theme screenshot (1200x900px)
├── README.txt                 # Theme documentation
├── LICENSE.txt                # GPL License
├── assets/
│   ├── css/
│   │   ├── main.css          # Compiled main styles
│   │   ├── woocommerce.css   # WooCommerce styles
│   │   └── responsive.css    # Responsive styles
│   ├── js/
│   │   ├── main.js           # Main JavaScript
│   │   ├── navigation.js     # Navigation scripts
│   │   └── customizer.js     # Customizer preview
│   └── images/
│       ├── logo.png
│       ├── placeholder.jpg
│       └── icons/
├── inc/
│   ├── customizer.php        # Customizer settings
│   ├── template-functions.php
│   ├── template-tags.php
│   ├── custom-post-types.php
│   └── widgets.php
├── template-parts/
│   ├── content.php
│   ├── content-single.php
│   ├── content-page.php
│   └── content-none.php
├── woocommerce/
│   ├── archive-product.php
│   ├── single-product.php
│   └── cart/
├── page-templates/
│   ├── template-home.php
│   ├── template-about.php
│   ├── template-contact.php
│   └── template-services.php
└── languages/
    └── theme-name.pot
```

## Technical Specifications

### WordPress Version Support
- **Minimum:** WordPress 5.8+
- **Tested up to:** WordPress 6.4+
- **PHP Version:** 7.4+

### Theme Features to Register
```php
add_theme_support( 'title-tag' );
add_theme_support( 'post-thumbnails' );
add_theme_support( 'custom-logo' );
add_theme_support( 'custom-header' );
add_theme_support( 'custom-background' );
add_theme_support( 'html5', array(...) );
add_theme_support( 'woocommerce' );
add_theme_support( 'wc-product-gallery-zoom' );
add_theme_support( 'wc-product-gallery-lightbox' );
add_theme_support( 'wc-product-gallery-slider' );
```

### CSS Framework Approach
- **Pure CSS** with modern features (Grid, Flexbox)
- **No external dependencies** for base theme
- **Modular architecture** with separate CSS files
- **Mobile-first** responsive design
- **CSS Variables** for easy customization

### JavaScript Approach
- **Vanilla JavaScript** for core functionality
- **No jQuery dependency** (WordPress standard)
- **ES6+ features** with appropriate fallbacks
- **Minified versions** for production

### WooCommerce Integration
Each theme includes:
- Product catalog pages
- Single product pages
- Shopping cart
- Checkout process
- My Account pages
- Custom WooCommerce widgets
- Product filters and sorting
- Related products display

### Custom Post Types (Industry Specific)

#### Restaurant/Fast-Food Theme
- Menu Items
- Special Offers
- Reservations
- Chef Profiles

#### Plumber Theme
- Services
- Emergency Contacts
- Service Areas
- Testimonials

#### Photography/Portfolio Themes
- Portfolio Items
- Project Categories
- Client Testimonials
- Services

#### Sports Club Themes
- Players/Members
- Matches/Events
- News
- Sponsors

### Customizer Options
Standard options for all themes:
- Site identity (logo, tagline)
- Colors (primary, secondary, accent, text)
- Typography (headings, body)
- Header layout
- Footer layout
- Social media links
- Contact information
- Layout options (sidebar positions)

### Performance Optimization
- Image lazy loading
- Minified CSS/JS
- Conditional script loading
- Optimized database queries
- Caching-friendly code
- No unnecessary HTTP requests

### SEO Features
- Semantic HTML5 markup
- Schema.org structured data
- Optimized meta tags
- Clean permalinks
- Breadcrumbs
- XML sitemap support

### Security Best Practices
- Sanitize all inputs
- Escape all outputs
- Nonces for forms
- Prepared statements for DB queries
- No direct file access
- Validate and verify data

### Translation Ready
- All strings wrapped in translation functions
- .pot file generation
- WPML compatible
- RTL language support

## Development Workflow

### Phase 1: Planning & Setup
1. Create theme directory
2. Set up basic file structure
3. Create style.css with theme header
4. Create functions.php with core features

### Phase 2: Core Development
1. Develop header.php and footer.php
2. Create main template files
3. Implement responsive navigation
4. Add customizer options

### Phase 3: Content Templates
1. Create page templates
2. Develop custom post types
3. Build template parts
4. Add widgets

### Phase 4: WooCommerce Integration
1. Override WooCommerce templates
2. Style product pages
3. Customize cart and checkout
4. Add shop widgets

### Phase 5: Assets & Media
1. Add placeholder images
2. Create screenshot
3. Add icons and graphics
4. Optimize all images

### Phase 6: Testing & Documentation
1. Test on different devices
2. Browser compatibility testing
3. WooCommerce functionality testing
4. Write documentation
5. Create README.txt

## Code Standards

### PHP Coding Standards
- Follow WordPress Coding Standards
- Use proper indentation (tabs)
- Comment complex logic
- Use meaningful variable names
- Prefix all functions with theme slug

### CSS Conventions
- BEM methodology for class names
- Mobile-first media queries
- Consistent spacing and indentation
- Comment sections clearly
- Use CSS variables for colors

### JavaScript Standards
- ES6+ syntax
- Strict mode
- Event delegation where appropriate
- Debounce/throttle expensive operations
- Clear function names

## Resources & References

### WordPress Documentation
- Theme Handbook: https://developer.wordpress.org/themes/
- Customizer API: https://developer.wordpress.org/themes/customize-api/
- Template Hierarchy: https://developer.wordpress.org/themes/basics/template-hierarchy/

### WooCommerce Documentation
- Theme Development: https://woocommerce.com/document/woocommerce-theme-developer-handbook/

### Free Stock Photos
- Unsplash: https://unsplash.com/
- Pexels: https://pexels.com/
- Pixabay: https://pixabay.com/

### Icons
- Font Awesome (Free version)
- Dashicons (WordPress native)

## Notes for Claude
- Each theme must be completely independent
- No shared dependencies between themes
- Follow GPL licensing requirements
- Ensure all code is original or GPL-compatible
- Use royalty-free images only
- Test WooCommerce compatibility thoroughly
- Validate HTML/CSS before committing
- Keep code clean and well-documented
