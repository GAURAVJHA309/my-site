<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        body{ font: 14px sans-serif; text-align: center; }
    </style>
</head>
<body>
    <div class="page-header">
        <h1>Hi, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>. Welcome to our site.</h1>
    </div>
    <p>
        <a href="reset-password.php" class="btn btn-success">Reset Your Password</a>
        <a href="logout.php" class="btn btn-info">Sign Out of Your Account</a>
    </p>
</body>
</html>





<html>
<body>
<style>

body { background-image:url("p1.jpg");}

* {
  box-sizing: border-box;
}
label{
  background-color: black;
  padding: 8px;
  margin-top: 7px;
  display: block;
  width: 10%;
  color: white;
  }

h1 {
  background-color: black;
  padding: 8px;
  margin-top: 7px;
  display: block;
  width:100%;
  color: white;
}

h2{color:white;}




h3{
  background-color: black;
  padding: 8px;
  margin-top: 7px;
  display: block;
  width: 10%;
  color: white;
}
</style>

<h1><center>FILL OUT THIS FOURM FOR ONLINE BOOKING</h1>

<form action="insert.php"method ="post"><center>
  
<label for="fname">FIRST NAME:</label><br>
  <input type="text" name="fname"><br>
 
 <label for="lname">LAST NAME:</label><br>
  <input type="text" name="lname"><br>

<label for="faname">FATHERS NAME:</label><br>
  <input type="text" name="faname"><br>
  
<label for="mnum">MOBILE NUMBER:</label><br>
  <input type="number" name="mnum"><br>
  
<label for="mail">E-MAIL:</label><br>
  <input type="text" name="mail"><br>
  
<label for="dob">DATE OF CHEK INN:</label><br>
  <input type="date" name="dob"><br>
  
<label for="anum">AADAHAR NUMBER:</label><br>
  <input type="number" name="anum"><br>
 
 <label for="bg">BLOOD GROUP:</label><br>
  <input type="text" name="bg"><br>
  
<label for="adr">PERMANENT ADDRESS:</label><br>
  <input type="text" name="adr"><br>
  
<label for="dess">GENDER:</label><br>
  <input type="text" name="dess"><br><br><br>
  
<input type="submit" value="Submit">
</form><center>


<style>
 a {
  background-color: black;
  padding: 8px;
  margin-top: 7px;
  display: block;
  width:10%;
  color: white;
}
</style>
<a href="new.html">HOME</a>


</body>
</html>