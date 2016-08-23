<?php

//error_reporting(0);

		// session_start();
require_once"includes/conn.php";

$documentorder=$_POST['documentorder'];








$record=mysql_query($qry);

if ($record) 
{
	echo "Inserted";
	header("location:./hecfamily.php");
}
else
{
	echo "Error:".$qry."<br>".mysql_error($con);
}
?>