<html>
	<?php


include("includes/conn.php");
session_start();

?>

	<head>
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

	<div><h1 style="text-align:center">Please Enter your Loan Information For Education</h1><div>
	<div style="height:auto; width:100%; border:1px solid;">

	<form  method="POST" action="./loan_info_process.php">
		
		<table width="100%" border="1"  >
		<tr>
 			     				 <td colspan="6">41. Loan taken  for Applicant Education</td>
 			     				 </tr>
 			     				 <tr>
 			     				 	<td colspan="6">* Family/ Friend Loan </td>
 			     				 </tr>
 			     				 <tr>
 			     				 	<td colspan="6">(Specify details of loan taken and relationship with the relative / friend) </td>
 			     				 </tr>
 			     				 <tr>
 			     				 	<td colspan="6" ><textarea name="loan"  style="width: 800px; height: 130px; text-indent:20px;  border: 2px solid;"></textarea></td>
 			     				 </tr>
 			     				 <tr>
 			     				 	<td colspan="6">42. Any source of financing other than loan (Please specify)</td>
 			     				 </tr>
 			     				 <tr>
 			     				 	<td colspan="6" ><textarea name="finanloan"  style="width: 800px; height: 130px; text-indent:20px;  border: 2px solid;"></textarea></td>
 			     				 <tr>
 			     				 	<td colspan="6">43. How were the admission /first semester charges paid?</td>
 			     				 </tr>
 			     				 <tr>
 			     				 	<td colspan="6" ><textarea name="firstsemester"  style="width: 800px; height: 130px; text-indent:20px;  border: 2px solid;"></textarea></td>
 			     				 </tr>
 			     				 <tr>
 			     				 	<td colspan="6"><strong>44. Applicants educational record:</strong></td>
 			     				 </tr>	
 			     				 <tr>
 			     				 	<td colspan="6">
 			     				 		<table border="1">
 			     				 		<tr>
 			     				 			<td><strong>Level of Study</strong></td>
 			     				 			<td><strong>Name and Location of  Institute</strong></td>
 			     				 			<td><strong>Per Month Fee</strong></td>
 			     				 			<td><strong>To- From month/ yr.</strong></td>
 			     				 			<td><strong>Division/ GPA/ </strong></td>
 			     				 			<td><strong>%age / CGPA</strong></td>
 			     				 		</tr>
 			     				 			
 			     				 		
 			     				 <tr>
 			     				 	<td>Bachelors</td>
 			     				 	<td><input type="text" name="instadd1" style=" height: 40px; width: 200px; border:2px solid;"></td>
 			     				 	<td><input type="text" name="feemonth1"  style=" width: 200px;  height: 40px; border:2px solid;" ></td>
 			     				 	<td><input type="text" name="monthyear1"  style="width: 200px;  height: 40px; border:2px solid;" ></td>
 			     				 	<td><input type="text" name="gpa1"  style="width: 200px;  height: 40px; border:2px solid;" ></td>
 			     				 	<td><input type="text" name="percent1"  style="width: 200px;  height: 40px; border:2px solid;" ></td>
 			     				 </tr>
 			     				  <tr>
 			     				 	<td>Intermediate</td>
 			     				 	<td><input type="text" name="instadd2"  style="width: 200px;  height: 40px; border:2px solid;" ></td>
 			     				 	<td><input type="text" name="feemonth2"  style="width: 200px;  height: 40px; border:2px solid;"  ></td>
 			     				 	<td><input type="text" name="monthyear2"  style="width: 200px;  height: 40px; border:2px solid;"  ></td>
 			     				 	<td><input type="text" name="gpa2"  style="width: 200px;  height: 40px; border:2px solid;"  ></td>
 			     				 	<td><input type="text" name="percent2"  style="width: 200px;  height: 40px; border:2px solid;"  ></td>
 			     				 </tr>
 			     				  <tr>
 			     				 	<td>Secondary</td>
 			     				 	<td><input type="text" name="instadd3"  style="width: 200px;  height: 40px; border:2px solid;" ></td>
 			     				 	<td><input type="text" name="feemonth3"  style="width: 200px;  height: 40px; border:2px solid;"  ></td>
 			     				 	<td><input type="text" name="monthyear3"  style="width: 200px;  height: 40px; border:2px solid;"  ></td>
 			     				 	<td><input type="text" name="gpa3"  style="width: 200px;  height: 40px; border:2px solid;"  ></td>
 			     				 	<td><input type="text" name="percent3"  style="width: 200px;  height: 40px; border:2px solid;" ></td>
 			     				 </tr>
 			     				 </table>
 			     				 </td>
 			     				 </tr>


 			     				
 			     				<tr>
 			     					<td colspan="3"> <strong>45. Per month fee/ tution charges of the institution last attended </strong></td>
 			     					<td colspan="3"><input type="text" name="tutioncharges" style="width: 200px;  height: 40px; border:2px solid;"></td>
 			     				</tr>
 			     				<tr>
 			     					<td colspan="3"> <strong>46. Have you ever got any other Scholarships:  </strong></td>
 			     					<td colspan="3"><input type="radio" name="otherscholar" value="Yes"/>Yes&nbsp;<input type="radio" name="otherscholar" checked="checked" value="No"/>No</td>
 			     				</td>
 			     				</tr>
 			     				<tr>
 			     					<td>(If yes fill the details of scholarships & attach documentary proof of the scholarships)</td>
 			     				</tr>
 			     				<tr>
 			     					<td colspan="6">
 			     						<table border="1"> 
 			     						<tr>
 			     							<td><strong>S.No</strong></td>
 			     							<td><strong>Name of  Institute</strong></td>
 			     							<td><strong>Scholarship Name</strong></td>
 			     							<td><strong>Total Scholarship Amount </strong></td>
 			     							<td><strong>Total Scholarship Period</strong></td>
 			     							<td><strong>Class / Level at which Scholarship was granted</strong></td>
 			     						</tr>
 			     						<tr>
 			     							<td>1</td>
 			     							<td><input type="text" name="frstscholar1"  style="width: 200px;  height: 40px; border:2px solid;"  ></td>
 			     							<td><input type="text" name="scholarname1"  style="width: 200px;  height: 40px; border:2px solid;"  ></td>
 			     							<td><input type="text" name="scholaramount1"  style="width: 200px;  height: 40px; border:2px solid;"  ></td>
 			     							<td><input type="text" name="scholarperiod1"  style="width: 200px;  height: 40px; border:2px solid;"  ></td>
 			     							<td><input type="text" name="scholargrade1"  style="width: 200px;  height: 40px; border:2px solid;"  ></td>
 			     						</tr>
 			     						<tr>
 			     							<td>2</td>
 			     							<td><input type="text" name="frstscholar2"  style="width: 200px;  height: 40px; border:2px solid;" ></td>
 			     							<td><input type="text" name="scholarname2"  style="width: 200px;  height: 40px; border:2px solid;" ></td>
 			     							<td><input type="text" name="scholaramount2"  style="width: 200px;  height: 40px; border:2px solid;" ></td>
 			     							<td><input type="text" name="scholarperiod2"  style="width: 200px;  height: 40px; border:2px solid;" ></td>
 			     							<td><input type="text" name="scholargrade2"  style="width: 200px;  height: 40px; border:2px solid;" ></td>
 			     						</tr>


 			     				
 			     				</td>
 			     				</tr>
 			     				<tr>
 			     					<td colspan="6"><strong>Statement of Purpose </strong>(Explain your suitability for this scholarship) - attach separate sheet if required</td>

 			     				</tr>
 			     				<tr>
 			     					<td colspan="6"> <textarea name="statmentpurpose"  style="width: 800px;  height: 130px; border:2px solid;" ></textarea></td>
 			     				</tr>
 			     				<tr>
 			     					<td colspan="6"><strong>UNDERTAKING</strong></td>
 			     				</tr>
 			     				<tr>
 			     					<td colspan="6">
1.	The information given in this application are true to the best of my knowledge and I understand that any incorrect information will result in the cancellation of this application. If any information given in this application is found incorrect or false after grant of financial assistance, the institute will stop further assistance and the student will have to refund all payment received and or penalty equal to total scholarship amount.<br>
2.	HEC reserves the right to use information given in this form for verification and other purposes.
								</td>
 			     				</tr>
 			     				<tr>
 			     					<td colspan="2">Date: Parents / Guardian Signature </td>
 			     					<td>
 			     					<input type="text" name="fathsign"  style="width: 200px;  height: 40px; border:2px solid;" >
 			     					</td>
 			     				</tr>
 			     				<tr>
 			     					<td colspan="2">Applicant Signature:  </td>
 			     					<td>
 			     					<input type="text" name="appsign"  style="width: 200px;  height: 40px; border:2px solid;" >
 			     					</td>
 			     				</tr>
 			     				</table>
 			     				</td>
 			     				</tr>
 			     				</tr>
 			     				<tr>
 			     				<td colspan="6" align="center"><input type="submit" name="submit" value="submit"  style="width: 200px;  height: 40px; border:2px solid;" ></td>
 			     				</tr>

 			     				</table>
 			     				</form>
 			     				</div>
 			     				</div>
 			     				</div>
 			     				</body>
 			     				</html>
 			     				