<?php
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<style>
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
    <li ><a href="uhome.php" style="font:bold 12px Tahoma; ">HOME</a> | </li>
  <li style="background-color:lightblue"><a href="courier.php" style="font:bold 12px Tahoma:black">COURIER</a> |
    <ul class="dropdown">
      <li><a href="courierbooking.php" style="font:bold 12px Tahoma">BOOKING</a></li>
        <li><a href="couriertracking.php" style="font:bold 12px Tahoma">TRACKING</a></li>
    </ul>
    </li>
    <li><a href="contactus.php" style="font:bold 12px Tahoma">CONTACT</a> |</li>
    <li><a href="logout.php" style="font:bold 12px Tahoma">LOGOUT</a> |</li>
  </ul>
  <h2 class="gallary">Kerala State Road Transport Corporation</h2>
 
  <div id="body">
    <h3 class="tech"></h3>
    <form id="form1" name="form1" method="get" action="">
     <table width="666" align="center">
     <tr ><th height="123" colspan="3"><br><br><img src="images/shipment.png" width="320" height="105"/></th></tr></table>
     <br>
        <table  align="center"  border="1" cellpadding="3" cellspacing="0" style="border: thin white;font:bold 11px Tahoma">
      <?php
	  $lid=$_SESSION["lid"];
  include ("query.php");
  $ob=new query();
  $rs=$ob->listcourier($lid);
 if(mysqli_num_rows($rs)<1)
{
?>
<p align="center" style="color:red;font:bold 13px Tahoma">NO SHIPMENTS !</p>
<?php
}
else
{?>
<tr  bgcolor="#990000" style="color:white;font:bold 13px Tahoma"><th>C-ID</th><th>DATE</th><th>FROM</th><th>TO</th><th>ITEM</th><th>WEIGHT</th><th>DELIVERY</th><th>AMOUNT</th><th>STATUS</th><th>ACTION</th></tr>
<?php
  while($r=mysqli_fetch_array($rs))
  {
 ?> 
<tr align="center"><td><?php echo $r[0];?></td><td><?php echo $r[1];?></td><td><?php echo $ob->getdepot($r[8]);;?></td><td><?php echo $ob->getdepot($r[9]);?></td><td><?php echo $r[4];?></td><td><?php echo $r[5];?></td><td><?php echo $r[6];?></td><td><?php echo $r[7];?></td><td>
<?php
 if($r[10]==0)
	  {
?>
WAITING FOR APPROVAL</td><td>
<a style="color:white;text-decoration:none;background:orange" href="statusprocess.php?id=<?php echo $r[0]; ?>&sts=4&pg=1">CANCEL</a></td></tr>
<?php }
elseif($r[10]==1)
{?>
ON TRANSIT</td><td>
<a style="color:white;text-decoration:none;background:orange;" href="statusprocess.php?id=<?php echo $r[0]; ?>&sts=4&pg=1">CANCEL</a></td></tr>
<?php
}
elseif($r[10]==2)
{
?>
WAITING FOR RECIEVER</td><td>
<a style="color:white;text-decoration:none;background:orange;" href="statusprocess.php?id=<?php echo $r[0]; ?>&sts=4&pg=1">CANCEL</a></td></tr>

 <?php
  }
  elseif($r[10]==3)
{
?>
DISPATCHED</td><td></td></tr>
<tr><td colspan="10" bgcolor="#99999" style="color:white" align="center">RECIEVED BY : <?php echo $r[3];?></td></tr>
 <?php
  }
   elseif($r[10]==4)
{
?>
CANCELLED</td><td><a style="color:white;text-decoration:none;background:green"href="statusprocess.php?id=<?php echo $r[0]; ?>&sts=0&pg=1">RESEND</a></td></tr>
 <?php
}
}
}
?></table>
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
