# AGENTS.md

## Project
- Digikala Studio is a Laravel 13 single-page marketing/portfolio site. The only route (`/` in `routes/web.php`) renders `resources/views/welcome.blade.php`, a ~1,150-line Blade page that `@include('wishlist')`.
- No APIs, auth, custom models, or business logic beyond the Laravel skeleton. UI copy and comments are Indonesian; match that tone.
- `README.md` is stock Laravel, not project documentation.

## Frontend: two parallel stacks (read before touching UI)
- The live page loads **only** `public/css/style.css` and `public/js/script.js` via `asset(...)` with `filemtime` cache-busting (`welcome.blade.php:29,1148`). It does **not** use `@vite`.
- Edit files in `public/`, not `resources/css|js`. `npm run build` and Vite/Tailwind changes do not affect the rendered page.
- `resources/css/style.css` is a stale, unused older theme. Do not edit it.
- Vite 7 + Tailwind 4 is configured (`resources/css/app.css`, `resources/js/app.js`) but unused. Tailwind utility classes in Blade (the wishlist rewrite uses them) will not render until `@vite` is added to the layout.
- `public/js/script.js` depends on markup hooks such as `.wishlist-card-item`, `#send-wishlist-btn`, `#wishlist-selected-count`; changing wishlist markup can silently disable behavior.
- Preserve the Blade/CSS/JS split described at the top of `welcome.blade.php`: markup in Blade, styles in `public/css/style.css`, behavior in `public/js/script.js`.

## Commands
- Install: `composer install`, `npm install`, copy `.env.example` to `.env`, then `php artisan key:generate` (or run `composer setup`).
- Serve: `php artisan serve`, or `composer dev` for serve + queue + pail + Vite together.
- Test: `composer test` (clears config, then `php artisan test`); single test: `php artisan test --filter=ExampleTest`.
- Format: `./vendor/bin/pint` (PHP only; there is no JS/CSS linter or typecheck).
- Build: `npm run build` (only relevant if Vite is actually wired into a view).

## Environment gotchas
- `composer.json` requires PHP `^8.3`, but the CLI `php` here is `C:\xampp\php\php.exe` 8.2.12. `composer check-platform-reqs` fails, and `php artisan test` crashes in `sebastian/environment` (`public const int STDIN`). Use a PHP 8.3+ binary before trusting composer/test results.
- DB is SQLite at `database/database.sqlite` (gitignored); no MySQL needed. PHPUnit uses in-memory SQLite (`phpunit.xml`).
- No asset rebuild is needed after editing `public/` files because of `filemtime` cache-busting.

## Repo state / workflow
- Only branch is `main`; no CI, hooks, or PR config. Do not commit `.env`, `vendor/`, `node_modules/`, or `public/build/`.
- `testimoni_dump.txt` and the empty root file named `git` are tracked stray artifacts, not application code.
