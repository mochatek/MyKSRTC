<?php
session_start();
$did=$_SESSION["did"];
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
         <li><a href="reachonsent.php" style="font:bold 12px Tahoma">REACHON</a> |</li>
    <li ><a href="inbox.php" style="font:bold 12px Tahoma;">INBOX</a> |</li>
     <li style="background-color:lightblue"><a href="news.php" style="font:bold 12px Tahoma; color:black">NEWS</a> |</li>
    <li><a href="logout.php" style="font:bold 12px Tahoma">LOGOUT</a> |</li>
  </ul>
  <h2 class="gallary">Kerala State Road Transport Corporation</h2>
 
  <div id="body">
    <h3 class="tech"></h3>
    <form id="form1" name="form1" method="post" action="newsprocess.php">
     <table width="666" align="center">
     <tr ><th><br><br><img src="images/news.png" width="260" height="62"/></th></tr>
     </table>
     <table width="666" align="center">
     <tr><th><textarea name="ttl" id="ttl"  style="width:620px;height:40px;font:bold 22px Tahoma; background-color:transparent" placeholder="Title"></textarea></th><th align="left"><input type="color" name="clr" id="clr" style="width:20px;height:40px;align:center" onchange="colorchange()"/></th></tr>
    <tr><th colspan="2"><textarea name="bdy" id="bdy" style="width:650px;height:100px;text-indent:50px;font:16px Tahoma; background-color:lightblue" placeholder="Content.."></textarea></th></tr>
    <tr><th colspan="2" align="right"><input type="submit" name="post" value="POST" style="background-color:#000066;border-radius:4px;width:50px;color:white;font:bold 14px Tahoma"></th></tr>
    </table>
  <hr>
 
  <?php
  include ("query.php");
  $ob=new query();
  $rs=$ob->shownews($did);
  while($r=mysqli_fetch_array($rs))
  {?> <table width="666" align="center" style="border:1px solid; border-collapse:collapse">
     <tr><th width="60" style="font:10px Tahoma;color:red;"><?php echo $r[2];?></th><th align="center" style="text-decoration:underline;text-transform:uppercase;font:bold 22px Tahoma;color:<?php echo $r[4];?>"><?php echo $r[3];?></th></tr>
    <tr><th colspan="2" style="font:16px Tahoma;color:#000066;text-indent:50px; background-color:lightblue;font-weight:500"><br><?php echo $r[5];?><br>
    <br></th></tr>
    <tr><th align="right" bgcolor="#000066" style="color:white" colspan="2"><a href="editnews.php?nid=<?php echo $r[0];?>">EDIT</a>&nbsp;&nbsp;<a href="deletenews.php?nid=<?php echo $r[0];?>">DELETE</a></th></tr>
        </table>
        <br>
    <?php
  }
	?>

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
