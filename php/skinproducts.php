<?php
session_start();
 if(!isset($_SESSION ['loggedin'])|| $_SESSION['loggedin'] !=true){
     header("location: login.php");
     exit;
 }



 
?>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/skinproducts.css">
    <title> Skin Solutions - <?php echo $_SESSION['username']  ?> </title>
</head>
<body>

     <div >
         <ul class="menu">
             
            <li><a href="brandsafter.php">Brands</a></li>
            <li><a href="skinproducts.php">Products</a> </li>
            <li><a href="logout.php"> Logout</a></li>
            
         </ul>
        </div>


<br>
<br>
<div class="iframe">
<iframe src="http://localhost:8501/" height="1280" width="1240" ></iframe> 
</div>
  
</body>
</html>