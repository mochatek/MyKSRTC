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
    <li><a href="userhome.php" style="font:bold 12px Tahoma;">HOME</a> | </li>
    <li style="background-color:lightblue"><a href="depot.php" style="font:bold 12px Tahoma;color:black">DEPOTS</a> |</li>
    <li><a href="enquiry.php" style="font:bold 12px Tahoma">ENQUIRY</a> |</li>
    <li><a href="allnews.php" style="font:bold 12px Tahoma">NEWS</a> |</li>
    <li><a href="aboutus.php" style="font:bold 12px Tahoma">ABOUT</a> |</li>
     <li><a href="feedback.php" style="font:bold 12px Tahoma">FEEDBACK</a> |</li>
  </ul>
  <h2 class="gallary">Kerala State Road Transport Corporation</h2>
  <div id="header" style="background:url(images/depothome.jpg)"> </div>
  <div id="body">
       <div class="left"> <img src="images/welcome.png" alt="" /><br />
      <p>This is <strong>KSRTC Online</strong> , a free site to manage your journey in a KSRTC bus. 
        This site let you search for KSRTC buses from a stop to destination. Search results can be filtered on the basis of the <b>Time</b> or <b>Bus Type</b> specified by the user.<br /><b>Bus details</b> and<b> Depot details</b> can be viewed by users. <b><a href="userregister.php">Registered users</a></b> can request for buses through any routes or adjustments in bus timings to the Depots. They can also register any <b>complaints</b> regarding buses or depots which are notified to the appropriate depots.<br><b><a href="about.php">Read more</a></b>...</p>
    </div>
    <form action="loginprocess.php" method="post" class="search">
      <p><img src="images/rtclogin.png" alt="" width="148" height="38" class="head" /><br />
        <label>USERNAME</label>
        <label for="uname">
          <input type="text" name="uname" id="uname" placeholder="username" style="height:20px;border-radius:5px;text-indent:20px" required="required"/>
        </label>
        <label>PASSWORD</label>
        <label for="pswd">
          <input type="password" name="pswd" id="pswd" placeholder="password" style="height:20px;border-radius:5px;text-indent:20px" required="required"/>
        </label>
      </p>
      <p>
        <input type="submit"  style="width:315px; height:30px; margin:12px 0 0 30px; border-radius:8px; background-color:#4CAF50; font:bold 14px Tahoma; color:white" value="LOGIN" />
      </p>
     <p>
        <div style="width:315px; height:25px; margin:5px 0 0 30px; border-radius:8px; background-color:#2196F3;font:bold 14px Tahoma; text-align:center; "> <a href="depotregister.php" style="text-align:center; text-decoration:none;color:white"">REGISTER</a></div>
      </p>
    </form>
    <h3 class="tech">&nbsp;</h3>
    <p class="brd"></p>
    <p class="footer"><a href="userhome.php">Home</a> | <a href="depot.php">Depots</a> | <a href="enquiry.php">Enquiry </a> | <a href="allnews.php">News</a> | <a href="aboutus.php">About</a> | <a href="feedback.php">Feedback</a></p>
  </div>
  <div class="foot">&copy; Copyright 2018 | MOCHA | All rights reserved.
    </div>
  <br class="spacer" />
</div>
</body>
</html>
