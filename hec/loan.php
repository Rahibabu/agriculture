<?php


 include("includes/conn.php");
session_start();
?>

<html>
	<head>
	<link rel="stylesheet" href="mystyle.css">
	<style type="text/css">
	</style>
		<title>HEC Based Need Scholorship Program</title>
	</head>
	<body>
	<div style="width:100%; height:100px; " >
 
	 <div style="width:150px; height:100px;  float:left;">
	<img src="logo.png" style="height:100%; width:150px;"> 
	</div>
    <div style="width:100%; height:100px;   text-align:center; line-height:100px; color:#CCf; font-size:20px; font-family:arial; font-weight:800;">

	<strong style="margin-left:-150px;">HEC Need Based Scholorship Program
    </strong>
	</div>
	</div>
	<form  method="POST" action="./loan_info_process.php">
<div>
	<table style="width:90%;">
		<thead>
			<tr>
				<th><h1>Please Enter your Loan Information For Education</h1></th>
			</tr>
		</thead>

		<tr>
 		 <td colspan="6">41. Loan taken  for Applicant Education</td>
 	    </tr>
 	    <tr>
 			<td colspan="6">* Family/ Friend Loan </td>
 	    </tr>
 	    <tr>
 			<th colspan="6">(Specify details of loan taken and relationship with the relative / friend) </th>
 		</tr>
 		<tr>
 			  <td colspan="6" ><textarea name="loan"  style="width: 90%; height: 130px; text-indent:20px;  border: 2px solid;"></textarea></td>
 	   </tr>

 	   <tr>
 	   	<th colspan="6">42. Any source of financing other than loan (Please specify)</th>
 	   </tr>
 	    <tr>
 		      <td colspan="6" ><textarea name="finanloan"  style="width: 90%; height: 130px; text-indent:20px;  border: 2px solid;"></textarea></td>
        <tr>
        	<th colspan="6">43. How were the admission /first semester charges paid?</th>
 		 </tr>
 		  <tr>
 			 <td colspan="6" ><textarea name="firstsemester"  style="width: 90%; height: 130px; text-indent:20px;  border: 2px solid;"></textarea></td>
 		 </tr>
</table>
</div>
<div>
	<table style="width:90%">
		<thead>
			<tr>
 		    	<th colspan="6">44. Applicants educational record:</th>
 			 </tr>	
		</thead>
		<tr>
 			<th>Level of Study</th>
 			<th>Name and Location of  Institute</th>
 			<th>Per Month Fee</th>
 			<th>To- From month/ yr.</th>
 			<th>Division/ GPA/ </th>
 			<th>%age / CGPA</th>
 		</tr>

 		 <tr>
 			 <td>Bachelors</td>
 			 <td><input type="text" name="instadd1"    style="width: 90%; height: 40px; border:2px solid;"></td>
 			 <td><input type="text" name="feemonth1"   style="width: 90%;  height: 40px; border:2px solid;" ></td>
 			 <td><input type="text" name="monthyear1"  style="width: 90%;  height: 40px; border:2px solid;" ></td>
 			 <td><input type="text" name="gpa1"        style="width: 90%;  height: 40px; border:2px solid;" ></td>
 			 <td><input type="text" name="percent1"    style="width: 90%;  height: 40px; border:2px solid;" ></td>
 		 </tr>

 		<tr>
 			<td>Intermediate</td>
 			<td><input type="text" name="instadd2"   style="width: 90%;  height: 40px; border:2px solid;" ></td>
 			<td><input type="text" name="feemonth2"  style="width: 90%;  height: 40px; border:2px solid;"  ></td>
 			<td><input type="text" name="monthyear2" style="width: 90%;  height: 40px; border:2px solid;"  ></td>
 			<td><input type="text" name="gpa2"       style="width: 90%;  height: 40px; border:2px solid;"  ></td>
 			<td><input type="text" name="percent2"   style="width: 90%;  height: 40px; border:2px solid;"  ></td>
 		</tr>

 		 <tr>
 			<td>Secondary</td>
 			<td><input type="text" name="instadd3"     style="width: 90%;  height: 40px; border:2px solid;" ></td>
 			<td><input type="text" name="feemonth3"    style="width: 90%;  height: 40px; border:2px solid;"  ></td>
 			<td><input type="text" name="monthyear3"   style="width: 90%;  height: 40px; border:2px solid;"  ></td>
 			<td><input type="text" name="gpa3"         style="width: 90%;  height: 40px; border:2px solid;"  ></td>
 			<td><input type="text" name="percent3"     style="width: 90%;  height: 40px; border:2px solid;" ></td>
 		 </tr>
 		 <tr>
 			<td colspan="3"> <strong>45. Per month fee/ tution charges of the institution last attended </strong></td>
 			<td colspan="3"><input type="text" name="tutioncharges" style="width: 90%;  height: 40px; border:2px solid;"></td>
 		</tr>
 		<tr>
 			<td colspan="3"> <strong>46. Have you ever got any other Scholarships:  </strong></td>
 		    <td colspan="3"><input type="radio" name="otherscholar" value="Yes"/>Yes&nbsp;<input type="radio" name="otherscholar" checked="checked" value="No"/>No</td>
 			 </td>
 		</tr>
 		
</table>
</div>
<div>
<table style="width:90%">
<thead>
	<tr>
 			<th colspan="6">(If yes fill the details of scholarships and attach documentary proof of the scholarships)</th >
 		</tr>
</thead>
<tr>
 		<th>S.No</th>
 		<th>Name of  Institute</th>
		<th>Scholarship Name</th>
 		<th>Total Scholarship Amount </th>
 		<th>Total Scholarship Period</th>
 		<th>Class / Level at which Scholarship was granted</th>
</tr>
<tr>
 	<td>1</td>
 	<td><input type="text" name="frstscholar1"   style="width: 90%;  height: 40px; border:2px solid;"  ></td>
 	<td><input type="text" name="scholarname1"   style="width: 90%;  height: 40px; border:2px solid;"  ></td>
 	<td><input type="text" name="scholaramount1" style="width: 90%;  height: 40px; border:2px solid;"  ></td>
 	<td><input type="text" name="scholarperiod1" style="width: 90%;  height: 40px; border:2px solid;"  ></td>
 	<td><input type="text" name="scholargrade1"  style="width: 90%;  height: 40px; border:2px solid;"  ></td>
</tr>
<tr>
 	<td>2</td>
 	<td><input type="text" name="frstscholar2"    style="width: 90%;  height: 40px; border:2px solid;" ></td>
 	<td><input type="text" name="scholarname2"    style="width: 90%;  height: 40px; border:2px solid;" ></td>
 	<td><input type="text" name="scholaramount2"  style="width: 90%;  height: 40px; border:2px solid;" ></td>
 	<td><input type="text" name="scholarperiod2"  style="width: 90%;  height: 40px; border:2px solid;" ></td>
 	<td><input type="text" name="scholargrade2"   style="width: 90%;  height: 40px; border:2px solid;" ></td>
</tr>
<tr>
 	<th colspan="6"><strong>Statement of Purpose </strong>(Explain your suitability for this scholarship) - attach separate sheet if required</th>

 </tr>
 <tr>
 	<td colspan="6"> <textarea name="statmentpurpose"  style="width: 90%;  height: 130px; border:2px solid;" ></textarea></td>
 </tr>
 <tr>
 	<th colspan="6"><strong>UNDERTAKING</strong></th>
</tr>
<tr>
 	<td colspan="6">
<h3>1.	The information given in this application are true to the best of my knowledge and I understand that any incorrect information will result in the cancellation of this application. If any information given in this application is found incorrect or false after grant of financial assistance, the institute will stop further assistance and the student will have to refund all payment received and or penalty equal to total scholarship amount.</br>
2.	HEC reserves the right to use information given in this form for verification and other purposes.</h3>
	</td>
 </tr>
 <tr>
 	<td colspan="3">Date: Parents / Guardian Signature </td>
 	<td colspan="3"><input type="text" name="fathsign"  style="width: 90%;  height: 40px; border:2px solid;" >
 	</td>
 </tr>
 <tr>
 	<td colspan="3">Applicant Signature:  </td>
 	<td colspan="3"><input type="text" name="appsign"  style="width: 90%;  height: 40px; border:2px solid;" >
 	</td>
</tr>
<tr>
 <td colspan="6" align="center"><input type="submit" name="submit" value="submit" style="width:250px;height:40px;border:2px solid;"></td>
</tr>

	
</table>
</div>




</form>
</body>
</html>