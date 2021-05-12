<?php
 $showAlert= false;
if($_SERVER["REQUEST_METHOD"]== "POST"){
  include '../database/_dbconnect.php';
 if (!empty ($username)){
  $fullname = $_POST['fullname'];
  $username = $_POST['username'];
  $email = $_POST['email'];
  $gender = $_POST['gender'];
  $password= $_POST['password'];

  $sql= "INSERT INTO `skin_solution`.`user_table` ( `Full name`, `Username`, `Email_ID`, `Gender`, `Password`, `dt`) 
  VALUES ('$fullname', '$username', '$email', '$gender', '$password', current_timestamp());";

  $result = mysqli_query($con,$sql);
  if ($result){
    $showAlert=true;
  }
 }
 else{
  echo "Full Name should not be empty";
  die();
 }
}
?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/reg.css">
    <title>Document</title>
</head>
<body>
<div class="back">
        <button><a href="..//index.php">Back</button></a>
      </div>
 
  
   
    <div class="registerbox">
        
        <h1>Sign Up Page</h1>
        <?php
           if ($showAlert){
             echo'
           <div class="signupMsg"><font size="5"> Registered Sucessfully!!!</font>
 
            </div>';
            }
         ?>
        <form  action="register.php" method="post">
            <p> Name</p>
            <input type="text" name="fullname" placeholder="Enter Full Name">
            <p> Username</p>
            <input type="text" name="username" placeholder="Enter Username">
            <p> Email id</p>
            <input type="email" name="email" placeholder="Enter Email ID">
            
            <p>Gender</p>
            <!-- <input type="gender" name="gender" placeholder="Enter your gender"> -->
            <div class="genderbox"> 
            <input type="radio" name="gender" value="Male" >
            <label for="m">Male</label>

            <input type="radio" name="gender" value="Female" >
            <label for="f">Female</label>

            <input type="radio"name="gender" value="Others">
            <label for="o">Others</label>
           </div>     
         <p>Password</p>
         <input type="password" name="password" placeholder="Enter Password">
        
         <button class= "btn">Signup</button>
         
           
        </form>
        <button class= "btn1"><a href="login.php">Login</button>
<script src="/js/index.js"></script>

</body>
</html>










