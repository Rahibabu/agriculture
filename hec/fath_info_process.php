<?php

require_once"includes/conn.php"; 

$fname=$_POST['fname'];
$fnic=$_POST['fnic'];
$stat=$_POST['stat'];
$profession=$_POST['profession'];

$fcom=$_POST['fcom'];
$teloff=$_POST['teloff'];
$mobile=$_POST['mobile'];

$ocutyp=$_POST['ocutyp'];
$ntn=$_POST['ntn'];
$grade=$_POST['grade'];
$fatherincomem=$_POST['fatherincomem'];

$other=$_POST['other'];
$gname=$_POST['gname'];
$grelaion=$_POST['grelaion'];
$goccupation=$_POST['goccupation'];
$msupport=$_POST['msupport'];


$father1=$_POST['father1'];
$mother1=$_POST['mother1'];
$spouse1=$_POST['spouse1'];
$other1=$_POST['other1'];
$self1=$_POST['self1'];
$total1=$_POST['total1'];

$father2=$_POST['father2'];
$mother2=$_POST['mother2'];
$spouse2=$_POST['spouse2'];
$other2=$_POST['other2'];
$self2=$_POST['self2'];
$total2=$_POST['total2'];
$father3=$_POST['father3'];
$mother1=$_POST['mother3'];
$spouse3=$_POST['spouse3'];
$other3=$_POST['other3'];
$self3=$_POST['self3'];
$total3=$_POST['total3'];

$father4=$_POST['father4'];
$mother4=$_POST['mother4'];
$spouse4=$_POST['spouse4'];
$other4=$_POST['other4'];
$self4=$_POST['self4'];
$total4=$_POST['total4'];

$father5=$_POST['father5'];
$mother5=$_POST['mother5'];
$spouse5=$_POST['spouse5'];
$other5=$_POST['other5'];
$self5=$_POST['self5'];
$total5=$_POST['total5'];

$totalincome=$_POST['totalincome'];

$qry="INSERT INTO father SET
		fname='{$fname}',
		fnic='{$fnic}',
		stat='{$stat}',
		profession='{$profession}',
		fcom='{$fcom}',
		teloff='{$teloff}',
		mobile='{$mobile}',
		ocutyp='{$ocutyp}',
		ntn='{$ntn}',
		grade='{$grade}',
		fatherincomem='{$fatherincomem}',
		other='{$other}',
		gname='{$gname}',
		grelaion='{$grelaion}',
		goccupation='{$goccupation}',
		msupport='{$msupport}',
		father1='{$father1}',
		mother1='{$mother1}',
		spouse1='{$spouse1}',
		other1='{$other1}',
		self1='{$self1}',
		total1='{$total1}',
		father2='{$father2}',
		mother2='{$mother2}',
		spouse2='{$spouse2}',
		other2='{$other2}',
		self2='{$self2}',
		total2='{$total2}',
		father3='{$father3}',
		mother3='{$mother3}',
		spouse3='{$spouse3}',
		other3='{$other3}',
		self3='{$self3}',
		total3='{$total3}',
		father4='{$father4}',
		mother4='{$mother4}',
		spouse4='{$spouse4}',
		other4='{$other4}',
		self4='{$self4}',
		total4='{$total4}',	
		father5='{$father5}',
		mother5='{$mother5}',
		spouse5='{$spouse5}',
		other5='{$other5}',
		self5='{$self5}',
		total5='{$total5}',
		totalincome='{$totalincome}'";






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
