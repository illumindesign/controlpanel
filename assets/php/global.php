<?php
/**Barebone Control Panel*/
/**2017 Illumin Design*/

# Start measuring how long the page takes to load
$time = microtime();
$time = explode(' ', $time);
$time = $time[1] + $time[0];
$start = $time;

# allow included files to continue
$access_include = true;

# include this if you need to access a database
//require_once('assets/php/pdo.php');

# include global functions
require_once('assets/php/functions.php');

# include global objects
require_once('assets/php/classes.php');

# Set pages and actions
if (isset($_GET['p'])) $p = $_GET['p']; else $p = '';
if (isset($_GET['act'])) $act = $_GET['act']; else $act = '';

# Begin POST processing =====-----
if (isset($_SESSION['bbcp_loggedin']) && $_SESSION['bbcp_loggedin'] == true) {
    require_once('assets/php/post.php');
} else {
    require_once('assets/php/login.php');
}

# Process actions
require_once('assets/php/act.php');

# Setup defaults
if (!isset($_SESSION['bbcp_loggedin'])) {
    $_SESSION['bbcp_loggedin'] = false;
}
if (!isset($_SESSION['bbcp_theme'])) {
    $_SESSION['bbcp_theme'] = 'light';
}

# Apply theme
if ($_SESSION['bbcp_theme'] == 'light') {
    $theme_s = 'light';
    $theme_t = 'lighttrans';
} elseif ($_SESSION['bbcp_theme'] == 'dark') {
    $theme_s = 'dark';
    $theme_t = 'darktrans';
}