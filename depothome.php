<?php
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<style>
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
    <li style="background-color:lightblue"><a href="depothome.php" style="font:bold 12px Tahoma; color:black">HOME</a> | </li>
    <li><a href="buses.php" style="font:bold 12px Tahoma">BUSES</a> |</li>
    <li><a href="reachonsent.php" style="font:bold 12px Tahoma">REACHON</a> |</li>
    <li><a href="inbox.php" style="font:bold 12px Tahoma">INBOX</a> |</li>
    <li><a href="news.php" style="font:bold 12px Tahoma">NEWS</a> |</li>
    <li><a href="logout.php" style="font:bold 12px Tahoma">LOGOUT</a> |</li>
  </ul>
  <h2 class="gallary">Kerala State Road Transport Corporation</h2>
  <div id="header" style="background:url(images/depothome.jpg);"> </div>
  <div id="body">
   <form id="form1" name="form1" method="post" action="" style="float:left;" >
     <table width="388" height="272" border="0" cellpadding="5" cellspacing="0" id="clr">
       <tr>
         <th width="168" scope="row"><img src="images/profile.png" width="78" height="78"></th>
         <td width="194"><a href="depothome.php"><b>PROFILE</b></a></td>
       </tr>
       <tr>
         <th scope="row"><img src="images/bustype.png" width="78" height="78"></th>
         <td><a href="buses.php"><b>BUSES</b></a></td>
       </tr>
       <tr>
         <th height="88" scope="row"><img src="images/mail.png" width="78" height="78"></th>
         <td><a href="inbox.php"><b>INBOX</b></a></td>
       </tr>
       <tr>
         <th height="88" scope="row"><img src="images/news2.png" width="78" height="78"></th>
         <td><a href="news.php"><b>NEWS</b></a></td>
       </tr>
     </table>
   </form>
<form style=" background-color: transparent;" action="editdepot.php" method="post" class="search">
 <img src="images/depotprofile.png" alt="" width="145" height="25" align="middle" class="head"  / >
 <table width="327" height="214" align="center" cellspacing="8">
<?php
$lid=$_SESSION["lid"];
include ("query.php");
$ob=new query();
$rs=$ob->viewdepot($lid);
$r=mysqli_fetch_array($rs);
$_SESSION["did"]=$r[0];
?>   <tr>
     <th width="120" height="27" style="color:#7A8282; font:16px Tahoma;"><b>NAME</b></th>
     <td width="154"><input type="text" name="dname" style="color:#333; font:12px Tahoma; text-align:center; font-weight:bold; height:25px;height:20px;border-radius:5px;
" value="<?php echo $r[1];?>" readonly="readonly" /></td>
   </tr>
   <tr>
     <th style="color:#7A8282; font:16px Tahoma;"><b>CONTACT</b></th>
     <td><input type="text" name="contact" style="color:#333; font:12px Tahoma; text-align:center; font-weight:bold; height:25px;height:20px;border-radius:5px;
" value="<?php echo $r[4];?>" readonly="readonly" /></td>
   </tr>
   <tr>
     <th height="27" style="color:#7A8282; font:16px Tahoma;"><b>E-MAIL</b></th>
     <td><input type="text" name="email" style="color:#333; font:12px Tahoma; text-align:center; font-weight:bold; height:25px;height:20px;border-radius:5px;
" value="<?php echo $r[5];?>" readonly="readonly" /></td>
   </tr>
   <tr>
     <th height="24" colspan="2"><input type="submit" name="edit" value="EDIT" style="width:315px; height:30px; color:white; font:bold 14px Tahoma; text-align:center;border-radius:8px; background-color:orange " /></th>
   </tr>
   <tr>
     <td><input type="hidden" name="lid" value="<?php echo $r[3];?>" /></td>
   </tr>
 </table>
 <p>&nbsp;</p>
</form>
    <h3 class="tech"></h3>
    <h3 class="tech"></h3>
    <p class="brd"></p>
    <p class="footer"><a href="depothome.php">Home</a> | <a href="buses.php">Buses</a> | <a href="reachonsent.php">Reachon </a> | <a href="inbox.php">Inbox</a> | <a href="news.php">News</a> | <a href="logout.php">Logout</a></p>
  </div>
<div class="foot">&copy; Copyright 2018 | MOCHA | All rights reserved.
    </div>
  <br class="spacer" />
</div>
</body>
</html>
