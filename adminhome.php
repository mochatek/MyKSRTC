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
    <li style="background-color:lightblue"><a href="adminhome.php" style="font:bold 12px Tahoma; color:black">HOME</a> | </li>
    <li><a href="admininbox.php" style="font:bold 12px Tahoma;">INBOX</a> |</li>
    <li><a href="logout.php" style="font:bold 12px Tahoma;">LOGOUT</a> |</li>
    
  </ul>
  <h2 class="gallary">Kerala State Road Transport Corporation</h2>
  <div id="header"> </div>
  <div id="body">
   <form id="form1" name="form1" method="post" action="" style="float:left;" >
     <table id="clr" width="388" height="272" border="0" cellpadding="5" cellspacing="0" >
       <tr>
         <th width="168" scope="row"><img src="images/bustype.png" width="78" height="78"></th>
         <td width="194"><a href="adminhome.php"><b>ADD BUS TYPE</b></a></td>
       </tr>
       <tr>
         <th scope="row"><img src="images/depots.png" width="78" height="78"></th>
         <td><a href="depotregister.php"><b>ADD DEPOTS</b></a></td>
       </tr>
       <tr>
         <th height="88" scope="row"><img src="images/mail.png" width="78" height="78"></th>
         <td><a href="admininbox.php"><b>INBOX</b></a></td>
       </tr>
     </table>
   </form>
      <br />
<form  action="bustypeprocess.php" method="post" class="search">
 <p><img src="images/addbustype.png" alt="" width="145" height="27" align="middle" class="head"  / ></p>
   <p><br>
        <label style="color:#7A8282; font:16px Tahoma;"><b>BUS TYPE</b></label>
        <label for="bustype">
          <input type="text" name="bustype" style="color:#333; font:12px Tahoma; text-align:center; font-weight:bold;height:20px;border-radius:5px;" />
        </label>
      </p>
        <p><br><br><br>
        <input type="submit" class="submit" style="width:315px; height:30px; margin:12px 0 0 30px; border-radius:8px; background-color:#fe4c2e; font:bold 14px Tahoma; color:white" value="ADD" />
      </p> 
    </form>
    <h3 class="tech"></h3>
    <h3 class="tech"></h3>
    <p class="brd"></p>
   <p class="footer"><a href="adminhome.php">Home</a> | <a href="admininbox.php">Inbox</a> | <a href="logout.php">Logout </a> </p>
  </div>
  <div class="foot">&copy; Copyright 2018 | MOCHA | All rights reserved.
    </div>
  <br class="spacer" />
</div>
</body>
</html>
