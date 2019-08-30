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

function youthFemaleHair ()
{
    $hair = '';

    $hairTypes = array("long straight hair", "fine hair", "short ponytail", "hair tied back", "short haircut", "simple hairstyle");
    
    shuffle($hairTypes);

    $hair = $hairTypes[0];

    return $hair;
}

function adultFemaleHair ()
{
    $hair = '';

    $hairTypes = array("elegant hairstyle", "stylized hairstyle", "short ponytail", "simple hairstyle", "short coarse hair", "shoulder length hair", "long flowing hair");
    
    shuffle($hairTypes);

    $hair = $hairTypes[0];

    return $hair;
}

function elderFemaleHair ()
{
    $hair = '';

    $hairTypes = array("elegant hairstyle", "stylized hairstyle", "short silver hair", "simple hairstyle", "short coarse hair", "grey shoulder length hair", "long white hair");
    
    shuffle($hairTypes);

    $hair = $hairTypes[0];

    return $hair;
}


function getHairStyle($age, $sex)
{
    $hair = '';

    if($sex === 'Male')
    {
        if($age === 'Youth')
        {
            $hair = youthMaleHair ();
        }
        
        if($age === 'Adult')
        {
            $hair = adultMaleHair ();
        }
        
        if($age === 'Middle Age')
        {
            $hair = middleAgeMaleHair ();
        }
        
        if($age === 'Elder')
        {
            $hair = elderAgeMaleHair ();
        }

    }

    
    if($sex === 'Female')
    {
        
        if($age === 'Youth')
        {
            $hair = youthFemaleHair ();
        }
        
        if($age === 'Adult' || $age === 'Middle Age')
        {
            $hair = adultFemaleHair ();
        }
        
        if($age === 'Elder')
        {
            $hair = elderFemaleHair ();
        }

    }


    return $hair;
}


function maleTraits2 ()
{
    $trait = '';

    $facialFeatures = array("round face", "square jaw", "wolfish features", "catlike features", "hawkish features", "dimples", "cleft chin", "squinty eyes", "flat face", "high forehead", "high cheekbones", "noticeable overbite", "crooked teeth", "dry cracked lips");
    
    shuffle($facialFeatures);

    $trait = $facialFeatures[0];

    return $trait;
}


function femaleTraits2 ()
{
    $trait = '';

    $facialFeatures = array("round face", "catlike features", "hawkish features",  "squinty eyes", "flat face", "high forehead", "high cheekbones", "full lips", "thin lips", "noticeable overbite", "crooked teeth", "dry cracked lips");
    
    shuffle($facialFeatures);

    $trait = $facialFeatures[0];

    return $trait;
}

function getFacialFeatures ($sex)
{
    $features = '';

    if($sex === 'Male')
    {
        $features = maleTraits2 ();
    }
    
    if($sex === 'Female')
    {
        $features = femaleTraits2 ();
    }

    return $features;
}




?>