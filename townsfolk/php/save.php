<?php

function getSave ($cat)
{
    $save = 0;
    
    switch($cat)
    {
        case 0:
        $save = 0;
        break;

        case 1:
        $save = 19;
        break;

        case 2:
        $save = 18;
        break;

        case 3:
        $save = 17;
        break;

        default:
        $save = 999;
    }
    return $save;
}



?>