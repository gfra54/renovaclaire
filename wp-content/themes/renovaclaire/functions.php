<?php
/**
 * Timber starter-theme
 * https://github.com/timber/starter-theme
 */

// Load Composer dependencies.
require_once __DIR__ . '/vendor/autoload.php';

require_once __DIR__ . '/src/StarterSite.php';

Timber\Timber::init();

// Sets the directories (inside your theme) to find .twig files.
Timber::$dirname = [ 'templates', 'views' ];

foreach(glob(__DIR__.'/inc/*.inc.php') as $php) {
    include $php;
}
foreach(glob(__DIR__.'/php/*.php') as $php) {
    include $php;
}

new StarterSite();