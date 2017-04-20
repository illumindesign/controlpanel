<?php
/**Barebone Control Panel*/
/**2017 Illumin Design*/

if (!isset($access_include)) exit;

# Process actions
if ($act == 'logout')
{
    $_SESSION['bbcp_loggedin'] = false;
    header("Location: index.php");
    exit;
}
elseif ($act == 'theme')
{
    if ($_SESSION['bbcp_theme'] == 'light') {
        $_SESSION['bbcp_theme'] = 'dark';
    } else {
        $_SESSION['bbcp_theme'] = 'light';
    }
    header("Location: index.php");
    exit;
}