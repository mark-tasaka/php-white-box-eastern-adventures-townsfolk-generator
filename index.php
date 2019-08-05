<!DOCTYPE html>
<html>
<head>
<title>Launch Page: White Box Eastern Adventures Townsfolk Generator</title>
    
	<meta charset="UTF-8">
	<meta name="description" content="">
	<meta name="keywords" content="">
	<meta name="author" content="Mark Tasaka 2019">
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>  
    
	<link rel="stylesheet" href="css/githubMCC.css"/> 
	<link rel="stylesheet" href="css/bf_additions.css"/> 
	<link rel="stylesheet" href="css/bf_additions2.css"/> 
	<link rel="stylesheet" href="css/general.css"/> 
	<link rel="stylesheet" href="css/basic_style.css"/> 

	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta charset="utf-8" />
	

	</head>
	
	
<body>
    

	
	<section>
		
		<h1><img src="images/title.png" alt="White Box Eastern Adventures Townsfolk Generator" class="image" /></h1>
		
				
			
		
                                
                
            <br/>
            <br/>
        
        <p>The ‘White Box: Eastern Adventures’ Non-Player Character (NPC) Townsfolk Generator is designed with PHP to randomly generate a list of 12 Townsfolk.  A series of drop-down menus appear on the Launch Page, providing the user with options for customizing the Townsfolk generated.  POST methods are used to collect the data from the drop-down menus, where the data is sent to townsfolk.php.  Wherever possible, external PHP files have been created to store related functions; thus, aiming to create a program with high cohesion and low coupling, an important principle of object-orientated design.</p>    

        <br/>
        <br/>
            

            
		<form action="" id ="townsfolkForm"  target="_blank" method="post">
            

                    <div class="content1b">
                
                <span class="formIputDescription1b">Name:</span>	
			  <select id="townsfolkName" name="theTownsfolkName" class="">	
				<option value="1" selected>Full Name</option>
				<option value="2">Given Name</option>
				<option value="3">Blank</option>
			  </select>

                               
                <span class="formIputDescription1b">Sex:</span>	
			  <select id="townsfolkSex" name="theTownsfolkSex" class="">	
				<option value="1" selected>Random</option>
				<option value="2">Male</option>
				<option value="3">Female</option>
				<option value="4">Blank</option>
				</select>
				              
				<span class="formIputDescription1b">Age:</span>	
			  <select id="townsfolkAge" name="theAge" class="">	
				<option value="1" selected>Random</option>
				<option value="2">Child (5-11 years)</option>
				<option value="3">Youth (12-18 years</option>
				<option value="4">Adult (19-44 years)</option>
				<option value="5">Middle Age (45-59 years)</option>
				<option value="6">Elder (60+ years)</option>
				</select>
				
				<br/>
				<br/>
                        
                <span class="formIputDescription1b">Personality/Traits:</span>	
			  <select id="personality" name="thePersonality" class="">	
				<option value="1" selected>Random</option>
				<option value="2">Blank</option>
			  </select>

        
            			  
			<div class="generatorButtonA2">
			
			     <span class="generatorbuttonsC1">

				
				 <input type="submit" value="" id="generate_characters3"/>
			     
                </span>
				
			     <span class="generatorbuttonsC1">
				
                     <input type="reset"  value="" id="reset_generator2"/>
		
				</span>
                
		
            </div>
            </div>
            
            
            </form>
            
            
            
                
                
                	
                <script>
        
                    $("#generate_characters3").click(function(){
         
    
                        $("#townsfolkForm").attr('action', "townsfolk/townsfolk.php");
    
                    });
                    
                </script>
      
        
                
    </section>


</body>
</html>