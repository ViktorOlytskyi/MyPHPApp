<?php

ini_set('display_error', true);
ini_set('display_startup_error', true);
ini_set('log_errors', true);
ini_set('errors_log', __DIR__.'/logs/errors.txt');

error_reporting(E_ALL);

define('FILE_JSON_MAX_SIZE', 339999);

define('CONTROLLERS_DIR', __DIR__.'/controllers/');
define('UPLOADS_DIR', __DIR__.'/uploads/');
define('VIEWS_DIR', __DIR__.'/views/');

require_once __DIR__.'/routes.php';