<?php

function randomSex()
{
    $sex ='';
    
    $hirelingSex = array ('Male', 'Female');
    
    $random = rand(0, 1);
    
    $sex = $hirelingSex[$random];
    
    return $sex;
}


function getSex($option)
{
    $sex ='';
    
    if($option === '1' || $option === '4')
    {
        $sex = randomSex();
    }
    else if($option === '2')
    {
        $sex = 'Male';
    }
    else if($option === '3')
    {
        $sex = 'Female';
    }
    
    return $sex;
}

function showSex($sex, $option)
{
    if($option === '4')
    {
        $sex = '';
    }
    
    return $sex;
}



?>