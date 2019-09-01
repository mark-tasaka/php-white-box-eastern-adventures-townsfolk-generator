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



function physicalTraits3AdultMale ()
{
    $trait = '';

    $features = array("rough callused hands", "missing index finger", "missing little finger",  "has a noticeable birthmark on left cheek", "has a noticeable birthmark on right cheek", "a serious expression", "a pleasant smile", "a silly grin", "a carefree way of walking", "ink stained hands", "a tired expression", "walks with a slight limp", "walks with a noticeable limp", "has oily skin", "a confident way of walking", "an authoritarian presence", "a sinister expression", "a gruff expression");
    
    shuffle($features);

    $trait = $features[0];

    return $trait;

}


function physicalTraits3AdultFemale ()
{
    $trait = '';

    $features = array("a beauty mark on left cheek", "small delicate fingers", "well manicured hands",  "has a noticeable birthmark on left cheek", "has a noticeable birthmark on right cheek", "a serious expression", "a pleasant smile", "a silly grin", "a carefree way of walking", "ink stained hands", "a tired expression", "walks with a slight limp", "soft fair skin", "has oily skin", "a confident way of walking", "an authoritarian presence", "a sinister expression", "scent of strong perfume", "wears excessive makeup");
    
    shuffle($features);

    $trait = $features[0];

    return $trait;

}


function physicalTraits3Youth ()
{
    $trait = '';

    $features = array("cheerful expression", "mischievous smile", "pleasant smile", "silly grin", "carefree way of walking", "mild acne", "severe acne", "rosy red cheeks");
    
    shuffle($features);

    $trait = $features[0];

    return $trait;

}

function physicalTraits3Elder ()
{
    $trait = '';

    $features = array("haggard look", "weather-worn tanned skin", "crooked fingers",  "has a noticeable birthmark on left cheek", "has a noticeable birthmark on right cheek", "a serious expression", "a pleasant smile", "a silly grin", "a carefree way of walking", "lethargic way of walking", "a tired expression", "walks with a slight limp", "walks with a noticeable limp", "misshapen fingers", "seasoned winkled skin", "an authoritarian presence", "dry leathery skin", "a gruff expression");
    
    shuffle($features);

    $trait = $features[0];

    return $trait;

}




function getPhysicalTraits3 ($sex, $age)
{
    $trait = '';

    if($sex === 'Male')
    {
        if($age === 'Youth')
        {
            $trait = physicalTraits3Youth ();
        }
        
        if($age === 'Adult' || $age === 'Middle Age')
        {
            $trait = physicalTraits3AdultMale ();
        }
        
        if($age === 'Elder')
        {
            $trait = physicalTraits3Elder ();
        }
    }
    
    if($sex === 'Female')
    {
        if($age === 'Youth')
        {
            $trait = physicalTraits3Youth ();
        }
        
        if($age === 'Adult' || $age === 'Middle Age')
        {
            $trait = physicalTraits3AdultFemale ();
        }
        
        if($age === 'Elder')
        {
            $trait = physicalTraits3Elder ();
        }
    }
    
    return $trait;
}




?>