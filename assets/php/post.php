<?php
/**Barebone Control Panel*/
/**2017 Illumin Design*/

if (!isset($access_include)) exit;

# Handle all of the POST requests
if (!isset($_SESSION[sPre.'_loggedin']) || $_SESSION[sPre.'_loggedin'] == false)
{
    require_once(ga_php.'login.php');
}
elseif (isset($_POST) && (isset($_SESSION[sPre.'_loggedin']) && $_SESSION[sPre.'_loggedin'] == true))
{
    // if _POST['act'] == "change_settings" do
    // begin
    //    #
    // end
}