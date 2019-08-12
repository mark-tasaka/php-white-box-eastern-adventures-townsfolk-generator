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

        $groupMod0 = getSizeCat($group0, $ageCat0, $sex0);

        $height0 = getHeight($groupMod0);

        $baseWeight0 = baseWeight($groupMod0, $sex0, $ageCat0);

        $weightGroup0 = getWeightGroup ($ageCat0);

        $weight0 = getWeight($baseWeight0, $weightGroup0, $groupMod0);
        
        
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
                echo  $weight0 . ' lb. ' . '('. $weightGroup0 . ')';
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