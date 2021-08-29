<?php

$conn = mysqli_connect('localhost','root','','company');
if($_SERVER["REQUEST_METHOD"] == "POST")
	{
$Dno = $_POST["Dno"];
$Dname = $_POST["Dname"];
$Location = $_POST["Location"];
$sql = "insert into department(Dno,Dname,Location) VALUES ('$Dno','$Dname','$Location')";
$result = mysqli_query($conn,$sql);
if($result)
echo"DATA INSERTED SUCCESSFULLY";
else
echo"something went wrong";

$conn->close();
	}
?>


<html>

<head>
	<style>
		body{
			background-color:yellow;
		}

		input{
			width:40%;
			height:5%;
			border:2px;
			border-radius: 05px;
			padding: 8px 15px 8px 15px;
			margin: 10px 0px 15px 0px;
			box-shadow: 1px 1px 2px 1px grey;
		}
		label{
			text-indent : 5em;
		}
a {
  background-color: orange;
  padding: 8px;
  margin-top: 7px;
  display: block;
  width:10%;
  color: black;
 }
	</style>
</head>

	<body>
		<center>
			<h1>PLEASE INSERT DEPARTMENT DETAIL'S </h1>

			<form action ="insertdep.php" method="post">

				<input type="int" name="Dno" placeholder="Department Number"><br>
				<input type="varchar" name="Dname" placeholder="Department name"><br>
				<input type="varchar" name="Location" placeholder="Location"><br>
				<input type="submit" name="submit"value="SUBMIT">

			</form>
<a href="interface.html">HOME</a>
</center>

</body>
</html>
