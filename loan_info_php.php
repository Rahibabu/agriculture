<?php

//error_reporting(0);

		// session_start();
require_once"includes/conn.php";

$laon=$_POST['loan'];
$finanloan=$_POST['finanloan'];
$firstsemester=$_POST['firstsemester'];
$instadd1=$_POST['instadd1'];
$feemonth1=$_POST['feemonth1'];
$monthyear1=$_POST['monthyear1'];
$gpa1=$_POST['gpa1'];
$percent1=$_POST['percent1'];
$instadd2=$_POST['instadd2'];
$feemonth1=$_POST['feemonth2'];
$monthyear2=$_POST['monthyear2'];
$gpa2=$_POST['gpa2'];
$percent2=$_POST['percent2'];
$instadd3=$_POST['instadd3'];
$feemonth3=$_POST['feemonth3'];
$monthyear3=$_POST['monthyear3'];
$gpa3=$_POST['gpa3'];
$percent3=$_POST['percent3'];
$tutioncharges=$_POST['tutioncharges'];
$otherscholar=$_POST['otherscholar'];
$frstscholar1=$_POST['frstscholar1'];
$scholarname1=$_POST['scholarname1'];
$scholaramount1=$_POST['scholaramount1'];
$scholarperiod1=$_POST['scholarperiod1'];
$scholargrade1=$_POST['scholargrade1'];
$frstscholar2=$_POST['frstscholar2'];
$scholarname2=$_POST['scholarname2'];
$scholaramount2=$_POST['scholaramount2'];
$scholarperiod2=$_POST['scholarperiod2'];
$scholargrade2=$_POST['scholargrade2'];
$statmentpurpose=$_POST['statmentpurpose'];
$fathsign=$_POST['fathsign'];
$appsign=$_POST['appsign'];


$qry="INSERT INTO loanfor SET
        loan='{$loan}',
		finanloan='{$finanloan}',
		firstsemester='{$firstsemester}',
        instadd1='{$feemonth1}',
		feemonth1='{$feemonth1}',
		monthyear1='{$monthyear1}',
		gpa1='{$gpa1}',
		percent1='{$percent1}',
		instadd2='{$feemonth2}',
		feemonth2='{$feemonth2}',
		monthyear2='{$monthyear2}',
		gpa2='{$gpa2}',
		percent2='{$percent2}',
		instadd3='{$feemonth3}',
		feemonth3='{$feemonth3}',
		monthyear3='{$monthyear3}',
		gpa3='{$gpa3}',
		percent3='{$percent3}',
		tutioncharges='{$tutioncharges}',
		otherscholar='{$otherscholar}',
		frstscholar1='{$frstscholar1}',
		scholarname1='{$scholarname1}',
		scholaramount1='{$scholaramount1}',
		scholarperiod1='{$scholarperiod1}',
		scholargrade1='{$scholargrade1}',
		frstscholar2='{$frstscholar2}',
		scholarname2='{$scholarname2}',
		scholaramount2='{$scholaramount2}',
		scholarperiod2='{$scholarperiod2}',
		scholargrade2='{$scholargrade2}',
		statmentpurpose='{$statmentpurpose}',
		fathsign='{$fathsign}',
		appsign='{$appsign}'";

		$record=mysql_query($qry);

if ($record) 
{
	echo "Inserted";
	header("location:./hecfath.html");
}
else
{
	echo "Error:".$qry."<br>".mysql_error($con);


}
?>