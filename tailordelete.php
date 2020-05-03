<?php
session_start();
$userName=$_SESSION['userName'];
if(!isset($_SESSION['userName']))
{
	header("Location:login.php");
}
?>

<?php
$con=mysqli_connect("localhost","root","","db");
	if(!$con)
	{
		die("Connection Error: ".mysqli_connect_error()."<br/>");
	}
if (isset($userName))
{
$oid = $_GET['oid'];
$sql="DELETE FROM orders WHERE oid=$oid";
if(mysqli_query($con,$sql))
	{
		header("Location:ntailor.php");
	}
	else
	{
		echo "Error in deleting: ".mysqli_error($con);
	}
mysqli_close($con);		
}
?>