<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
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
    
  </ul>
  <h2 class="gallary">Kerala State Road Transport Corporation</h2>
  <div id="header" style="background:url(images/depothome.jpg)"> </div>
  <div id="body">
    <form id="form1" name="form1" method="post" action="dregisterprocess.php">
      <table width="701" border="0" align="center" cellpadding="5" cellspacing="20">
        <tr>
          <th colspan="2"><img src="images/register.png" width="288" height="77" align="middle" /></th></tr>
          <th width="322" scope="row"  >DEPOT NAME</th>
          <td width="239"><label for="dname"></label>
          <input type="text" name="dname" id="dname" style="height:20px;border-radius:5px;text-indent:20px"/></td>
        </tr>
         <tr>
          <th scope="row" >DISTRICT</th>
          <td><label for="district"></label>
            <label for="dist"></label>
            <select name="dist" id="dist" style="text-align:center; width:173px; height:25px; float:left; color:#333; font:12px Tahoma; font-weight:bold;height:20px;border-radius:5px;">
              <option style="color:#333; font:12px Tahoma; text-align:center; font-weight:bold;" value="0">-- SELECT DISTRICT --</option>
                  <?php
  include ("query.php");
  $ob=new query();
  $rs=$ob->getdistrict();
  while($r=mysqli_fetch_array($rs))
  {
  ?>
  <option style="color:#7A8282; font:12px Tahoma; text-align:center; font-weight:bold;" value="<?php echo $r[0];?>"><?php echo $r[1];?></option>
  <?php } ?>
            </select></td>
        </tr>
        <tr>
          <th scope="row" >CONTACT</th>
          <td><label for="contact"></label>
          <input type="text" name="contact" id="contact" style="height:20px;border-radius:5px;text-indent:20px"/></td>
        </tr>
        <tr>
          <th scope="row" >EMAIL</th>
          <td><label for="email"></label>
          <input type="text" name="email" id="email" style="height:20px;border-radius:5px;text-indent:20px"/></td>
        </tr>
        <tr>
          <th scope="row" >USERNAME</th>
          <td><label for="uname"></label>
          <input type="text" name="uname" id="uname" style="height:20px;border-radius:5px;text-indent:20px" /></td>
        </tr>
        <tr>
          <th scope="row" >PASSWORD</th>
          <td><label for="pswd"></label>
          <input type="password" name="pswd" id="pswd" style="height:20px;border-radius:5px;text-indent:20px"/></td>
        </tr>
        <tr>
          <td colspan="2" align="center"><input type="submit" name="button" id="button" value="SUBMIT" style="width:480px; height:30px;  border-radius:8px; background-color:#4CAF50; font:bold 14px Tahoma; color:white; float:left; margin-left:100px; letter-spacing:2px"/></td>
        </tr>
      </table>
    </form>
<p class="brd"></p>

  </div>
<div class="foot">&copy; Copyright 2018 | MOCHA | All rights reserved.
    </div>
  <br class="spacer" />
</div>
</body>
</html>
