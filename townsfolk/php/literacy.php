<?php

function youthLiteracy ()
{
    $ranNum = rand(0,10);

    $literacy = ' ';

    if($ranNum === 0)
    {
        $literacy = 'Simple-minded and illiterate';
    }
    else if($ranNum >= 1 && $ranNum <= 2)
    {
        $literacy = 'Unable to read or write';
    }
    else if($ranNum >= 3 && $ranNum <= 4)
    {
        $literacy = 'Barely literate';
    }
    else if($ranNum >= 5 && $ranNum <= 7)
    {
        $literacy = 'Can only read and write simple characters';
    }
    else if($ranNum >= 8 && $ranNum <= 10)
    {
        $literacy = 'Able to read and write';
    }

    return $literacy;
    
}

function adultLiteracy()
{
    
    $languagesHuman = array("Bakemono", "Celestial Dialect", "Dark Speech", "Draconic",
    "Kappa", "Feline", "Forest Dialect", "Koropokuru", "Nezumi", "Oceanic",
    "The Old Tongue", "Ogre", "Oni", "Sea Dialect", "Tengu", "The Undying Tongue");

    shuffle($languagesHuman);

    $ranNum = rand(0,18);

    $literacy = ' ';

    if($ranNum === 0)
    {
        $literacy = 'Simple-minded and illiterate';
    }
    else if($ranNum >= 1 && $ranNum <= 2)
    {
        $literacy = 'Unable to read or write';
    }
    else if($ranNum >= 3 && $ranNum <= 4)
    {
        $literacy = 'Barely literate';
    }
    else if($ranNum >= 5 && $ranNum <= 7)
    {
        $literacy = 'Can only read and write simple characters';
    }
    else if($ranNum >= 8 && $ranNum <= 10)
    {
        $literacy = 'Able to read and write';
    }
    else if($ranNum >= 11 && $ranNum <= 12)
    {
        $literacy = 'Able to read and write at an advanced level';
    }
    else if($ranNum >= 13 && $ranNum <= 14)
    {
        $literacy = 'Literate and basic language skills in ' . $languagesHuman[0];
    }
    else if($ranNum >= 15 && $ranNum <= 16)
    {
        $literacy = 'Literate and fluent in ' . $languagesHuman[0];
    }
    else if($ranNum >= 17 && $ranNum <= 18)
    {
        $literacy = 'Literate and fluent in ' . $languagesHuman[0] . ' & ' . $languagesHuman[1];
    }

    return $literacy;

}

function elderLiteracy()
{
    
    $languagesHuman = array("Bakemono", "Celestial Dialect", "Dark Speech", "Draconic",
    "Kappa", "Feline", "Forest Dialect", "Koropokuru", "Nezumi", "Oceanic",
    "The Old Tongue", "Ogre", "Oni", "Sea Dialect", "Tengu", "The Undying Tongue");

    shuffle($languagesHuman);

    $ranNum = rand(0,20);

    $literacy = ' ';

    if($ranNum === 0)
    {
        $literacy = 'Simple-minded and illiterate';
    }
    else if($ranNum >= 1 && $ranNum <= 2)
    {
        $literacy = 'Unable to read or write';
    }
    else if($ranNum >= 3 && $ranNum <= 4)
    {
        $literacy = 'Barely literate';
    }
    else if($ranNum >= 5 && $ranNum <= 7)
    {
        $literacy = 'Can only read and write simple characters';
    }
    else if($ranNum >= 8 && $ranNum <= 10)
    {
        $literacy = 'Able to read and write';
    }
    else if($ranNum >= 11 && $ranNum <= 12)
    {
        $literacy = 'Able to read and write at an advanced level';
    }
    else if($ranNum >= 13 && $ranNum <= 14)
    {
        $literacy = 'Literate and basic language skills in ' . $languagesHuman[0];
    }
    else if($ranNum >= 15 && $ranNum <= 16)
    {
        $literacy = 'Literate and fluent in ' . $languagesHuman[0];
    }
    else if($ranNum >= 17 && $ranNum <= 18)
    {
        $literacy = 'Literate and fluent in ' . $languagesHuman[0] . ' & ' . $languagesHuman[1];
    }
    else if($ranNum >= 19 && $ranNum <= 20)
    {
        $literacy = 'Confused speech as a result of onset of dementia';
    }

    return $literacy;

}

function getLiteracy ($ageGroup)
{
    $literacy = ' ';

    if($ageGroup === 'Youth')
    {
        $literacy = youthLiteracy ();
    }
    else if($ageGroup === 'Adult' || $ageGroup === 'Middle Age')
    {
        $literacy = adultLiteracy ();
    }
    else if($ageGroup === 'Elder')
    {
        $literacy = elderLiteracy ();
    }

    return $literacy;
}


?>