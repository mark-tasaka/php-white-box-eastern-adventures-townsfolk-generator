<?php

function getRandomAge ()
{
    $cat = '';

    $select = rand(0, 19);

    if($select >= 0 && $select <=3)
    {
        $cat = 'Youth';
    }
    else if($select >=4 && $select <=12)
    {
        $cat = 'Adult';
    }
    else if($select >=13 && $select <=16)
    {
        $cat = 'Middle Age';
    }
    else if($select >=17 && $select <=19)
    {
        $cat = 'Elder';
    }
    
    return $cat;
}


function getAgeCat($choice)
{
    $cat = '';

    if($choice == 1)
    {
        $cat = getRandomAge ();
    }
    else if($choice == 2)
    {
        $cat = 'Youth';
    }
    else if($choice == 3)
    {
        $cat = 'Adult';
    }
    else if($choice == 4)
    {
        $cat = 'Middle Age';
    }
    else if($choice == 5)
    {
        $cat = 'Elder';
    }

    return $cat;

}

function getAge ($category)
{
    $age = 0;

    if($category === 'Youth')
    {
        $age = rand(13, 18);
    }
    else if($category === 'Adult')
    {
        $age = rand(19, 44);
    }
    else if($category === 'Middle Age')
    {
        $age = rand(45, 59);
    }
    else if($category === 'Elder')
    {
        $age = rand(60, 85);
    }

    return $age;
}


?>