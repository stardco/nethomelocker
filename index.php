<?php
require __DIR__ . '/inc/00-header.php';
require __DIR__ . '/config/config.php';
$status = [
	'up' => 'Activer',
	'down' => 'Désactiver'
];

$errors = [];

$request_method = strtoupper($_SERVER['REQUEST_METHOD']);

if ($request_method === 'POST') {
	require __DIR__ . '/inc/20-post.php';
}

require __DIR__ . '/inc/30-get.php';
require __DIR__ . '/inc/99-footer.php';