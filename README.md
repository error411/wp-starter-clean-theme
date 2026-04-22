# Starter Clean

A minimal classic WordPress theme for learning, portfolio work, and custom development.

Starter Clean is intentionally small: no page builders, no CSS frameworks, and no extra tooling required. It gives you a clean PHP theme foundation that is easy to read, edit, and extend.

## Structure

```text
starter-clean/
  style.css
  index.php
  functions.php
  header.php
  footer.php
  page.php
  single.php
  archive.php
  front-page.php
  screenshot.png
  assets/
    css/
      main.css
    js/
      main.js
  partials/
    content.php
```

## Features

- Classic PHP theme structure
- Mobile-first CSS
- Primary menu location
- Theme support for dynamic titles and featured images
- Reusable content partial for post summaries
- Simple front page with hero content and latest posts
- Lightweight asset loading through `functions.php`

## Local Use

Place the theme in:

```text
wp-content/themes/starter-clean
```

Then activate **Starter Clean** from the WordPress admin under **Appearance > Themes**.

If you are using the included Docker setup, WordPress is available at:

```text
http://localhost:8080
```

## Development Notes

Edit styles in:

```text
assets/css/main.css
```

Edit starter JavaScript in:

```text
assets/js/main.js
```

Shared post summary markup lives in:

```text
partials/content.php
```

Keep changes simple and intentional. This theme is meant to be a readable starting point, not a finished product or a framework.
