
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Car Online</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link href="style.css" type="text/css" rel="stylesheet" />
<script type="text/javascript">
var c=2;
function Add() {
            var sname = document.getElementById("sname1");
            var time = document.getElementById("time1");
			 var rws = document.getElementById("h1");
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
element.type = "text";
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
<div id="main"> <a href="#"><img src="images/logo.gif" alt="" border="0" class="logo"  /></a>
  <ul class="topcar">
       <li><a href="#"><img src="images/a.png" alt="" width="78" height="92" border="0" /></a></li>
    <li><a href="#"><img src="images/b.png" alt="" width="79" height="92" border="0" /></a></li>
    <li><a href="#"><img src="images/c.png" alt="" width="79" height="92" border="0" /></a></li>
    <li><a href="#"><img src="images/d.png" alt="" width="79" height="92" border="0" /></a></li>
  </ul>
  <ul class="topnav">
    <li><a href="adminhome.php">Home</a> | </li>
    <li><a href="depot.php">Depots</a> |</li>
    <li><a href="aboutus.php">About</a> |</li>
    <li><a href="#">Reservations</a> |</li>
    <li><a href="contact.php">Contact</a></li>
  </ul>
  <h2 class="gallary">Kerala State Road Transport Corporation</h2>
  <div id="header" style="background:url(images/depothome.jpg);"> </div>
  <div id="body">
   <form id="form1" name="form1" method="post" action="" style="float:left;" >
     <table width="388" height="272" border="0" cellpadding="5" cellspacing="5">
       <tr>
         <th width="168" scope="row"><img src="images/profile.png" width="78" height="78"></th>
         <td width="194"><a href="buses.php"><b>ADD BUS</b></a></td>
       </tr>
       <tr>
         <th scope="row"><img src="images/bustype.png" width="78" height="78"></th>
         <td><a href="buses.php"><b>BUS DETAILS</b></a></td>
       </tr>
       <tr>
         <th height="88" scope="row"><img src="images/mail.png" width="78" height="78"></th>
         <td><b>VIEW INBOX</b></td>
       </tr>
     </table>
   </form>
      <br />
<form style=" background-color: transparent;"  class="search">
 <p><img src="images/depotprofile.png" alt="" width="145" height="27" align="middle" class="head"  / ></p>
 <table width="313" height="161" align="center" cellspacing="14">
 <tr><th width="91" style="color:#7A8282; font:16px Tahoma;"><b> BUS-ID</b></th><td width="174"><input type="text" name="bid" style="color:#333; font:12px Tahoma; text-align:center; font-weight:bold; height:23px;"  ></td></tr>
  <tr><th style="color:#7A8282; font:16px Tahoma;"><b>REG-NO.</b></th><td><input type="text" name="regno" style="color:#333; font:12px Tahoma; text-align:center; font-weight:bold; height:23px;" ></td></tr>
  <tr><th style="color:#7A8282; font:16px Tahoma;"><b>BUS TYPE</b></th><td><select name="bustype" style="text-align:center; width:173px; height:25px; float:left; color:#333; font:12px Tahoma; text-align:center; font-weight:bold;">
      <option style="color:#333; font:12px Tahoma; text-align:center; font-weight:bold;" value="0">-- SELECT BUSTYPE --</option>
  <?php
  include ("query.php");
  $ob=new query();
  $rs=$ob->getbustype();
  while($r=mysqli_fetch_array($rs))
  {
  ?>
  <option style="color:#7A8282; font:12px Tahoma; text-align:center; font-weight:bold;" value="<?php echo $r[0];?>"><?php echo $r[1];?></option>
  <?php } ?>
  </select></td></tr> 
 </table>
</form >
    <h3 class="tech"></h3>
    <h3 class="tech"></h3>
   <form method="post" action="naa.php">
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
                <td><input type="text" name="sname1" id="sname1" style="color:#333; font:12px Tahoma; text-align:center; font-weight:bold; height:20px;"/></td>
                <td><input type="text" name="time1" id="time1" style="color:#333; font:12px Tahoma; text-align:center; font-weight:bold; height:20px;"/></td>
                <td><input type="button" onclick="Add()" value="+" style="width:30px; height:20px; border:1px solid #697779; color:#0C0; font:bold                11px/12px Tahoma; text-align:center;  background:#eeeeee; font-weight:bold; font-size:large"/></td>
            </tr>
            <tr><td><input type="hidden" name="h1" id="h1"></td><td colspan="2" align="right"><input type="submit" name="save" value="SAVE" style="width:50px; height:20px; border:1px solid #697779; color:#000; font:bold 11px/12px Tahoma; text-align:center;  background:#CCC; font-weight:bold;" > </td></tr>
        </tfoot>
   </table>
   
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
