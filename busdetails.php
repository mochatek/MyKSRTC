<?php
session_start();
$did=$_SESSION["did"];
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
<script language="javascript" type="text/javascript">
function showdetails()
{
	var bid=document.getElementById('buses').value;
    var hr = new XMLHttpRequest();
    var url = "showbusdetprocess.php";
    var vars = "bid="+bid;
    hr.open("POST", url, true);
    hr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
       hr.onreadystatechange = function() {
	    if(hr.readyState == 4 && hr.status == 200) {
		    var return_data = hr.responseText;
			document.getElementById("details").innerHTML = return_data;
	    }
    }
    hr.send(vars); 	
}
</script>
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
    <li style="background-color:lightblue"><a href="buses.php" style="font:bold 12px Tahoma; color:black">BUSES</a> |</li>
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
         <th width="168" scope="row"><img src="images/busadd.png" width="78" height="78"></th>
         <td width="194"><a href="buses.php"><b>ADD BUS</b></a></td>
       </tr>
       <tr>
         <th scope="row"><img src="images/busdet.png" width="78" height="78"></th>
         <td><a href="busdetails.php"><b>BUS DETAILS</b></a></td>
       </tr>
     </table>
   </form>
      <br />
<form style=" background-color: transparent;" action="editbusdetails.php" method="post" class="search">
 <p><img src="images/busdetails.png" alt="" width="145" height="24" align="middle" class="head"  / ></p>
 <table width="360" align="center">
 <tr ><th ><select name="buses" id="buses" onchange="showdetails()" style="text-align:center; width:173px; height:25px; float:left; color:#333; font:12px Tahoma; text-align:center; font-weight:bold; background-color:#eeeeee;border-radius:5px;
">
      <option style="color:#333; font:12px Tahoma; text-align:center; font-weight:bold;" value="0">-- SELECT BUS --</option>
  <?php
        include ("query.php");
		$ob=new query();
		$rs=$ob->getbuses($did);
		while($r=mysqli_fetch_array($rs))
  {
  ?>
  <option style="color:#7A8282; font:12px Tahoma; text-align:center; font-weight:bold;" value="<?php echo $r[0];?>"><?php echo $r[0];?></option>
  <?php } ?>
  </select></th></tr> 
 </table><div id="details"></div></form>
      <div id="routes"></div>
      <br />
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
