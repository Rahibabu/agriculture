<?php


include("includes/conn.php");
session_start();

?>
<html>
	<head>
	<link rel="stylesheet" href="mystyle.css">
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
	<div>
	<table border="1" style="width:90%">
		<thead>
			<tr>
				<th colspan="7">11.	Total Family Members currently living with you: </th>
				<td colspan="3"><input type="text" name="family" placeholder="Family Member" style="width: 250px; height: 30px; text-indent:20px;  border: 2px solid;"></td>
				<tr>
		   			<th colspan="2">S.No</th>
		   			<th colspan="2">Name of Family Member (s)</th>
		   			<th colspan="2">Relationship</th>
		   			<th colspan="2">Marital Status</th>
		   			<th colspan="2">Remarks**</th>
		   		</tr>
		   		<tr>
		   			<td>1</td>
		   			<td colspan="3"><input type="text" name="membername1" placeholder="Name Of family Member" style="width: 100%; height: 30px; text-indent:20px;  border: 2px solid;" ></td>
		   			<td colspan="2"><input type="text" name="relationship1" placeholder="Relationship with Member" style="width: 100%; height: 30px; text-indent:20px;  border: 2px solid;"></td>
		   			<td colspan="2"><input type="text" name="maritalstatus1" placeholder="Marital Status" style="width: 100%; height: 30px; text-indent:20px;  border: 2px solid;"></td>
		   			<td colspan="2"><input type="text" name="rem1" placeholder="Remarks" style="width: 100%; height: 30px; text-indent:20px;  border: 2px solid;"></td>
		   		</tr>
		   		<tr>
		   			<td>2</td>
		   			<td colspan="3"><input type="text" name="membername2" placeholder="Name Of family Member" style="width: 100%; height: 30px; text-indent:20px;  border: 2px solid;"></td>
		   			<td colspan="2"><input type="text" name="relationship2" placeholder="Relationship with Member" style="width: 100%; height: 30px; text-indent:20px;  border: 2px solid;"></td>
		   			<td colspan="2"><input type="text" name="maritalstatus2" placeholder="Marital Status" style="width: 100%; height: 30px; text-indent:20px;  border: 2px solid;"></td>
		   			<td colspan="2"><input type="text" name="rem2" placeholder="Remarks" style="width: 100%; height: 30px; text-indent:20px;  border:2px solid;"></td>
		   		</tr>
		   		<tr>
		   			<td>3</td>
		   			<td colspan="3"><input type="text" name="membername3" placeholder="Name Of family Member" style="width: 100%; height: 30px; text-indent:20px;  border: 2px solid;"></td>
		   			<td colspan="2"><input type="text" name="relationship3" placeholder="Relationship with Member" style="width: 100%; height: 30px; text-indent:20px;  border: 2px solid;"></td>
		   			<td colspan="2"><input type="text" name="maritalstatus3" placeholder="Marital Status" style="width: 100%; height: 30px; text-indent:20px;  border: 2px solid;"></td>
		   			<td colspan="2"><input type="text" name="rem3" placeholder="Remarks" style="width: 100%; height: 30px; text-indent:20px;  border: 2px solid;"></td>
		   		</tr>
		   		<tr>
		   			<td>4</td>
		   			<td colspan="3"><input type="text" name="membername4" placeholder="Name Of family Member" style="width: 100%; height: 30px; text-indent:20px;  border: 2px solid;"></td>
		   			<td colspan="2"><input type="text" name="relationship4" placeholder="Relationship with Member" style="width: 100%; height: 30px; text-indent:20px;  border: 2px solid;"></td>
		   			<td colspan="2"><input type="text" name="maritalstatus4" placeholder="Marital Status" style="width: 100%; height: 30px; text-indent:20px;  border: 2px solid;"></td>
		   			<td colspan="2"><input type="text" name="rem4" placeholder="Remarks" style="width: 100%; height: 30px; text-indent:20px;  border: 2px solid;"></td>
		   		</tr>
		   		<tr>
		   			<td>5</td>
		   			<td colspan="3"><input type="text" name="membername5" placeholder="Name Of family Member" style="width: 100%; height: 30px; text-indent:20px;  border: 2px solid;"></td>
		   			<td colspan="2"><input type="text" name="relationship5" placeholder="Relationship with Member" style="width: 100%; height: 30px; text-indent:20px;  border: 2px solid;"></td>
		   			<td colspan="2"><input type="text" name="maritalstatus5" placeholder="Marital Status" style="width: 100%; height: 30px; text-indent:20px;  border: 2px solid;"></td>
		   			<td colspan="2"><input type="text" name="rem5" placeholder="Remarks" style="width: 100%; height: 30px; text-indent:20px;  border: 2px solid;"></td>
		   		</tr>
		   		<tr>
		   			<td>6</td>
		   			<td colspan="3"><input type="text" name="membername6" placeholder="Name Of family Member" style="width: 100%; height: 30px; text-indent:20px;  border: 2px solid;"></td>
		   			<td colspan="2"><input type="text" name="relationship6" placeholder="Relationshiwith Member" style="width: 100%; height: 30px; text-indent:20px;  border: 2px solid;"></td>
		   			<td colspan="2"><input type="text" name="maritalstatus6" placeholder="Marital Status" style="width: 100%; height: 30px; text-indent:20px;  border: 2px solid;"></td>
		   			<td colspan="2"><input type="text" name="rem6" placeholder="Remarks" style="width: 100%; height: 30px; text-indent:20px;  border: 2px solid;"></td>
		   		</tr>
			

	</tr>
	</thead>
	</table>
	</div>
	<div>
		<table border="1" style="width:90%">
			<thead>
				<th colspan="10">13. Details of Family Members Earning (Take extra sheet if required):</th>
			</thead>
			<tr>
				<th>S.No</th>
		   			<th colspan="3">Name of Family Member (s)</th>
		   			<th colspan="2">Relationship</th>
		   			<th colspan="2">Marital Status</th>
		   			<th colspan="2">Remarks**</th>
			</tr>
			<tr>
		   			<td>1</td>
		   			<td colspan="3"><input type="text" name="membername1" placeholder="Name Of family Member" style="width: 100%; height: 30px; text-indent:20px;  border: 2px solid;" ></td>
		   			<td colspan="2"><input type="text" name="relationship1" placeholder="Relationship with Member" style="width: 100%; height: 30px; text-indent:20px;  border: 2px solid;"></td>
		   			<td colspan="2"><input type="text" name="maritalstatus1" placeholder="Marital Status" style="width: 100%; height: 30px; text-indent:20px;  border: 2px solid;"></td>
		   			<td colspan="2"><input type="text" name="rem1" placeholder="Remarks" style="width: 100%; height: 30px; text-indent:20px;  border: 2px solid;"></td>
		   		</tr>
		   		<tr>
		   			<td>2</td>
		   			<td colspan="3"><input type="text" name="membername2" placeholder="Name Of family Member" style="width: 100%; height: 30px; text-indent:20px;  border: 2px solid;"></td>
		   			<td colspan="2"><input type="text" name="relationship2" placeholder="Relationship with Member" style="width: 100%; height: 30px; text-indent:20px;  border: 2px solid;"></td>
		   			<td colspan="2"><input type="text" name="maritalstatus2" placeholder="Marital Status" style="width: 100%; height: 30px; text-indent:20px;  border: 2px solid;"></td>
		   			<td colspan="2"><input type="text" name="rem2" placeholder="Remarks" style="width: 100%; height: 30px; text-indent:20px;  border:2px solid;"></td>
		   		</tr>
		   			<tr>
		   			<td>3</td>
		   			<td colspan="3"><input type="text" name="membername3" placeholder="Name Of family Member" style="width: 100%; height: 30px; text-indent:20px;  border: 2px solid;"></td>
		   			<td colspan="2"><input type="text" name="relationship3" placeholder="Relationship with Member" style="width: 100%; height: 30px; text-indent:20px;  border: 2px solid;"></td>
		   			<td colspan="2"><input type="text" name="maritalstatus3" placeholder="Marital Status" style="width: 100%; height: 30px; text-indent:20px;  border: 2px solid;"></td>
		   			<td colspan="2"><input type="text" name="rem3" placeholder="Remarks" style="width: 100%; height: 30px; text-indent:20px;  border: 2px solid;"></td>
		   		</tr>
		   		<tr>
		   			<td>4</td>
		   			<td colspan="3"><input type="text" name="membername4" placeholder="Name Of family Member" style="width: 100%; height: 30px; text-indent:20px;  border: 2px solid;"></td>
		   			<td colspan="2"><input type="text" name="relationship4" placeholder="Relationship with Member" style="width: 100%; height: 30px; text-indent:20px;  border: 2px solid;"></td>
		   			<td colspan="2"><input type="text" name="maritalstatus4" placeholder="Marital Status" style="width: 100%; height: 30px; text-indent:20px;  border: 2px solid;"></td>
		   			<td colspan="2"><input type="text" name="rem4" placeholder="Remarks" style="width: 100%; height: 30px; text-indent:20px;  border: 2px solid;"></td>
		   		</tr>
		   		<tr>
		   			<td>5</td>
		   			<td colspan="3"><input type="text" name="membername5" placeholder="Name Of family Member" style="width: 100%; height: 30px; text-indent:20px;  border: 2px solid;"></td>
		   			<td colspan="2"><input type="text" name="relationship5" placeholder="Relationship with Member" style="width: 100%; height: 30px; text-indent:20px;  border: 2px solid;"></td>
		   			<td colspan="2"><input type="text" name="maritalstatus5" placeholder="Marital Status" style="width: 100%; height: 30px; text-indent:20px;  border: 2px solid;"></td>
		   			<td colspan="2"><input type="text" name="rem5" placeholder="Remarks" style="width: 100%; height: 30px; text-indent:20px;  border: 2px solid;"></td>
		   		</tr>
		   		<tr>
		   			<td>6</td>
		   			<td colspan="3"><input type="text" name="membername6" placeholder="Name Of family Member" style="width: 100%; height: 30px; text-indent:20px;  border: 2px solid;"></td>
		   			<td colspan="2"><input type="text" name="relationship6" placeholder="Relationshiwith Member" style="width: 100%; height: 30px; text-indent:20px;  border: 2px solid;"></td>
		   			<td colspan="2"><input type="text" name="maritalstatus6" placeholder="Marital Status" style="width: 100%; height: 30px; text-indent:20px;  border: 2px solid;"></td>
		   			<td colspan="2"><input type="text" name="rem6" placeholder="Remarks" style="width: 100%; height: 30px; text-indent:20px;  border: 2px solid;"></td>
		   		</tr>
		   		<tr>
		   		<th>14</th> 
		   		<th colspan="7">Total Monthly Family Income (add self income, if applicable) Pak Rupees</th>
		   		<td colspan="2"><input type="text" name="earning5" placeholder="Total Family Income" style= "width: 90%; height:30px; border:2px solid;"></td>
		   		</tr>
		</table>
	</div>
	<div>
		<table border="1" style="width:90%;">
			<thead>
				<th colspan="6">15. Brothers/Sisters/Children/Family Members studying </th>
				<td colspan="4"><input type="text" name="studying" placeholder="Brothers/sister studying" style="width: 90%; height: 30px; text-indent:20px;  border: 2px solid;"></td>
				<tr>
									<th>S.No</th>
									<th colspan="2">Name</th>
									<th colspan="2">Relation with applicant</th>
									<th colspan="3">Name Address of Institute </th>
									<th colspan="2">Fee per month</th>
								</tr>
								<tr>
									<td>1</td>
									<td colspan="2"><input type="text" name="nam1" placeholder="Brother Sister studying" style="width: 250px; height: 30px; text-indent:20px;  border: 2px solid;"></td>
									<td colspan="2"><input type="text" name="rel1" placeholder="Relationship" style="width: 250px; height: 30px; text-indent:20px;  border: 2px solid;"></td>
									<td colspan="3"><input type="text" name="adrsinst1" placeholder="Institute Name and  Address" style="width: 250px; height: 30px; text-indent:20px;  border: 2px solid;"></td>
									<td colspan="2"><input type="text" name="fee1" placeholder="Fee Per Month" style="width: 250px; height: 30px; text-indent:20px;  border: 2px solid;"></td>
								</tr>
									<tr>
									<td>2</td>
									<td colspan="2"><input type="text" name="nam2" placeholder="Brother Sister studying" style="width: 250px; height: 30px; text-indent:20px;  border: 2px solid;"></td>
									<td colspan="2"><input type="text" name="rel2" placeholder="Relationship" style="width: 250px; height: 30px; text-indent:20px;  border: 2px solid;"></td>
									<td colspan="3"><input type="text" name="adrsinst2" placeholder="Institute Name and  Address" style="width: 250px; height: 30px; text-indent:20px;  border: 2px solid;"></td>
									<td colspan="2"><input type="text" name="fee2" placeholder="Fee Per Month" style="width: 250px; height: 30px; text-indent:20px;  border: 2px solid;"></td>
								</tr>
								<tr>
									<td>3</td>
									<td colspan="2"><input type="text" name="nam3" placeholder="Brother Sister studying"  style="width: 250px; height: 30px; text-indent:20px;  border: 2px solid;"></td>
									<td colspan="2"><input type="text" name="rel3" placeholder="Relationship"  style="width: 250px; height: 30px; text-indent:20px;  border: 2px solid;"></td>
									<td colspan="3"><input type="text" name="adrsinst3" placeholder="Institute Name and  Address"  style="width: 250px; height: 30px; text-indent:20px;  border: 2px solid;"></td>
									<td colspan="2"><input type="text" name="fee3" placeholder="Fee Per Month"  style="width: 250px; height: 30px; text-indent:20px;  border: 2px solid;"></td>
								</tr>
									<tr>
									<td>4</td>
									<td colspan="2"><input type="text" name="nam4" placeholder="Brother Sister studying"  style="width: 250px; height: 30px; text-indent:20px;  border: 2px solid;"></td>
									<td colspan="2"><input type="text" name="rel4" placeholder="Relationship"  style="width: 250px; height: 30px; text-indent:20px;  border: 2px solid;"></td>
									<td colspan="3"><input type="text" name="adrsinst4" placeholder="Institute Name and  Address"  style="width: 250px; height: 30px; text-indent:20px;  border: 2px solid;"></td>
									<td colspan="2"><input type="text" name="fee4" placeholder="Fee Per Month"  style="width: 250px; height: 30px; text-indent:20px;  border: 2px solid;"></td>
								</tr>
								<tr>
									<td>5</td>
									<td colspan="2"><input type="text" name="nam5" placeholder="Brother Sister studying"  style="width: 250px; height: 30px; text-indent:20px;  border: 2px solid;"></td>
									<td colspan="2"><input type="text" name="rel5" placeholder="Relationship" style="width: 250px; height: 30px; text-indent:20px;  border: 2px solid;"></td>
									<td colspan="3"><input type="text" name="adrsinst5" placeholder="Institute Name and  Address"  style="width: 250px; height: 30px; text-indent:20px;  border: 2px solid;"></td>
									<td colspan="2"><input type="text" name="fee5" placeholder="Fee Per Month"  style="width: 250px; height: 30px; text-indent:20px;  border: 2px solid;"></td>
								</tr>
								<tr>
									<td>6</td>
									<td colspan="2"><input type="text" name="nam6" placeholder="Brother Sister studying"  style="width: 250px; height: 30px; text-indent:20px;  border: 2px solid;"></td>
									<td colspan="2"><input type="text" name="rel6" placeholder="Relationship"  style="width: 250px; height: 30px; text-indent:20px;  border: 2px solid;"></td>
									<td colspan="3"><input type="text" name="adrsinst6" placeholder="Institute Name and  Address"  style="width: 250px; height: 30px; text-indent:20px;  border: 2px solid;"></td>
									<td colspan="2"><input type="text" name="fee6" placeholder="Fee Per Month"  style="width: 250px; height: 30px; text-indent:20px;  border: 2px solid;"></td>
								</tr>
								<tr>
									<th>15A</th>
									<th colspan="7">Total Fees  Tuition Charges</th>
									<td colspan="2"><input type="text" name="fees"  style="width: 250px; height: 30px; text-indent:20px;  border: 2px solid;"></td>
								</tr>
			</thead>
		</table>
	</div>
	<div>
		<table border="1" style=" width:90%;">
			<thead>
			<th colspan="10">29. Total Family Monthly Income</th>
		     <tr>
 			      	<th>S.No</th>
 			      	<th colspan="2">Family Member Name</th>
 			      	<th colspan="2">Relationship</th>
 			      	<th colspan="2">Monthly Income from Assets</th>
 			      	<th colspan="2">Monthly Gross Pay/Earning</th>
 			      	<th>Monthly Net (Take home) Pay/Earning</th>
 			</tr>
 			</thead>
 			 <tr>
 			      	<td>1</td>
 			      	<td colspan="2"><input type="text" name="fmn1"  style="width: 90%; height: 30px; text-indent:20px;  border: 2px solid;"></td>
 			      	<td colspan="2"><input type="text" name="relat1"  style="width: 90%; height: 30px; text-indent:20px;  border: 2px solid;"></td>
 			      	<td colspan="2"><input type="text" name="mifa1"  style="width: 90%; height: 30px; text-indent:20px;  border: 2px solid;"></td>
 			      	<td colspan="2"><input type="text" name="monthly1"  style="width: 90%; height: 30px; text-indent:20px;  border: 2px solid;"></td>
 			      	<td><input type="text" name="monthlynet1" style="width: 90%; height: 30px; text-indent:20px;  border: 2px solid;"></td>
 			      </tr>
 			       <tr>
 			      	<td>2</td>
 			      	<td colspan="2"><input type="text" name="fmn2"  style="width: 90%; height: 30px; text-indent:20px;  border: 2px solid;"></td>
 			      	<td colspan="2"><input type="text" name="relat2"  style="width: 90%; height: 30px; text-indent:20px;  border: 2px solid;"></td>
 			      	<td colspan="2"><input type="text" name="mifa2"  style="width: 90%; height: 30px; text-indent:20px;  border: 2px solid;"></td>
 			      	<td colspan="2"><input type="text" name="monthly2"  style="width: 90%; height: 30px; text-indent:20px;  border: 2px solid;"></td>
 			      	<td><input type="text" name="monthlynet2"  style="width: 90%; height: 30px; text-indent:20px;  border: 2px solid;"></td>
 			      </tr>
 			       <tr>
 			      	<td>3</td>
 			      	<td colspan="2"><input type="text" name="fmn3"  style="width: 90%; height: 30px; text-indent:20px;  border: 2px solid;"></td>
 			      	<td colspan="2"><input type="text" name="relat3"  style="width: 90%; height: 30px; text-indent:20px;  border: 2px solid;"></td>
 			      	<td colspan="2"><input type="text" name="mifa3"  style="width: 90%; height: 30px; text-indent:20px;  border: 2px solid;"></td>
 			      	<td colspan="2"><input type="text" name="monthly3"  style="width: 90%; height: 30px; text-indent:20px;  border: 2px solid;"></td>
 			      	<td><input type="text" name="monthlynet3"  style="width: 90%; height: 30px; text-indent:20px;  border: 2px solid;"></td>
 			      </tr>
 			      <tr>
 			      	<td>4</td>
 			      	<td colspan="2"><input type="text" name="fmn4"  style="width:90%; height: 30px; text-indent:20px;  border: 2px solid;"></td>
 			      	<td colspan="2"><input type="text" name="relat4"  style="width:90%; height: 30px; text-indent:20px;  border: 2px solid;"></td>
 			      	<td colspan="2"><input type="text" name="mifa4"  style="width:90%; height: 30px; text-indent:20px;  border: 2px solid;"></td>
 			      	<td colspan="2"><input type="text" name="monthly4"  style="width:90%; height: 30px; text-indent:20px;  border: 2px solid;"></td>
 			      	<td><input type="text" name="monthlynet4"  style="width:90%; height: 30px; text-indent:20px;  border: 2px solid;"></td>
 			      </tr>
 			      <tr>
 			      	<th>5</th>
 			      	<th colspan="4">Applicant Monthly Gross Pay/Earning</th>
 			      	<td colspan="2"><input type="text" name="mifa5"  style="width: 90%; height: 30px; text-indent:20px;  border: 2px solid;"></td>
 			      	<td colspan="2"><input type="text" name="monthly5"  style="width: 90%; height: 30px; text-indent:20px;  border: 2px solid;"></td>
 			      	<td><input type="text" name="monthlynet5"  style="width: 90%; height: 30px; text-indent:20px;  border: 2px solid;"></td>
 			      </tr>
 			        <tr>
 			      	<th>6</th>
 			      	<th colspan="4">Applicant Monthly Net (Take home) Pay</th>
 			      	<td colspan="2"><input type="text" name="mifa6"  style="width: 90%; height: 30px; text-indent:20px;  border: 2px solid;"></td>
 			      	<td colspan="2"><input type="text" name="monthly6"  style="width: 90%; height: 30px; text-indent:20px;  border: 2px solid;"></td>
 			      	<td><input type="text" name="monthlynet6"  style="width: 90%; height: 30px; text-indent:20px;  border: 2px solid;"></td>
 			      </tr>
 			      <tr>
 			      	<th>29-A</th>
 			      	<th colspan="7">Total Monthly Income in Pak Rupees</th>
 			        <td><input type="text" name="monthly7"  style="width: 90%; height: 30px; text-indent:20px;  border: 2px solid;"></td>
 			      	<td><input type="text" name="monthlynet7"  style="width: 90%; height: 30px; text-indent:20px;  border: 2px solid;"></td>
 			      	 <tr>
 			      	<th>29-B</th>
 			      	<th colspan="7">Total Annual Income in Pak Rupees</th>
 			        <td><input type="text" name="monthly8"  style="width: 90%; height: 30px; text-indent:20px;  border: 2px solid;"></td>
 			      	<td><input type="text" name="monthlynet8"  style="width: 90%; height: 30px; text-indent:20px;  border: 2px solid;"></td>
 			      </tr>		      
			      
		</table>
	</div>
	<div>
		<table border="1" style="width:90%;">
		<thead>
			 <tr>
 			      	<th colspan="10">30.FAMILY EXPENDITURES</th>
 			      </tr>
 			      <tr><th colspan="10">30A. Accommodation Expenditures</th></tr>
		</thead>
		 <tr>
 			      	<td>Type:</td>
 			      	<td colspan="9"><input type="radio" name="Bungalow" value="Bungalow"/>Bungalow &nbsp;<input type="radio" name="Bungalow"  checked="checked" value="Appartment/Flat"/>Appartment/Flat &nbsp;<input type="radio" name="Bungalow" value="Town House"/> Village House &nbsp;<input type="radio" name="Bungalow" value="Village House"/> Village House</td>
 			      </tr>
 			      <tr>
 			     	<td>Status</td>
 			      	<td colspan="9"><input type="radio" name="rentstatus" checked="checked" value="Rented"/>Rented &nbsp;<input type="radio" name="rentstatus" checked="checked" value="Self or Family owned"/>Self or Family owned &nbsp;<input type="radio" name="rentstatus" value="Employer / Govt Owned "/>Employer / Govt Owned  </td>
 			     </tr>
 			       <tr>
 			     	<td>Rent Payment: </td>
 			      	<td colspan="9"><input type="radio" name="rentpay" checked="checked" value="Self"/>Self &nbsp;<input type="radio" name="rentpay" value="Employer/Govt"/>Employer/Govt &nbsp;<input type="radio" name="rentpay" value="Other "/>Other </td>
 			     </tr>
 			      <tr>
 			     	<td>House Plot Size in Sq. ft.</td>
 			     	<td colspan="4"><input type="text" name="plotsize" style="width: 90%; height: 30px; text-indent:20px;  border: 2px solid;"></td>
 			     	<td>Covered Area in Sq. ft.</td>
 			     	<td colspan="4"><input type="text" name="squarefeet" style="width: 90%; height: 30px; text-indent:20px;  border: 2px solid;"></td>
 			     </tr>
			
		</table>
	</div>

	<div>
		<table border="1" style="width:90%;">
		<thead>
			<tr>
 			     				<th >S.No</th>
 			     				<th colspan="2">Accommodation Location /Address</th>
 			     				<th colspan="2" >Number Of Bed Rooms</th>
 			     				<th colspan="2">Number Of Air conditioners</th>
 			     				<th colspan="2">Accommodation Monthly Rent</th>
 			     				<th>Accommodation Annual Rent</th>
 			     			</tr>
 		</thead>
 			     			<tr>
 			     			    <td>1</td>
 			     				<td colspan="2"><input type="text" name="location" style=" widows: 90%; height: 40px; border:2px solid;"></td>
 			     				<td colspan="2"><input type="radio" name="numofbedroom" value="1-2"/>1-2&nbsp;<br><input type="radio" name="numofbedroom" checked="checked" value="2-4"/>2-4&nbsp;<br><input type="radio" name="numofbedroom" value="4-6"/>4-6<br><input type="radio" name="numofbedroom" value="Above"/>Above</td>
 			     				<td colspan="2"><input type="radio" name="numofair" checked="checked" value="1-2"/>1-2&nbsp;<br><input type="radio" name="numofair" value="2-4"/>2-4&nbsp;<br><input type="radio" name="numofair" value="4-6"/>4-6 &nbsp;<br><input type="radio" name="numofair" value="Above"/>Above</td>
 			     				<td colspan="2"><input type="text" name="monthlyrent" style=" widows: 90%; height: 40px; border:2px solid;"></td>
 			     				<td><input type="text" name="annualrent" style=" widows: 90%; height: 40px; border:2px solid;"></td>
 			     				</tr>
 			     				<tr>
 			     						<th>30B</th>	
 			     						<th  colspan="6">Total Accommodation Rental Expenditure</th>
 			     					<td colspan="2"><input type="text" name="totlmonthlyrent" style=" widows: 90%; height: 40px; border:2px solid;"></td>
 			     				    <td><input type="text" name="totlannualrent"  style=" widows: 90%; height: 40px; border:2px solid;"></td>

 			     						</tr>
 		</table>
	</div>
	<div>
		<table border="1" style="width:90%;">
			<thead>
				 <tr>
 			     					<th colspan="6">Any other house/flat owned by the Parents/Guardian (if yes please specify with location and size)</th>
 			     					<td  colspan="4"><input type="text" name="otherowned" style="width: 90%; height: 40px; border:2px solid;"></td>

 			     				</tr>
 			     				<tr>
 			     					<th colspan="10">31. Utilities Expenditures </th>
 			     				</tr>

			</thead>
		</table>
	</div>
	<div>
		<table border="1" style="width:90%">
			<thead>
					<tr>
 			     	<th colspan="10">Last Month Utilities Paid</th>
 			  		</tr>
 			  		<tr>
 			     	<th colspan="3">Telephone</th>
 			     	<th colspan="3">Electricity</th>
 			     	<th colspan="2">Gas</th>
 			     	<th colspan="2">Water</th>
			     	</tr>
			     	<tr>
 			     	<td colspan="3"><input type="text" name="telephone" style=" height: 40px; border:2px solid;"></td>
 			     	<td colspan="3"><input type="text" name="electricity" style=" height: 40px; border:2px solid;"></td>
 			     	<td colspan="2"><input type="text" name="gas" style=" height: 40px; border:2px solid;"></td>
 			     	<td colspan="2"><input type="text" name="water" style=" height: 40px; border:2px solid;"></td>
 			     	</tr>

			</thead>
		</table>
	</div>
	<div>
		<table border="1" style="width:90%;">
		<thead>
			<tr>
 			 <th colspan="7">Medical Expenditures: Average of last six months (Per Month Expenditure)</th>
 			 <td colspan="3"><input type="text" name="medical" style=" width: 90% height: 40px; border:2px solid;"></td>
 			 </tr>
		</thead>
		<tr>
 		<th colspan="10">Total Family Expenditures</th>
 		</tr>
		</table>
	</div>
	<div>
		<table style=" width: 90% " border="1" >
			<thead>
				<tr>
 	                  <th>S.No</td>
 	                  <th colspan="2">Education Expenditure </th>
 	                  <th>Accommodation Expenditure</th>
 			          <th> Food Expenditure</th>
 			          <th>Utilities Expenditure</th>
 			          <th>Medical Expenditure</th>
 			          <th>Misc.Expenditure</th>
 			     	  <th>Total Monthly Expenditure</th>
 			          <th>Total Annual Expenditure</th>
 			     	  </tr>
 	    </thead>
 	    <tr>
 			   <th>33</th>
 			   <td colspan="2"><input type="text" name="eduexp" style="width: 150px; height: 40px; text-indent:20px;  border: 2px solid;"></td>
 			   <td><input type="text" name="accoexp" style="width: 90%; height: 40px; text-indent:20px;  border: 2px solid;"></td>
 			   <td><input type="text" name="foodexp" style="width: 90%; height: 40px; text-indent:20px;  border: 2px solid;"></td>
 			   <td><input type="text" name="utilityexp" style="width: 90%; height: 40px; text-indent:20px;  border: 2px solid;"></td>
 			   <td><input type="text" name="medexp" style="width: 90%; height: 40px; text-indent:20px;  border: 2px solid;" ></td>
 			   <td><input type="text" name="misexp" style="width: 90%; height: 40px; text-indent:20px;  border: 2px solid;" ></td>
 			   <td><input type="text" name="ttlamnt" style="width: 90%; height: 40px; text-indent:20px;  border: 3px solid;" ></td>
 			   <td><input type="text" name="ttlann" style="width: 90%; height: 40px; text-indent:20px;  border: 3px solid;" ></td>
 			     					
 	    	   </tr>
 			
		</table>
	</div>
	<div>
	<table border="1" style="width:90%">
		<thead>
			<tr>
 			 <th>S.No</th>
 			 <th>Description</th>
 			 <th>Amounts in Pak Rupees</th>
 			</tr>
		</thead>
		<tr>
 			<th>(Sec.29A)</th>
 			<th>Total Monthly Income </th>
 			<td><input type="text" name="tmi" style=" width:90%; height: 40px; border:2px solid;"></td>
 		</tr>
 		<tr>
 		  <th>(Sec. 33)</th>
 		  <th>Total Monthly Expenditure  </th>
 		  <td><input type="text" name="tme" style=" width: 90%; height: 40px; border:2px solid;"></td>
 		</tr>
 		<tr>
 		 <th>34(29.A 33A)</th>
 		 <th>Net Monthly Disposable Income*  </th>
 		 <td><input type="text" name="nmdi" style="width:90%; height: 40px; border:2px solid;"></td>
 		</tr>
	</table>
	</div>
	<div>
		<table border="1" style= "width:90%;">
			<thead>
				<tr>
 			     <th>S.No</th>
 			     <th>Description</th>
 			     <th>Amounts in Pak Rupees</th>
 			    </tr>
			</thead>
			<tr>
 			 <th>(Sec.29B)</th>
 			 <th>Total Annual Income  </th>
 			 <td><input type="text" name="tai" style=" width: 90%; height: 40px; border:2px solid;"></td>
 			</tr>
 			<tr>
 			 <th>(Sec. 33)</th>
 			 <th>Total Annual Expenditure   </th>
 			 <td><input type="text" name="tae" style="width:90%; height: 40px; border:2px solid;"></td>
 			</tr>
 			<tr>
 			 <th>35(29.B 33.B)</th>
 			 <th>Net Annual Disposable Income*  </th>
 			 <td><input type="text" name="nadi" style="width:90%; height: 40px; border:2px solid;"></td>
 			</tr>
		</table>
	</div>
	<div>
		<table border="1" style="width:90%;">
			<thead>
			<tr>
 			 <th colspan="10">* If the monthly / Annual Disposable Income is negative, kindly explain the reasons for the gap, and the arrangements through which the differential gap is met by the family </th>
 			</tr>
 			</thead>
 			<tr>
 			     <td colspan="10"> <textarea name="txtarea" style="width:90%; height:120px; border:2px solid;"></textarea></td>
 			</tr>
 			
            <tr>
 			 <th colspan="10">Assets (with current market value)</th>
 			</tr>
 			<tr>
 			 <th colspan="6">36. Does the family own any Transport?    </th>
 			 <td colspan="4"><input type="radio" name="owntran" value="Yes"/>Yes&nbsp;<input type="radio" name="owntran" checked="checked" value="No"/>No</td>
 			</tr>
 			
		</table>
	</div>
	<div>
		<table border="1" style="width:90%;">
			<thead>
				<tr>
 			 <th colspan="10">If yes kindly fill the relevant details</th>
 			</tr>
 			<tr>
 			   <th colspan="10">If yes kindly fill the relevant details</th>
 		    </tr>
            <tr>
 			 <th>S.No</th>
 			 <th>Transport Type (Car/ Motor cycle/ Others*)</th>
 			 <th>Make /Model</th>
 			 <th>Engine Capacity (CC)</th>
 			 <th>Registration No.</th>
 			 <th>Ownership Period</th>
 		    </tr>
			</thead>
			<tr>
 			  <td>1</td>
 			  <td><input type="text" name="car1" style="width: 90%; height: 30px; text-indent:20px;  border: 2px solid;"></td>
 			  <td><input type="text" name="model1"  style="width: 90%; height: 30px; text-indent:20px;  border: 2px solid;"></td>
 			  <td><input type="text" name="engine1" style="width: 90%; height: 30px; text-indent:20px;  border: 2px solid;"></td>
 			  <td><input type="text" name="registration1" style="width: 90%; height: 30px; text-indent:20px;  border: 2px solid;"></td>
 			  <td><input type="text" name="ownership1" style="width: 90%; height: 30px; text-indent:20px;  border: 2px solid;"></td>
 			 </tr>
 			 <tr>
 			  <td>2</td>
 			  <td><input type="text" name="car2" style="width: 90%; height: 30px; text-indent:20px;  border: 2px solid;"></td>
 			  <td><input type="text" name="model2" style="width: 90%; height: 30px; text-indent:20px;  border: 2px solid;"></td>
 			  <td><input type="text" name="engine2" style="width: 90%; height: 30px; text-indent:20px;  border: 2px solid;"></td>
 			  <td><input type="text" name="registration2" style="width: 90%; height: 30px; text-indent:20px;  border: 2px solid;"></td>
 			  <td><input type="text" name="ownership2" style="width: 90%; height: 30px; text-indent:20px;  border: 2px solid;"></td>
 			 </tr>
 			 <tr>
 			  <th colspan="10">* Others: include tractor, rickshaw, bi-cycle, motorcycle rickshaw, carriage pick, truck etc.</th>
 			 </tr>
 			 <tr>
 			  <th colspan="10">37. Number of Cattle(s) (with kind) </th>
 			  </tr>
 			 <tr>
 			 <td colspan="10"><textarea name="namecattle"   style=" width: 100%; height: 150px;  border:2px solid;"></textarea></td>
 			 </tr>
 			 <tr>
 			   <th colspan="10">38. Area and location of Land(s)/Plot(s) owned  </th>
 			   </tr>
 			 <tr>
 			 <td colspan="10"><textarea name="areaplot"   style=" height: 150px; width:100%; border:2px solid;"></textarea>     </td>
 			 </tr>
		</table>
	</div>
	<div>
		<table border="1" style="width:90%;">
			<thead>
				<tr>
 			     <th>Assets Title</th>
 			     <th>Qty</th>
 			     <th>Size</th>
 			     <th colspan="2">Location (Address)</th>
 			     <th colspan="2">Cultivable Area</th>
 			     <th colspan="3">Agricultural Yield per Acre</th>
 			    </tr>
			</thead>
			<tr>
 			 <th>Residential</th>
 			 <td><input type="text" name="qty1"  style="width:90%; height: 40px; border:2px solid;"></td>
 			 <td><input type="text" name="size1"  style="width:90%; height: 40px; border:2px solid;"></td>
 			 <td colspan="2"><input type="text" name="location1"  style=" width:90%; height: 40px; border:2px solid;"></td>
 			 <td colspan="2"><input type="text" name="cultivvable1"  style=" width:90%; height: 40px; border:2px solid;"></td>
 			 <td colspan="3"><input type="text" name="agriculture1"  style=" width:90%; height: 40px; border:2px solid;"></td>
 			</tr>
 			<tr>
 			 <th>Commercial</th>
 			 <td><input type="text" name="qty2"   style="width: 90%; height: 40px; border:2px solid;"></td>
 			 <td><input type="text" name="size2"   style="width: 90%; height: 40px; border:2px solid;"></td>
 			 <td colspan="2"><input type="text" name="location2"   style="width: 90%; height: 40px; border:2px solid;"></td>
 			 <td colspan="2"><input type="text" name="cultivvable2"   style="width: 90%; height: 40px; border:2px solid;"></td>
 			 <td colspan="3"><input type="text" name="agriculture2"   style="width: 90%; height: 40px; border:2px solid;"></td>
 			</tr>
 			<tr>
 			 <th>Agricultural</th>
 			 <td><input type="text" name="qty3"   style="width: 90%; height: 40px; border:2px solid;"></td>
 			 <td><input type="text" name="size3"   style="width: 90%; height: 40px; border:2px solid;"></td>
 			 <td colspan="2"><input type="text" name="location3"   style="width: 90%; height: 40px; border:2px solid;"></td>
 			 <td colspan="2"><input type="text" name="cultivvable3"   style="width: 90%; height: 40px; border:2px solid;"></td>
 			 <td colspan="3"><input type="text" name="agriculture3"   style="width: 90%; height: 40px; border:2px solid;"></td>
 			</tr>
 			<tr>
 			 <th>Employer/Govt Scheme</th>
 			 <td><input type="text" name="qty4"   style="width: 90%; height: 40px; border:2px solid;"></td>
 			 <td><input type="text" name="size4"   style="width: 90%; height: 40px; border:2px solid;"></td>
 			 <td colspan="2"><input type="text" name="location4"   style="width: 90%; height: 40px; border:2px solid;"></td>
 			 <td colspan="2"><input type="text" name="cultivvable4"   style="width: 90%; height: 40px; border:2px solid;"></td>
 			 <td colspan="3"><input type="text" name="agriculture4"   style="width: 90%; height: 40px; border:2px solid;"></td>
 			</tr>
 			<tr>
 			 <th colspan="10">39. Assets worth (Current Market Value in Pak. Rs.)</th>
 		    </tr>
		</table>
	</div>
	<div>
		<table  border="1" style="width:90%;">
			<thead>
				 <tr>
 			      <th>S.No</th>
 			      <th>Assets Title</th>
 			      <th>Father</th>
 			      <th>Mother</th>
 			      <th>Spouse</th>
 			      <th>Self</th>
 			      <th>Guardian</th>
 			      <th>Total</th>
 			     </tr>
			</thead>
			 <tr>
 			    <th>1</th>
 			    <th>House</th>
 			    <td><input type="text" name="assfth1"  style="width: 90%; height: 40px; border:2px solid;"></td>
 			    <td><input type="text" name="assmoth1" style="width: 90%; height: 40px; border:2px solid;"></td>
 			    <td><input type="text" name="assspou1" style="width: 90%; height: 40px; border:2px solid;"></td>
 			    <td><input type="text" name="assslef1" style="width: 90%; height: 40px; border:2px solid;"></td>
 			    <td><input type="text" name="assguar1" style="width: 90%; height: 40px; border:2px solid;"></td>
 			    <td><input type="text" name="asstotl1" style="width: 90%; height: 40px; border:2px solid;"></td>
 		    </tr>
 		     <tr>
 			   <th>2</th>
 			   <th>Business</th>
 			   <td><input type="text" name="assfth2"  style="width: 90%; height: 40px; border:2px solid;"></td>
 			   <td><input type="text" name="assmoth2" style="width: 90%; height: 40px; border:2px solid;"></td>
 			   <td><input type="text" name="assspou2" style="width: 90%; height: 40px; border:2px solid;"></td>
 			   <td><input type="text" name="assslef2" style="width: 90%; height: 40px; border:2px solid;"></td>
 			   <td><input type="text" name="assguar2" style="width: 90%; height: 40px; border:2px solid;"></td>
 			   <td><input type="text" name="asstotl2" style="width: 90%; height: 40px; border:2px solid;"></td>
 		   </tr>
 		   <tr>
 			 <th>3</th>
 			 <th>Land and Building</th>
 			 <td><input type="text" name="assfth3"  style="width: 90%; height: 40px; border:2px solid;"></td>
 			 <td><input type="text" name="assmoth3" style="width: 90%; height: 40px; border:2px solid;"></td>
 			 <td><input type="text" name="assspou3" style="width: 90%; height: 40px; border:2px solid;"></td>
 			 <td><input type="text" name="assslef3" style="width: 90%; height: 40px; border:2px solid;"></td>
 			 <td><input type="text" name="assguar3" style="width: 90%; height: 40px; border:2px solid;"></td>
 			 <td><input type="text" name="asstotl3" style="width: 90%; height: 40px; border:2px solid;"></td>
 			</tr>
 			 <tr>
 			  <th>4</th>
 			  <th>Bank Balance</th>
 			  <td><input type="text" name="assfth4"  style="width: 90%; height: 40px; border:2px solid;"></td>
 			  <td><input type="text" name="assmoth4" style="width: 90%; height: 40px; border:2px solid;"></td>
 			  <td><input type="text" name="assspou4" style="width: 90%; height: 40px; border:2px solid;"></td>
 			  <td><input type="text" name="assslef4" style="width: 90%; height: 40px; border:2px solid;"></td>
 			  <td><input type="text" name="assguar4" style="width: 90%; height: 40px; border:2px solid;"></td>
 			  <td><input type="text" name="asstotl4" style="width: 90%; height: 40px; border:2px solid;"></td>
 			 </tr>

 			 <tr>
 			  <th>5</th>
 			  <th>Stocks/Prize bond</th>
 			  <td><input type="text" name="assfth5"   style="width: 90%; height: 40px; border:2px solid;"></td>
 			  <td><input type="text" name="assmoth5"  style="width: 90%; height: 40px; border:2px solid;"></td>
 			  <td><input type="text" name="assspou5"  style="width: 90%; height: 40px; border:2px solid;"></td>
 			  <td><input type="text" name="assslef5"  style="width: 90%; height: 40px; border:2px solid;"></td>
 			  <td><input type="text" name="assguar5"  style="width: 90%; height: 40px; border:2px solid;"></td>
 			  <td><input type="text" name="asstotl5"  style="width: 90%; height: 40px; border:2px solid;"></td>
 			 </tr>

 			 <tr>
 			  <th>6</th>
 			  <th>Others/ Cattle(s)</th>
 			  <td><input type="text" name="assfth6"   style="width: 90%; height: 40px; border:2px solid;"></td>
 			  <td><input type="text" name="assmoth6"  style="width: 90%; height: 40px; border:2px solid;"></td>
 			  <td><input type="text" name="assspou6"  style="width: 90%; height: 40px; border:2px solid;"></td>
 			  <td><input type="text" name="assslef6"  style="width: 90%; height: 40px; border:2px solid;"></td>
 			  <td><input type="text" name="assguar6"  style="width: 90%; height: 40px; border:2px solid;"></td>
 			  <td><input type="text" name="asstotl6"  style="width: 90%; height: 40px; border:2px solid;"></td>
 			 </tr>
 			  <tr>
 			   <th>40.</th>
 			   <th colspan="6">Total</th>
 			     				 	
 			   <td><input type="text" name="totlass" style="width: 90%; height: 40px; border:2px solid;"></td>
 			  </tr>
 			  <tr>	 
 			    <td colspan="8" align="center"><input type="submit" name="submit" value="submit" style="width: 200px;  height: 40px; border:2px solid;" ></td></tr>


 			     				 
		</table>
	</div>
	</th>

	</form>
	</div>
	</body>
	</html>