<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<style>
tr:nth-child(even) {
background-color: #f2f2f2
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
    <li ><a href="userhome.php" style="font:bold 12px Tahoma; ">HOME</a> | </li>
    <li><a href="depot.php" style="font:bold 12px Tahoma">DEPOTS</a> |</li>
    <li style="background-color:lightblue"><a href="enquiry.php" style="font:bold 12px Tahoma; color:black">ENQUIRY</a> |</li>
     <li><a href="allnews.php" style="font:bold 12px Tahoma">NEWS</a> |</li>
    <li><a href="aboutus.php" style="font:bold 12px Tahoma">ABOUT</a> |</li>
    <li><a href="feedback.php" style="font:bold 12px Tahoma">FEEDBACK</a> |</li>
  </ul>
  <h2 class="gallary">Kerala State Road Transport Corporation</h2>
 
  <div id="body">
    <h3 class="tech"></h3>
    <form id="form1" name="form1" method="post" action="">
     <table width="666" align="center">
     <tr><th><br><br><img src="images/enquiry.png" width="249" height="75"/><br><br></th></tr>
     </table>
        <table width="607" align="center" cellpadding="10" cellspacing="0" bgcolor="#fff" border="1" style="border:thin; border-collapse:collapse">
     <tr bgcolor="#66CCFF" style="color:#FFF; font:20px Tahoma;"><th width="32" height="30" ><b>#<b></th><th width="251" height="30">DEPOT</th><th colspan="2">CONTACT</th></tr>
      <?php
  include ("query.php");
  $ob=new query();
  $rs=$ob->getdepotdet();
  $i=0;
  while($r=mysqli_fetch_array($rs))
  {
  $i=$i+1;
  ?>
 <tr style="font:14px Tahoma; font-weight:500" id="<?php echo $r[1];?>"><td style="color:#333; font:14px Tahoma;"><b><?php echo $i;?></b></td><td align="left" ><font color="#0033FF"><b><?php echo $r[1];?><b></font><br><br><font color="#999999">Dist : <?php echo $r[2];?></font></td><td width="251" align="right"><img src="images/phone.png" width="14" height="14"/><br><br><img src="images/email.png" width="14" height="14"/><br><br><img src="images/post.png" width="13" height="13"/></td><td width="242" align="left" style="color:#006"><?php echo $r[4];?><font color="#FF3300">&nbsp;&nbsp;(24 x 7)</font><br><br><?php echo $r[5];?><br><br><font size="-2">OFFICE OF THE ATO,KSRTC,<?php echo $r[1];?></font></td> </tr>
  <?php
  }
  ?>
     </table>                             
    </form>
    <p class="brd"></p>
      <p class="footer"><a href="userhome.php">Home</a> | <a href="depot.php">Depots</a> | <a href="enquiry.php">Enquiry </a> | <a href="allnews.php">News</a> | <a href="aboutus.php">About</a> | <a href="feedback.php">Feedback</a></p>
  </div>
   <div class="foot">&copy; Copyright 2018 | MOCHA | All rights reserved.
    </div>
  <br class="spacer" />
</div>
</body>
</html>
