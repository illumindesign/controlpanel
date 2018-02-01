<?php
/**Barebone Control Panel*/
/**2017 Illumin Design*/

if (!isset($access_include)) exit;

# Process actions
if ($act == 'logout')
{
    $_SESSION[sPre.'_loggedin'] = false;
    header("Location: index.php");
    exit;
}
elseif ($act == 'theme')
{
    if ($_SESSION[sPre.'_theme'] == 'light') {
        $_SESSION[sPre.'_theme'] = 'dark';
    } else {
        $_SESSION[sPre.'_theme'] = 'light';
    }
    header("Location: index.php");
    exit;
}