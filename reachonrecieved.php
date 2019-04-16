<?php
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<style>
table.tbl th:hover
{
	font:bold 18px Tahoma;
	background:#195ed3;
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
    <li ><a href="depothome.php" style="font:bold 12px Tahoma">HOME</a> | </li>
    <li ><a href="buses.php" style="font:bold 12px Tahoma">BUSES</a> |</li>
    <li style="background-color:lightblue"><a href="reachonsent.php" style="font:bold 12px Tahoma;color:black">REACHON</a> |</li>
    <li ><a href="inbox.php" style="font:bold 12px Tahoma;">INBOX</a> |</li>
    <li><a href="news.php" style="font:bold 12px Tahoma">NEWS</a> |</li>
    <li><a href="logout.php" style="font:bold 12px Tahoma">LOGOUT</a> |</li>
  </ul>
  <h2 class="gallary">Kerala State Road Transport Corporation</h2>
  <div id="body">
    <h3 class="tech"></h3>
    <form id="form1" name="form1" method="get" action="">
    <table width="666" align="center">
     <tr ><th colspan="3"><br><br><img src="images/shipment.png" width="260" height="62"/></th></tr></table>
     <table style="border:groove;font:bold 16px Tahoma" align="center" width="735" cellpadding="10px" class="tbl">
     <tr bgcolor="#28afff" style="color:white"><th  ><a href="reachonsent.php" style="text-decoration:none;color:white">SENT SHIPMENTS</a></th><th bgcolor="#195ed3"><a href="reachonrecieved.php" style="text-decoration:none;color:white">RECIEVED SHIPMENTS</a></th><th><a href="reachondelivered.php" style="text-decoration:none;color:white">DELIVERED SHIPMENTS</a></th></tr>
     </table>
     <br>
        <table  align="center"  border="1" cellpadding="3" cellspacing="0" style="border: thin white;font:bold 11px Tahoma">
      <?php
	  $did=$_SESSION["did"];
  include ("query.php");
  $ob=new query();
  $src="to";
  $rs=$ob->readcourier($did,$src,0);
 if(mysqli_num_rows($rs)<1)
{
?>
<p align="center" style="color:red;font:bold 12px Tahoma">NO SHIPMENTS PENDING !</p>
<?php
}
else
{?>
<tr bgcolor="#990000" style="color:white;font:bold 12px Tahoma"><th>C-ID</th><th>DATE</th><th>SENDER</th><th>RECIEVER</th><th>ITEM</th><th>WEIGHT</th><th>DELIVERY</th><th>AMOUNT</th><th>FROM</th><th>STATUS</th><th>ACTION</th></tr>
<?php
  while($r=mysqli_fetch_array($rs))
  {
 ?> 
<tr align="center"><td><?php echo $r[0];?></td><td><?php echo $r[1];?></td><td><?php echo $r[2];?></td><td><?php echo $r[3];?></td><td><?php echo $r[4];?></td><td><?php echo $r[5];?></td><td><?php echo $r[6];?></td><td><?php echo $r[7];?></td><td><?php 
$dpt=$ob->getdepot($r[8]);
echo $dpt;
?></td>
<?php
if($r[10]==1)
{?>
<td >ON TRANSIT</td><td>
<a style="color:white;text-decoration:none; background:#2196F3;" href="statusprocess.php?id=<?php echo $r[0]; ?>&sts=2&pg=3">RECIEVE</a><br><br><a style="color:white;text-decoration:none; background:#4CAF50"href="statusprocess.php?id=<?php echo $r[0]; ?>&sts=3&pg=3">DELIVER</a></td></tr>
<?php }
elseif($r[10]==2)
{?>
<td >WAITING FOR RECIEVER</td><td>
<a style="color:white;text-decoration:none;background:#4CAF50" href="statusprocess.php?id=<?php echo $r[0]; ?>&sts=3&pg=3">DELIVERED</a></td></tr>
<?php
}
elseif($r[10]==3)
{?>
<td >DISPACHED</td><td></td></tr>
<?php
}
elseif($r[10]==4)
{?>
<td >CANCELLED</td><td></td></tr>
<?php
}?>
<tr><td colspan="11" align="center" bgcolor="#999999" style="color:white"><details>
  <summary>BOOKING ACCOUNT DETAILS</summary>
<table bgcolor="#ccff99" width="100%" align="center" cellspacing="0"  border="1" style="border:1px solid white">
<tr style="font:bold 11px Tahoma;color:white" bgcolor="red"><th>NAME</th><th>AGE</th><th>GENDER</th><th>DOB</th><th>CONTACT</th><th>EMAIL</th></tr>
<?php
$us=$ob->viewuser($r[11]);
$u=mysqli_fetch_array($us);
?>
<tr style="font:bold 10px Tahoma;color:black" align="center"><td><?php echo $u[1];?></td><td><?php echo $u[2];?></td><td><?php echo $u[3];?></td><td><?php echo $u[4];?></td><td><?php echo $u[5];?></td><td><?php echo $u[6];?></td></tr>
</table>
</details></td></tr>
<?php
  }
}
?></table>
    </form>
    <p class="brd"></p>
    <p class="footer"><a href="depothome.php">Home</a> | <a href="buses.php">Buses</a> | <a href="reachonsent.php">Reachon </a> | <a href="inbox.php">Inbox</a> | <a href="news.php">News</a> | <a href="logout.php">Logout</a></p>
  </div>
<div class="foot">&copy; Copyright 2018 | MOCHA | All rights reserved.
    </div>
  <br class="spacer" />
</div>
</body>
</html>
