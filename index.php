<?php

$uri = trim(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), '/');

// Trang chủ
if ($uri === '' || $uri === 'index.php') {
	require 'trang-chu.php';
	exit;
}

// Dịch vụ
if ($uri === 'dich-vu') {
	require 'dich-vu.php';
	exit;
}

// Về chúng tôi
if ($uri === 've-chung-toi') {
	require 've-chung-toi.php';
	exit;
}

// Liên hệ
if ($uri === 'lien-he') {
	require 'lien-he.php';
	exit;
}

// 🔥 TRANG CHI TIẾT DỊCH VỤ (ĐÂY LÀ CHỐT)
if (preg_match('#^dich-vu/([a-z0-9-]+)$#', $uri, $matches)) {
	$_GET['service'] = $matches[1];
	require 'dich-vu-chi-tiet.php';
	exit;
}

// Page tĩnh
if (file_exists($uri . '.html')) {
	require $uri . '.html';
	exit;
}

// 404
http_response_code(404);
require '404.php';
exit;
