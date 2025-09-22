# Mystic Dandeli — Quick Deploy Guide (One Page)

This package contains a ready-to-run PHP + SQLite website for a Dandeli tourism business (activities + stays + bookings + contact + simple admin).

## What’s inside
- **index.php** (home), **booking.php**, **contact.php**, **admin.php**
- **SQLite DB** auto-created via `init_db.php`
- **assets/** (styles, logo, and 3 illustrative screenshots)
- **sitemap.xml** and **robots.txt** (update your domain)

## 1) Upload files
1. Log into your hosting (e.g., Hostinger File Manager or any cPanel host).
2. Upload *all* files to the web root (often `public_html/`).
3. In the browser, open `https://YOURDOMAIN/init_db.php` once → it will create the database file.
4. Delete or rename `init_db.php` after success.

![Step 1](assets/screenshots/step1.png)

## 2) Point domain & enable SSL
- At your **registrar** (e.g., Namecheap), set your domain’s nameservers to your host or to **Cloudflare** if you use it for DNS/CDN.
- Most hosts/Cloudflare issue **free SSL** automatically—ensure your site opens on `https://`.

![Step 2](assets/screenshots/step2.png)

## 3) Verify & launch
- Visit `/admin.php` (default: user `admin`, pass `StrongPassword123`) → change in `config.php`.
- Submit a **test booking** and **contact**—you’ll see them in the dashboard.
- Optional: set `$ADMIN_EMAIL` and configure SMTP for reliable emails (PHPMailer).
- Add your **GA4 Measurement ID** in `config.php` to track visits.
- Submit `sitemap.xml` in Google Search Console and add site in Bing Webmaster Tools.

![Step 3](assets/screenshots/step3.png)

## Configuration tips
- Open `config.php` and update:
  - `$ADMIN_EMAIL` → where notifications should go
  - `$ADMIN_PASS` → change immediately
  - `USE_PHPMAILER` and `$SMTP[...]` → if you prefer SMTP
  - `$GA4_ID` → GA4 code (e.g., `G-XXXX...`)
  - `$BASE_URL` → optional hard-coded base URL

## Notes
- **SQLite** keeps data in `dandeli.sqlite` in the same folder; keep regular backups.
- Anti-spam: server-side validation + CSRF token + honeypot on forms. Consider adding reCAPTCHA/hCaptcha later for heavier traffic.
- For payments, start with manual confirmation or integrate Razorpay Payment Links (later).

**Enjoy your launch!**
