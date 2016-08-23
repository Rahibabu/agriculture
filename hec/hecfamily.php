<?php


include("includes/conn.php");
session_start();

?>
<html>
	<head>
	
	<style type="text/css">
		body{
			
	background-image:url("logo.png"); 
	background:  url("logo.png") no-repeat fixed center;
	 background-size: 550px 300px;
}
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

	<div><h1 style="text-align:center">Please Enter your Family Information</h1><div>
	<div style="height:auto; width:100%; border:1px solid;">

	<form method="POST" action="./family_info_process.php">
		
		<table width="100%" border="1"  >
			<tr>	<td colspan="2">11.	Total Family Members currently living with you: </td>
		   		
		   		<td colspan="4"><input type="text" name="family" placeholder="Family Member" style="width: 250px; height: 30px; text-indent:20px;  border: 2px solid;"></td>
		   	</tr>
            <tr>
		   		<td colspan="6">
		   		<table  width="500" border="1" align="center" >
		   		<tr>
		   			<td>S.No</td>
		   			<td>Name of Family Member (s)</td>
		   			<td>Relationship</td>
		   			<td>Marital Status</td>
		   			<td>Remarks**</td>
		   		</tr>
		   		<tr>
		   			<td>1</td>
		   			<td><input type="text" name="membername1" placeholder="Name Of family Member" style="width: 250px; height: 30px; text-indent:20px;  border: 2px solid;" ></td>
		   			<td><input type="text" name="relationship1" placeholder="Relationship with Member" style="width: 250px; height: 30px; text-indent:20px;  border: 2px solid;"></td>
		   			<td><input type="text" name="maritalstatus1" placeholder="Marital Status" style="width: 250px; height: 30px; text-indent:20px;  border: 2px solid;"></td>
		   			<td><input type="text" name="rem1" placeholder="Remarks" style="width: 250px; height: 30px; text-indent:20px;  border: 2px solid;"></td>
		   		</tr>
		   		<tr>
		   			<td>2</td>
		   			<td><input type="text" name="membername2" placeholder="Name Of family Member" style="width: 250px; height: 30px; text-indent:20px;  border: 2px solid;"></td>
		   			<td><input type="text" name="relationship2" placeholder="Relationship with Member" style="width: 250px; height: 30px; text-indent:20px;  border: 2px solid;"></td>
		   			<td><input type="text" name="maritalstatus2" placeholder="Marital Status" style="width: 250px; height: 30px; text-indent:20px;  border: 2px solid;"></td>
		   			<td><input type="text" name="rem2" placeholder="Remarks" style="width: 250px; height: 30px; text-indent:20px;  border: 2px solid;"></td>
		   		</tr>
		   		<tr>
		   			<td>3</td>
		   			<td><input type="text" name="membername3" placeholder="Name Of family Member" style="width: 250px; height: 30px; text-indent:20px;  border: 2px solid;"></td>
		   			<td><input type="text" name="relationship3" placeholder="Relationship with Member" style="width: 250px; height: 30px; text-indent:20px;  border: 2px solid;"></td>
		   			<td><input type="text" name="maritalstatus3" placeholder="Marital Status" style="width: 250px; height: 30px; text-indent:20px;  border: 2px solid;"></td>
		   			<td><input type="text" name="rem3" placeholder="Remarks" style="width: 250px; height: 30px; text-indent:20px;  border: 2px solid;"></td>
		   		</tr>
		   		<tr>
		   			<td>4</td>
		   			<td><input type="text" name="membername4" placeholder="Name Of family Member" style="width: 250px; height: 30px; text-indent:20px;  border: 2px solid;"></td>
		   			<td><input type="text" name="relationship4" placeholder="Relationship with Member" style="width: 250px; height: 30px; text-indent:20px;  border: 2px solid;"></td>
		   			<td><input type="text" name="maritalstatus4" placeholder="Marital Status" style="width: 250px; height: 30px; text-indent:20px;  border: 2px solid;"></td>
		   			<td><input type="text" name="rem4" placeholder="Remarks" style="width: 250px; height: 30px; text-indent:20px;  border: 2px solid;"></td>
		   		</tr>
		   		<tr>
		   			<td>5</td>
		   			<td><input type="text" name="membername5" placeholder="Name Of family Member" style="width: 250px; height: 30px; text-indent:20px;  border: 2px solid;"></td>
		   			<td><input type="text" name="relationship5" placeholder="Relationship with Member" style="width: 250px; height: 30px; text-indent:20px;  border: 2px solid;"></td>
		   			<td><input type="text" name="maritalstatus5" placeholder="Marital Status" style="width: 250px; height: 30px; text-indent:20px;  border: 2px solid;"></td>
		   			<td><input type="text" name="rem5" placeholder="Remarks" style="width: 250px; height: 30px; text-indent:20px;  border: 2px solid;"></td>
		   		</tr>
		   		<tr>
		   			<td>6</td>
		   			<td><input type="text" name="membername6" placeholder="Name Of family Member" style="width: 250px; height: 30px; text-indent:20px;  border: 2px solid;"></td>
		   			<td><input type="text" name="relationship6" placeholder="Relationshiwith Member" style="width: 250px; height: 30px; text-indent:20px;  border: 2px solid;"></td>
		   			<td><input type="text" name="maritalstatus6" placeholder="Marital Status" style="width: 250px; height: 30px; text-indent:20px;  border: 2px solid;"></td>
		   			<td><input type="text" name="rem6" placeholder="Remarks" style="width: 250px; height: 30px; text-indent:20px;  border: 2px solid;"></td>
		   		</tr>
		   		</table>	
                </td>
		   	    </tr>

		   	    <tr>
		   	    	<td colspan="6">13. Details of Family Members Earning (Take extra sheet if required):</td>
		   	    	
		   	    </tr>
		   	    <tr>
		   	    <td colspan="6">
		   	    		<table  border="1" align="center">
		   	    		<tr>
		   	    			<td>S.No</td>
		   	    			<td>Family Member Name</td>
		   	    			<td>Relationship</td>
		   	    			<td>Family Member occupation (Specify)</td>
		   	    			<td>Organization Name</td>
		   	    			<td>Designation</td>
		   	    			<td>Monthly Gross Pay/Earning</td>
		   	    			<td>Remarks</td>
		   	    		</tr>
		   	    		<tr>
		   	    			<td>1</td>
		   	    			<td><input type="text" name="familymembername1" placeholder="Family Member" style= "height:30px; border:2px solid;"></td>
		   	    			<td><input type="text" name="relation1" placeholder="relationship" style= "height:30px; border:2px solid;"></td>
		   	    			<td><input type="text" name="occupation1" placeholder="Occupation" style= "height:30px; border:2px solid;"></td>
		   	    			<td><input type="text" name="organization1" placeholder="Organization Name" style= "height:30px; border:2px solid;"></td>
		   	    			<td><input type="text" name="desg1" placeholder="Designation" style= "height:30px; border:2px solid;"></td>
		   	    			<td><input type="text" name="earning1" placeholder="Monthly Earning" style= "height:30px; border:2px solid;"></td>
		   	    			<td><input type="text" name="remarks1" placeholder="Remarks" style= "height:30px; border:2px solid;"></td>
		   	    		</tr>
		   	    		<tr>
		   	    			<td>2</td>
		   	    			<td><input type="text" name="familymembername2" placeholder="Family Member" style= "height:30px; border:2px solid;"></td>
		   	    			<td><input type="text" name="relation2" placeholder="relationship" style= "height:30px; border:2px solid;"></td>
		   	    			<td><input type="text" name="occupation2" placeholder="Occupation" style= "height:30px; border:2px solid;"></td>
		   	    			<td><input type="text" name="organization2" placeholder="Organization Name" style= "height:30px; border:2px solid;"></td>
		   	    			<td><input type="text" name="desg2" placeholder="Designation" style= "height:30px; border:2px solid;"></td>
		   	    			<td><input type="text" name="earning2" placeholder="Monthly Earning" style= "height:30px; border:2px solid;"></td>
		   	    			<td><input type="text" name="remarks2" placeholder="Remarks" style= "height:30px; border:2px solid;"></td>
		   	    		</tr>
		   	    		<tr>
		   	    			<td>3</td>
		   	    			<td><input type="text" name="familymembername3" placeholder="Family Member" style= "height:30px; border:2px solid;" ></td>
		   	    			<td><input type="text" name="relation3" placeholder="relationship" style= "height:30px; border:2px solid;"></td>
		   	    			<td><input type="text" name="occupation3" placeholder="Occupation" style= "height:30px; border:2px solid;"></td>
		   	    			<td><input type="text" name="organization3" placeholder="Organization Name" style= "height:30px; border:2px solid;"></td>
		   	    			<td><input type="text" name="desg3" placeholder="Designation" style= "height:30px; border:2px solid;"></td>
		   	    			<td><input type="text" name="earning3" placeholder="Monthly Earning" style= "height:30px; border:2px solid;"></td>
		   	    			<td><input type="text" name="remarks3" placeholder="Remarks" style= "height:30px; border:2px solid;"></td>
		   	    		</tr>
		   	    		<tr>
		   	    			<td>4</td>
		   	    			<td><input type="text" name="familymembername4" placeholder="Family Member" style= "height:30px; border:2px solid;"></td>
		   	    			<td><input type="text" name="relation4" placeholder="relationship" style= "height:30px; border:2px solid;"></td>
		   	    			<td><input type="text" name="occupation4" placeholder="Occupation" style= "height:30px; border:2px solid;"></td>
		   	    			<td><input type="text" name="organization4" placeholder="Organization Name" style= "height:30px; border:2px solid;"></td>
		   	    			<td><input type="text" name="desg4" placeholder="Designation" style= "height:30px; border:2px solid;"></td>
		   	    			<td><input type="text" name="earning4" placeholder="Monthly Earning" style= "height:30px; border:2px solid;"></td>
		   	    			<td><input type="text" name="remarks4" placeholder="Remarks" style= "height:30px; border:2px solid;"></td>
		   	    		</tr>
		   	    		<tr>
		   	    			<td>14</td>
		   	    			<td colspan="5">	Total Monthly Family Income (add self income, if applicable) Pak Rupees</td>
		   	    			
		   	    			
		   	    			<td><input type="text" name="earning5" placeholder="Total Family Income" style= "height:30px; border:2px solid;"></td>
		   	    			<td>&nbsp;</td>
		   	    		</tr>
		   	    		</table>
					</td>
		   	        </tr> 
		   	       


		   	        <tr>
		   	        	<td colspan="3">15. Brothers/Sisters/Children/Family Members studying </td>
		   	        	<td colspan="3"><input type="text" name="studying" placeholder="Brothers/sister studying" style="width: 250px; height: 30px; text-indent:20px;  border: 2px solid;"></td>
		   	        </tr>
					<tr>
						<td colspan="6">
							<table width="100" border="1">
								<tr>
									<td>S.No</td>
									<td>Name</td>
									<td>Relation with applicant</td>
									<td>Name Address of Institute </td>
									<td>Fee per month</td>
								</tr>
								<tr>
									<td>1</td>
									<td><input type="text" name="nam1" placeholder="Brother Sister studying" style="width: 250px; height: 30px; text-indent:20px;  border: 2px solid;"></td>
									<td><input type="text" name="rel1" placeholder="Relationship" style="width: 250px; height: 30px; text-indent:20px;  border: 2px solid;"></td>
									<td><input type="text" name="adrsinst1" placeholder="Institute Name and  Address" style="width: 250px; height: 30px; text-indent:20px;  border: 2px solid;"></td>
									<td><input type="text" name="fee1" placeholder="Fee Per Month" style="width: 250px; height: 30px; text-indent:20px;  border: 2px solid;"></td>
								</tr>
								<tr>
									<td>2</td>
									<td><input type="text" name="nam2" placeholder="Brother Sister studying" style="width: 250px; height: 30px; text-indent:20px;  border: 2px solid;"></td>
									<td><input type="text" name="rel2" placeholder="Relationship" style="width: 250px; height: 30px; text-indent:20px;  border: 2px solid;"></td>
									<td><input type="text" name="adrsinst2" placeholder="Institute Name and  Address" style="width: 250px; height: 30px; text-indent:20px;  border: 2px solid;"></td>
									<td><input type="text" name="fee2" placeholder="Fee Per Month" style="width: 250px; height: 30px; text-indent:20px;  border: 2px solid;"></td>
								</tr>
								<tr>
									<td>3</td>
									<td><input type="text" name="nam3" placeholder="Brother Sister studying"  style="width: 250px; height: 30px; text-indent:20px;  border: 2px solid;"></td>
									<td><input type="text" name="rel3" placeholder="Relationship"  style="width: 250px; height: 30px; text-indent:20px;  border: 2px solid;"></td>
									<td><input type="text" name="adrsinst3" placeholder="Institute Name and  Address"  style="width: 250px; height: 30px; text-indent:20px;  border: 2px solid;"></td>
									<td><input type="text" name="fee3" placeholder="Fee Per Month"  style="width: 250px; height: 30px; text-indent:20px;  border: 2px solid;"></td>
								</tr>
								<tr>
									<td>4</td>
									<td><input type="text" name="nam4" placeholder="Brother Sister studying"  style="width: 250px; height: 30px; text-indent:20px;  border: 2px solid;"></td>
									<td><input type="text" name="rel4" placeholder="Relationship"  style="width: 250px; height: 30px; text-indent:20px;  border: 2px solid;"></td>
									<td><input type="text" name="adrsinst4" placeholder="Institute Name and  Address"  style="width: 250px; height: 30px; text-indent:20px;  border: 2px solid;"></td>
									<td><input type="text" name="fee4" placeholder="Fee Per Month"  style="width: 250px; height: 30px; text-indent:20px;  border: 2px solid;"></td>
								</tr>
								<tr>
									<td>5</td>
									<td><input type="text" name="nam5" placeholder="Brother Sister studying"  style="width: 250px; height: 30px; text-indent:20px;  border: 2px solid;"></td>
									<td><input type="text" name="rel5" placeholder="Relationship" style="width: 250px; height: 30px; text-indent:20px;  border: 2px solid;"></td>
									<td><input type="text" name="adrsinst5" placeholder="Institute Name and  Address"  style="width: 250px; height: 30px; text-indent:20px;  border: 2px solid;"></td>
									<td><input type="text" name="fee5" placeholder="Fee Per Month"  style="width: 250px; height: 30px; text-indent:20px;  border: 2px solid;"></td>
								</tr>
								<tr>
									<td>6</td>
									<td><input type="text" name="nam6" placeholder="Brother Sister studying"  style="width: 250px; height: 30px; text-indent:20px;  border: 2px solid;"></td>
									<td><input type="text" name="rel6" placeholder="Relationship"  style="width: 250px; height: 30px; text-indent:20px;  border: 2px solid;"></td>
									<td><input type="text" name="adrsinst6" placeholder="Institute Name and  Address"  style="width: 250px; height: 30px; text-indent:20px;  border: 2px solid;"></td>
									<td><input type="text" name="fee6" placeholder="Fee Per Month"  style="width: 250px; height: 30px; text-indent:20px;  border: 2px solid;"></td>
								</tr>
								<tr>
									<td>15A</td>
									<td colspan="3">Total Fees  Tuition Charges</td>
									<td><input type="text" name="fees"  style="width: 250px; height: 30px; text-indent:20px;  border: 2px solid;"></td>
								</tr>
								</table>
							  	</td>
					         	</tr>
					         	  <tr>
 			      	<td colspan="6">29. Total Family Monthly Income</td>
 			      </tr>	
 			      <tr>
 			      	<td colspan="6">
 			      	<table border="1" width="600">
 			      <tr>
 			      	<td>S.No</td>
 			      	<td>Family Member Name</td>
 			      	<td>Relationship</td>
 			      	<td>Monthly Income from Assets</td>
 			      	<td>Monthly Gross Pay/Earning</td>
 			      	<td>Monthly Net (Take home) Pay/Earning</td>
 			      </tr>
 			      <tr>
 			      	<td>1</td>
 			      	<td><input type="text" name="fmn1"  style="width: 250px; height: 30px; text-indent:20px;  border: 2px solid;"></td>
 			      	<td><input type="text" name="relat1"  style="width: 250px; height: 30px; text-indent:20px;  border: 2px solid;"></td>
 			      	<td><input type="text" name="mifa1"  style="width: 250px; height: 30px; text-indent:20px;  border: 2px solid;"></td>
 			      	<td><input type="text" name="monthly1"  style="width: 250px; height: 30px; text-indent:20px;  border: 2px solid;"></td>
 			      	<td><input type="text" name="monthlynet1" style="width: 250px; height: 30px; text-indent:20px;  border: 2px solid;"></td>
 			      </tr>
 			       <tr>
 			      	<td>2</td>
 			      	<td><input type="text" name="fmn2"  style="width: 250px; height: 30px; text-indent:20px;  border: 2px solid;"></td>
 			      	<td><input type="text" name="relat2"  style="width: 250px; height: 30px; text-indent:20px;  border: 2px solid;"></td>
 			      	<td><input type="text" name="mifa2"  style="width: 250px; height: 30px; text-indent:20px;  border: 2px solid;"></td>
 			      	<td><input type="text" name="monthly2"  style="width: 250px; height: 30px; text-indent:20px;  border: 2px solid;"></td>
 			      	<td><input type="text" name="monthlynet2"  style="width: 250px; height: 30px; text-indent:20px;  border: 2px solid;"></td>
 			      </tr>
 			       <tr>
 			      	<td>3</td>
 			      	<td><input type="text" name="fmn3"  style="width: 250px; height: 30px; text-indent:20px;  border: 2px solid;"></td>
 			      	<td><input type="text" name="relat3"  style="width: 250px; height: 30px; text-indent:20px;  border: 2px solid;"></td>
 			      	<td><input type="text" name="mifa3"  style="width: 250px; height: 30px; text-indent:20px;  border: 2px solid;"></td>
 			      	<td><input type="text" name="monthly3"  style="width: 250px; height: 30px; text-indent:20px;  border: 2px solid;"></td>
 			      	<td><input type="text" name="monthlynet3"  style="width: 250px; height: 30px; text-indent:20px;  border: 2px solid;"></td>
 			      </tr>
 			       <tr>
 			      	<td>4</td>
 			      	<td><input type="text" name="fmn4"  style="width: 250px; height: 30px; text-indent:20px;  border: 2px solid;"></td>
 			      	<td><input type="text" name="relat4"  style="width: 250px; height: 30px; text-indent:20px;  border: 2px solid;"></td>
 			      	<td><input type="text" name="mifa4"  style="width: 250px; height: 30px; text-indent:20px;  border: 2px solid;"></td>
 			      	<td><input type="text" name="monthly4"  style="width: 250px; height: 30px; text-indent:20px;  border: 2px solid;"></td>
 			      	<td><input type="text" name="monthlynet4"  style="width: 250px; height: 30px; text-indent:20px;  border: 2px solid;"></td>
 			      </tr>
 			      <tr>
 			      	<td>5</td>
 			      	<td colspan="2">Applicant Monthly Gross Pay/Earning</td>
 			      	<td><input type="text" name="mifa5"  style="width: 250px; height: 30px; text-indent:20px;  border: 2px solid;"></td>
 			      	<td><input type="text" name="monthly5"  style="width: 250px; height: 30px; text-indent:20px;  border: 2px solid;"></td>
 			      	<td><input type="text" name="monthlynet5"  style="width: 250px; height: 30px; text-indent:20px;  border: 2px solid;"></td>
 			      </tr>
 			      <tr>
 			      	<td>6</td>
 			      	<td colspan="2">Applicant Monthly Net (Take home) Pay</td>
 			      	<td><input type="text" name="mifa6"  style="width: 250px; height: 30px; text-indent:20px;  border: 2px solid;"></td>
 			      	<td><input type="text" name="monthly6"  style="width: 250px; height: 30px; text-indent:20px;  border: 2px solid;"></td>
 			      	<td><input type="text" name="monthlynet6"  style="width: 250px; height: 30px; text-indent:20px;  border: 2px solid;"></td>
 			      </tr>
 			       <tr>
 			      	<td>29-A</td>
 			      	<td colspan="3">Total Monthly Income in Pak Rupees</td>
 			        <td><input type="text" name="monthly7"  style="width: 250px; height: 30px; text-indent:20px;  border: 2px solid;"></td>
 			      	<td><input type="text" name="monthlynet7"  style="width: 250px; height: 30px; text-indent:20px;  border: 2px solid;"></td>
 			      </tr>
 			      <tr>
 			      	<td>29-B</td>
 			      	<td colspan="3">Total Annual Income in Pak Rupees</td>
 			        <td><input type="text" name="monthly8"  style="width: 250px; height: 30px; text-indent:20px;  border: 2px solid;"></td>
 			      	<td><input type="text" name="monthlynet8"  style="width: 250px; height: 30px; text-indent:20px;  border: 2px solid;"></td>
 			      </tr>
 			      </table>
 			      </td>
 			      </tr>

 			      <tr>
 			      	<td colspan="6">30.FAMILY EXPENDITURES</td>
 			      </tr>
 			       <tr>
 			      	<td colspan="6">30A. Accommodation Expenditures </td>
 			      </tr>
 			      <tr>
 			      	<td>Type:</td>
 			      	<td colspan="5"><input type="radio" name="Bungalow" value="Bungalow"/>Bungalow &nbsp;<input type="radio" name="Bungalow"  checked="checked" value="Appartment/Flat"/>Appartment/Flat &nbsp;<input type="radio" name="Bungalow" value="Town House"/> Village House &nbsp;<input type="radio" name="Bungalow" value="Village House"/> Village House</td>
 			      </tr>
 			     <tr>
 			     	<td>Status</td>
 			      	<td colspan="5"><input type="radio" name="rentstatus" checked="checked" value="Rented"/>Rented &nbsp;<input type="radio" name="rentstatus" checked="checked" value="Self or Family owned"/>Self or Family owned &nbsp;<input type="radio" name="rentstatus" value="Employer / Govt Owned "/>Employer / Govt Owned  </td>
 			     </tr>
 			     <tr>
 			     	<td>Rent Payment: </td>
 			      	<td colspan="5"><input type="radio" name="rentpay" checked="checked" value="Self"/>Self &nbsp;<input type="radio" name="rentpay" value="Employer/Govt"/>Employer/Govt &nbsp;<input type="radio" name="rentpay" value="Other "/>Other </td>
 			     </tr>
 			    


 			    <tr>
 			     	<td>House Plot Size in Sq. ft.</td>
 			     	<td colspan="3"><input type="text" name="plotsize" style="width: 250px; height: 30px; text-indent:20px;  border: 2px solid;"></td>
 			     	<td>Covered Area in Sq. ft.</td>
 			     	<td colspan="3"><input type="text" name="squarefeet" style="width: 250px; height: 30px; text-indent:20px;  border: 2px solid;"></td>
 			     </tr>
 			     <td colspan="6">
 			     <table border="1">
 			     			<tr>
 			     				<td >S.No</td>
 			     				<td>Accommodation Location /Address</td>
 			     				<td >Number Of Bed Rooms</td>
 			     				<td>Number Of Air conditioners</td>
 			     				<td>Accommodation Monthly Rent</td>
 			     				<td>Accommodation Annual Rent</td>
 			     			</tr>
 			     			<tr>
 			     			    <td>1</td>
 			     				<td rowspan="3"><input type="text" name="location" style=" height: 40px; border:2px solid;"></td>
 			     				<td rowspan="3"><input type="radio" name="numofbedroom" value="1-2"/>1-2&nbsp;<br><input type="radio" name="numofbedroom" checked="checked" value="2-4"/>2-4&nbsp;<br><input type="radio" name="numofbedroom" value="4-6"/>4-6<br><input type="radio" name="numofbedroom" value="Above"/>Above</td>
 			     				<td rowspan="3"><input type="radio" name="numofair" checked="checked" value="1-2"/>1-2&nbsp;<br><input type="radio" name="numofair" value="2-4"/>2-4&nbsp;<br><input type="radio" name="numofair" value="4-6"/>4-6 &nbsp;<br><input type="radio" name="numofair" value="Above"/>Above</td>
 			     				<td rowspan="3"><input type="text" name="monthlyrent" style=" height: 40px; border:2px solid;"></td>
 			     				<td rowspan="3"><input type="text" name="annualrent" style=" height: 40px; border:2px solid;"></td>
 			     				</tr>
 			     				<tr><td>&nbsp;</td></tr>
 			     				<tr><td>&nbsp;</td></tr>



 			     				<tr>
 			     				<td>

 			     					<table  style="width:500px;  border:1px solid;">
 			     						<tr>
 			     						<td>30B</td>	
 			     						<td  colspan="3">Total Accommodation Rental Expenditure</td>
 			     					<td><input type="text" name="totlmonthlyrent" style=" height: 40px; border:2px solid;"></td>
 			     				    <td><input type="text" name="totlannualrent"  style=" height: 40px; border:2px solid;"></td>

 			     						</tr>

 			     					</table>
 			     					</td>
 			     				    </tr>

 			     				    <tr>
 			     					<td colspan="3">Any other house/flat owned by the Parents/Guardian (if yes please specify with location and size)</td>
 			     					<td  colspan="3"><input type="text" name="otherowned" style=" height: 40px; border:2px solid;"></td>

 			     				</tr>
 			     				
 			     				<tr>
 			     					<td colspan="6">31. Utilities Expenditures </td>
 			     				</tr>

 			     				<tr>
 			     			    <td colspan="6">
 			     				<table border="1">
 			     							<tr>
 			     								<td colspan="4">Last Month Utilities Paid</td>
 			     							</tr>
 			     							<tr>
 			     								<td>Telephone</td>
 			     								<td>Electricity</td>
 			     								<td>Gas</td>
 			     								<td>Water</td>

 			     							</tr>
 			     							<tr>
 			     							<td><input type="text" name="telephone" style=" height: 40px; border:2px solid;"></td>
 			     							<td><input type="text" name="electricity" style=" height: 40px; border:2px solid;"></td>
 			     							<td><input type="text" name="gas" style=" height: 40px; border:2px solid;"></td>
 			     							<td><input type="text" name="water" style=" height: 40px; border:2px solid;"></td>
 			     							</tr>
 			     				</table>
 			     				</td>
 			     				</tr>



 			     				<tr>
 			     					<td colspan="3">Medical Expenditures: Average of last six months (Per Month Expenditure)</td>
 			     					<td colspan="3"><input type="text" name="medical" style=" height: 40px; border:2px solid;"></td>
 			     				</tr>
 			     				<tr>
 			     				<td colspan="6">Total Family Expenditures</td>
 			     				</tr>



 			     				<tr>
 			     				<td colspan="6">
 			     				<table border="1" >
 			     				<tr>
 			     					<td>S.No</td>
 			     					<td>Education Expenditure </td>
 			     					<td>Accommodation Expenditure</td>
 			     				    <td> Food Expenditure</td>
 			     				    <td>Utilities Expenditure</td>
 			     				    <td>Medical Expenditure</td>
 			     				    <td>Misc.Expenditure</td>
 			     				    <td>Total Monthly Expenditure</td>
 			     				    <td>Total Annual Expenditure</td>
 			     				</tr>
 			     				<tr>
 			     				    <td>33</td>
 			     					<td width="100"><input type="text" name="eduexp" style="width: 150px; height: 40px; text-indent:20px;  border: 2px solid;"></td>
 			     					<td width="100"><input type="text" name="accoexp" style="width: 150px; height: 40px; text-indent:20px;  border: 2px solid;"></td>
 			     					<td width="100"><input type="text" name="foodexp" style="width: 150px; height: 40px; text-indent:20px;  border: 2px solid;"></td>
 			     					<td width="100"><input type="text" name="utilityexp" style="width: 150px; height: 40px; text-indent:20px;  border: 2px solid;"></td>
 			     					<td width="100"><input type="text" name="medexp"style="width: 150px; height: 40px; text-indent:20px;  border: 2px solid;" ></td>
 			     					<td width="100"><input type="text" name="misexp"style="width: 150px; height: 40px; text-indent:20px;  border: 2px solid;" ></td>
 			     					<td width="100"><input type="text" name="ttlamnt" style="width: 150px; height: 40px; text-indent:20px;  border: 2px solid;" ></td>
 			     					<td width="100"><input type="text" name="ttlann" style="width: 150px; height: 40px; text-indent:20px;  border: 2px solid;" ></td>
 			     					
 			     				</tr>
 			     				</table>
 			     				</td>
 			     				</tr>


 			     				<tr>
 			     				<td colspan="6">
 			     				<table border="1">
 			     							<tr>
 			     								<td>S.No</td>
 			     								<td>Description</td>
 			     								<td>Amounts in Pak Rupees</td>
 			     							</tr>
 			     							<tr>
 			     								<td>(Sec.29A)</td>
 			     								<td>Total Monthly Income </td>
 			     								<td><input type="text" name="tmi" style=" height: 40px; border:2px solid;"></td>
 			     							</tr>
 			     							<tr>
 			     								<td>(Sec. 33)</td>
 			     								<td>Total Monthly Expenditure  </td>
 			     								<td><input type="text" name="tme" style=" height: 40px; border:2px solid;"></td>
 			     							</tr>
 			     							<tr>
 			     								<td>34(29.A 33A)</td>
 			     								<td>Net Monthly Disposable Income*  </td>
 			     								<td><input type="text" name="nmdi" style=" height: 40px; border:2px solid;"></td>
 			     							</tr>
 			     				</table>
 			     			    </td>
 			     				</tr>

  
 			     				<tr>
 			     				<td colspan="6">
 			     				<table border="1">
 			     							<tr>
 			     								<td>S.No</td>
 			     								<td>Description</td>
 			     								<td>Amounts in Pak Rupees</td>
 			     							</tr>
 			     							<tr>
 			     								<td>(Sec.29B)</td>
 			     								<td>Total Annual Income  </td>
 			     								<td><input type="text" name="tai" style=" height: 40px; border:2px solid;"></td>
 			     							</tr>
 			     							<tr>
 			     								<td>(Sec. 33)</td>
 			     								<td>Total Annual Expenditure   </td>
 			     								<td><input type="text" name="tae" style=" height: 40px; border:2px solid;"></td>
 			     							</tr>
 			     							<tr>
 			     								<td>35(29.B 33.B)</td>
 			     								<td>Net Annual Disposable Income*  </td>
 			     								<td><input type="text" name="nadi" style=" height: 40px; border:2px solid;"></td>
 			     							</tr>
 			     				</table>
 			     			    </td>
 			     				</tr>

 			     				<tr>
 			     					<td colspan="6">* If the monthly / Annual Disposable Income is negative, kindly explain the reasons for the gap, and the arrangements through which the differential gap is met by the family </td>
 			     				</tr>
 			     				<tr>
 			     					<td > <textarea name="txtarea" style="width:100%; height:120px; border:2px solid;"></textarea></td>
 			     				</tr>
 			     				<tr>
 			     					<td colspan="6">Assets (with current market value)</td>
 			     				</tr>
 			     				<tr>
 			     					<td colspan="2">36. Does the family own any Transport?    </td>
 			     					<td colspan="4"><input type="radio" name="owntran" value="Yes"/>Yes&nbsp;<input type="radio" name="owntran" checked="checked" value="No"/>No</td>
 			     				</tr>
 			     				<tr>
 			     					<td colspan="6">If yes kindly fill the relevant details</td>
 			     				</tr>
 			     				<tr>
 			     				<td colspan="6">
 			     				<table border="1" >
 			     				<tr>
 			     				<td>
 			     				S.No
 			     				</td>
 			     				<td>
 			     				Transport Type (Car/ Motor cycle/ Others*)
 			     				</td>
 			     				<td>
 			     				Make /Model
 			     				</td>
 			     				<td>
 			     				Engine Capacity (CC)
 			     				</td>
 			     				<td>
 			     				Registration No.
 			     				</td>
 			     				<td>
 			     				Ownership Period
 			     				</td>
 			     			    </tr>
 			     			    <tr>
 			     			    	<td>1</td>
 			     			    	<td><input type="text" name="car1" style="width: 200px; height: 30px; text-indent:20px;  border: 2px solid;"></td>
 			     			    	<td><input type="text" name="model1"  style="width: 200px; height: 30px; text-indent:20px;  border: 2px solid;"></td>
 			     			    	<td><input type="text" name="engine1" style="width: 200px; height: 30px; text-indent:20px;  border: 2px solid;"></td>
 			     			    	<td><input type="text" name="registration1" style="width: 200px; height: 30px; text-indent:20px;  border: 2px solid;"></td>
 			     			    	<td><input type="text" name="ownership1" style="width: 200px; height: 30px; text-indent:20px;  border: 2px solid;"></td>
 			     			    </tr>
 			     			    <tr>
 			     			    	<td>2</td>
 			     			    	<td><input type="text" name="car2" style="width: 200px; height: 30px; text-indent:20px;  border: 2px solid;"></td>
 			     			    	<td><input type="text" name="model2" style="width: 200px; height: 30px; text-indent:20px;  border: 2px solid;"></td>
 			     			    	<td><input type="text" name="engine2" style="width: 200px; height: 30px; text-indent:20px;  border: 2px solid;"></td>
 			     			    	<td><input type="text" name="registration2" style="width: 200px; height: 30px; text-indent:20px;  border: 2px solid;"></td>
 			     			    	<td><input type="text" name="ownership2" style="width: 200px; height: 30px; text-indent:20px;  border: 2px solid;"></td>
 			     			    </tr>
 			     		        </table>
 			     	           </td>
 			     				</tr>

 			     				<tr>
 			     				 	<td colspan="6">* Others: include tractor, rickshaw, bi-cycle, motorcycle rickshaw, carriage pick, truck etc.</td>
 			     				 </tr>
 			     				 <tr>
 			     				 	<td colspan="6">37. Number of Cattle(s) (with kind) </td></tr>
 			     				 	<tr><td colspan="6"><textarea name="namecattle"   style=" height: 150px; width:500px; border:2px solid;"></textarea></td>
 			     				 </tr>
 			     				  <tr>
 			     				 	<td colspan="6">38. Area and location of Land(s)/Plot(s) owned  </td></tr>
 			     				 	<tr><td colspan="6"><textarea name="areaplot"   style=" height: 150px; width:500px; border:2px solid;"></textarea>     </td>
 			     				 </tr><br>

 			     				  <tr>
 			     				 <td colspan="6">
 			     				 	<table border="1">
 			     				 		<tr>
 			     				 			<td>Assets Title</td>
 			     				 			<td>Qty</td>
 			     				 			<td>Size</td>
 			     				 			<td>Location (Address)</td>
 			     				 			<td>Cultivable Area</td>
 			     				 			<td>Agricultural Yield per Acre</td>
 			     				 		</tr>
 			     				 		<tr>
 			     				 			<td>Residential</td>
 			     				 			<td><input type="text" name="qty1"  style=" height: 40px; border:2px solid;"></td>
 			     				 			<td><input type="text" name="size1"  style=" height: 40px; border:2px solid;"></td>
 			     				 			<td><input type="text" name="location1"  style=" height: 40px; border:2px solid;"></td>
 			     				 			<td><input type="text" name="cultivvable1"  style=" height: 40px; border:2px solid;"></td>
 			     				 			<td><input type="text" name="agriculture1"  style=" height: 40px; border:2px solid;"></td>
 			     				 		</tr>
 			     				 		<tr>
 			     				 			<td>Commercial</td>
 			     				 			<td><input type="text" name="qty2"   style=" height: 40px; border:2px solid;"></td>
 			     				 			<td><input type="text" name="size2"   style=" height: 40px; border:2px solid;"></td>
 			     				 			<td><input type="text" name="location2"   style=" height: 40px; border:2px solid;"></td>
 			     				 			<td><input type="text" name="cultivvable2"   style=" height: 40px; border:2px solid;"></td>
 			     				 			<td><input type="text" name="agriculture2"   style=" height: 40px; border:2px solid;"></td>
 			     				 		</tr>
 			     				 		<tr>
 			     				 			<td>Agricultural</td>
 			     				 			<td><input type="text" name="qty3"   style=" height: 40px; border:2px solid;"></td>
 			     				 			<td><input type="text" name="size3"   style=" height: 40px; border:2px solid;"></td>
 			     				 			<td><input type="text" name="location3"   style=" height: 40px; border:2px solid;"></td>
 			     				 			<td><input type="text" name="cultivvable3"   style=" height: 40px; border:2px solid;"></td>
 			     				 			<td><input type="text" name="agriculture3"   style=" height: 40px; border:2px solid;"></td>
 			     				 		</tr>
 			     				 		<tr>
 			     				 			<td>Employer/Govt Scheme</td>
 			     				 			<td><input type="text" name="qty4"   style=" height: 40px; border:2px solid;"></td>
 			     				 			<td><input type="text" name="size4"   style=" height: 40px; border:2px solid;"></td>
 			     				 			<td><input type="text" name="location4"   style=" height: 40px; border:2px solid;"></td>
 			     				 			<td><input type="text" name="cultivvable4"   style=" height: 40px; border:2px solid;"></td>
 			     				 			<td><input type="text" name="agriculture4"   style=" height: 40px; border:2px solid;"></td>
 			     				 		</tr>
 			     				 </table>
 			     				 </td>
 			     				 </tr>




 			     				 <br>
 			     				 <tr>
 			     				 	<td colspan="6">39. Assets worth (Current Market Value in Pak. Rs.)</td>
 			     				 </tr>
 			     				 <tr><td colspan="6">
 			     				 <table border="1">
 			     				 <tr>
 			     				 	<td>S.No</td>
 			     				 	<td>Assets Title</td>
 			     				 	<td>Father</td>
 			     				 	<td>Mother</td>
 			     				 	<td>Spouse</td>
 			     				 	<td>Self</td>
 			     				 	<td>Guardian</td>
 			     				 	<td>Total</td>
 			     				 </tr>
 			     				  <tr>
 			     				 	<td>1</td>
 			     				 	<td>House</td>
 			     				 	<td><input type="text" name="assfth1" style=" height: 40px; border:2px solid;"></td>
 			     				 	<td><input type="text" name="assmoth1" style=" height: 40px; border:2px solid;"></td>
 			     				 	<td><input type="text" name="assspou1" style=" height: 40px; border:2px solid;"></td>
 			     				 	<td><input type="text" name="assslef1" style=" height: 40px; border:2px solid;"></td>
 			     				 	<td><input type="text" name="assguar1" style=" height: 40px; border:2px solid;"></td>
 			     				 	<td><input type="text" name="asstotl1" style=" height: 40px; border:2px solid;"></td>
 			     				 </tr>
 			     				 <tr>
 			     				 	<td>2</td>
 			     				 	<td>Business</td>
 			     				 	<td><input type="text" name="assfth2" style=" height: 40px; border:2px solid;"></td>
 			     				 	<td><input type="text" name="assmoth2" style=" height: 40px; border:2px solid;"></td>
 			     				 	<td><input type="text" name="assspou2" style=" height: 40px; border:2px solid;"></td>
 			     				 	<td><input type="text" name="assslef2" style=" height: 40px; border:2px solid;"></td>
 			     				 	<td><input type="text" name="assguar2" style=" height: 40px; border:2px solid;"></td>
 			     				 	<td><input type="text" name="asstotl2" style=" height: 40px; border:2px solid;"></td>
 			     				 </tr>
 			     				 <tr>
 			     				 	<td>3</td>
 			     				 	<td>Land & Building</td>
 			     				 	<td><input type="text" name="assfth3" style=" height: 40px; border:2px solid;"></td>
 			     				 	<td><input type="text" name="assmoth3" style=" height: 40px; border:2px solid;"></td>
 			     				 	<td><input type="text" name="assspou3" style=" height: 40px; border:2px solid;"></td>
 			     				 	<td><input type="text" name="assslef3" style=" height: 40px; border:2px solid;"></td>
 			     				 	<td><input type="text" name="assguar3" style=" height: 40px; border:2px solid;"></td>
 			     				 	<td><input type="text" name="asstotl3" style=" height: 40px; border:2px solid;"></td>
 			     				 </tr><tr>
 			     				 	<td>4</td>
 			     				 	<td>Bank Balance</td>
 			     				 	<td><input type="text" name="assfth4" style=" height: 40px; border:2px solid;"></td>
 			     				 	<td><input type="text" name="assmoth4" style=" height: 40px; border:2px solid;"></td>
 			     				 	<td><input type="text" name="assspou4" style=" height: 40px; border:2px solid;"></td>
 			     				 	<td><input type="text" name="assslef4" style=" height: 40px; border:2px solid;"></td>
 			     				 	<td><input type="text" name="assguar4" style=" height: 40px; border:2px solid;"></td>
 			     				 	<td><input type="text" name="asstotl4" style=" height: 40px; border:2px solid;"></td>
 			     				 </tr>

 			     				 <tr>
 			     				 	<td>5</td>
 			     				 	<td>Stocks/Prize bond</td>
 			     				 	<td><input type="text" name="assfth5"  style=" height: 40px; border:2px solid;"></td>
 			     				 	<td><input type="text" name="assmoth5"  style=" height: 40px; border:2px solid;"></td>
 			     				 	<td><input type="text" name="assspou5"  style=" height: 40px; border:2px solid;"></td>
 			     				 	<td><input type="text" name="assslef5"  style=" height: 40px; border:2px solid;"></td>
 			     				 	<td><input type="text" name="assguar5"  style=" height: 40px; border:2px solid;"></td>
 			     				 	<td><input type="text" name="asstotl5"  style=" height: 40px; border:2px solid;"></td>
 			     				 </tr>

 			     				 <tr>
 			     				 	<td>6</td>
 			     				 	<td>Others/ Cattle(s)</td>
 			     				 	<td><input type="text" name="assfth6"  style=" height: 40px; border:2px solid;"></td>
 			     				 	<td><input type="text" name="assmoth6"  style=" height: 40px; border:2px solid;"></td>
 			     				 	<td><input type="text" name="assspou6"  style=" height: 40px; border:2px solid;"></td>
 			     				 	<td><input type="text" name="assslef6"  style=" height: 40px; border:2px solid;"></td>
 			     				 	<td><input type="text" name="assguar6"  style=" height: 40px; border:2px solid;"></td>
 			     				 	<td><input type="text" name="asstotl6"  style=" height: 40px; border:2px solid;"></td>
 			     				 </tr>

 			     				 <tr>
 			     				 	<td>40.</td>
 			     				 	<td colspan="6">Total</td>
 			     				 	
 			     				 	<td><input type="text" name="totlass" style=" height: 40px; border:2px solid;"></td>
 			     				 </tr>
 			     				 </table>
 			     				 </td>
 			     				 </tr>
 			     			<tr>	 
 			     			<td colspan="6" align="center"><input type="submit" name="submit" value="submit" style="width: 200px;  height: 40px; border:2px solid;" ></td></tr>
					         	</table>
					         	</form>
					         	</div>
					         	</body>
					         	</html>