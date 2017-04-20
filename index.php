<?php
/**Barebone Control Panel*/
/**2017 Illumin Design*/

session_start();
require_once('assets/php/global.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Barebone Control Panel</title>
    <link rel="icon" href="assets/img/icon.png" />
    <link rel="stylesheet" type="text/css" href="assets/css/illuminstyle.css">
    <link rel="stylesheet" type="text/css" href="assets/css/responsive.css">
    <link rel="stylesheet" type="text/css" href="assets/css/scrollbars.css">
    <link rel="stylesheet" type="text/css" href="assets/css/effects.css">
    <link rel="stylesheet" type="text/css" href="assets/css/fonts.css">
    <script type="text/javascript" src="assets/js/functions.js"></script>
</head>
<body>
    <div id="header">
        <div id="logo" class="">Barebone Control Panel</div>
        <?php
        if ($_SESSION['bbcp_loggedin'] == true)
        {
            ?>
            <div id="topmenu_compact" class="fade" onclick="showTopMenu()">
                <div></div>
                <div></div>
                <div></div>
            </div>
            <div id="topmenu" class="fade">
                <ul>
                    <li><a href="index.php">dashboard</a></li>
                    <li><a href="?p=important&act=alerts">alerts</a></li>
                    <li><a href="?p=management">management</a></li>
                    <li><a href="?p=settings&act=profile">profile</a></li>
                    <li><a href="?p=settings">settings</a></li>
                </ul>
            </div>
            <div id="usermenu">
                <div id="profileimage"><img src="assets/img/avatars/avatar.png"></div>
                <div id="usermenu-content">
                    <div id="usermenu-options">
                        [ user options can go here ]
                    </div>
                    <a class="btn_small" href="?act=theme">change theme</a>
                    <a class="btn_small" href="?act=logout">logout</a>
                </div>
            </div>
            <?php
        }
        ?>
    </div>
    <div id="adminbody">
        <?php
        if ($_SESSION['bbcp_loggedin'] == true)
        {
            ?>
            <div id="toolheader"></div>
            <div id="toolcontainer" class="<?=$theme_t?>">
                <nav id="toolnav" class="<?=$theme_s?> slide">
                    <a href="?p=important">
                        <img border="0" class="toolicon stretch" src="assets/img/icons/icon_important.png" />
                        <div class="toolname">Example Nav</div>
                    </a>
                    <ul>
                        <li><a href="?p=important&act=alerts">Alerts</a></li>
                        <li><a href="?p=important&act=notifications">Notifications</a></li>
                    </ul>
                    <a href="?p=information">
                        <img border="0" class="toolicon stretch" src="assets/img/icons/icon_help.png" />
                        <div class="toolname">Information</div>
                    </a>
                    <ul>
                        <li><a href="?p=information&act=pending">Pending</a></li>
                        <li><a href="?p=information&act=resolved">Resolved</a></li>
                    </ul>
                    <a href="?p=management">
                        <img border="0" class="toolicon stretch" src="assets/img/icons/icon_file.png" />
                        <div class="toolname">Management</div>
                    </a>
                    <ul>
                        <li><a href="?p=management&act=products">Products</a></li>
                        <li><a href="?p=management&act=services">Services</a></li>
                    </ul>
                    <a href="?p=settings">
                        <img border="0" class="toolicon stretch" src="assets/img/icons/icon_code.png" />
                        <div class="toolname">Settings</div>
                    </a>
                    <ul>
                        <li><a href="?p=settings&act=preferences">Preferences</a></li>
                        <li><a href="?p=settings&act=profile">Profile</a></li>
                    </ul>
                </nav>
                <div id="toolcontent">
                    <?php
                    if ($p == '') {
                        include('assets/php/pages/index.php');
                    } else {
                        if (file_exists('assets/php/pages/'.$p.'.php')) {
                            include('assets/php/pages/'.$p.'.php');
                        } else {
                            echo '<h1>Requested page not found!</h1>';
                        }
                    }
                    ?>
                </div>
            </div>
            <div id="toolfooter">
                <?php
                # CALCULATE AND SHOW THE TOTAL PAGE LOAD TIME =====
                $time = microtime();
                $time = explode(' ', $time);
                $time = $time[1] + $time[0];
                $finish = $time;
                $total_time = round(($finish - $start), 25);
                echo 'parsed in '.$total_time.' seconds';
                ?>
            </div>
            <?php
        }
        else # ================================= IF THEY ARE NOT LOGGED IN =============================================
        {
            echo '<div id="loginform">';
            if (isset($loginfailure) && $loginfailure == true) {
                echo '<span style="color:#f00;font-size:24px;">Login failure! Incorrect password</span><br/><br/><br/>';
            }
            ?>
            <form action="" method="POST">
                <br/>
                <input type="text" name="user_name" placeholder="User Name" required/><br/>
                <br/>
                <input type="password" name="user_password" placeholder="Password" required/><br/>
                <br/>
                <br/>
                <input type="hidden" name="act" value="login"/>
                <input type="submit" value="login"/>
            </form>
            <?php
            echo '</div>
            <a href="help.html">help</a>';
        }
        ?>
    </div>
</body>
</html>