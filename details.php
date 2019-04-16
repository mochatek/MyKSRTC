<?php
$uid=$_GET['uid'];
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<style>
tr:nth-child(even) {
background-color: #f2f2f2;
}
tr:hover td{
  background-color:#ccff99;
}
</style>
<title>Car Online</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link href="style.css" type="text/css" rel="stylesheet" />
</head>
<body>
<div id="main"> <a href="#"><img src="images/logo1.gif" alt="" border="0" class="logo"  /></a>
  <ul class="topcar">
     <li><a href="#"><img src="images/a.png" alt="" width="78" height="92" border="0" /></a></li>
    <li><a href="#"><img src="images/b.png" alt="" width="79" height="92" border="0" /></a></li>
    <li><a href="#"><img src="images/c.png" alt="" width="79" height="92" border="0" /></a></li>
    <li><a href="#"><img src="images/d.png" alt="" width="79" height="92" border="0" /></a></li>
  </ul>
<ul class="topnav">
    <li><a href="userhome.php" style="font:bold 12px Tahoma;">HOME</a> | </li>
    <li ><a href="depot.php" style="font:bold 12px Tahoma;">DEPOTS</a> |</li>
    <li><a href="enquiry.php" style="font:bold 12px Tahoma">ENQUIRY</a> |</li>
    <li><a href="allnews.php" style="font:bold 12px Tahoma">NEWS</a> |</li>
    <li><a href="aboutus.php" style="font:bold 12px Tahoma">ABOUT</a> |</li>
     <li><a href="feedback.php" style="font:bold 12px Tahoma">FEEDBACK</a> |</li>
  </ul>
  <h2 class="gallary">Kerala State Road Transport Corporation</h2>
 
  <div id="body">
    <h3 class="tech"></h3>
    <form>
   <table width="666" align="center" >
     <tr><th><br><br><img src="images/details.png" width="249" height="75"/><br><br></th></tr>
     </table>
     <br><hr><br>
    </form>
    <div style="overflow: hidden;">  
<div  style="width:50%;  float:left"> 
<table width="260" border="0" cellspacing="20" cellpadding="5" align="center" bgcolor="#fff" style="border:2px solid #999999; font:14px Tahoma; border-collapse:collapse">

<tr bgcolor="#66CCFF" style="color:#FFF; font:16px Tahoma;"><th>STOPS</th><th>TIME</th></tr>
<?php
include ("query.php");
$ob=new query();
$rs=$ob->getroutedetails($uid);
while($r=mysqli_fetch_array($rs))
{?>
<tr><td align="center" style="color:#006;"><?php echo $r[0];?></td><td align="center" style="color:#999999"><?php echo date("g:i A", strtotime($r[1]));?></td></tr>      
<?php }
?>
</table>
</div>
<div style="width:50%;  float:right">
<table width="334" border="0" cellspacing="20" cellpadding="5" align="center" bgcolor="#fff" style="border:2px solid #FF6633; font:14px Tahoma; border-collapse:collapse">
<?php
$rs=$ob->showbusdetails($uid);
$r=mysqli_fetch_array($rs);
?>
<tr><th colspan="2" bgcolor="#FF6633" style="color:#FFF; font:16px Tahoma;"><b>BASIC DETAILS</b></th></tr>
<tr><th width="91" align="center" style="color:#636">REG-NO</th><th align="left" width="159" style="font:13px Tahoma;font-weight:400; color:#003366"><?php echo $r[0];?></th></tr>    
<tr><th style="color:#636"align="center">BUS TYPE</th><th style="font:13px Tahoma;font-weight:400;color:#003366"align="left"><?php echo $r[1];?></th></tr> 
<tr><th style="color:#636"align="center">DEPOT</th><th style="font:13px Tahomacolor:red"align="left"><a href="enquiry.php#<?php echo $r[2];?>"><?php echo $r[2];?></a></th></tr> 
<tr><th style="color:#636"align="center">CONTACT</th><th style="font:13px Tahoma;font-weight:400;color:#003366"align="left"><?php echo $r[3];?></th></tr> 
<tr><th style="color:#636"align="center">ROUTE</th><th style="font:13px Tahoma;font-weight:400;color:#003366"align="left"><?php echo $r[4];?></th></tr> 
</table>
</div>
</div>
    <p class="brd"></p>
     <p class="footer"><a href="userhome.php">Home</a> | <a href="depot.php">Depots</a> | <a href="enquiry.php">Enquiry </a> | <a href="allnews.php">News</a> | <a href="aboutus.php">About</a> | <a href="feedback.php">Feedback</a></p>
  </div>
  <div class="foot">&copy; Copyright 2018 | MOCHA | All rights reserved.
    </div>
  <br class="spacer" />
</div>
</body>
</html>
