<?php
/**Barebone Control Panel*/
/**2017 Illumin Design*/
session_start();

# Start measuring how long the page takes to load
$time = microtime();
$time = explode(' ', $time);
$time = $time[1] + $time[0];
$start = $time;

# allow included files to continue
$access_include = true;

# SESSION Prefix
define("sPre",      "bbcp");
# App Title
define("aTitle",    "Barebone");
# global Assets
define("ga_av",     "assets/img/avatars/", true);
define("ga_css",    "assets/css/",         true);
define("ga_img",    "assets/img/",         true);
define("ga_ico",    "assets/img/icons/",   true);
define("ga_js",     "assets/js/",          true);
define("ga_php",    "assets/php/",         true);
define("ga_pages",  "assets/php/pages/",   true);

# global access to database
require_once(ga_php.'pdo.php');

# global functions
require_once(ga_php.'functions.php');

# global objects
require_once(ga_php.'classes.php');

# Set pages and actions
if (isset($_GET['p'])) $p = anti($_GET['p']); else $p = '';
if (isset($_GET['act'])) $act = anti($_GET['act']); else $act = '';

# Begin POST processing =====-----
require_once(ga_php.'post.php');

# Process GET actions =====-----
require_once(ga_php.'act.php');

# Apply theme =====-----
if ($_SESSION[sPre.'_theme'] == 'light') {
    $theme_s = 'light';
    $theme_t = 'lighttrans';
} elseif ($_SESSION[sPre.'_theme'] == 'dark') {
    $theme_s = 'dark';
    $theme_t = 'darktrans';
} elseif (!isset($_SESSION[sPre.'_theme'])) $_SESSION[sPre.'_theme'] = 'light';