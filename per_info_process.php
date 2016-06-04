<?php

//error_reporting(0);

		// session_start();
require_once"includes/conn.php";

$uni=$_POST['uniname'];
$deg=$_POST['program'];
$clsno=$_POST['clsno'];
$dept=$_POST['department'];
$appname=$_POST['applicantname'];
$gender=$_POST["gen"];
$image=$_FILES['image']['name'];
$templocation=$_FILES['image']['tmp_name']; 
$nic=$_POST['nic'];
$marital=$_POST["status"]; 
$age=$_POST['age'];
$domicile=$_POST['domicile'];
$present=$_POST['present'];
$permanent=$_POST['permanent'];
$work=$_POST["work"]; 
$designation=$_POST['designation'];
$company=$_POST['company'];
$gross=$_POST['gross'];
$home=$_POST['home'];
$phone=$_POST['phone'];
$mobile=$_POST['mobile'];
$email=$_POST['email'];
$image=rand(0,100).date('ymdhis').time().$image;				
move_uploaded_file($templocation, "./images/$image");
$qry="INSERT INTO personal SET
		uniname='{$uni}',
		degree='{$deg}',
		clsno='{$clsno}',
		department='{$dept}',
		appname='{$appname}',
		gender='{$gender}',
		image='{$image  }',
		appnic='{$nic}',
		marital='{$marital}',
		age='{$age}',
		domicile='{$domicile}',
		present='{$present}',
		permanant='{$permanent}',
		work='{$work}',
		designation='{$designation}',
		company='{$company}',
		gincome='{$gross}',
		hincome='{$home}',
		phone='{$phone}',
		mobile='{$mobile}',
		email='{$email}'";

$record=mysql_query($qry);

if ($record) 
{
	echo "Inserted";
	header("location:./hecfamily.html");
}
else
{
	echo "Error:".$qry."<br>".mysql_error($con);
}


				// if ($record) {
				// 	$_session['msg']="Data INsert succefully";
				// 	header("location:./hecfamily.html");
				// 	exit();

				// }
				// else
				// 	$_session['msg']="Data  not Insert ";
				// 	header("location:./index.php");
				// 	exit();
?>