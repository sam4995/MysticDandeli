<?php
function db() {
  static $pdo;
  if (!$pdo) {
    $pdo = new PDO('sqlite:' . __DIR__ . '/dandeli.sqlite');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  }
  return $pdo;
}
function csrf_token() {
  if (session_status() !== PHP_SESSION_ACTIVE) session_start();
  if (empty($_SESSION['csrf'])) $_SESSION['csrf'] = bin2hex(random_bytes(32));
  return $_SESSION['csrf'];
}
function csrf_check($token) {
  if (session_status() !== PHP_SESSION_ACTIVE) session_start();
  return isset($_SESSION['csrf']) && hash_equals($_SESSION['csrf'], $token);
}
function clean($str) { return htmlspecialchars($str ?? "", ENT_QUOTES, 'UTF-8'); }
