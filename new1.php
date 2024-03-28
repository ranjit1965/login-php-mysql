<?php

include 'config.php';
$Name=$_POST['Name'];
$IPAddress=$_POST['IPAddress'];
$Foundationnumber=$_POST['Foundationnumber'];
$Date=$_POST['Date'];
$Phonenumber=$_POST['Phonenumber'];



$query="insert into empform values('$Name','$IPAddress','$Foundationnumber','$Date','$Phonenumber', ) ";
if($res=mysqli_query($con,$query))
{
	echo"<script>alert('Inserted Successfully'); window.location.href='form.php'; </script>";
}
else
{ 
}
?>