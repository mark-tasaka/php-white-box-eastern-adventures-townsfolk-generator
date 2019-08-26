<?php

function youthMaleHair ()
{
    $hair = '';

    $hairTypes = array("simple topknot", "unkept hair", "messy hair", "matted hair", "simple haircut", "wiry hair");
    
    shuffle($hairTypes);

    $hair = $hairTypes[0];

    return $hair;
}


function adultMaleHair ()
{
    $hair = '';

    $hairTypes = array("thin goatee", "well-groomed topknot", "stylist topknot", "shaved head", "receding hairline", "unkept hair", "thinning hair", "shaggy beard", "thick messy hair");
    
    shuffle($hairTypes);

    $hair = $hairTypes[0];

    return $hair;
}


function middleAgeMaleHair ()
{
    $hair = '';

    $hairTypes = array("long greying goatee", "greying hair", "well-groomed topknot", "stylist topknot", "stylist topknot with greying hair", "shaved head", "balding", "shaggy greying beard");
    
    shuffle($hairTypes);

    $hair = $hairTypes[0];

    return $hair;
}


function elderAgeMaleHair ()
{
    $hair = '';

    $hairTypes = array("thin greying goatee", "silver hair", "simple topknot", "stylist topknot", "shaved head", "bald", "shaggy white beard", "thin white beard");
    
    shuffle($hairTypes);

    $hair = $hairTypes[0];

    return $hair;
}

function getHairStyle()
{
    $hair = '';

    $hair = youthMaleHair ();

    return $hair;
}



?>