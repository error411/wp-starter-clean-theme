# Starter Clean

A minimal, modern classic WordPress theme for local development, experimentation, learning, portfolio work, and small business sites.

Starter Clean is intentionally lightweight. It uses standard PHP templates, small theme includes, and plain CSS/JavaScript so the code stays readable and easy to extend.

## File Structure

```text
starter-clean/
  style.css
  index.php
  functions.php
  header.php
  footer.php
  front-page.php
  home.php
  page.php
  single.php
  single-service.php
  archive.php
  archive-service.php
  search.php
  404.php
  screenshot.png
  assets/
    css/
      main.css
      editor.css
    js/
      main.js
  inc/
    setup.php
    enqueue.php
    template-tags.php
    customizer.php
    post-types.php
    schema.php
  partials/
    content.php
    content-page.php
    content-none.php
```

## Features

- Classic PHP theme structure
- Mobile-first CSS
- Primary menu location
- Theme support for dynamic titles, custom logo, editor styles, and featured images
- Site Settings panel in the WordPress Customizer
- Services custom post type with archive and single templates
- Testimonials custom post type for homepage social proof
- Local business JSON-LD schema support

## Activate The Theme

Place the theme folder at:

```text
wp-content/themes/starter-clean
```

Then open WordPress admin and go to:

```text
Appearance > Themes > Starter Clean > Activate
```

In this Docker project, WordPress runs at:

```text
http://localhost:8080
```

## Where To Edit

- Theme metadata: `style.css`
- Theme setup and supports: `inc/setup.php`
- CSS and JavaScript loading: `inc/enqueue.php`
- Template helpers: `inc/template-tags.php`
- Business settings: `inc/customizer.php`
- Services and testimonials CPTs: `inc/post-types.php`
- Local business schema: `inc/schema.php`
- Front-end styles: `assets/css/main.css`
- Editor styles: `assets/css/editor.css`
- Starter JavaScript: `assets/js/main.js`
- Reusable template parts: `partials/`

## Site Settings

Go to:

```text
Appearance > Customize > Site Settings
```

Use this panel for business contact details, social links, schema type, and schema output.

These settings are used in:

- The footer contact block
- Local business JSON-LD on the front page

## Custom Content Types

The theme registers:

- `service` for business services
- `testimonial` for customer quotes and social proof

Services are public and have an archive at:

```text
/services/
```

Testimonials are available in the WordPress admin and can be featured on the homepage.

## Expanding Later

Good next steps include:

- Add ACF field groups for editable hero content, calls to action, testimonials, or page sections.
- Move CPT registration into a small plugin if the content model becomes long-term client data.
- Add focused template parts as repeated design patterns emerge.
- Add build tooling only when the project actually needs it.

Keep the theme simple until the project asks for more.
