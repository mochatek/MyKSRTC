<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<style>
 ul{
        padding: 0;
        list-style: none;
        background: #f2f2f2;
    }
    ul li{
        display: inline-block;
        position: relative;
 
        text-align: left;
    }
    
  ul li ul.dropdown{
        min-width: 100%; /* Set width of the dropdown */
        background:#666;
        display: none;
        position: absolute;
        z-index: 999;
        left: 0;
		border-radius:3px;
    }
    ul li:hover ul.dropdown{
        display: block; /* Display the dropdown */
    }
    ul li ul.dropdown li{
        display: block;
    }
.roundedge
{
-moz-border-radius: 5px;
 border-radius:5px
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
    <li ><a href="uhome.php" style="font:bold 12px Tahoma">HOME</a> | </li>
    <li ><a href="courier.php" style="font:bold 12px Tahoma">COURIER</a> |
    <ul class="dropdown">
      <li><a href="courierbooking.php" style="font:bold 12px Tahoma">BOOKING</a></li>
        <li><a href="couriertracking.php" style="font:bold 12px Tahoma">TRACKING</a></li>
    </ul>
    </li>
    <li style="background-color:lightblue"><a href="contactus.php" style="font:bold 12px Tahoma; color:black">CONTACT</a> |</li>
    <li><a href="logout.php" style="font:bold 12px Tahoma">LOGOUT</a> |</li>
  </ul>
  <h2 class="gallary">Kerala State Road Transport Corporation</h2>
 
  <div id="body">
    <h3 class="tech"></h3>

   <form id="form1" method="post" action="mailprocess.php" >
    <table width="363" align="center" cellspacing="15">
  <tr><th ><img src="images/mailus.png" width="115" height="36"/><br><br></th></tr></table>
  <table width="600" align="center" cellpadding="5" cellspacing="15" style="border:double; border-color:#6CC;" >
  <tr><td width="243" align="center" style="color:#7A8282; font:16px Tahoma"><b>TO</b></td>
<td><select class="roundedge" name="depot" style=" width:173px; height:25px; float:left; color:#333; font:12px Tahoma; text-align:center; font-weight:bold; width:195px">
   <option style="color:#333; font:12px Tahoma; text-align:center; font-weight:bold;" value="0">-- SELECT DEPOT --</option>
    <?php
  include ("query.php");
  $ob=new query();
  $rs=$ob->getdepotdet();
  while($r=mysqli_fetch_array($rs))
  {
  ?>
  <option style="color:#7A8282; font:12px Tahoma; text-align:center; font-weight:bold;" value="<?php echo $r[0];?>"><?php echo $r[1];?></option>
  <?php
  }
  ?>
   </td>
   </tr>
  <tr><td width="243" align="center" style="color:#7A8282; font:16px Tahoma"><b>Subject</b></td><td width="284"><select class="roundedge" name="sub" style=" width:173px; height:25px; float:left; color:#333; font:12px Tahoma; text-align:center; font-weight:bold; width:195px">
   <option style="color:#333; font:12px Tahoma; text-align:center; font-weight:bold;" value="0">-- SELECT SUBJECT --</option>
    <option style="color:#7A8282; font:12px Tahoma; text-align:center; font-weight:bold;" value="COMPLAINT">COMPLAINT</option>
       <option style="color:#7A8282; font:12px Tahoma; text-align:center; font-weight:bold;" value="SUGGESTION">SUGGESTION</option>
          <option style="color:#7A8282; font:12px Tahoma; text-align:center; font-weight:bold;" value="ENQUIRY">ENQUIRY</option>
             <option style="color:#7A8282; font:12px Tahoma; text-align:center; font-weight:bold;" value="GRIEVANCE OF PASSENGER">GRIEVANCE OF PASSENGER</option></select></td></tr>
             <tr><th height="154" colspan="2" align="center"><textarea class="roundedge" name="msg" style=" width:370px;height:150px; color:#0066ff; font:bold 14px cambria;" placeholder=" Type your message."></textarea></th></tr>
             <tr><td align="center"><input type="submit" name="send" value="SEND"   style=" -moz-border-radius: 12px;
 border-radius: 12px; background-color:#158ece; color:#FFF; border:1px solid #697779; width:60px; height:30px"></td></tr></table><br><br>
  <table width="755"  cellspacing="12" style="border:1px solid;" align="center">
    <tr><th width="425" rowspan="2"><img src="images/map.jpg" width="356" height="225"/></th>
      <th><img src="images/address.png" width="331" height="235"/></th>
    </tr>
   
  </table>
   </form>
    <p class="brd"></p>
    <p class="footer"><a href="uhome.php">Home</a> | <a href="courierbooking.php">Booking</a> | <a href="couriertracking.php">Tracking</a> | <a href="contactus.php">Contact</a> | <a href="logout.php">Logout</a></p>
  </div>
<div class="foot">&copy; Copyright 2018 | MOCHA | All rights reserved.
    </div>
  <br class="spacer" />
</div>
</body>
</html>
