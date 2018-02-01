<?php
/**Barebone Control Panel*/
/**2017 Illumin Design*/

if (!isset($access_include)) exit;

function anti ($data, $method=1)
{
    if ($method==1) $data = preg_replace("/[^ \w]/", "", $data);
    elseif ($method==2) $data = preg_replace("/\W.*(\w+)\W.*$/", "$1", $data);
    elseif ($method==3) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
    }
    return $data;
}

function truncate($string, $maxlen)
{
    if (strlen($string) > $maxlen):
        $tmpstr = $string;
        $string = $tmpstr{0};
        for ($i = 1; $i <= $maxlen-3; $i++):
            $string .= $tmpstr{$i};
        endfor;
        $string .= "...";
        return $string;
    else:
        return $string;
    endif;
}