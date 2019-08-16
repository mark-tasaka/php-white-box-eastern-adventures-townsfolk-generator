<?php

function getSizeGroup ()
{
    $group = rand(1, 8);

    return $group;
}

function heightCharts ($cat)
{
    $height = "Error";

    switch($cat)
    {
        case 1:
        $height = "4' 8";
        break;
        
        case 2:
        $height = "4' 9";
        break;
        
        case 3:
        $height = "4' 10";
        break;

        case 4:
        $height = "4' 11";
        break;

        case 5:
        $height = "5'";
        break;

        case 6:
        $height = "5' 1";
        break;

        case 7:
        $height = "5' 2";
        break;

        case 8:
        $height = "5' 3";
        break;

        case 9:
        $height = "5' 4";
        break;

        case 10:
        $height = "5' 5";
        break;

        case 11:
        $height = "5' 6";
        break;

        case 12:
        $height = "5' 7";
        break;

        case 13:
        $height = "5' 8";
        break;

        case 14:
        $height = "5' 9";
        break;

        case 15:
        $height = "5' 10";
        break;

        case 16:
        $height = "5' 11";
        break;

        case 17:
        $height = "6'";
        break;

        case 18:
        $height = "6' 1";
        break;

        default:
        $height = "default case";
    }

    return $height;
}

function getSizeCat($group, $age, $sex)
{
    $adjustAge = 0;
    $adjustSex = 0;

    $cat = 0;
    $height = "";

    if($age === 'Adult')
    {
        $adjustAge = 4;
    }
    
    if($age === 'Elder')
    {
        $adjustAge = 2;
    }

    if($sex === 'Male')
    {
        $adjustSex = 5;
    }

    $cat = ($group + $adjustAge + $adjustSex);

    return $cat;

}

function getHeight($cat)
{
    $height = heightCharts ($cat);

    return $height;

}

function baseWeight($cat, $sex, $age)
{
    $base = 70;
    $adjustAge = 0;
    $adjustSex = 0;
    $baseWeight = 0;
    $heightAdjustment = ($cat * 3);
    
    if($sex === 'Male')
    {
        $adjustSex = 20;
    }
    
    if($age === 'Adult')
    {
        $adjustAge = 15;
    }
    
    if($age === 'Elder')
    {
        $adjustAge = 10;
    }

    $baseWeight = ($base + $adjustSex + $adjustAge +$heightAdjustment);

    return $baseWeight;

}

function weightGroupYouth ()
{
    $weightGroup = 0;

    $selectNum = rand (0, 9);

    if($selectNum === 0)
    {
        $weightGroup = 3;
    }
    else if($selectNum >= 1 && $selectNum <= 5 )
    {
        $weightGroup = 2;
    }
    else
    {
        $weightGroup = 1;
    }

    return $weightGroup;
}

function weightGroupAdult ()
{
    $weightGroup = 0;

    $selectNum = rand (0, 9);

    if($selectNum >= 0 && $selectNum <= 3)
    {
        $weightGroup = 3;
    }
    else if($selectNum >= 4 && $selectNum <= 7)
    {
        $weightGroup = 2;
    }
    else
    {
        $weightGroup = 1;
    }

    return $weightGroup;
}

//group 1: underweight
//group 2: average
//group 3: overweight
function getWeightGroup ($age)
{
    $weightGroup = 0;

    if($age === 'Youth')
    {
        $weightGroup = weightGroupYouth();
    }
    else
    {
        $weightGroup = weightGroupAdult();
    }

    return $weightGroup;
}

function getWeight($baseWeight, $weightGroup, $heightGroup)
{
    $weight = 0;
    $adjust = 0;

    if($weightGroup === 1)
    {
        for($i = 0; $i < $heightGroup; ++$i)
        {
            $tempHold = 0;
            $tempHold = rand(1,3);
            $adjust -= $tempHold;
        }
    }
    else if($weightGroup === 2)
    {
        for($i = 0; $i < $heightGroup; ++$i)
        {
            $tempHold = 0;
            $tempHold = rand(0,2);
            $adjust += $tempHold;
        }
    }
    else if($weightGroup === 3)
    {
        for($i = 0; $i < $heightGroup; ++$i)
        {
            $tempHold = 0;
            $tempHold = rand(3,9);
            $adjust += $tempHold;
        }
    }

    $weight = $baseWeight + $adjust;

    return $weight;
}

function adultMaleBodyType ($weightGroup)
{
    $type = '';
    
    $slimType = array("Slender", "Lean", "Skinny", "Slim", "Lanky", "Frail");

    shuffle($slimType);
    
    $mediumType = array("Medium Build", "Fit", "Healthy Build");

    shuffle($mediumType);
    
    $heavyType = array("Stocky", "Paunchy", "Over-weight", "Muscular", "Plump");

    shuffle($heavyType);

    if($weightGroup === 1)
    {
        $type = $slimType[0];
    }

    if($weightGroup === 2)
    {
        $type = $mediumType[0];
    }

    if($weightGroup === 3)
    {
        $type = $heavyType[0];
    }

    return $type;
}

function getBodyDescription ($weightGroup)
{
    $description = '';

    $description = adultMaleBodyType ($weightGroup);

    return $description;
}




?>