<?php
session_start();
 if(!isset($_SESSION ['loggedin'])|| $_SESSION['loggedin'] !=true){
     header("location: php/login.php");
     exit;
 }

?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/welcome.css">
    <title> Skin Solutions - <?php echo $_SESSION['username']  ?> </title>
</head>
<body>
<header class= "site-header">
   <nav class="navbar">
       
     <div class="logo"> 
        <img src="img/logo.jpg">
     </div>
     <div >
        
         <ul class="menu1">
             
            <li><a href="php/brandsafter.php">Brands</a></li>
            <li><a href="php/skinproducts.php">Products</a> </li>
           
            <li><a href="php/logout.php"> Logout</a></li>
            
         </ul>

        </div>
        </nav>
<section>
    <div class ="leftside" >
     
    </div>
    <div class="rightside">
        <h1>WELCOME</h1>

        <p>  <?php echo $_SESSION['username'] ?>
        <br> <br>Know your skin type.</p>
        <button> <a href="php/quiz.php? n=1" class="start">Get Started </button></a>
    </div>
</section>
 </header>
   



    
</body>
</html>