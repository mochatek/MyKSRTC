
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<style>
tr:nth-child(even) {
background-color: #e6ffee;
}
.tbl tr:nth-child(odd) {
background-color:#e6e6ff;
}
tr td {
    border: 1px solid #006;
    border-radius:18px;
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
     <li ><a href="adminhome.php" style="font:bold 12px Tahoma;">HOME</a> | </li>
    <li style="background-color:lightblue"><a href="admininbox.php" style="font:bold 12px Tahoma;; color:black">INBOX</a> |</li>
    <li><a href="logout.php" style="font:bold 12px Tahoma;">LOGOUT</a> |</li>
    
  </ul>
  <h2 class="gallary">Kerala State Road Transport Corporation</h2>
 
  <div id="body">
    <h3 class="tech"></h3>
    <form id="form1" name="form1" method="get" action="">
     <table width="666" align="center">
     <tr ><th><br><br><img src="images/inbox2.png" width="260" height="62"/></th></tr>
     </table>
        <table class="tbl" width="611" align="center" cellpadding="10" cellspacing="15" bgcolor="#f2f2f2"  style="border:1px thin;">
      <?php
  include ("query.php");
  $ob=new query();
  $rs=$ob->readfeedback();
  if(mysqli_num_rows($rs)<1)
  {
	  ?>
	<tr><td width="509" align="center" style="color:red; font:bold 18px Tahoma;"><b>INBOX IS EMPTY !</b></td></tr> 
  <?php
  }
  else
  {
  while($r=mysqli_fetch_array($rs))
  {
  ?>
  <tr ><td width="509" style="color:#006; font:bold 18px Tahoma;"><p><img src="images/user.png" width="20" height="20" style="vertical-align: middle;"/><span style="vertical-align: middle; color:blue; font:bold 20px Tahoma;">&nbsp;&nbsp;<?php echo $r[2];?></span>&nbsp;<span style="color:black;font:bold 12px Tahoma;text-decoration:underline">&lt;<?php echo $r[3];?>&gt;</span><span style="float:right">
 <?php
 for($i=1;$i<=5;$i++)
 {if($i<=$r[4])
 {
 echo "<img src='images/star2.png' height='15px' width='15px' style='vertical-align: middle;'>";
 }
 else
 {
 echo "<img src='images/star1.png' height='15px' width='15px' style='vertical-align: middle;'>";
 }
 }
 ?></span><br><br><span style="text-align:justify; color:#000; font:bold 16px cambria;"><?php echo $r[5];?></span><br><span style="float:right; color:red; font:bold 10px Tahoma;"><?php echo $r[1];?></span></p></td></tr>
  <?php
  }
  }
  ?>
     </table>                             
    </form>
    <p class="brd"></p>
  <p class="footer"><a href="adminhome.php">Home</a> | <a href="admininbox.php">Inbox</a> | <a href="logout.php">Logout </a> </p>
  </div>
  <div class="foot">&copy; Copyright 2018 | MOCHA | All rights reserved.
    </div>
  <br class="spacer" />
</div>
</body>
</html>
