
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<style>
a
{
	color:white;
	font:10px Tahoma;
	
}
</style>
<script language="javascript">
function colorchange()
{
	var clr=document.getElementById("clr").value;
	document.getElementById("ttl").style.color=clr;
}
</script>
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
    <li><a href="depot.php" style="font:bold 12px Tahoma">DEPOTS</a> |</li>
    <li><a href="enquiry.php" style="font:bold 12px Tahoma">ENQUIRY</a> |</li>
    <li  style="background-color:lightblue" style="background-color:lightblue"><a href="allnews.php" style="font:bold 12px Tahoma;color:black">NEWS</a> |</li>
    <li><a href="aboutus.php" style="font:bold 12px Tahoma">ABOUT</a> |</li>
    <li><a href="feedback.php" style="font:bold 12px Tahoma">FEEDBACK</a> |</li>
  </ul>
  <h2 class="gallary">Kerala State Road Transport Corporation</h2>
 
  <div id="body">
    <h3 class="tech"></h3>
    <form id="form1" name="form1" method="post" action="newsprocess.php">
     <table width="666" align="center">
     <tr ><th><br><br><img src="images/news.png" width="260" height="62"/></th></tr>
     </table>
     <hr>
 
  <?php
  include ("query.php");
  $ob=new query();
  $rs=$ob->allnews();
  while($r=mysqli_fetch_array($rs))
  {?> <a name="<?php echo $r[0];?>"><table width="680" align="center" style="border:1px solid; border-collapse:collapse">
     <tr><th width="60" style="font:10px Tahoma;color:red;"><?php echo $r[2];?></th><th align="center" style="text-decoration:underline;text-transform:uppercase;font:bold 22px Tahoma;color:<?php echo $r[4];?>"><?php echo $r[3];?></th></tr>
    <tr><th colspan="2" style="font:16px Tahoma;color:#000066;text-indent:50px; background-color:lightblue;font-weight:500"><br><?php echo $r[5];?><br>
    <br></th></tr>
        </table></a>
        <br>
    <?php
  }
	?>

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
