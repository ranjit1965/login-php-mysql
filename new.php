<?php

include 'config.php';
$Name=$_POST['Name'];
$IPAddress=$_POST['IPAddress'];
$Foundationnumber=$_POST['Foundationnumber'];
$Date=$_POST['Date'];
$Phonenumber=$_POST['Phonenumber'];
$Timein=$_POST['Timein'];
$Timeout=$_POST['Timeout'];


$query="insert into empform values('$Name','$IPAddress','$Foundationnumber','$Date','$Phonenumber', '$Timein', '$Timeout') ";
if($res=mysqli_query($con,$query))
{
	echo"<script>alert('Inserted Successfully'); window.location.href='form.php'; </script>";
}
else
{ 
}
?>