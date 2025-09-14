fs08 — Personal Site (Laravel + Tailwind)

Quickstart

- Copy `.env.example` to `.env` and set `APP_NAME=fs08` (already set).
- Optional: configure SMTP in `.env` to send real mail. Defaults to `MAIL_MAILER=log`.
- Install PHP and JS deps:
  - composer install (already done by scaffolder)
  - npm install
- Run local dev:
  - php artisan serve
  - npm run dev

Mail Setup

- For real email, set: MAIL_MAILER=smtp, MAIL_HOST, MAIL_PORT, MAIL_USERNAME, MAIL_PASSWORD, MAIL_ENCRYPTION, MAIL_FROM_ADDRESS, MAIL_FROM_NAME.
- Contact form posts to `fabiosants@fs08.tech`.

Pages

- / — Home
- /projects — Projects (includes CyberToolsHub)
- /contact — Contact form

Production hardening

- Env:
  - APP_ENV=production
  - APP_DEBUG=false
  - APP_URL=https://your-domain
  - SESSION_SECURE_COOKIE=true (behind HTTPS)
- Assets:
  - npm run build
- Optimize caches (run during deploy):
  - php artisan migrate --force
  - php artisan config:cache route:cache view:cache event:cache
- Security headers: added via `App\Http\Middleware\SecureHeaders` (CSP, HSTS, frame-ancestors, etc.).
- Contact protection: throttle (5/min) + honeypot field.
- Proxies: if behind a proxy, configure `TRUSTED_PROXIES` per hosting.
