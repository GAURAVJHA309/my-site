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
<h1>DETAIL'S OF ALL EMPLOYEE</h1>

<?php
//$servername = "localhost";
//$username = "username";
//$password = "password";
//$dbname = "myDB";

// Create connection
//$conn = new mysqli($servername, $username, $password, $dbname);
$conn = mysqli_connect('localhost','root','','company');
    // Check connection
    
if(!$conn){
    die(mysqli_connect_error());
}


//$sql = "SELECT EmpNo, EmpName,JobType ,HireDate,Salary,DeptNo FROM MyGuests";
//$result = $conn->query($sql);
$sql = "SELECT * FROM employe";

if ($result = mysqli_query($conn,$sql)) {
    if(mysqli_num_rows($result) > 0){
            echo "<table>";
                    echo "<tr>";
                        echo"<th>Eno</th><th>Name</th><th>JobType</th><th>HireDate</th><th>Dno</th><th>Salary</th>";
                        echo"</tr>";
    

    // output data of each row
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
<h3>DEPARTMENT DETAIL'S CAN ONLY BE VIEWED BY ADMIN</h3>
<a href="interface.html">HOME</a>
</body>
</html>