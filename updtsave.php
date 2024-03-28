<?php
include 'config.php';
$Name=$_POST['Name'];
$IPAddress=$_POST['IPAddress'];                                               
$Foundationnumber=$_POST['Foundationnumber'];
$Date=$_POST['Date'];    
$Phonenumber=$_POST['Phonenumber'];    
$Timein=$_POST['Timein'];    
$Timeout=$_POST['Timeout'];    

$query="update empform set IPAddress='$IPAddress',Foundationnumber='$Foundationnumber',Date='$Date',Phonenumber='$Phonenumber',Timein='$Timein',Timeout='$Timeout' where Name=$Name ";
if($res=mysqli_query($con,$query))
{
	echo"<script>alert('Updated successfully'); window.location.href='fetch.php'; </script>";
}
else
{
	echo"error";
}
?>