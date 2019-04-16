<?php
session_start();
$did=$_SESSION["did"];
$nid=$_GET["nid"];
include ("query.php");
$ob=new query();
$rs=$ob->getnews($nid);
$r=mysqli_fetch_array($rs);
?>
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
<div id="main"> <a href="#"><img src="images/logo.gif" alt="" border="0" class="logo"  /></a>
  <ul class="topcar">
  <li><a href="#"><img src="images/a.png" alt="" width="78" height="92" border="0" /></a></li>
    <li><a href="#"><img src="images/b.png" alt="" width="79" height="92" border="0" /></a></li>
    <li><a href="#"><img src="images/c.png" alt="" width="79" height="92" border="0" /></a></li>
    <li><a href="#"><img src="images/d.png" alt="" width="79" height="92" border="0" /></a></li>
  </ul>
  <ul class="topnav">
    <li ><a href="depothome.php" style="font:bold 12px Tahoma">HOME</a> | </li>
    <li ><a href="buses.php" style="font:bold 12px Tahoma">BUSES</a> |</li>
    <li style="background-color:lightblue"><a href="inbox.php" style="font:bold 12px Tahoma; color:black">INBOX</a> |</li>
    <li><a href="logout.php" style="font:bold 12px Tahoma">LOGOUT</a> |</li>
  </ul>
  <h2 class="gallary">Kerala State Road Transport Corporation</h2>
 
  <div id="body">
    <h3 class="tech"></h3>
    <form id="form1" name="form1" method="post" action="newsupdateprocess.php">
     <table width="666" align="center">
     <tr ><th><br><br><img src="images/news.png" width="260" height="62"/></th></tr>
     </table>
     <table width="666" align="center">
     <tr><th><textarea name="ttl" id="ttl"  style="width:620px;height:40px;font:bold 22px Tahoma; background-color:transparent;color:<?php echo $r[4]; ?>"><?php echo $r[3]; ?></textarea></th><th align="left"><input type="color" name="clr" id="clr" style="width:20px;height:40px;align:center" onchange="colorchange()"/></th></tr>
    <tr><th colspan="2"><textarea name="bdy" id="bdy" style="width:650px;height:100px;text-indent:50px;font:16px Tahoma; background-color:lightblue"><?php echo $r[5]; ?></textarea></th></tr>
    <tr><th colspan="2" align="right"><input type="submit" name="update" value="UPDATE" style="width:80px; height:20px;  color:white; font:bold 14px Tahoma; text-align:center;background:#4CAF50; border-radius:5px ">&nbsp;&nbsp;<input type="submit" name="cancel" value="CANCEL" style="width:80px; height:20px;  color:white; font:bold 14px Tahoma; text-align:center;background:#f44336; border-radius:5px "></th></tr>
    </table>
    <input type="hidden" name="hnid" value="<?php echo $nid;?>">
    </form>
    <p class="brd"></p>
    <p class="footer"><a href="#">Home</a> | <a href="#">Customer Care</a> | <a href="#">Faq </a> | <a href="#">Reservations</a> | <a href="#">Contact</a></p>
  </div>
  <div class="foot"> Copyright Information Goes Here<br />
    Designed by <a href="http://www.free-css-templates.com/">Free CSS Templates</a>, Thanks to <a href="http://www.dubaiapartments.biz/">Dubai Apartments</a></div>
  <br class="spacer" />
</div>
</body>
</html>
