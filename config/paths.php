<?php defined('IN_APP') or die('Get out of here');

/**
 *	Scaffold v0.1
 *	by the Codin' Co.
 *
 *	Set the paths used by all the functions, classes, and everything.
 */

//  If you rename your "app" folder, change it here.
define('APP_BASE', BASE . 'app/');

//  If you rename the "core" folder (which you shouldn't), change it here.
define('CORE_BASE', BASE . 'core/');

//  If your public folder has a different name... You know the drill.
define('PUBLIC_BASE', BASE . 'public/');

// Temp path
define('TEMP_BASE', BASE . 'tmp/');

//  And the public path
define('PUBLIC_PATH', dirname($_SERVER['SCRIPT_NAME']));

define('TEMPLATE_BASE', BASE . 'theme/');
define('TEMPLATE_PATH', TEMPLATE_BASE . 'skeleton.html');