
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
	</div><br><br><br>

		<div><h1 style="text-align:center">Please Enter your Personal Information</h1><div>
	<div style="height:auto; width:100%; border:1px solid;">

	<!-- <?php

	echo $_session['msg'];

	?>
 -->
	<form  action="./per_info_process.php" method="post" enctype="multipart/form-data">
		
		<table width="100%" border="1"  >
			<tr>
            
           
            
            
            <td><strong> Name of the University: </strong></td><td colspan="5"> <input type="text" name="uniname" required="" placeholder="Enter University Name" style="width: 400px; height: 40px; text-indent:20px;  border: 2px solid;"></td>
            </tr>	
            
           <tr>
           <td> <strong> Degree Title / Program:</strong> </td> 
           <td><input type="text" name="program" required="" placeholder="Enter Degree Name" style="width: 250px; height: 40px; text-indent:20px;  border: 2px solid;"></td>
           <td><strong> C.No: </strong></td>
           <td><input type="text" name="clsno" required="" placeholder="Class number" style="width: 250px; height: 40px; text-indent:20px;  border: 2px solid;"></td>
           <td><strong> Department</strong></td>
           <td><input type="text" name="department" required="" placeholder="Department Name" style="width: 250px; height: 40px; text-indent:20px;  border: 2px solid;"></td>
           </tr>
           <tr>
           <td><strong>Applicant Name:</strong> </td>
           <td><input type="text" name="applicantname" required="" placeholder="Applicant Name"  style="width: 250px; height: 40px; text-indent:20px;  border: 2px solid;"</td>
           <td>Gender:  </td>
           <td colspan="2"><input type="radio" name="gen"  checked="checked" value="Male"/>Male &nbsp;<input type="radio" name="gen" value="Female"/>Female </td>
           
           <td rowspan="3"> <label> Plz Upload your pics</label><br><input type="file" name="image" ></td>
           
           </tr>
           
           <tr>
           <td>1. Applicant NIC No:</td>	
           <td colspan="4"><input type="text" name="nic" required=""  style="width: 500px; height: 40px; text-indent:20px;  border: 2px solid;"></td>
           </tr>
            <tr>
           <td>2. Marital Status </td>
           <td colspan="4"><input type="radio" name="status"  value="Married"/>Married &nbsp;<input type="radio" name="status" checked="checked" value="Unmarried"/>Unmarried &nbsp;<input type="radio" name="status" value="Divvorced"/>Divorced</td>
           </tr>
		   <tr>
		   <td >3. Age:</td>
		   
		   <td colspan="2"><input type="text" name="age" required="" placeholder="Age"  style="width: 250px; height: 40px; text-indent:20px;  border: 2px solid;"></td>
		   <td>Domicile:</td>
		   <td colspan="2"><input type="text" name="domicile" required="" placeholder="Domicile"  style="width: 250px; height: 40px; text-indent:20px;  border: 2px solid;"></td>
		   </tr>
		   <tr>
		   <td >4. Present Address:</td>
		   <td colspan="5" ><textarea  name="present" required="" placeholder="Present Address"  style="width:700px; height:130px;border:2px solid;""></textarea>
		   </td>
		   </tr>
		   <tr>
		   <td >5. Permanent Address:</td>
		   <td colspan="5" ><textarea name="permanent" required="" placeholder="Permanent Address "  style="width:700px; height:130px; border:2px solid;" ></textarea></td>
		   </tr>
		   <tr>
		   	<td colspan="2">6. Are you currently working:  </td>
		   	
		   	<td colspan="4"><input type="radio" name="work" value="Yes"/>Yes &nbsp;<input type="radio" name="work" checked="checked" value="No"/>No </td>
		   	</tr>
		   	<tr>
		   		<td colspan="6">7.	If answer is Yes to Section No. 8 complete the sections (8-9)</td>
		   	</tr>
		   	<tr>
		   		<td>Designation: </td>
		   		<td colspan="2"><input type="text" name="designation" placeholder="Designation" style="width: 250px; height: 40px; text-indent:20px;  border: 2px solid;"></td>
		   		
		   		<td>	Name of Employer /Company: </td>
		   		<td colspan="2"><input type="text" name="company" placeholder="Company Name" style="width: 250px; height: 40px; text-indent:20px;  border: 2px solid;"></td>
		   		
		   	</tr>
		   	<tr>
		   		<td colspan="3">8.	Total Monthly Applicant Gross Income in Pak Rs. </td>
		   		<td colspan="3"><input type="text" name="gross" placeholder="Monthly Income" style="width: 250px; height: 40px; text-indent:20px;  border: 2px solid;">
		   	</tr>
		   		<tr>
		   		<td colspan="3">9.	Total Monthly Applicant Take Home Income* in Pak Rs.  </td>
		   		<td colspan="3"><input type="text" name="home" placeholder="Home Income" style="width: 250px; height: 40px; text-indent:20px;  border: 2px solid;">
		   	</tr>
		   	<tr>
		   		<td colspan="6">* Take Home Income: Salary / Pay available after deduction of taxes, provident fund charges etc. </td>
		   	</tr>
		   	<tr>
		   		<td>10.	Tel (Res.): </td>
		   		<td><input type="text" name="phone" required="" placeholder="Phone Number" style="width: 250px; height: 40px; text-indent:20px;  border: 2px solid;"></td>
		   		<td>Mobile:</td>
		   		<td><input type="text" name="mobile" required="" placeholder="Mobile Number" style="width: 250px; height: 40px; text-indent:20px;  border: 2px solid;"></td>
		   		<td>Email</td>
		   		<td><input type="email" name="email" required="" placeholder="Email" style="width: 250px; height: 40px; text-indent:20px;  border: 2px solid;"></td>
		   	</tr>
		   	<tr>
		   		<td colspan="6" align="center"><input type="submit" name="submit" value="submit"  style="width: 200px;  height: 40px; border:2px solid;" ></td>
		   	</tr>

		   </table>
		   </form>
		   </div>
		   </html>