<?php
 $login= false;
 $showError=false;
if($_SERVER["REQUEST_METHOD"]== "POST"){
  include '../database/_dbconnect.php';
 if (!empty ($username)){
  $username = $_POST['username'];
  $password= $_POST['password'];

  $sql= "Select * from user_table where username='$username' AND password='$password'";

  $result = mysqli_query($con,$sql);
  $num= mysqli_num_rows($result);
  if ($num==1){
    $login=true;
    session_start();
    $_SESSION['loggedin']=true;
    $_SESSION['username']=$username;
    header("location: ..//welcomepage.php");
}
  else{
      $showError="Invalid Credentials!!";
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
    <link rel="stylesheet" href="../css/log.css">
    <title>Login</title>
</head>

<body>
   
    <div class="loginbox">
   
        <h1>Login page</h1>
        <?php
    if ($login){
     echo'
     <div class="signupMsg"> Logged in Sucessfully!!!
    </div>';
   }
   if ($showError){
    echo'
    <div class="alert" role="alert">
    <strong><font size="5"><p style="color:red">Error  '.$showError.'</p></strong> </font>
    <br>
    
   </div>';
  }
 

   ?>
        <form action="login.php" method="post">
            <p> Username</p> 
            <input type="text" name="username" placeholder="Enter Username"><br>
            <p>Password</p>
            <input type="password" name="password" placeholder="Enter Password">
            <input type="submit" name="" value="Login">
          
            <a href="register.php">Don't have an account?</a>
        </form>

    </div>
    <div class="back">
        <button><a href="..//index.php">Back</button></a>
    </div>
</body>
</html>