<?php
include ("query.php");
  $ob=new query();
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
<script type="text/javascript">
var c=2;
function passdetails()
{

document.getElementById("hbid").value=document.getElementById("bid").value;
document.getElementById("hrno").value=document.getElementById("regno").value;
document.getElementById("hbtp").value=document.getElementById("bustype").value;
document.getElementById("hrnm").value=document.getElementById("rname").value;
}
function Add() {
            var sname = document.getElementById("sname1");
            var time = document.getElementById("time1");
			 var rws = document.getElementById("hrw");
            AddRow(sname.value, time.value);
            sname.value = "";
          time.value = "";
		  c=c+1;
		  rws.value=c;
        };
 
        function Remove(button) {
            //Determine the reference of the Row using the Button.
            var row = button.parentNode.parentNode;
            if (confirm("Do you want to delete ?")) {
 
                //Get the reference of the Table.
                var table = document.getElementById("route");
 
                //Delete the Table row using it's Index.
                table.deleteRow(row.rowIndex);
				
            }
        };
 
        function AddRow(sname, time) {
            //Get the reference of the Table's TBODY element.
            var tBody = document.getElementById("route").getElementsByTagName("TBODY")[0];
 
            //Add Row.
            row = tBody.insertRow(-1);
 
            //Add stop cell.
            var cell = row.insertCell(-1);
			var element = document.createElement("input");
element.type = "text";
element.name="sname"+c;
element.id="sname"+c;
element.value=sname;
element.style=style="color:#333; font:12px Tahoma; text-align:center; font-weight:bold; height:23px;";
cell.appendChild(element);
              

 
            //Add time cell.
            cell = row.insertCell(-1);
			var element = document.createElement("input");
element.type = "time";
element.name="time"+c;
element.id="time"+c;
element.value=time;
element.style=style="color:#333; font:12px Tahoma; text-align:center; font-weight:bold; height:23px;";
cell.appendChild(element);
             
           
 
            //Add Button cell.
            cell = row.insertCell(-1);
            var btnRemove = document.createElement("INPUT");
            btnRemove.type = "button";
            btnRemove.value = "x";
			btnRemove.style="width:30px; height:20px; border:1px solid #697779; color:#F33; font:bold 11px/12px Tahoma; text-align:center;             background:#eeeeee; font-weight:bold; font-size:large";
            btnRemove.setAttribute("onclick", "Remove(this);");
            cell.appendChild(btnRemove);
        }
		function printer()
{  
var rs = document.getElementById('route').rows.length;
       for (var r=1; r <=rs; r++) 
      {
		   var stxt = document.getElementById('sname'+r);
		    var ttxt = document.getElementById('time'+r);
           var sn = stxt.value;
		   var tm = ttxt.value;
		window.alert(sn); 
		 }
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
<form style=" background-color: transparent;"  class="search">
 <p><img src="images/busdetails.png" alt="" width="145" height="24" align="middle" class="head"  / ></p>
 <table width="313" height="161" align="center" cellspacing="14">
 <tr><th width="91" style="color:#7A8282; font:16px Tahoma;"><b> BUS-ID</b></th><td width="174"><input type="text" id="bid" name="bid" style="color:#333; font:12px Tahoma; text-align:center; font-weight:bold; height:23px;height:20px;border-radius:5px;
"  ></td></tr>
  <tr><th style="color:#7A8282; font:16px Tahoma;"><b>REG-NO.</b></th><td><input type="text" name="regno" id="regno"  style="color:#333; font:12px Tahoma; text-align:center; font-weight:bold; height:23px;height:20px;border-radius:5px;
" ></td></tr>
  <tr><th style="color:#7A8282; font:16px Tahoma;"><b>BUS TYPE</b></th><td><select name="bustype" id="bustype" style="text-align:center; width:173px; height:25px; float:left; color:#333; font:12px Tahoma; text-align:center; font-weight:bold;border-radius:5px;
">
      <option style="color:#333; font:12px Tahoma; text-align:center; font-weight:bold;height:20px;border-radius:5px;
" value="0">-- SELECT BUSTYPE --</option>
  <?php
  $rs=$ob->getbustype();
  while($r=mysqli_fetch_array($rs))
  {
  ?>
  <option style="color:#7A8282; font:12px Tahoma; text-align:center; font-weight:bold;" value="<?php echo $r[0];?>"><?php echo $r[1];?></option>
  <?php } ?>
  </select></td></tr> 
   <tr><th style="color:#7A8282; font:16px Tahoma;"><b>ROUTE</b></th><td><datalist id="routes">
    <?php 
	$rs=$ob->getroutes();
	while($r = mysqli_fetch_array($rs)) { ?>
        <option value="<?php echo $r[1]; ?>"/>
    <?php } ?>
</datalist><input type="text" name="rname" id="rname" list="routes"  style="color:#333; font:12px Tahoma; text-align:center; font-weight:bold; height:23px;height:20px;border-radius:5px;
" >
         </td> <tr >
 </table>
</form >
    <h3 class="tech"></h3>
    <h3 class="tech"></h3>
   <form method="post" action="busdetailsprocess.php">
   <table width="388" align="center" name="route" id="route">
   <thead>
    <tr><th height="88" colspan="3"><img src="images/route.png" width="174" height="79"/></th></tr>        
          <tr >
                <th bgcolor="#99CCCC">STOP NAME</th><th bgcolor="#99CCCC">TIME</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
        </tbody>
           <tfoot>
            <tr>
                <td><input type="text" name="sname1" id="sname1" list="stops"  style="color:#333; font:12px Tahoma; text-align:center; font-weight:bold; height:20px;"/><datalist id="stops">
   <?php
   $rs=$ob->getstops();
	while($r = mysqli_fetch_array($rs)) { ?>
        <option value="<?php echo $r[1]; ?>"/>
    <?php } ?>
   </datalist></td>
                <td><input type="time" name="time1" id="time1" style="color:#333; font:12px Tahoma; text-align:center; font-weight:bold; height:20px;"/></td>
                <td><input type="button" onclick="Add()" value="+" style="width:30px; height:20px; border:1px solid #697779; color:#0C0; font:bold                11px/12px Tahoma; text-align:center;  background:#eeeeee; font-weight:bold; font-size:large"/></td>
            </tr>
            <tr><td colspan="2" align="right"><input type="submit" name="save" value="SAVE" style="width:350px; height:20px; color:white; font:bold 14px Tahoma; text-align:center;  background:#4CAF50;border-radius:8px" onclick="passdetails()" > </td></tr>
        </tfoot>
   </table>
   <input type="hidden" name="hrw" id="hrw">
 <input type="hidden" name="hbid" id="hbid">
   <input type="hidden" name="hrno" id="hrno">
   <input type="hidden" name="hbtp" id="hbtp">
   <input type="hidden" name="hrnm" id="hrnm">
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
