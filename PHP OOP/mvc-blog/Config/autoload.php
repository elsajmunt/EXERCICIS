<?php
spl_autoload_register('autoloadController');
spl_autoload_register('autoloadModel');
spl_autoload_register('autoloadService');
spl_autoload_register('autoloadConfig');

function autoloadController($className) {
	$extension = '.php';
	$path = '../Controller/'; 
	$fullPath = $path.$className.$extension;

	if (file_exists($fullPath)) {
        require_once $fullPath;
    }
}

function autoloadModel($className) {
	$extension = '.php';
	$path = '../Model/'; 
	$fullPath = $path.$className.$extension;

	if (file_exists($fullPath)) {
        require_once $fullPath;
    }
}

function autoloadService($className) {
	$extension = '.php';
	$path = '../Service/'; 
	$fullPath = $path.$className.$extension;

	if (file_exists($fullPath)) {
        require_once $fullPath;
    }
}

function autoloadConfig($className) {
	$extension = '.php';
	$path = '../Config/'; 
	$fullPath = $path.$className.$extension;

    if (file_exists($fullPath)) {
        require_once $fullPath;
    }
}