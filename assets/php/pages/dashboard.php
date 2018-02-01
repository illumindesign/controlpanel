<?php
/**Barebone Control Panel*/
/**2017 Illumin Design*/

#Default page if no other pages selected
if (!isset($access_include)) exit;
?>

<h1>Main Page</h1>
<div id="tooloptions" class="<?=$theme_t?>">
    <a href="?act=products">products</a>
    <a href="?act=services">services</a>
    <a href="?act=people">people</a>
</div>
<div id="toolgrid" class="<?=$theme_s?> slide">
    <h3>Default Content</h3>
    <br/>
    <div style="text-align: center;font-size:45px;">
        This is where you put the dashboard controls.
    </div>
    <br/>
    <br/>
</div>
