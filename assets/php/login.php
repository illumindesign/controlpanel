<?php
/**Barebone Control Panel*/
/**2017 Illumin Design*/

if (!isset($access_include)) exit;

if (isset($_POST))
{
    # Handle the login form
    if (isset($_POST['act']) && $_POST['act'] == "login") {
        /*
         * REPLACE THE STATEMENT BELOW WITH YOUR OWN USER SYSTEM
         */
        if ($_POST['user_name'] == 'user' && $_POST['user_password'] == 'password') {
            $_SESSION[sPre.'_loggedin'] = true;
            header('Location: index.php');
            exit;
        } else {
            $loginfailure = true;
        }
    }
}