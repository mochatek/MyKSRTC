
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<script language="javascript">
function invoice()
{
    var hr = new XMLHttpRequest();
    var url = "courierinvoice.php";
    var from = document.getElementById("from").value;
    var to = document.getElementById("to").value;
	var scnct = document.getElementById("scnct").value;
	var rcnct = document.getElementById("rcnct").value;
	var items = document.getElementById("item").value;
	var weight = document.getElementById("weight").value;
	var delivery = document.getElementById("delivery").value;
    var vars = "from="+from+"&to="+to+"&scnct="+scnct+"&rcnct="+rcnct+"&items="+items+"&weight="+weight+"&delivery="+delivery;
    hr.open("POST", url, true);
    hr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    hr.onreadystatechange = function() {
	    if(hr.readyState == 4 && hr.status == 200) {
		    var return_data = hr.responseText;
			document.getElementById("invoice").innerHTML = return_data;
	    }
    }
    hr.send(vars); 

}
</script>
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
table#clr tr:hover
{
	background-color:#ccff99;
	font-size:20px;
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
  <p align="center"><img src="images/reachon.png" width="481" height="231"/></p>
  <div id="body"> 
<form method="post" action="courierprocess.php">
  <table width="752" cellspacing="10" cellpadding="5" style="font:14px Tahoma;margin-left:10px;border:double; border-color:#6CC;" >
    <tr align="left">
    <th width="349" >SENDER CONTACT<br><br><input type="text" name="scnct" id="scnct" size="42" style="height:28px;border-radius:5px;text-indent:20px" required="required"></th>
    <th width="339" >RECIEVER CONTACT<br><br><input type="text" name="rcnct" id="rcnct" size="42" style="height:28px;border-radius:5px;text-indent:20px" required="required"></th></tr>
    <tr align="left"><th>SELECT SHIPMENT<br><br><select name="item"  id="item" style="height:28px;border-radius:5px;text-indent:20px;width:325px;" required="required">
    <option value="Electronics">ELECTRONICS</option>
    <option value="Documents">DOCUMENTS</option>
    <option value="Grocery">GROCERY</option>
    <option value="Others">OTHERS</option>
    </select></th>
   <th>WEIGHT (in grams)<br><br><input type="text" name="weight" id="weight" size="42" style="height:28px;border-radius:5px;text-indent:20px" required="required"></th></tr>
    <tr align="left"><th>SELECT DELIVERY<br><br><select name="delivery" id="delivery"  style="height:28px;border-radius:5px;text-indent:20px;width:325px" required="required">
    <option value="ndd">NEXT DAY DELIVERY</option>
 <option value="sdd">SAME DAY DELIVERY</option>
    </select></th> 
    <th>FROM<br><br><select name="from" id="from"  style="height:28px;border-radius:5px;text-indent:20px;width:325px" required="required">
       <?php
	include ("query.php");
	$ob=new query();
	$rs=$ob->getdepotdet();
	while($r=mysqli_fetch_array($rs))
	{
	?>
    <option value="<?php echo $r[0]; ?>"><?php echo $r[1]; ?></option>
    <?php
	}
	?>
    </select></th></tr>
       <tr align="left"><th height="66">DESTINATION<br><br><select name="to" id="to"  style="height:28px;border-radius:5px;text-indent:20px;width:325px" required="required">
       <?php
    $rs=$ob->getdepotdet();
	while($r=mysqli_fetch_array($rs))
	{
	?>
    <option value="<?php echo $r[0]; ?>"><?php echo $r[1]; ?></option>
    <?php
	}
	?>
    </select></th>
   <th><br><br><input type="button" name="submit" value="SUBMIT" onclick="invoice()" style="width:325px; height:30px; border-radius:8px; background-color:#2196F3; font:bold 14px Tahoma; color:white"></th></tr>
</table><br><br>
<div id="invoice">
</div>
</form>
  <h3 class="tech"></h3>
    <h3 class="tech"></h3>
    <p class="brd"></p>
    <p class="footer"><a href="uhome.php">Home</a> | <a href="courierbooking.php">Booking</a> | <a href="couriertracking.php">Tracking</a> | <a href="contactus.php">Contact</a> | <a href="logout.php">Logout</a></p>
  </div>
<div class="foot">&copy; Copyright 2018 | MOCHA | All rights reserved.
    </div>
  <br class="spacer" />
</div>
</body>
</html>
