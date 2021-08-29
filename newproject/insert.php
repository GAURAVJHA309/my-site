<?php

$conn = mysqli_connect('localhost','root','','mcitdb');
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$faname = $_POST['faname'];
$mnum = $_POST['mnum'];
$mail = $_POST['mail'];
$dob = $_POST['dob'];
$bg = $_POST['bg'];
$anum = $_POST['anum'];
$adr = $_POST['adr'];
$dess = $_POST['dess'];
$sql = "insert into stud(fname,lname,faname,mnum,mail,dob,bg,anum,adr,dess) VALUES ('$fname','$lname','$faname','$mnum','$mail','$dob','$bg','$anum','$adr','$dess')";
$result = mysqli_query($conn,$sql);
if($result)
echo"WE WILL CONTACT YOU SOON";
else
echo"something went wrong";

$conn->close();


?>
