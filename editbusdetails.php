<?php
include ("query.php");
  $ob=new query();
  $bid=$_POST["bid"];
if(isset($_POST["delete"]))
{
$rs=$ob->deletebus($bid);
header ("location:busdetails.php");	
}
$regno=$_POST["regno"];
$route=$_POST["route"];
$btype=$_POST["btype"];
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<script type="text/javascript">
function remove1(button)
{
	 var row = button.parentNode.parentNode;
            if (confirm("Do you want to delete this stop?")) {
                var table = document.getElementById("route1");
                table.deleteRow(row.rowIndex);
            }
        };
		function remove2(button)
{
	 var row = button.parentNode.parentNode;
            if (confirm("Do you want to delete this stop?")) {
                var table = document.getElementById("route2");
                table.deleteRow(row.rowIndex);
            }
        };
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
    <li ><a href="busdetails.php" style="font:bold 12px Tahoma;">BUSES</a> |</li>
    <li><a href="reachonsent.php" style="font:bold 12px Tahoma">REACHON</a> |</li>
    <li><a href="inbox.php" style="font:bold 12px Tahoma">INBOX</a> |</li>
    <li><a href="news.php" style="font:bold 12px Tahoma">NEWS</a> |</li>
    <li><a href="logout.php" style="font:bold 12px Tahoma">LOGOUT</a> |</li>
  </ul>
  <h2 class="gallary">Kerala State Road Transport Corporation</h2>
  <div id="header" style="background:url(images/depothome.jpg);"> </div>
  <div id="body"><br />
<form method="post" action="editbusdetprocess.php"> 
 <p align="center"><img src="images/busdetails.png" alt="" width="145" height="24" align="middle" class="head"  / ></p>
 <table width="336" height="180" align="center" cellspacing="14">
  <tr><th width="88" style="color:#7A8282; font:16px Tahoma;"><b>REG-NO.</b></th><td width="200"><input type="text" name="regno" id="regno"  value="<?php echo $regno;?>" style="color:#333; font:12px Tahoma; text-align:center; font-weight:bold; height:23px; width:200px;border-radius:5px" ></td></tr>
  <tr><th style="color:#7A8282; font:16px Tahoma;"><b>TYPE</b></th><td><select name="bustype" id="bustype" style="text-align:center; width:200px; height:25px; float:left; color:#333; font:12px Tahoma; text-align:center; font-weight:bold;;border-radius:5px">
  <?php
  $rs=$ob->getbustype();
  while($r=mysqli_fetch_array($rs))
  {
	  if(strcmp($r[1],$btype)==0)
	  {
		  $tid=$r[0];
		  continue;
	  }
	  else
	  {
  ?>
  <option style="color:#7A8282; font:12px Tahoma; text-align:center; font-weight:bold; " value="<?php echo $r[0];?>"><?php echo $r[1];?></option>
  <?php 
	  }
  }?>
<option style="color:#7A8282; font:12px Tahoma; text-align:center; font-weight:bold; " value="<?php $tid ?>" selected="selected"><?php echo $btype;?></option>
  </select></td></tr> 
   <tr><th style="color:#7A8282; font:16px Tahoma;"><b>ROUTE</b></th><td><datalist id="routes">
    <?php 
	$rs=$ob->getroutes();
	while($r = mysqli_fetch_array($rs)) { ?>
        <option value="<?php echo $r[1]; ?>"/>
    <?php } ?>
</datalist><input type="text" name="rname" id="rname" list="routes" value="<?php echo $route;?>" style="color:#333; font:12px Tahoma; text-align:center; font-weight:bold; height:23px; width:200px;border-radius:5px" >
         </td> <tr > 
 </table>
    <h3 class="tech"></h3>
    <h3 class="tech"></h3>
   <table width="388" align="center">
    <tr><th height="88" ><img src="images/route.png" width="174" height="79"/></th></tr>  
    </table> 
      <div style="overflow: hidden;">  
      <datalist id="stops">
   <?php
   $rs=$ob->getstops();
	while($s = mysqli_fetch_array($rs)) { ?>
        <option value="<?php echo $s[1]; ?>"/>
    <?php } ?>
   </datalist>
      <?php
	  $rs=$ob->getuids($bid);
	  while($u=mysqli_fetch_array($rs))
{
$ud[]=$u[0];
}
	  ?>
      <div  style="width:50%;  float:left"> 
    <table align="center" id="route1">     
    <tr ><th bgcolor="#99CCCC">STOP NAME</th><th bgcolor="#99CCCC">TIME</th></tr>
    <?php
	$i=1;
    $rs=$ob->getroutedetails($ud[0]);
while($r=mysqli_fetch_array($rs))
{?>
<tr><th><input list="stops" style="color:#333; font:12px Tahoma; text-align:center; font-weight:bold; height:20px;" type="text" name="sname<?php echo $i;?>"  value="<?php echo $r[0]; ?>"></th><th><input style="color:#333; font:12px Tahoma; text-align:center; font-weight:bold; height:20px;" type="time" name="time<?php echo $i;?>"  value="<?php echo $r[1]; ?>"></th><th><input type="button" value="x" style="width:30px; height:20px; border:1px solid #697779; color:#F33; font:bold 11px/12px Tahoma; text-align:center;background:#eeeeee; font-weight:bold; font-size:large" onclick="remove1(this)"></th></tr>
<?php
$i=$i+1;
}
	?>
   </table>
   <input type="hidden" name="huid1" value="<?php echo $ud[0];?>">
<input type="hidden" name="hsn1" value="<?php echo $i-1;?>">
</div>
 <div  style="width:50%;  float:right"> 
    <table align="center" id="route2">     
    <tr ><th bgcolor="#99CCCC">STOP NAME</th><th bgcolor="#99CCCC">TIME</th><th></th></tr>
    <?php
    $rs=$ob->getroutedetails($ud[1]);
while($r=mysqli_fetch_array($rs))
{?>
<tr><th><input list="stops" style="color:#333; font:12px Tahoma; text-align:center; font-weight:bold; height:20px;" type="text" name="sname<?php echo $i;?>"  value="<?php echo $r[0]; ?>"></th><th><input style="color:#333; font:12px Tahoma; text-align:center; font-weight:bold; height:20px;" type="time" name="time<?php echo $i;?>"  value="<?php echo $r[1]; ?>"></th><th><input type="button" value="x" style="width:30px; height:20px; border:1px solid #697779; color:#F33; font:bold 11px/12px Tahoma; text-align:center;background:#eeeeee; font-weight:bold; font-size:large" onclick="remove2(this)"></th></tr>
<?php
$i=$i+1;
}
	 
	?>
   </table>
   <input type="hidden" name="huid2" value="<?php echo $ud[1];?>">
<input type="hidden" name="hsn2" value="<?php echo $i-1;?>">
</div>

<p align="center"><br><input type="submit" name="save" value="SAVE" style="width:80px; height:20px;  color:white; font:bold 14px Tahoma; text-align:center;background:#4CAF50; border-radius:5px ">&nbsp;<input type="submit" name="cancel" value="CANCEL" style="width:80px; height:20px;  color:white; font:bold 14px Tahoma; text-align:center;background:#f44336;border-radius:5px"></p>
<br>
<input type="hidden" name="hbid" value="<?php echo $bid;?>">
</div>
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
