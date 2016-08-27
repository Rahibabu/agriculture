<?php

//error_reporting(0);

		// session_start();
require_once"includes/conn.php";

$image=$_FILES['image']['name'];
$templocation=$_FILES['image']['tmp_name']; 
$uni=$_POST['uniname'];
$decipline=$_POST['decipline'];
$duration=$_POST['duration'];
$name=$_POST['name'];
$father=$_POST['father'];
$date=$_POST['date'];
$cnic=$_POST['cnic'];
$pemanent=$_POST['pemanent'];
$temporary=$_POST['temporary'];
$telephone=$_POST['telephone'];
$email=$_POST['email'];
$religion=$_POST['religion'];
$marks1=$_POST['marks1'];
$percentage1=$_POST['percentage1'];
$board1=$_POST['board1'];
$year1=$_POST['year1'];
$marks2=$_POST['marks2'];
$percentage2=$_POST['percentage2'];
$board2=$_POST['board2'];
$year2=$_POST['year2'];
$occupation=$_POST['occupation'];
$montlyincome=$_POST['montlyincome'];
$familymem=$_POST['familymem'];
$sibling=$_POST['sibling'];
$orphan=$_POST['orphan'];
$guardian=$_POST['guardian'];
$relation=$_POST['relation'];
$date=$_POST['date'];
$sign=$_POST['sign'];
$explain=$_POST['explain'];
$nam=$_POST['nam'];
$num=$_POST['num'];
$sign2=$_POST['sign2'];
$dat=$_POST['dat'];


$nam=$_POST['nam'];
$num=$_POST['num'];
$sign2=$_POST['sign2'];










$image=rand(0,100).date('ymdhis').time().$image;				
move_uploaded_file($templocation, "./images/$image");