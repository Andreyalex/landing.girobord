<?php
// Version
define('VERSION', '2.3.0.2');

if ($_SERVER['REQUEST_URI'] == '/') {
    include 'landing/index.php';
    return;
}

// Configuration
if (is_file('config.php')) {
	require_once('config.php');
}

// Install
if (!defined('DIR_APPLICATION')) {
	header('Location: install/index.php');
	exit;
}

// Startup
require_once(DIR_SYSTEM . 'startup.php');

start('catalog');