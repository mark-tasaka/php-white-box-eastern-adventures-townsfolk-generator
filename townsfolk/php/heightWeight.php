<?php

function getSizeGroup ()
{
    $group = rand(1, 8);

    return $group;
}

function getHeight($group, $age, $sex)
{

}

function adultMaleSize()
{
        $a01 = array(1, "5' 4\" ", 135);
        $a02 = array(2, "5' 5\" ", 140);
        $a03 = array(3, "5' 6\" ", 145);
        $a04 = array(4, "5' 7\" ", 145);
        $a05 = array(5, "5' 8\" ", 150);
        $a06 = array(6, "5' 9\" ", 150);
        $a07 = array(7, "5' 10\" ", 155);
        $a08 = array(8, "5' 11\" ", 155);
        $a09 = array(9, "6'", 160);

        $array1= array($a01, $a02, $a03, $a04, $a05, $a06, $a07, $a08, $a09);

        $num = rand(0,8);

        return $array1[$num];
}

function youthMaleSize()
{
        $a01 = array(1, "5' 2\" ", 115);
        $a02 = array(2, "5' 3\" ", 120);
        $a03 = array(3, "5' 4\" ", 125);
        $a04 = array(4, "5' 5\" ", 125);
        $a05 = array(5, "5' 6\" ", 130);
        $a06 = array(6, "5' 7\" ", 130);
        $a07 = array(7, "5' 8\" ", 135);
        $a08 = array(8, "5' 9\" ", 135);
        $a09 = array(9, "5' 10\" ", 150);

        $array1= array($a01, $a02, $a03, $a04, $a05, $a06, $a07, $a08, $a09);

        $num = rand(0,8);

        return $array1[$num];
}



function adultFemaleSize()
{
        $a01 = array(1, "4' 10\" ", 100);
        $a02 = array(2, "4' 11\" ", 100);
        $a03 = array(3, "5'", 105);
        $a04 = array(4, "5' 1\" ", 105);
        $a05 = array(5, "5' 2\" ", 110);
        $a06 = array(6, "5' 3\" ", 110);
        $a07 = array(7, "5' 4\" ", 115);
        $a08 = array(8, "5' 5\" ", 120);
        $a09 = array(9, "5' 6\" ", 120);

        $array1= array($a01, $a02, $a03, $a04, $a05, $a06, $a07, $a08, $a09);

        $num = rand(0,8);

        return $array1[$num];
}


function youthFemaleSize()
{
        $a01 = array(1, "4' 8\" ", 85);
        $a02 = array(2, "4' 9\" ", 90);
        $a03 = array(3, "4' 10\" ", 90);
        $a04 = array(4, "4' 11\" ", 95);
        $a05 = array(5, "5' ", 100);
        $a06 = array(6, "5' 1\" ", 100);
        $a07 = array(7, "5' 2\" ", 105);
        $a08 = array(8, "5' 3\" ", 105);
        $a09 = array(9, "5' 4\" ", 105);

        $array1= array($a01, $a02, $a03, $a04, $a05, $a06, $a07, $a08, $a09);

        $num = rand(0,8);

        return $array1[$num];
}





function getSize($cat, $sex)
{
    $townsfolkSize = array();

    if($sex === 'Male')
    {
        if($cat === 'Youth' || $cat === 'Elder')
        {
            $townsfolkSize = youthMaleSize();
        }
        else
        {
            $townsfolkSize = adultMaleSize();
        }
    }

    
    if($sex === 'Female')
    {
        if($cat === 'Youth' || $cat === 'Elder')
        {
            $townsfolkSize = youthFemaleSize();
        }
        else
        {
            $townsfolkSize = adultFemaleSize();
        }
    }

    return $townsfolkSize;

}


?>