<?php
session_start();
?>
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
 
table#clr tr:hover
{
	background-color:#ccff99;
	font-size:20px;
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
    <li style="background-color:lightblue"><a href="uhome.php" style="font:bold 12px Tahoma; color:black">HOME</a> | </li>
    <li><a href="courier.php" style="font:bold 12px Tahoma">COURIER</a> |
    <ul class="dropdown">
      <li><a href="courierbooking.php" style="font:bold 12px Tahoma">BOOKING</a></li>
        <li><a href="couriertracking.php" style="font:bold 12px Tahoma">TRACKING</a></li>
    </ul>
    </li>
    <li><a href="contactus.php" style="font:bold 12px Tahoma">CONTACT</a> |</li>
    <li><a href="logout.php" style="font:bold 12px Tahoma">LOGOUT</a> |</li>
  </ul>

  <h2 class="gallary">Kerala State Road Transport Corporation</h2>
  <div id="header" style="background:url(images/depothome.jpg);"> </div>
  <div id="body">
   <form id="form1" name="form1" method="post" action="" style="float:left;" >
     <table id="clr" width="388" height="182" border="0" cellpadding="5" cellspacing="0" >
       <tr>
         <td width="168" height="88" scope="row"><p align="center"><img src="images/profile.png" width="78" height="78"></p></td>
         <td width="194"><a href="uhome.php"><b>PROFILE</b></a></td>
       </tr>
       <tr>
         <td height="88" scope="row"><p align="center"><img src="images/book.png" width="78" height="78"></p></td>
         <td><a href="courierbooking.php"><b>BOOKING</b></a></td>
       </tr>
        <tr>
         <td height="88" scope="row"><p align="center"><img src="images/tracking.png" width="78" height="78"></p></td>
         <td><a href="couriertracking.php"><b>TRACKING</b></a></td>
       </tr>
       <tr>
         <td height="88" scope="row"><p align="center"><img src="images/mail.png" width="78" height="78"></p></td>
         <td><a href="contactus.php"><b>CONTACT</b></a></td>
       </tr>
        
     </table>
   </form>
<form style=" background-color: transparent;" action="edituser.php" method="post" class="search">
 <img src="images/userprofile.png" alt="" width="145" height="25" align="middle" class="head"  / >
 <table width="327" height="214" align="center" cellspacing="8">
<?php
$lid=$_SESSION["lid"];
include ("query.php");
$ob=new query();
$rs=$ob->viewuser($lid);
$r=mysqli_fetch_array($rs);
?>
   <tr>
     <th width="120" height="27" style="color:#7A8282; font:16px Tahoma;"><b>NAME</b></th>
     <th width="154"><input type="text" name="uname" style="color:#333; font:12px Tahoma; text-align:center; font-weight:bold; height:25px;" value="<?php echo $r[1];?>" readonly="readonly" /></th>
   </tr>
   <tr>
     <th style="color:#7A8282; font:16px Tahoma;"><b>CONTACT</b></th>
     <th><input type="text" name="contact" style="color:#333; font:12px Tahoma; text-align:center; font-weight:bold; height:25px;" value="<?php echo $r[5];?>" readonly="readonly" /></th>
   </tr>
   <tr>
     <th height="27" style="color:#7A8282; font:16px Tahoma;"><b>E-MAIL</b></th>
     <th><input type="text" name="email" style="color:#333; font:12px Tahoma; text-align:center; font-weight:bold; height:25px;" value="<?php echo $r[6];?>" readonly="readonly" /></th>
   </tr>
   <tr>
     <th height="24" colspan="2"><input type="submit" name="edit" value="EDIT" style="width:315px; height:30px; color:white; font:bold 14px Tahoma; text-align:center;border-radius:8px; background-color:orange " /></th>
   </tr>
   <tr>
     <td><input type="hidden" name="lid" value="<?php echo $r[7];?>" /></td>
   </tr>
 </table>
 <p>&nbsp;</p>
</form>
    <h3 class="tech"></h3>
    <h3 class="tech"></h3>
    <p class="brd"></p>
    <p class="footer"><a href="uhome.php">Home</a> | <a href="courierbooking.php">Booking</a> | <a href="couriertracking.php">Tracking</a> | <a href="contactus.php">Contact</a> | <a href="logout.php">Logout</a></p>
  </div>
<div class="foot">&copy; Copyright 2018 | MOCHA | All rights reserved.
    </div>
  <br class="spacer" />
</div>
</body>
</html>
