<?php


$conn = mysqli_connect('localhost','root','','company');
    
if(!$conn){
    die(mysqli_connect_error());
}


if (isset($_POST['submit']))
{
    $Eno = $_POST['Eno'];

    $sql = "DELETE FROM employe  WHERE Eno = '$Eno'";

	
if (mysqli_query($conn, $sql)) {
  echo "Record deleted successfully";
} else {
  echo "Error deleting record: " . mysqli_error($conn);
}

	
}

mysqli_close($conn);
?>


<!DOCTYPE html>
<html>
<head>
<style>
    table{
	background-color:orange;
	width:80%;
	height:5%;
	border:2px;
	border-radius: 05px;
	padding: 8px 15px 8px 15px;
	margin: 10px 0px 15px 0px;
	box-shadow: 1px 1px 2px 1px grey;
		}
	
	 

th, td {
    border: 3px solid black;
}

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
<body><center>
<h1>DETAIL'S OF EMPLOYE'S</h1>

<?php

$conn = mysqli_connect('localhost','root','','company');
    
if(!$conn){
    die(mysqli_connect_error());
}


$sql = "SELECT * FROM employe";

if ($result = mysqli_query($conn,$sql)) {
    if(mysqli_num_rows($result) > 0){
            echo "<table>";
                    echo "<tr>";
                        echo"<th>ID</th><th>Name</th><th>JobType</th><th>HireDate</th><th>Dno</th><th>Salary</th>";
                        echo"</tr>";
    

    while($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row["Eno"]. "</td>";
            echo "<td>" . $row["Ename"]."</td>"; 
            echo "<td>" . $row["Job_type"]."</td>"; 
            echo "<td>".$row["Hire_date"]."</td>";
			echo "<td>" . $row["Dno"]."</td>";
            echo "<td>" . $row["Salary"]."</td>";
        echo "</tr>";
    }
 echo "</table>";
    }
    
}
 else {
    echo "0 results";
}

$conn->close();
?>
<h3>ENTER EMPLOYEE NUMBER TO DELETE DETAIL'S</h3>

    
			<form action ="delete.php" method="post">

				<input type="int" name="Eno" placeholder="Employee Number"> <br>
                <input type="submit" name="submit"value="Delete">
    </form>
<h3>DEPARTMENT DETAIL'S CAN ONLY BE DELETED BY ADMIN</h3>	
<a href="interface.html">HOME</a>
</body>
</html>