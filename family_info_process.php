<?php

//error_reporting(0);

		// session_start();
require_once"includes/conn.php";
$fam=$_POST['family'];
$member1=$_POST['membername1'];
$relationship1=$_POST['relationship1'];
$maritalstatus1=$_POST['maritalstatus1'];
$rem1=$_POST['rem1'];
$member2=$_POST['membername2'];
$relationship2=$_POST['relationship2'];
$maritalstatus2=$_POST['maritalstatus2'];
$rem2=$_POST['rem2'];
$member3=$_POST['membername3'];
$relationship3=$_POST['relationship3'];
$maritalstatus3=$_POST['maritalstatus3'];
$rem3=$_POST['rem3'];
$member4=$_POST['membername4'];
$relationship4=$_POST['relationship4'];
$maritalstatus4=$_POST['maritalstatus4'];
$rem4=$_POST['rem4'];
$member5=$_POST['membername5'];
$relationship5=$_POST['relationship5'];
$maritalstatus5=$_POST['maritalstatus5'];
$rem5=$_POST['rem5'];
$member6=$_POST['membername6'];
$relationship6=$_POST['relationship6'];
$maritalstatus6=$_POST['maritalstatus6'];
$rem6=$_POST['rem6'];

$familymembername1=$_POST['familymembername1'];
$relation1=$_POST['relation1'];
$occupation1=$_POST['occupation1'];
$organization1=$_POST['organization1'];
$desg1=$_POST['desg1'];
$earning1=$_POST['earning1'];
$remarks1=$_POST['remarks1'];

$familymembername2=$_POST['familymembername2'];
$relation2=$_POST['relation2'];
$occupation2=$_POST['occupation2'];
$organization2=$_POST['organization2'];
$desg2=$_POST['desg2'];
$earning2=$_POST['earning2'];
$remarks2=$_POST['remarks2'];


$familymembername3=$_POST['familymembername3'];
$relation3=$_POST['relation3'];
$occupation3=$_POST['occupation3'];
$organization3=$_POST['organization3'];
$desg3=$_POST['desg3'];
$earning3=$_POST['earning3'];
$remarks3=$_POST['remarks3'];

$familymembername4=$_POST['familymembername4'];
$relation4=$_POST['relation4'];
$occupation4=$_POST['occupation4'];
$organization4=$_POST['organization4'];
$desg4=$_POST['desg4'];
$earning4=$_POST['earning4'];
$remarks4=$_POST['remarks4'];
$earning5=$_POST['earning5'];

$studying=$_POST['studying'];
$nam1=$_POST['nam1'];
$rel1=$_POST['rel1'];
$adrsinst1=$_POST['adrsinst1'];
$fee1=$_POST['fee1'];

$nam2=$_POST['nam2'];
$rel2=$_POST['rel2'];
$adrsinst2=$_POST['adrsinst2'];
$fee2=$_POST['fee2'];

$nam3=$_POST['nam3'];
$rel3=$_POST['rel3'];
$adrsinst3=$_POST['adrsinst3'];
$fee3=$_POST['fee3'];

$nam4=$_POST['nam4'];
$rel4=$_POST['rel4'];
$adrsinst4=$_POST['adrsinst4'];
$fee4=$_POST['fee4'];


$nam5=$_POST['nam5'];
$rel5=$_POST['rel5'];
$adrsinst5=$_POST['adrsinst5'];
$fee5=$_POST['fee5'];

$nam6=$_POST['nam6'];
$rel6=$_POST['rel6'];
$adrsinst6=$_POST['adrsinst6'];
$fee6=$_POST['fee6'];

$fees=$_POST['fees'];

$fmn1=$_POST['fmn1'];
$relat1=$_POST['relat1'];
$mifa1=$_POST['mifa1'];
$monthly1=$_POST['monthly1'];
$monthlynet1=$_POST['monthlynet1'];

$fmn2=$_POST['fmn2'];
$relat2=$_POST['relat2'];
$mifa2=$_POST['mifa2'];
$monthly2=$_POST['monthly2'];
$monthlynet2=$_POST['monthlynet2'];

$fmn3=$_POST['fmn3'];
$relat3=$_POST['relat3'];
$mifa3=$_POST['mifa3'];
$monthly3=$_POST['monthly3'];
$monthlynet3=$_POST['monthlynet3'];

$fmn4=$_POST['fmn4'];
$relat4=$_POST['relat4'];
$mifa4=$_POST['mifa4'];
$monthly4=$_POST['monthly4'];
$monthlynet4=$_POST['monthlynet4'];

$mifa5=$_POST['mifa5'];
$monthly5=$_POST['monthly5'];
$monthlynet5=$_POST['monthlynet5'];

$mifa6=$_POST['mifa6'];
$monthly6=$_POST['monthly6'];
$monthlynet6=$_POST['monthlynet6'];

$monthly7=$_POST['monthly7'];
$monthlynet7=$_POST['monthlynet7'];

$monthly8=$_POST['monthly8'];
$monthlynet8=$_POST['monthlynet8'];


$Bungalow=$_POST['Bungalow'];
$rentstatus=$_POST['rentstatus'];
$rentpay=$_POST['rentpay'];


$plotsize=$_POST['plotsize'];
$squarefeet=$_POST['squarefeet'];

$location=$_POST['location'];
$numofbedroom=$_POST['numofbedroom'];
$numofair=$_POST['numofair'];
$monthlyrent=$_POST['monthlyrent'];
$annualrent=$_POST['annualrent'];

$totlmonthlyrent=$_POST['totlmonthlyrent'];
$totlannualrent=$_POST['totlannualrent'];

$otherowned=$_POST['otherowned'];

$telephone=$_POST['telephone'];
$electricity=$_POST['electricity'];
$gas=$_POST['gas'];
$water=$_POST['water'];

$medical=$_POST['medical'];

$eduexp=$_POST['eduexp'];
$accoexp=$_POST['accoexp'];
$foodexp=$_POST['foodexp'];
$utilityexp=$_POST['utilityexp'];
$medexp=$_POST['medexp'];
$misexp=$_POST['misexp'];
$ttlamnt=$_POST['ttlamnt'];
$ttlann=$_POST['ttlann'];


$tmi=$_POST['tmi'];
$tme=$_POST['tme'];
$nmdi=$_POST['nmdi'];


$tai=$_POST['tai'];
$tae=$_POST['tae'];
$nadi=$_POST['nadi'];

$txtarea=$_POST['txtarea'];

$owntran=$_POST['owntran'];

$car1=$_POST['car1'];
$model1=$_POST['model1'];
$engine1=$_POST['engine1'];
$registration1=$_POST['registration1'];
$ownership1=$_POST['ownership1'];

$car2=$_POST['car2'];
$model2=$_POST['model2'];
$engine2=$_POST['engine2'];
$registration2=$_POST['registration2'];
$ownership2=$_POST['ownership2'];

$namecattle=$_POST['namecattle'];

$areaplot=$_POST['areaplot'];

$qty1=$_POST['qty1'];
$size1=$_POST['size1'];
$location1=$_POST['location1'];
$cultivvable1=$_POST['cultivvable1'];
$agriculture1=$_POST['agriculture1'];

$qty2=$_POST['qty2'];
$size2=$_POST['size2'];
$location2=$_POST['location2'];
$cultivvable2=$_POST['cultivvable2'];
$agriculture2=$_POST['agriculture2'];

$qty3=$_POST['qty3'];
$size3=$_POST['size3'];
$location3=$_POST['location3'];
$cultivvable3=$_POST['cultivvable3'];
$agriculture3=$_POST['agriculture3'];

$qty4=$_POST['qty4'];
$size4=$_POST['size4'];
$location4=$_POST['location4'];
$cultivvable4=$_POST['cultivvable4'];
$agriculture4=$_POST['agriculture4'];

$assfth1=$_POST['assfth1'];
$assmoth1=$_POST['assmoth1'];
$assspou1=$_POST['assspou1'];
$assslef1=$_POST['assslef1'];
$assguar1=$_POST['assguar1'];
$asstotl1=$_POST['asstotl1'];

$assfth2=$_POST['assfth2'];
$assmoth2=$_POST['assmoth2'];
$assspou2=$_POST['assspou2'];
$assslef2=$_POST['assslef2'];
$assguar2=$_POST['assguar2'];
$asstotl2=$_POST['asstotl2'];

$assfth3=$_POST['assfth3'];
$assmoth3=$_POST['assmoth3'];
$assspou3=$_POST['assspou3'];
$assslef3=$_POST['assslef3'];
$assguar3=$_POST['assguar3'];
$asstotl3=$_POST['asstotl3'];

$assfth4=$_POST['assfth4'];
$assmoth4=$_POST['assmoth4'];
$assspou4=$_POST['assspou4'];
$assslef4=$_POST['assslef4'];
$assguar4=$_POST['assguar4'];
$asstotl4=$_POST['asstotl4'];

$assfth5=$_POST['assfth5'];
$assmoth5=$_POST['assmoth5'];
$assspou5=$_POST['assspou5'];
$assslef5=$_POST['assslef5'];
$assguar5=$_POST['assguar5'];
$asstotl5=$_POST['asstotl5'];

$assfth6=$_POST['assfth6'];
$assmoth6=$_POST['assmoth6'];
$assspou6=$_POST['assspou6'];
$assslef6=$_POST['assslef6'];
$assguar6=$_POST['assguar6'];
$asstotl6=$_POST['asstotl6'];

$totlass=$_POST['totlass'];

$qry="INSERT INTO family SET
family='{$fam}',
membername1='{$member1}',
frelationship1='{$relationship1}',
maritalstatus1='{$maritalstatus1}',
remark1='{$rem1}',
membername2='{$member2}',
frelationship2='{$relationship2}',
maritalstatus2='{$maritalstatus2}',
remark2='{$rem2}',
membername3='{$member3}',
frelationship3='{$relationship3}',
maritalstatus3='{$maritalstatus3}',
remark3='{$rem3}',
membername4='{$member4}',
frelationship4='{$relationship4}',
maritalstatus4='{$maritalstatus4}',
remark4='{$rem4}',
membername5='{$member5}',
frelationship5='{$relationship5}',
maritalstatus5='{$maritalstatus5}',
remark5='{$rem5}',
membername6='{$member6}',
frelationship6='{$relationship6}',
maritalstatus6='{$maritalstatus6}',
remark6='{$rem6}',
familymember1='{$familymembername1}',
relationship1='{$relation1}',
ocupation1='{$occupation1}',
organization1='{$organization1}',
degsination1='{$desg1}',
earning1='{$earning1}',
remarks1='{$remarks1}',
familymember2='{$familymembername2}',
relationship2='{$relation2}',
ocupation2='{$occupation2}',
organization2='{$organization2}',
degsination2='{$desg2}',
earning2='{$earning2}',
remarks2='{$remarks2}',
familymember3='{$familymembername3}',
relationship3='{$relation3}',
ocupation3='{$occupation3}',
organization3='{$organization3}',
degsination3='{$desg3}',
earning3='{$earning3}',
remarks3='{$remarks3}',
familymember4='{$familymembername4}',
relationship4='{$relation4}',
ocupation4='{$occupation4}',
organization4='{$organization4}',
degsination4='{$desg4}',
earning4='{$earning4}',
remarks4='{$remarks4}',
earning5='{$earning5}',
bsstudy='{$studying}',
name1='{$nam1}',
relation1='{$rel1}',
adrsint1='{$adrsinst1}',
fee1='{$fee1}',
name2='{$nam2}',
relation2='{$rel2}',
adrsint2='{$adrsinst2}',
fee2='{$fee2}',
name3='{$nam3}',
relation3='{$rel3}',
adrsint3='{$adrsinst3}',
fee3='{$fee3}',
name4='{$nam4}',
relation4='{$rel4}',
adrsint4='{$adrsinst4}',
fee4='{$fee4}',
name5='{$nam5}',
relation5='{$rel5}',
adrsint5='{$adrsinst5}',
fee5='{$fee5}',
name6='{$nam6}',
relation6='{$rel6}',
adrsint6='{$adrsinst6}',
fee6='{$fee6}',
fees='{$fees}',
fmn1='{$fmn1}',
relat1='{$relat1}',
mifa1='{$mifa1}',
monthly1='{$monthly1}',
monthlynet1='{$monthlynet1}',
fmn2='{$fmn2}',
relat2='{$relat2}',
mifa2='{$mifa2}',
monthly2='{$monthly2}',
monthlynet2='{$monthlynet2}',
fmn3='{$fmn3}',
relat3='{$relat3}',
mifa3='{$mifa3}',
monthly3='{$monthly3}',
monthlynet3='{$monthlynet3}',
fmn4='{$fmn4}',
relat4='{$relat4}',
mifa4='{$mifa4}',
monthly4='{$monthly4}',
monthlynet4='{$monthlynet4}',
mifa5='{$mifa5}',
monthly5='{$monthly5}',
monthlynet5='{$monthlynet5}',
mifa6='{$mifa6}',
monthly6='{$monthly6}',
monthlynet6='{$monthlynet6}',
monthly7='{$monthly7}',
monthlynet7='{$monthlynet7}',
monthly8='{$monthly8}',
monthlynet8='{$monthlynet8}',
Bungalow='{$Bungalow}',
rentstatus='{$rentstatus}',
rentpay='{$rentpay}',
plotsize='{$plotsize}',
squarefeet='{$squarefeet}',
location='{$location}',
numofbedroom='{$numofbedroom}',
numofair='{$numofair}',
monthlyrent='{$monthlyrent}',
annualrent='{$annualrent}',
totlmonthlyrent='{$totlmonthlyrent}',
totlannualrent='{$totlannualrent}',
otherowned='{$otherowned}',
telephone='{$telephone}',
electricity='{$electricity}',
gas='{$gas}',
water='{$water}',
medical='{$medical}',
eduexp='{$eduexp}',
accoexp='{$accoexp}',
foodexp='{$foodexp}',
utilityexp='{$utilityexp}',
medexp='{$medexp}',
misexp='{$misexp}',
ttlamnt='{$ttlamnt}',
ttlann='{$ttlann}',
tmi='{$tmi}',
tme='{$tme}',
nmdi='{$nmdi}',
tai='{$tai}',
tae='{$tae}',
nadi='{$nadi}',
txtarea='{$txtarea}',
owntran='{$owntran}',
car1='{$car1}',
model1='{$model1}',
engine1='{$engine1}',
registration1='{$registration1}',
ownership1='{$ownership1}',
car2='{$car2}',
model2='{$model2}',
engine2='{$engine2}',
registration2='{$registration2}',
ownership2='{$ownership2}',
namecattle='{$namecattle}',
areaplot='{$areaplot}',
qty1='{$qty1}',
size1='{$size1}',
location1='{$location1}',
cultivvable1='{$cultivvable1}',
agriculture1='{$agriculture1}',

qty2='{$qty2}',
size2='{$size2}',
location2='{$location2}',
cultivvable2='{$cultivvable2}',
agriculture2='{$agriculture2}',
qty3='{$qty3}',
size3='{$size3}',
location3='{$location3}',
cultivvable3='{$cultivvable3}',
agriculture3='{$agriculture3}',
qty4='{$qty4}',
size4='{$size4}',
location4='{$location4}',
cultivvable4='{$cultivvable4}',
agriculture4='{$agriculture4}',
assfth1='{$assfth1}',
assmoth1='{$assmoth1}',
assspou1='{$assspou1}',
assslef1='{$assslef1}',
assguar1='{$assguar1}',
asstotl1='{$asstotl1}',
assfth2='{$assfth2}',
assmoth2='{$assmoth2}',
assspou2='{$assspou2}',
assslef2='{$assslef2}',
assguar2='{$assguar2}',
asstotl2='{$asstotl2}',
assfth3='{$assfth3}',
assmoth3='{$assmoth3}',
assspou3='{$assspou3}',
assslef3='{$assslef3}',
assguar3='{$assguar3}',
asstotl3='{$asstotl3}',
assfth5='{$assfth5}',
assmoth5='{$assmoth5}',
assspou5='{$assspou5}',
assslef5='{$assslef5}',
assguar5='{$assguar5}',
asstotl5='{$asstotl5}',
assfth6='{$assfth6}',
assmoth6='{$assmoth6}',
assspou6='{$assspou6}',
assslef6='{$assslef6}',
assguar6='{$assguar6}',
asstotl6='{$asstotl6}',

totlass='{$totlass}'";







$record=mysql_query($qry);

if ($record) 
{
	echo "Inserted";
	header("location:./loan.php");
}
else
{
	echo "Error:"."<br>".mysql_error($con);
}
?>