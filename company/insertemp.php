<?php

$conn = mysqli_connect('localhost','root','','company');
if($_SERVER["REQUEST_METHOD"] == "POST")
	{
$Eno = $_POST["Eno"];
$Ename = $_POST["Ename"];
$Job_type= $_POST["Job_type"];
$Hire_date = $_POST["Hire_date"];
$Dno = $_POST["Dno"];
$Salary = $_POST["Salary"];
$sql = "insert into employe(Eno,Ename,Job_type,Hire_date,Dno,Salary) VALUES ('$Eno','$Ename','$Job_type','$Hire_date','$Dno','$Salary')";
$result = mysqli_query($conn,$sql);
if($result)
echo" DETAIL'S INSERTED SUCCESSFULLY";
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
			<h1>PLEASE INSERT EMPLOYEE DETAIL'S </h1>

			<form action ="insertemp.php" method="post">

				<input type="int" name="Eno" placeholder="Employee Number"> <br>
				<input type="varchar" name="Ename" placeholder="Employee Name"><br>
				<input type="varchar" name="Job_type" placeholder="Job Type"><br>
				<input type="date" name="Hire_date"><br>
				<input type="int" name="Dno" placeholder="Department Number"><br>
				<input type="varchar" name="Salary" placeholder="Salary"><br>
				<input type="submit" name="submit"value="SUBMIT">

			</form>
<a href="interface.html">HOME</a>
</center>

</body>
</html>