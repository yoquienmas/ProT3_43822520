<?php

// Valid PHP Version?
$minPHPVersion = '7.2';
if (phpversion() < $minPHPVersion)
{
    die("Your PHP version must be {$minPHPVersion} or higher to run CodeIgniter. Current version: " . phpversion());
}
unset($minPHPVersion);

// Path to the front controller (this file)
define('FCPATH', __DIR__ . DIRECTORY_SEPARATOR);

// Location of the Paths config file.
$pathsPath = realpath(FCPATH . 'app/Config/Paths.php');

if ($pathsPath === false) {
    die('Error: No se pudo encontrar el archivo Paths.php en la ruta esperada.');
}

require $pathsPath;

$paths = new Config\Paths();

// Ensure the current directory is pointing to the front controller's directory
chdir(__DIR__);

// Location of the framework bootstrap file.
$app = require rtrim($paths->systemDirectory, '/ ') . '/bootstrap.php';

// LAUNCH THE APPLICATION
$app->run();
