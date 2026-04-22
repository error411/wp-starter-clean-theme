# Starter Clean Pro

A client-ready classic WordPress starter theme for small business websites, portfolio work, and local Docker development.

Starter Clean Pro keeps the theme lean while giving you a reusable section system that can be enhanced with Advanced Custom Fields Pro. It is a classic PHP theme, not a block theme or Full Site Editing theme.

## Plugins

Required plugins:

- None

Optional plugins:

- Advanced Custom Fields Pro

The theme works on a fresh WordPress install without ACF. When ACF Pro is active, the theme registers a `page_sections` flexible content field for pages. Those layouts render through templates in `template-parts/sections/`.

## File Structure

```text
starter-clean-pro/
  style.css
  functions.php
  index.php
  header.php
  footer.php
  front-page.php
  home.php
  page.php
  single.php
  archive.php
  search.php
  404.php
  sidebar.php
  screenshot.png
  README.md
  .gitignore
  assets/
    css/
      main.css
      editor.css
    js/
      main.js
  inc/
    setup.php
    enqueue.php
    acf-fields.php
    template-tags.php
    helpers.php
  partials/
    content.php
    content-page.php
    content-none.php
  template-parts/
    sections/
      hero.php
      text-content.php
      cta.php
      feature-grid.php
```

## Local Activation

Place the theme at:

```text
wp-content/themes/starter-clean-pro
```

In this Docker project, WordPress runs at:

```text
http://localhost:8080
```

Activate the theme in WordPress admin:

```text
Appearance > Themes > Starter Clean Pro > Activate
```

## Where To Edit

- Theme setup: `inc/setup.php`
- Asset loading: `inc/enqueue.php`
- ACF field registration: `inc/acf-fields.php`
- ACF and section helpers: `inc/helpers.php`
- Template helpers: `inc/template-tags.php`
- Section templates: `template-parts/sections/`
- Archive cards and page partials: `partials/`
- Front-end styles: `assets/css/main.css`
- Editor styles: `assets/css/editor.css`
- Mobile navigation: `assets/js/main.js`

## Adding A New Flexible Layout

1. Add a new layout to the `page_sections` flexible content field in `inc/acf-fields.php`.
2. Add the layout name to the map in `starter_clean_pro_section_map()` in `inc/helpers.php`.
3. Create a matching template in `template-parts/sections/`.
4. Keep the section template self-contained and escape all output.

## Notes

Use ACF for client-editable content such as hero copy, calls to action, service grids, testimonials, and page sections. Use custom post types for repeatable business data such as team members, case studies, services, or locations.
