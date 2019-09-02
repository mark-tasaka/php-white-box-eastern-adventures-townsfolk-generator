<!DOCTYPE html>
<html>
<head>
<title>Townsfolk: White Box Eastern Adventures</title>
 
 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    
	<meta charset="UTF-8">
	<meta name="description" content="Townsfolk: White Box Eastern Adventures Generator. Tasaka Games.">
	<meta name="keywords" content="Townsfolk: White Box Eastern Adventures, Tasaka Games,HTML5,CSS,JavaScript">
	<meta name="author" content="Mark Tasaka 2019">
		

	<link rel="stylesheet" type="text/css" href="css/townsfolk.css">

    
    
</head>

    <body>
    
    <!--- php --->
        
        <?php
        
        include 'php/hitPoints.php';
        include 'php/save.php';
        include 'php/sex.php';
        include 'php/names.php';
        include 'php/personality.php';
        include 'php/age.php';
        include 'php/heightWeight.php';
        include 'php/literacy.php';
        include 'php/hitDice.php';
        include 'php/physicalTraits.php';
        
        
        
        if(isset($_POST["theTownsfolkSex"]))
        {
            $sexOption = $_POST["theTownsfolkSex"];
    
        }
        
        if(isset($_POST["theTownsfolkName"]))
        {
            $nameOption = $_POST["theTownsfolkName"];
    
        }
        
        if(isset($_POST["thePersonality"]))
        {
            $personalityOption = $_POST["thePersonality"];
    
        }

        
        if(isset($_POST["theAge"]))
        {
            $ageOption = $_POST["theAge"];
    
        }
        
        $characterSheet = 'townsfolk.png';
        
        
        
        $sex0 = getSex($sexOption);
        $sex1 = getSex($sexOption);
        $sex2 = getSex($sexOption);
        $sex3 = getSex($sexOption);
        $sex4 = getSex($sexOption);
        $sex5 = getSex($sexOption);
        $sex6 = getSex($sexOption);
        $sex7 = getSex($sexOption);
        $sex8 = getSex($sexOption);
        $sex9 = getSex($sexOption);
        $sex10 = getSex($sexOption);
        $sex11 = getSex($sexOption);
        
        $displaySex0 = showSex($sex0, $sexOption);
        $displaySex1 = showSex($sex1, $sexOption);
        $displaySex2 = showSex($sex2, $sexOption);
        $displaySex3 = showSex($sex3, $sexOption);
        $displaySex4 = showSex($sex4, $sexOption);
        $displaySex5 = showSex($sex5, $sexOption);
        $displaySex6 = showSex($sex6, $sexOption);
        $displaySex7 = showSex($sex7, $sexOption);
        $displaySex8 = showSex($sex8, $sexOption);
        $displaySex9 = showSex($sex9, $sexOption);
        $displaySex10 = showSex($sex10, $sexOption);
        $displaySex11 = showSex($sex11, $sexOption);
        
        $townsfolkName0 = getName ($nameOption, $sex0);
        $townsfolkName1 = getName ($nameOption, $sex1);
        $townsfolkName2 = getName ($nameOption, $sex2);
        $townsfolkName3 = getName ($nameOption, $sex3);
        $townsfolkName4 = getName ($nameOption, $sex4);
        $townsfolkName5 = getName ($nameOption, $sex5);
        $townsfolkName6 = getName ($nameOption, $sex6);
        $townsfolkName7 = getName ($nameOption, $sex7);
        $townsfolkName8 = getName ($nameOption, $sex8);
        $townsfolkName9 = getName ($nameOption, $sex9);
        $townsfolkName10 = getName ($nameOption, $sex10);
        $townsfolkName11 = getName ($nameOption, $sex11);
        
        $townsfolkPersonality0 = getPersonality ($personalityOption);
        $townsfolkPersonality1 = getPersonality ($personalityOption);
        $townsfolkPersonality2 = getPersonality ($personalityOption);
        $townsfolkPersonality3 = getPersonality ($personalityOption);
        $townsfolkPersonality4 = getPersonality ($personalityOption);
        $townsfolkPersonality5 = getPersonality ($personalityOption);
        $townsfolkPersonality6 = getPersonality ($personalityOption);
        $townsfolkPersonality7 = getPersonality ($personalityOption);
        $townsfolkPersonality8 = getPersonality ($personalityOption);
        $townsfolkPersonality9 = getPersonality ($personalityOption);
        $townsfolkPersonality10 = getPersonality ($personalityOption);
        $townsfolkPersonality11 = getPersonality ($personalityOption);

        $armourClass0 = '9 [10]';
        $armourClass1 = '9 [10]';
        $armourClass2 = '9 [10]';
        $armourClass3 = '9 [10]';
        $armourClass4 = '9 [10]';
        $armourClass5 = '9 [10]';
        $armourClass6 = '9 [10]';
        $armourClass7 = '9 [10]';
        $armourClass8 = '9 [10]';
        $armourClass9 = '9 [10]';
        $armourClass10 = '9 [10]';
        $armourClass11 = '9 [10]';

        $speed0 = 12;
        $speed1 = 12;
        $speed2 = 12;
        $speed3 = 12;
        $speed4 = 12;
        $speed5 = 12;
        $speed6 = 12;
        $speed7 = 12;
        $speed8 = 12;
        $speed9 = 12;
        $speed10 = 12;
        $speed11 = 12;

        $ageCat0 = getAgeCat($ageOption);
        $ageCat1 = getAgeCat($ageOption);
        $ageCat2 = getAgeCat($ageOption);
        $ageCat3 = getAgeCat($ageOption);
        $ageCat4 = getAgeCat($ageOption);
        $ageCat5 = getAgeCat($ageOption);
        $ageCat6 = getAgeCat($ageOption);
        $ageCat7 = getAgeCat($ageOption);
        $ageCat8 = getAgeCat($ageOption);
        $ageCat9 = getAgeCat($ageOption);
        $ageCat10 = getAgeCat($ageOption);
        $ageCat11 = getAgeCat($ageOption);

        $age0 = getAge ($ageCat0);
        $age1 = getAge ($ageCat1);
        $age2 = getAge ($ageCat2);
        $age3 = getAge ($ageCat3);
        $age4 = getAge ($ageCat4);
        $age5 = getAge ($ageCat5);
        $age6 = getAge ($ageCat6);
        $age7 = getAge ($ageCat7);
        $age8 = getAge ($ageCat8);
        $age9 = getAge ($ageCat9);
        $age10 = getAge ($ageCat10);
        $age11 = getAge ($ageCat11);


        $group0 = getSizeGroup ();
        $group1 = getSizeGroup ();
        $group2 = getSizeGroup ();
        $group3 = getSizeGroup ();
        $group4 = getSizeGroup ();
        $group5 = getSizeGroup ();
        $group6 = getSizeGroup ();
        $group7 = getSizeGroup ();
        $group8 = getSizeGroup ();
        $group9 = getSizeGroup ();
        $group10 = getSizeGroup ();
        $group11 = getSizeGroup ();

        $groupMod0 = getSizeCat($group0, $ageCat0, $sex0);
        $groupMod1 = getSizeCat($group1, $ageCat1, $sex1);
        $groupMod2 = getSizeCat($group2, $ageCat2, $sex2);
        $groupMod3 = getSizeCat($group3, $ageCat3, $sex3);
        $groupMod4 = getSizeCat($group4, $ageCat4, $sex4);
        $groupMod5 = getSizeCat($group5, $ageCat5, $sex5);
        $groupMod6 = getSizeCat($group6, $ageCat6, $sex6);
        $groupMod7 = getSizeCat($group7, $ageCat7, $sex7);
        $groupMod8 = getSizeCat($group8, $ageCat8, $sex8);
        $groupMod9 = getSizeCat($group9, $ageCat9, $sex9);
        $groupMod10 = getSizeCat($group10, $ageCat10, $sex10);
        $groupMod11 = getSizeCat($group11, $ageCat11, $sex11);

        $height0 = getHeight($groupMod0);
        $height1 = getHeight($groupMod1);
        $height2 = getHeight($groupMod2);
        $height3 = getHeight($groupMod3);
        $height4 = getHeight($groupMod4);
        $height5 = getHeight($groupMod5);
        $height6 = getHeight($groupMod6);
        $height7 = getHeight($groupMod7);
        $height8 = getHeight($groupMod8);
        $height9 = getHeight($groupMod9);
        $height10 = getHeight($groupMod10);
        $height11 = getHeight($groupMod11);

        $baseWeight0 = baseWeight($groupMod0, $sex0, $ageCat0);
        $baseWeight1 = baseWeight($groupMod1, $sex1, $ageCat1);
        $baseWeight2 = baseWeight($groupMod2, $sex2, $ageCat2);
        $baseWeight3 = baseWeight($groupMod3, $sex3, $ageCat3);
        $baseWeight4 = baseWeight($groupMod4, $sex4, $ageCat4);
        $baseWeight5 = baseWeight($groupMod5, $sex5, $ageCat5);
        $baseWeight6 = baseWeight($groupMod6, $sex6, $ageCat6);
        $baseWeight7 = baseWeight($groupMod7, $sex7, $ageCat7);
        $baseWeight8 = baseWeight($groupMod8, $sex8, $ageCat8);
        $baseWeight9 = baseWeight($groupMod9, $sex9, $ageCat9);
        $baseWeight10 = baseWeight($groupMod10, $sex10, $ageCat10);
        $baseWeight11 = baseWeight($groupMod11, $sex11, $ageCat11);

        $weightGroup0 = getWeightGroup ($ageCat0);
        $weightGroup1 = getWeightGroup ($ageCat1);
        $weightGroup2 = getWeightGroup ($ageCat2);
        $weightGroup3 = getWeightGroup ($ageCat3);
        $weightGroup4 = getWeightGroup ($ageCat4);
        $weightGroup5 = getWeightGroup ($ageCat5);
        $weightGroup6 = getWeightGroup ($ageCat6);
        $weightGroup7 = getWeightGroup ($ageCat7);
        $weightGroup8 = getWeightGroup ($ageCat8);
        $weightGroup9 = getWeightGroup ($ageCat9);
        $weightGroup10 = getWeightGroup ($ageCat10);
        $weightGroup11 = getWeightGroup ($ageCat11);

        $weight0 = getWeight($baseWeight0, $weightGroup0, $groupMod0);
        $weight1 = getWeight($baseWeight1, $weightGroup1, $groupMod1);
        $weight2 = getWeight($baseWeight2, $weightGroup2, $groupMod2);
        $weight3 = getWeight($baseWeight3, $weightGroup3, $groupMod3);
        $weight4 = getWeight($baseWeight4, $weightGroup4, $groupMod4);
        $weight5 = getWeight($baseWeight5, $weightGroup5, $groupMod5);
        $weight6 = getWeight($baseWeight6, $weightGroup6, $groupMod6);
        $weight7 = getWeight($baseWeight7, $weightGroup7, $groupMod7);
        $weight8 = getWeight($baseWeight8, $weightGroup8, $groupMod8);
        $weight9 = getWeight($baseWeight9, $weightGroup9, $groupMod9);
        $weight10 = getWeight($baseWeight10, $weightGroup10, $groupMod10);
        $weight11 = getWeight($baseWeight11, $weightGroup11, $groupMod11);

        $bodyTypeDescription0 = getBodyDescription ($weightGroup0, $ageCat0, $sex0);
        $bodyTypeDescription1 = getBodyDescription ($weightGroup1, $ageCat1, $sex1);
        $bodyTypeDescription2 = getBodyDescription ($weightGroup2, $ageCat2, $sex2);
        $bodyTypeDescription3 = getBodyDescription ($weightGroup3, $ageCat3, $sex3);
        $bodyTypeDescription4 = getBodyDescription ($weightGroup4, $ageCat4, $sex4);
        $bodyTypeDescription5 = getBodyDescription ($weightGroup5, $ageCat5, $sex5);
        $bodyTypeDescription6 = getBodyDescription ($weightGroup6, $ageCat6, $sex6);
        $bodyTypeDescription7 = getBodyDescription ($weightGroup7, $ageCat7, $sex7);
        $bodyTypeDescription8 = getBodyDescription ($weightGroup8, $ageCat8, $sex8);
        $bodyTypeDescription9 = getBodyDescription ($weightGroup9, $ageCat9, $sex9);
        $bodyTypeDescription10 = getBodyDescription ($weightGroup10, $ageCat10, $sex10);
        $bodyTypeDescription11 = getBodyDescription ($weightGroup11, $ageCat11, $sex11);

        $hitDiceCat0 = getHitDiceCat($ageCat0);
        $hitDiceCat1 = getHitDiceCat($ageCat1);
        $hitDiceCat2 = getHitDiceCat($ageCat2);
        $hitDiceCat3 = getHitDiceCat($ageCat3);
        $hitDiceCat4 = getHitDiceCat($ageCat4);
        $hitDiceCat5 = getHitDiceCat($ageCat5);
        $hitDiceCat6 = getHitDiceCat($ageCat6);
        $hitDiceCat7 = getHitDiceCat($ageCat7);
        $hitDiceCat8 = getHitDiceCat($ageCat8);
        $hitDiceCat9 = getHitDiceCat($ageCat9);
        $hitDiceCat10 = getHitDiceCat($ageCat10);
        $hitDiceCat11 = getHitDiceCat($ageCat11);

        $hitDice0 = hitDiceDesc ($hitDiceCat0);
        $hitDice1 = hitDiceDesc ($hitDiceCat1);
        $hitDice2 = hitDiceDesc ($hitDiceCat2);
        $hitDice3 = hitDiceDesc ($hitDiceCat3);
        $hitDice4 = hitDiceDesc ($hitDiceCat4);
        $hitDice5 = hitDiceDesc ($hitDiceCat5);
        $hitDice6 = hitDiceDesc ($hitDiceCat6);
        $hitDice7 = hitDiceDesc ($hitDiceCat7);
        $hitDice8 = hitDiceDesc ($hitDiceCat8);
        $hitDice9 = hitDiceDesc ($hitDiceCat9);
        $hitDice10 = hitDiceDesc ($hitDiceCat10);
        $hitDice11 = hitDiceDesc ($hitDiceCat11);

        $hitPoints0 = getHitPoints ($hitDice0);
        $hitPoints1 = getHitPoints ($hitDice1);
        $hitPoints2 = getHitPoints ($hitDice2);
        $hitPoints3 = getHitPoints ($hitDice3);
        $hitPoints4 = getHitPoints ($hitDice4);
        $hitPoints5 = getHitPoints ($hitDice5);
        $hitPoints6 = getHitPoints ($hitDice6);
        $hitPoints7 = getHitPoints ($hitDice7);
        $hitPoints8 = getHitPoints ($hitDice8);
        $hitPoints9 = getHitPoints ($hitDice9);
        $hitPoints10 = getHitPoints ($hitDice10);
        $hitPoints11 = getHitPoints ($hitDice11);

        $save0 = getSave ($hitDiceCat0);
        $save1 = getSave ($hitDiceCat1);
        $save2 = getSave ($hitDiceCat2);
        $save3 = getSave ($hitDiceCat3);
        $save4 = getSave ($hitDiceCat4);
        $save5 = getSave ($hitDiceCat5);
        $save6 = getSave ($hitDiceCat6);
        $save7 = getSave ($hitDiceCat7);
        $save8 = getSave ($hitDiceCat8);
        $save9 = getSave ($hitDiceCat9);
        $save10 = getSave ($hitDiceCat10);
        $save11 = getSave ($hitDiceCat11);

        $literacy0 = getLiteracy ($ageCat0);
        $literacy1 = getLiteracy ($ageCat1);
        $literacy2 = getLiteracy ($ageCat2);
        $literacy3 = getLiteracy ($ageCat3);
        $literacy4 = getLiteracy ($ageCat4);
        $literacy5 = getLiteracy ($ageCat5);
        $literacy6 = getLiteracy ($ageCat6);
        $literacy7 = getLiteracy ($ageCat7);
        $literacy8 = getLiteracy ($ageCat8);
        $literacy9 = getLiteracy ($ageCat9);
        $literacy10 = getLiteracy ($ageCat10);
        $literacy11 = getLiteracy ($ageCat11);

        $hair0 = getHairStyle($ageCat0, $sex0);
        $hair1 = getHairStyle($ageCat1, $sex1);
        $hair2 = getHairStyle($ageCat2, $sex2);
        $hair3 = getHairStyle($ageCat3, $sex3);
        $hair4 = getHairStyle($ageCat4, $sex4);
        $hair5 = getHairStyle($ageCat5, $sex5);
        $hair6 = getHairStyle($ageCat6, $sex6);
        $hair7 = getHairStyle($ageCat7, $sex7);
        $hair8 = getHairStyle($ageCat8, $sex8);
        $hair9 = getHairStyle($ageCat9, $sex9);
        $hair10 = getHairStyle($ageCat10, $sex10);
        $hair11 = getHairStyle($ageCat11, $sex11);

        $face0 = getFacialFeatures ($sex0);
        $face1 = getFacialFeatures ($sex1);
        $face2 = getFacialFeatures ($sex2);
        $face3 = getFacialFeatures ($sex3);
        $face4 = getFacialFeatures ($sex4);
        $face5 = getFacialFeatures ($sex5);
        $face6 = getFacialFeatures ($sex6);
        $face7 = getFacialFeatures ($sex7);
        $face8 = getFacialFeatures ($sex8);
        $face9 = getFacialFeatures ($sex9);
        $face10 = getFacialFeatures ($sex10);
        $face11 = getFacialFeatures ($sex11);

        $traits0 = getPhysicalTraits3 ($sex0, $ageCat0);
        $traits1 = getPhysicalTraits3 ($sex1, $ageCat1);
        $traits2 = getPhysicalTraits3 ($sex2, $ageCat2);
        $traits3 = getPhysicalTraits3 ($sex3, $ageCat3);
        $traits4 = getPhysicalTraits3 ($sex4, $ageCat4);
        $traits5 = getPhysicalTraits3 ($sex5, $ageCat5);
        $traits6 = getPhysicalTraits3 ($sex6, $ageCat6);
        $traits7 = getPhysicalTraits3 ($sex7, $ageCat7);
        $traits8 = getPhysicalTraits3 ($sex8, $ageCat8);
        $traits9 = getPhysicalTraits3 ($sex9, $ageCat9);
        $traits10 = getPhysicalTraits3 ($sex10, $ageCat10);
        $traits11 = getPhysicalTraits3 ($sex11, $ageCat11);
        
        
        ?>
        
        <!-- html id tags -->
        
        
  <img id="character_sheet"/>
        
        <aside id="left1">
  
            
            <span id="sex0">
                <?php
                
                echo $displaySex0;
                
                ?>
            </span>
            
            
            <span id="name0">
                <?php
                
                echo $townsfolkName0;
                
                ?>
            </span>
            
            
            <span id="personality0">
                <?php
                
                echo $townsfolkPersonality0;
                
                ?>
            </span>

            <span id="ac0">
                <?php
                
                echo $armourClass0;
                
                ?>
            </span>

            <span id="move0">
                <?php
                
                echo $speed0;
                
                ?>
            </span>

            
            <span id="age0">
                <?php
                
                echo $age0 . ' (' . $ageCat0 . ')';
                
                ?>
            </span>

            
            <span id="height0">
                <?php
                echo $height0;
                ?>
            </span>

            

            <span id="weight0">
                <?php
                echo  $weight0 . ' lb.';
                ?>
            </span>
            
            <span id="physical0">
                <?php
                echo $bodyTypeDescription0 . ', ' . $hair0 . ', ' . $face0 . ' & ' . $traits0;
                ?>
            </span>

            
            <span id="hitDice0">
                <?php
                echo $hitDice0;
                ?>
            </span>
            
            <span id="hp0">
                <?php
                echo $hitPoints0;
                ?>
            </span>
            
            <span id="save0">
                <?php
                echo $save0;
                ?>
            </span>

            <span id="literacy0">
                <?php
                echo $literacy0;
                ?>
            </span>

        </aside>

        <!-- right 1 -->
        <aside id="right1">
            
                        
            <span id="sex1">
                <?php
                
                echo $displaySex1;
                
                ?>
            </span>
            
            
            <span id="name1">
                <?php
                
                echo $townsfolkName1;
                
                ?>
            </span>
            
            
            <span id="personality1">
                <?php
                
                echo $townsfolkPersonality1;
                
                ?>
            </span>

            <span id="ac1">
                <?php
                
                echo $armourClass1;
                
                ?>
            </span>

            <span id="move1">
                <?php
                
                echo $speed1;
                
                ?>
            </span>

            
            <span id="age1">
                <?php
                
                echo $age1 . ' (' . $ageCat1 . ')';
                
                ?>
            </span>

            
            <span id="height1">
                <?php
                echo $height1;
                ?>
            </span>

            

            <span id="weight1">
                <?php
                echo  $weight1 . ' lb.';
                ?>
            </span>
            
            <span id="physical1">
                <?php
                echo $bodyTypeDescription1 . ', ' . $hair1 . ', ' . $face1 . ' & ' . $traits1;
                ?>
            </span>

            
            <span id="hitDice1">
                <?php
                echo $hitDice1;
                ?>
            </span>
            
            <span id="hp1">
                <?php
                echo $hitPoints1;
                ?>
            </span>
            
            <span id="save1">
                <?php
                echo $save1;
                ?>
            </span>

            <span id="literacy1">
                <?php
                echo $literacy1;
                ?>
            </span>

        </aside>
        
        
        <!-- left 2 -->
        <aside id="left2">
            
                        
            <span id="sex2">
                <?php
                
                echo $displaySex2;
                
                ?>
            </span>
            
            
            <span id="name2">
                <?php
                
                echo $townsfolkName2;
                
                ?>
            </span>
            
            
            <span id="personality2">
                <?php
                
                echo $townsfolkPersonality2;
                
                ?>
            </span>

            <span id="ac2">
                <?php
                
                echo $armourClass2;
                
                ?>
            </span>

            <span id="move2">
                <?php
                
                echo $speed2;
                
                ?>
            </span>

            
            <span id="age2">
                <?php
                
                echo $age2 . ' (' . $ageCat2 . ')';
                
                ?>
            </span>

            
            <span id="height2">
                <?php
                echo $height2;
                ?>
            </span>

            

            <span id="weight2">
                <?php
                echo  $weight2 . ' lb.';
                ?>
            </span>
            
            <span id="physical2">
                <?php
                echo $bodyTypeDescription2 . ', ' . $hair2 . ', ' . $face2 . ' & ' . $traits2;
                ?>
            </span>

            
            <span id="hitDice2">
                <?php
                echo $hitDice2;
                ?>
            </span>
            
            <span id="hp2">
                <?php
                echo $hitPoints2;
                ?>
            </span>
            
            <span id="save2">
                <?php
                echo $save2;
                ?>
            </span>

            <span id="literacy2">
                <?php
                echo $literacy2;
                ?>
            </span>

        </aside>
        
        
        
        <!-- JavaScript -->
        <script>
            
            
       let imgData = "images/<?php echo $characterSheet; ?>";
      
        $("#character_sheet").attr("src", imgData);
        
        </script>
    
    </body>
    
</html>