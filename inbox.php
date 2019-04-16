<?php
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<script language="javascript">
function values(uid)
{
document.getElementById("huid").value=uid;	
}
</script>
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
    <li ><a href="depothome.php" style="font:bold 12px Tahoma">HOME</a> | </li>
    <li ><a href="buses.php" style="font:bold 12px Tahoma">BUSES</a> |</li>
         <li><a href="reachonsent.php" style="font:bold 12px Tahoma">REACHON</a> |</li>
    <li style="background-color:lightblue"><a href="inbox.php" style="font:bold 12px Tahoma; color:black">INBOX</a> |</li>
    <li><a href="news.php" style="font:bold 12px Tahoma">NEWS</a> |</li>
    <li><a href="logout.php" style="font:bold 12px Tahoma">LOGOUT</a> |</li>
  </ul>
  <h2 class="gallary">Kerala State Road Transport Corporation</h2>
 
  <div id="body">
    <h3 class="tech"></h3>
    <form id="form1" name="form1" method="post" action="replyprocess.php">
     <table width="666" align="center">
     <tr ><th><br><br><img src="images/inbox2.png" width="260" height="62"/></th></tr>
     </table>
        <table class="tbl" width="611" align="center" cellpadding="10" cellspacing="15" bgcolor="#f2f2f2"  border="1" style="border:thin;">
      <?php
	  $did=$_SESSION["did"];
  include ("query.php");
  $ob=new query();
  $rs=$ob->readmail($did);
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
  <tr ><td width="509" style="color:#006; font:bold 18px Tahoma;"><span style="float:right; color:#F96; font:bold 10px Tahoma;"><?php echo $r[1];?></span>
  <p><u><?php echo $r[2];?></u><br><br><details><summary><img src="images/user.png" width="16" height="15" style="vertical-align: middle;"/><span style="vertical-align: middle; color:#666666; font:bold 14px Tahoma;">&nbsp;&nbsp;<?php echo $r[0];?></span></summary><hr><p style="margin-left:10%;margin-right:10%"><span style="text-align:justify; color:#000; font:bold 16px cambria;"><?php echo $r[3];?></span></p><hr><table width="100%" align="center" border="0" style="background-color:transparent">
<tr><th><textarea name="reply" id="reply" placeholder="Reply" style="color:#0066ff; font:bold 14px cambria;TEXT-INDENT:20PX;width:100%;border-radius:6px;height:30px"></textarea></th><th><input type="submit" onclick="values(<?php echo $r[4];?>)" value="REPLY" style="height:30px;width:80%;border-radius:6px; background-color:#F96;color:white; font-weight:bold" ></th></tr></table>
</details></td></tr>
  <?php
  }
  }
  ?>
     </table> 
     <input type="hidden" name="huid" id="huid">                            
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
