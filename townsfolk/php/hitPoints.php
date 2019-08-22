<?php

function getHitPoints ($cat)
{
    $hitPoints = 0;

    switch($cat)
    {
        case 0:
        $hitPoints = 0;
        break;

        case 1:
        $hitPoints = rand(1, 5);
        break;

        case 2:
        $desc = '1';
        break;

        case 3:
        $desc = '1+1';
        break;

        default:
        $desc = 'Error Msg';
    }

}

?>