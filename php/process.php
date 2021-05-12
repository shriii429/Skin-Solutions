<!DOCTYPE html>
<!--code by webdevtrick (webdevtrick.com) -->
<html>
 
<head>
 <meta charset=UTF-8" />
 

 
 <link rel="stylesheet" type="text/css" href="../css/afterresult.css" />
</head>
 
<body>
 

 <div id="page-wrap">
 

 <div >
 <header class= "site-header">
 <nav class="navbar">
         <ul class="menu">
             
            <li><a href="brandsafter.php">Brands</a></li>
            <li><a href="skinproducts.php">Products</a> </li>
            <li><a href="logout.php"> Logout</a></li>
            
         </ul>
        </div>
</nav>
		<div class="tit">
	 <h1 style="text-align:left;"><font size="7">Result</font></h1> 
		 </div>
</div>	
</header>
    <div>
        <?php
           	 

				
            $answer1 = $_POST['question-1-answers'];
            $answer2 = $_POST['question-2-answers'];
            $answer3 = $_POST['question-3-answers'];
            $answer4 = $_POST['question-4-answers'];
            
         

			if (($answer1 == "A" && $answer2 ==  "A" && $answer3 == "A" && $answer4 == "A") || 
			($answer1 == "B" && $answer2 ==  "A" && $answer3 == "A" && $answer4 == "A" ) || 
			($answer1 == "B" && $answer2 ==  "B" && $answer3 == "A"&& $answer4 == "B" )||
			($answer1 == "C" && $answer2 ==  "A" && $answer3 == "A"&& $answer4 == "A" )
			){
				echo' 
				<div>
    			<strong><font size="4"><p style="color: black;">"Your Skintype Is OILY.<br> <br> i.e. Your have OILY skin type according to this quiz."
				</p></strong> </font>
    			<br>
				</div>';
				
			
			}
			
			else if (($answer1 == "A" && $answer2 ==  "B" && $answer3 = "B" &&$answer4 = "A") || 
			($answer1 == "A" && $answer2 ==  "B" && $answer3 == "B" &&$answer4 == "B" ) ||
			 ($answer1 == "A" && $answer2 ==  "A" && $answer3 == "B"&& $answer4 == "A" ) || 
			 ($answer1 == "D" && $answer2 ==  "C" && $answer3 == "D"&& $answer4 == "C" )||
			 ($answer1 == "C" && $answer2 ==  "B" && $answer3 == "A"&& $answer4 == "A" )||
			 ($answer1 == "B" && $answer2 ==  "C" && $answer3 == "D"&& $answer4 == "A" )||
			 ($answer1 == "B" && $answer2 ==  "B" && $answer3 == "B"&& $answer4 == "B" ))
			 {
			
				echo' 
				<div>
    			<strong><font size="4"><p style="color: black;">"Your Skintype Is COMBINATION.<br> <br> i.e. Your have COMBINATION skin type according to this quiz."
				</p></strong> </font>
    			<br>
				</div>';
				
			
			}
			
			else if (($answer1 == "A" && $answer2 ==  "C" && $answer3 == "D" && $answer4 == "C") || 
			($answer1 == "D" && $answer2 ==  "A" && $answer3 == "C"&& $answer4 == "B" ) ||
			($answer1 == "D" && $answer2 ==  "A" && $answer3 == "D" && $answer4 == "B" )){

				echo' 
				<div>
    			<strong><font size="4"><p style="color: black;">"Your Skintype Is DRY.<br> <br> i.e. Your have DRY skin type according to this quiz."
				</p></strong> </font>
    			<br>
				</div>';
			
			}
			else if (($answer1 == "A" && $answer2 ==  "C" && $answer3 = "C" && $answer4 = "C") || 
			 ($answer1 == "B" && $answer2 ==  "B" && $answer3 == "C" && $answer4 == "A" ) ||   
			 ($answer1 == "D" && $answer2 ==  "A" && $answer3 == "C"&& $answer4 =="A" ) ||   
			 ($answer1 == "B" && $answer2 ==  "C" && $answer3 == "C"&& $answer4 == "C" ) ||  
			 ($answer1 == "D" && $answer2 ==  "C" && $answer3 == "C" && $answer4 == "B" ) || 
			 ($answer1 == "D" && $answer2 ==  "C" && $answer3 == "C" && $answer4 == "A" ))   
                        {
							echo' 
								<div>
    							<strong><font size="4"><p style="color: black;">"Your Skintype Is NORMAL.<br> <br> i.e. Your have NORMAL skin type according to this quiz."
								</p></strong> </font>
								</div>';
						

							}

			else{
					echo ("Your skin type might be other than Oily, Combination, Dry and Normal.
					<br> <br>
					 As there are many types of skin type present. Our quiz only shows four skin types.");
					}
			
		
				
        ?>
 
 

 <div class="btn">
 <button> <a href="skinproducts.php" class="start">Find similar products for your skin type!!! </button></a>
 </div>
 <div class="type"> 
        <img src="../img/type.png"> 
     </div>

</body>
 
</html>