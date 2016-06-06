
<?php


include("includes/conn.php");
session_start();

?>



<html>
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

	<div><h1 style="text-align:center">Please Enter your Father Information</h1><div>
	<div style="height:auto; width:100%; border:1px solid;">

	<form method="POST" action="./fath_info_process.php">
		
		<table width="100%" border="1"  >
	<tr>
 					<td>16. Father Name: </td>
 					<td  ><input type="text" name="fname"  style="width: 250px; height: 40px; text-indent:20px;  border: 2px solid;"></td>
 					
 					<td>Computerized N.I.C. No </td>
 					<td colspan="3"><input type="text" name="fnic" style="width: 250px; height: 40px; text-indent:20px;  border: 2px solid;"></td>
 				</tr>
 				<tr>
 					<td colspan="2">Status:    </td>
 					<td colspan="4"><input type="radio" name="stat" checked="checked" value="Alive"/>Alive&nbsp;<input type="radio" name="stat" value="Deceased"/>Deceased</td>
 			   </tr>
 			   <tr>
 			   	<td colspan="2">18. Professional status:  </td>
 			   	
 			   	<td colspan="4"><input type="radio" name="profession" checked="checked" value="Employed"/>Employed&nbsp;<input type="radio" name="profession" value="Retired"/>Retired&nbsp;<input type="radio" name="profession" value="Business Owner"/>Business Owner</td>
 			   	</tr>
 			   	<tr>
 			   	<td colspan="2">19. Name of Company/Employer:</td>
 			   	<td colspan="4"> <input type="text" name="fcom" style="width: 250px; height: 40px; text-indent:20px;  border: 2px solid;"></td>	
 			    </tr>
 			    <tr>
 			    	<td>20. Tel (Off): </td>
 			    	<td colspan="2"> <input type="text" name="teloff" style="width: 250px; height: 40px; text-indent:20px;  border: 2px solid;" ></td>
 			    	<td>Mobile:</td>
 			    	<td colspan="2"><input type="text" name="mobile" style="width: 250px; height: 40px; text-indent:20px;  border: 2px solid;" > </td>
 			    </tr>
 			     <tr>
 			    	<td>21. Occupation Type:  </td>
 			    	<td colspan="2"> <input type="text" name="ocutyp" style="width: 250px; height: 40px; text-indent:20px;  border: 2px solid;" ></td>
 			    	<td>NTN</td>
 			    	<td colspan="2"><input type="text" name="ntn" style="width: 250px; height: 40px; text-indent:20px;  border: 2px solid;"> </td>
 			    </tr>
 			     <tr>
 			    	<td>22. Designation & Grade ( BPS/ SPS/PTC etc  </td>
 			    	<td colspan="2"> <input type="text" name="grade" style="width: 250px; height: 40px; text-indent:20px;  border: 2px solid;" ></td>
 			    	<td>Gross Monthly Income: </td>
 			    	<td colspan="2"><input type="text" name="fatherincomem" style="width: 250px; height: 40px; text-indent:20px;  border: 2px solid;"> </td>
 			    </tr>
 			    <tr>
 			    	<td colspan="3">23. Total Net Monthly Take Home Income (Salary/ Pension/ Others): </td>
 			    	<td colspan="3"><input type="text" name="other" style="width: 250px; height: 40px; text-indent:20px;  border: 2px solid;"> </td>
 			    </tr>
 			    <tr>
 			    	<td colspan="6">24.Any Other Supporting Person (Mother/ Guardian/ Brother/ Sister/Family Relative/Guardian):</td>
 			    </tr>
 			    <tr>
 			    	<td>25. Name: </td>
 			    	<td colspan="2"><input type="text" name="gname" style="width: 250px; height: 40px; text-indent:20px;  border: 2px solid;"></td>
 			    	<td>Relationship: </td>
 			    	<td colspan="2"><input type="text" name="grelaion" style="width: 250px; height: 40px; text-indent:20px;  border: 2px solid;"></td>
 			    </tr>
 			    <tr>
 			    	<td colspan="2">Occupation and Designation </td>
 			    	<td colspan="4"><input type="text" name="goccupation" style="width: 250px; height: 40px; text-indent:20px;  border: 2px solid;"></td>
 			    </tr>
 			    <tr>
 			    	<td colspan="2">27. Monthly Financial Support Available to Applicant in Pak Rs.  </td>
 			    	<td colspan="4"><input type="text" name="msupport" style="width: 250px; height: 40px; text-indent:20px;  border: 2px solid;"></td>
 			    </tr>
 			    <tr>
 			    	<td colspan="6">28. Asset Income (on monthly basis) </td>
 			     </tr>
 			     <tr>
 			     	<td colspan="6">
 			     		<table border="1">
 			     			<tr>
 			     				<td>S.No</td>
 			     				<td>Income Source</td>
 			     				<td>Father</td>
 			     				<td>Mother</td>
 			     				<td>Spouse</td>
 			     				<td>Self</td>
 			     				<td>Other</td>
 			     				<td>Total</td>
 			     			</tr>
 			     			<tr>
 			     				<td>1</td>
 			     				<td>Property Rent</td>
 			     				<td><input type="text" name="incomesource1" style=" height: 40px; border:2px solid;"></td>
 			     				<td><input type="text" name="father1" style=" height: 40px; border:2px solid;"></td>
 			     				<td><input type="text" name="mother1" style=" height: 40px; border:2px solid;"></td>
 			     				<td><input type="text" name="spouse1" style=" height: 40px; border:2px solid;"></td>
 			     				<td><input type="text" name="self1" style=" height: 40px; border:2px solid;"></td>
 			     				<td><input type="'text" name="total1" style=" height: 40px; border:2px solid;"></td>
 			     			</tr>
 			     			<tr>
 			     				<td>2</td>
 			     				<td>Land Lease</td>
 			     				<td><input type="text" name="incomesource2" style=" height: 40px; border:2px solid;"></td>
 			     				<td><input type="text" name="father2" style=" height: 40px; border:2px solid;"></td>
 			     				<td><input type="text" name="mother2" style=" height: 40px; border:2px solid;"></td>
 			     				<td><input type="text" name="spouse2" style=" height: 40px; border:2px solid;"></td>
 			     				<td><input type="text" name="self2" style=" height: 40px; border:2px solid;"></td>
 			     				<td><input type="'text" name="total2" style=" height: 40px; border:2px solid;"></td>
 			     			</tr>
 			     			<tr>
 			     				<td>3</td>
 			     				<td>Bank Deposits3</td>
 			     				<td><input type="text" name="incomesource3" style=" height: 40px; border:2px solid;"></td>
 			     				<td><input type="text" name="father3" style=" height: 40px; border:2px solid;"></td>
 			     				<td><input type="text" name="mother3" style=" height: 40px; border:2px solid;"></td>
 			     				<td><input type="text" name="spouse3" style=" height: 40px; border:2px solid;"></td>
 			     				<td><input type="text" name="self3" style=" height: 40px; border:2px solid;"></td>
 			     				<td><input type="'text" name="total3" style=" height: 40px; border:2px solid;"></td>
 			     			</tr>
 			     			<tr>
 			     				<td>4</td>
 			     				<td>Shares / Securities*</td>
 			     				<td><input type="text" name="incomesource4" style=" height: 40px; border:2px solid;"></td>
 			     				<td><input type="text" name="father4" style=" height: 40px; border:2px solid;"></td>
 			     				<td><input type="text" name="mother4" style=" height: 40px; border:2px solid;"></td>
 			     				<td><input type="text" name="spouse4" style=" height: 40px; border:2px solid;"></td>
 			     				<td><input type="text" name="self4" style=" height: 40px; border:2px solid;"></td>
 			     				<td><input type="'text" name="total4" style=" height: 40px; border:2px solid;"></td>
 			     			</tr>
 			     			<tr>
 			     				<td>5</td>
 			     				<td>Other (Specify5</td>
 			     				<td><input type="text" name="incomesource5" style=" height: 40px; border:2px solid;"></td>
 			     				<td><input type="text" name="father5" style=" height: 40px; border:2px solid;"></td>
 			     				<td><input type="text" name="mother5" style=" height: 40px; border:2px solid;"></td>
 			     				<td><input type="text" name="spouse5" style=" height: 40px; border:2px solid;"></td>
 			     				<td><input type="text" name="self5" style=" height: 40px; border:2px solid;"></td>
 			     				<td><input type="'text" name="total5" style=" height: 40px; border:2px solid;"></td>
 			     			</tr>
 			     			<tr>
 			     				<td>28A</td>
 			     				<td colspan="6">Total</td>
 			     				<td><input type="'text" name="totalincome" style=" height: 40px; border:2px solid;"></td>
 			     			</tr>
 			     			
 			     			</table>
							</td>
 			    		    </tr>
 			    		    <tr><td colspan="6" align="center"><input type="submit" name="submit" value="submit"  style="width: 200px;  height: 40px; border:2px solid;" ></td></tr>
 			    		    </table>
 			    		    </form>
 			    		    </div>
 			    		    </div>
 			    		    </div>
 			    		    </body></html>