<?php

function getAdultHDCat ()
{
    $cat = 0;

    $chanceNum = rand (0, 2);

    switch($chanceNum)
    {
        case 0:
        $cat = 1;
        break;

        case 1:
        $cat = 2;
        break;

        case 2:
        $cat = 3;
        break;

        default:
        $cat = 0;
    }

    return $cat;
}

/*
0 = error
1 = 1-1 HD
2 = 1 HD
3 = 1+1 HD 
*/
function getHitDiceCat($age)
{
    $cat = 0;

    if($age === 'Youth' || $age === 'Elder')
    {
        $cat = 1;
    }

    if($age === 'Adult' || $age === 'Middle Age')
    {
        $cat = getAdultHDCat ();
    }

    return $cat;
}

function hitDiceDesc ($cat)
{

    $desc = '';
    
    switch($cat)
    {
        case 0:
        $desc = 'Error';
        break;

        case 1:
        $desc = '1-1';
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

    return $desc;

}

?>