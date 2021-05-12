<?php
session_start();
 if(!isset($_SESSION ['loggedin'])|| $_SESSION['loggedin'] !=true){
     header("location: login.php");
     exit;
 }

?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/quiz.css">
    <title> Skin Solutions - <?php echo $_SESSION['username']  ?> </title>
</head>
<body>
<header class= "site-header">
   <nav class="navbar">
   <div class="logo"> 
        <img src="../img/logo.jpg">
     </div>
     <div >
         <ul class="menu">
             
            <li><a href="brandsafter.php">Brands</a></li>
            <li><a href="skinproducts.php">Products</a> </li>
            <li><a href="logout.php"> Logout</a></li>
            
         </ul>
        </div>
        </nav>
    <div>
 
   

<section>
<div class ="leftside" >
     
     </div>
 <div class="rightside">
 <div class="head">
<h1>Skin type determining quiz!!!</h1>
</div>
 <div id="page-wrap">

<form action="process.php" method="post" id="quiz">

	<ol>
	
		<li>
		
			<h3>How would you typically describe your skin?</h3>
			
			<div>
				<input type="radio" name="question-1-answers" id="question-1-answers-A" value="A" />
				<label for="question-1-answers-A">A) Dry and rough. </label>
			</div>
			
			<div>
				<input type="radio" name="question-1-answers" id="question-1-answers-B" value="B" />
				<label for="question-1-answers-B">B) Constantly changing.</label>
			</div>
			
			<div>
				<input type="radio" name="question-1-answers" id="question-1-answers-C" value="C" />
				<label for="question-1-answers-C">C) Shiny. I'm constantly blotting away excess oil.</label>
			</div>
			
			<div>
				<input type="radio" name="question-1-answers" id="question-1-answers-D" value="D" />
				<label for="question-1-answers-D">D) It's fairly normal. I have no complain.</label>
			</div>
		
		</li>
		
		<li>
		
			<h3>Do you frequently break out?</h3>
			
			<div>
				<input type="radio" name="question-2-answers" id="question-2-answers-A" value="A" />
				<label for="question-2-answers-A">A) Only on my T-zone.</label>
			</div>
			
			<div>
				<input type="radio" name="question-2-answers" id="question-2-answers-B" value="B" />
				<label for="question-2-answers-B">B) Yes, all over my face.</label>
			</div>
			
			<div>
				<input type="radio" name="question-2-answers" id="question-2-answers-C" value="C" />
				<label for="question-2-answers-C">C) No, I have mostly clear skin.</label>
			</div>
			
			
		
		</li>
		
		<li>
		
			<h3>What is your biggest skincare concern?</h3>
			
			<div>
				<input type="radio" name="question-3-answers" id="question-3-answers-A" value="A" />
				<label for="question-3-answers-A">A) Acne.</label>
			</div>
			
			<div>
				<input type="radio" name="question-3-answers" id="question-3-answers-B" value="B" />
				<label for="question-3-answers-B">B) Depends on the day.</label>
			</div>
			
			<div>
				<input type="radio" name="question-3-answers" id="question-3-answers-C" value="C" />
				<label for="question-3-answers-C">C) None.</label>
			</div>
			
			<div>
				<input type="radio" name="question-3-answers" id="question-3-answers-D" value="D" />
				<label for="question-3-answers-D">D) Dry patches and flakiness.</label>
			</div>
		
		</li>
		
		<li>
		
			<h3>Would you describe your skin as sensitive?</h3>
			
			<div>
				<input type="radio" name="question-4-answers" id="question-4-answers-A" value="A" />
				<label for="question-4-answers-A">A) Yes, I have to be careful which products I use.</label>
			</div>
			
			<div>
				<input type="radio" name="question-4-answers" id="question-4-answers-B" value="B" />
				<label for="question-4-answers-B">B) No, my skin doesn't aggravate easily.</label>
			</div>
			
			<div>
				<input type="radio" name="question-4-answers" id="question-4-answers-C" value="C" />
				<label for="question-4-answers-C">C) Depends on day and area of skin on my face.</label>
			</div>
			
			
		</li>
	
	</ol>
	
	<input type="submit" value="Submit" class="submitbtn" />

</form>

</div>

     </div>
</section>
	
    </header>



    
</body>
</html>