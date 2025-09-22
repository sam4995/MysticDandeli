<?php
$SITE_NAME = "Mystic Dandeli";
$ADMIN_EMAIL = "bookings@yourdomain.com";
$BASE_URL = "";
$ADMIN_USER = "admin";
$ADMIN_PASS = "StrongPassword123";

define('USE_PHPMAILER', false);
$SMTP = [
  "host" => "smtp.gmail.com",
  "port" => 587,
  "username" => "your_gmail_or_workspace@example.com",
  "password" => "app_password_here",
  "secure" => "tls",
  "from_email" => "no-reply@yourdomain.com",
  "from_name" => $SITE_NAME
];
$GA4_ID = "";
$CSRF_SECRET = bin2hex(random_bytes(16));
