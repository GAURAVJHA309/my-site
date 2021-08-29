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
			<h1>PLEASE UPDATE EMPLOYEE DETAIL'S </h1>

			<form action ="update.php" method="post">

				<input type="int" name="Eno" placeholder="Employee Number"> <br>
				<input type="varchar" name="Ename" placeholder="Employee Name"><br>
				<input type="varchar" name="Job_type" placeholder="Job Type"><br>
				<input type="date" name="Hire_date"><br>
				<input type="int" name="Dno" placeholder="Department Number"><br>
				<input type="varchar" name="Salary" placeholder="Salary"><br>
				<input type="submit" name="submit"value="UpdateData">

			</form>
	</center>
<?php
//
//$conn = mysqli_connect("localhost","root","");
//$db = mysqli_select_db($conn,'company');
$conn = mysqli_connect('localhost','root','','company');

if(!$conn){
    die(mysqli_connect_error());
}

if (isset($_POST['submit']))
{
    $Eno = $_POST['Eno'];
    $Ename=$_POST['Ename'];
    $Job_type=$_POST['Job_type'];
    $Hire_date=$_POST['Hire_date'];
    $Salary=$_POST['Salary'];
    $Dno=$_POST['Dno'];
    
	$query = "UPDATE employe SET Ename =' $Ename',Job_type =' $Job_type',Hire_date =' $Hire_date',Salary =' $Salary',Dno =' $Dno' WHERE Eno = '$Eno'";

	
    $query_run = mysqli_query($conn,$query);

	if($query_run){
		echo '<script type="text/javascript">alert("Data Updated")</script>';
	}
	else{
		{
            die('Query Failed'.mysqli_error());
			echo '<script type="text/javascript">alert("Data Not Updated")</script>';
		}
	}

}


?>
<h3><center>DEPARTMENT DETAIL'S CAN ONLY BE UPDATED BY ADMIN</h3>

<center><a href="interface.html">HOME</a>
</body>
</html>
