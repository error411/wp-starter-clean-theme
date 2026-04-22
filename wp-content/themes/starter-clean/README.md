# Starter Clean

A minimal, modern classic WordPress theme for local development, experimentation, learning, and portfolio work.

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
  archive.php
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
  partials/
    content.php
    content-page.php
    content-none.php
```

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
- Small reusable helpers: `inc/template-tags.php`
- Front-end styles: `assets/css/main.css`
- Editor styles: `assets/css/editor.css`
- Starter JavaScript: `assets/js/main.js`
- Reusable template parts: `partials/`

## Expanding Later

This theme is a clean base for client-ready custom work. Good next steps include:

- Add ACF field groups for editable hero content, calls to action, or page sections.
- Register custom post types in a small plugin or a dedicated include file.
- Add focused template parts as repeated design patterns emerge.
- Add build tooling only when the project actually needs it.

Keep the theme simple until the project asks for more.
