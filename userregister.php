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
  <div id="header"> </div>
  <div id="body">
    <h3 class="tech">&nbsp;</h3>
    <form id="form1" name="form1" method="post" action="registerprocess.php">
      <table width="731" border="0" align="center" cellpadding="5" cellspacing="20">
        <tr>
          <th colspan="2"><img src="images/register.png" width="371" height="113" align="middle" /></th></tr>
        <tr>
          <th width="358" height="28" scope="row" >NAME</th>
          <td width="357"><label for="name"></label>
          <input type="text" name="name" id="name"  required="required" style="height:20px;border-radius:5px;text-indent:20px"/></td>
        </tr>
        <tr>
          <th scope="row" >AGE</th>
          <td><label for="age"></label>
          <input type="text" name="age" id="age" required="required" style="height:20px;border-radius:5px;text-indent:20px"/></td>
        </tr>
        <tr>
          <th scope="row">GENDER</th>
           <td><input type="radio" name="gender"  value="male"  required="required"/>
      <label for="radio">Male  
        <input type="radio" name="gender" value="female"  required="required"/>
      Female
      <input type="radio" name="gender" value="other" required="required"/>
      Other</label></td>
        </tr>
        <tr>
          <th scope="row">DOB</th>
         <td><label for="day"></label>
        <select name="day" size="1" id="day" style="height:20px;border-radius:5px;" >
          <option value="0">Day</option>
          <?php
		  for($i=1;$i<=31;$i++)
		  {
		 ?>
         <option value = "<?php echo $i;?>">
         <?php echo $i;?> </option>
         <?php
		  }
		  ?>
        </select>
        <label for="month"></label>
        <label for="year"></label>
        <select name="month" id="month" style="height:20px;border-radius:5px;">
          <option value="0">Month</option>
          <?php
		  for($j=1;$j<=12;$j++)
		  {
		 ?>
          <option value = "<?php echo $j;?>"> <?php echo $j;?></option>
          <?php
		  }
		  ?>
        </select>
        <select name="year" size="1" id="year" style="height:20px;border-radius:5px;">
          <option value="0">Year</option>
           <?php
		  for($k=1990;$k<=2017;$k++)
		  {
		 ?>
         <option value = "<?php echo $k;?>">
         <?php echo $k;?> </option>
         <?php
		  }
		  ?>
      </select></td>
        </tr>
        <tr>
          <th scope="row">CONTACT</th>
          <td><label for="contact"></label>
          <input type="text" name="contact" id="contact" required="required" pattern="(7|8|9)\d{9}" title="Must be a 10 digits number starting with 9,8 or 7" style="height:20px;border-radius:5px;text-indent:20px"/></td>
        </tr>
        <tr>
          <th scope="row">E-MAIL</th>
          <td><label for="email"></label>
          <input type="email" name="email" id="email" required="required" style="height:20px;border-radius:5px;text-indent:20px" /></td>
        </tr>
        <tr>
          <th scope="row">USERNAME</th>
          <td><label for="uname"></label>
          <input type="text" name="uname" id="uname" required="required" pattern="[A-Z][A-Za-z _]+" title="Only letters,underscore and space allowed.Must begin with Uppercase letter.Eg:John" style="height:20px;border-radius:5px;text-indent:20px"/></td>
        </tr>
        <tr>
          <th scope="row">PASSWORD</th>
          <td><label for="pswd"></label>
          <input type="password" name="pswd" id="pswd" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number,one uppercase and lowercase letter and at least 8 characters long !" required="required" style="height:20px;border-radius:5px;text-indent:20px"/></td>
        </tr>
        <tr>
          <td colspan="2" align="center"><input type="submit" name="button" id="button" value="SUBMIT" style="width:440px; height:30px;  border-radius:8px; background-color:#4CAF50; font:bold 14px Tahoma; color:white; float:left; margin-left:100px; letter-spacing:2px"/></td>
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
