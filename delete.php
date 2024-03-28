<?php
include('config.php');
$Name=$_GET['refer'];
$query="delete from empform where Name=$Name";
if($res=mysqli_query($con,$query))
{
	echo"<script>alert('Deleted successfully'); window.location.href='fetch.php'; </script>";
}
else
{
	echo"error";
}
?>