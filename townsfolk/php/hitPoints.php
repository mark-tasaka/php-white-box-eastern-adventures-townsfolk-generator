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
        $hitPoints = rand(1, 6);
        break;

        case 3:
        $hitPoints = rand(2, 7);
        break;

        default:
        $hitPoints = 999;
    }

    return $hitPoints;

}

?>