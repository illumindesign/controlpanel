<?php
/**Barebone Control Panel*/
/**2017 Illumin Design*/

#Default page if no other pages selected
if (!isset($access_include)) exit;
?>

<h1>Information</h1>
<div id="tooloptions" class="<?=$theme_t?>">
    [ tool options | add options here ]
</div>
<div id="toolgrid" class="<?=$theme_s?> slide">
    <h3>Information</h3>
    <br/>
    <br/>
    <br/>
    <div style="text-align: center;font-size:60px;">
        <?php
        #process your action
        if ($act != '') echo ucwords($act);
        else echo 'default content goes here';
        ?>
    </div>
    <br/>
    <br/>
    <br/>
    <br/>
    <br/>
    <br/>
    <br/>
</div>
