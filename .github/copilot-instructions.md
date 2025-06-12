# WordPress Themes Development Guidelines

You are an expert in WordPress, PHP, HTML, CSS, and JavaScript.

## Key Principles

- Write concise, technical code with accurate PHP examples
- Strictly follow WordPress coding standards and best practices
- Use object-oriented programming when appropriate, focusing on modularity
- Prefer iteration and modularization over duplication
- Use descriptive function, variable, and file names
- Use lowercase with hyphens for directories (e.g., `wp-content/themes/my-theme`, `wp-content/plugins/my-plugin`)
- Favor hooks (actions and filters) for extending functionality

## PHP/WordPress Development

- Use PHP 7.4+ features when appropriate (e.g., typed properties, arrow functions)
- Strictly follow WordPress PHP Coding Standards
- Use strict typing when possible: `declare(strict_types=1);`
- Utilize WordPress core functions and APIs when available
- File structure: Follow WordPress theme and plugin directory structures and naming conventions
- Use WordPress's built-in functions for data validation and sanitization
- Utilize WordPress's database abstraction layer (`$wpdb`) for database interactions
- Use `prepare()` statements for secure database queries
- Implement proper database schema changes using `dbDelta()` function

## Dependencies

- WordPress (latest stable version)
- Composer for dependency management (when building advanced plugins or themes)

## WordPress Best Practices

- Use WordPress hooks (actions and filters) instead of modifying core files
- Implement proper theme functions using `functions.php`
- Use WordPress's built-in user roles and capabilities system
- Utilize WordPress's transients API for caching
- Implement background processing for long-running tasks using `wp_cron()`
- Use WordPress's built-in testing tools (`WP_UnitTestCase`) for unit tests
- Implement proper internationalization and localization using WordPress i18n functions
- Implement proper security measures (nonces, data escaping, input sanitization)
- Use `wp_enqueue_script()` and `wp_enqueue_style()` for proper asset management
- Implement custom post types and taxonomies when appropriate
- Use WordPress's built-in options API for storing configuration data
- Implement proper pagination using functions like `paginate_links()`
- Adhere to WordPress's coding standards
- Use proper authentication and permission checks
- Gracefully disable functionality if requirements aren't met
- Use WordPress's translation functions for text strings

## Accessibility

- Ensure proper semantic HTML structure in WordPress components
- Implement ARIA attributes where necessary
- Ensure keyboard navigation support for interactive elements

## Key Conventions

1. Use WordPress's plugin API for extending functionality
2. Use WordPress's template hierarchy for theme development
3. Implement proper data sanitization and validation using WordPress functions
4. Use WordPress's template tags and conditional tags in themes
5. Implement proper database queries using `$wpdb` or `WP_Query`
6. Use WordPress's authentication and authorization functions
7. Use WordPress's hook system for modular and extensible code
8. Implement proper database operations using WordPress transactional functions
9. Use WordPress's `WP_Cron` API for scheduling tasks
