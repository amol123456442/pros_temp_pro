<?php
// Set environment: development, testing, production
define('ENVIRONMENT', isset($_SERVER['CI_ENV']) ? $_SERVER['CI_ENV'] : 'development');

// Show all errors (for development only)
if (ENVIRONMENT === 'development') {
    error_reporting(E_ALL);
    ini_set('display_errors', 1);
} else {
    error_reporting(0);
}

// System folder name
$system_path = 'system';
$application_folder = 'application';

// Resolve full path
$system_path = realpath($system_path) ?: $system_path;
$system_path = rtrim($system_path, '/\\') . DIRECTORY_SEPARATOR;

// Set constant
define('BASEPATH', $system_path);
define('APPPATH', $application_folder . DIRECTORY_SEPARATOR);

// Load the bootstrap file
require_once BASEPATH . 'core/CodeIgniter.php';
