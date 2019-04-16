<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<style>
.roundedge
{
 border-radius:8px
}

</style>
<script language="javascript">
function rate(el)
{   var i=1;
	var c=el.id;
	document.getElementById("hrt").value=c;
	while(i<=5)
	{
		if(i<=c)
		{
	document.getElementById(i).src="images/star2.png";
		}
		else
		{
	document.getElementById(i).src="images/star1.png";
	}
	i=i+1;
	}
	
}
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
 <li><a href="userhome.php" style="font:bold 12px Tahoma;">HOME</a> | </li>
    <li><a href="depot.php" style="font:bold 12px Tahoma">DEPOTS</a> |</li>
    <li><a href="enquiry.php" style="font:bold 12px Tahoma">ENQUIRY</a> |</li>
    <li ><a href="allnews.php" style="font:bold 12px Tahoma;">NEWS</a> |</li>
    <li><a href="aboutus.php" style="font:bold 12px Tahoma">ABOUT</a> |</li>
    <li  style="background-color:lightblue" style="background-color:lightblue"><a href="feedback.php" style="font:bold 12px Tahoma;color:black">FEEDBACK</a> |</li>
  </ul>
  <h2 class="gallary">Kerala State Road Transport Corporation</h2>
 
  <div id="body">
    <h3 class="tech"></h3>
   <form id="form1" method="post" action="feedbackprocess.php" >
    <table width="363" align="center" cellspacing="15">
  <tr><th ><br><img src="images/feedback.png" width="280" height="61"/><br><br></th></tr></table>
  <table width="600" align="center" cellpadding="5" cellspacing="15" style="border:double; border-color:#6CC;" >
  <tr><td width="600" align="left" style="color:#7A8282; font:16px Tahoma"><b>NAME</b><br><br>
  <input class="roundedge" style="height:30px;width:560px;font:14px Tahoma;TEXT-INDENT:30PX" type="text" name="name"  ></td>
   </tr>
   
   <tr><td width="600" align="left" style="color:#7A8282; font:16px Tahoma"><b>EMAIL</b><br><br>
  <input class="roundedge" style="height:30px;width:560px;font:14px Tahoma;TEXT-INDENT:30PX" type="email" name="email" ></td>
   </tr>
   <tr><td width="600" align="left" style="color:#7A8282; font:16px Tahoma"><b>RATING</b><br><br>
<p align="center"><img src="images/star1.png" id="1"  width="30" height="30" onclick="rate(this)"/>
<img src="images/star1.png" id="2"  width="30" height="30" onclick="rate(this)"/>
<img src="images/star1.png" id="3"  width="30" height="30" onclick="rate(this)"/>
<img src="images/star1.png" id="4"  width="30" height="30" onclick="rate(this)"/>
<img src="images/star1.png" id="5"  width="30" height="30" onclick="rate(this)"/></p></td>
   </tr>
    <tr><td width="600" align="left" style="color:#7A8282; font:16px Tahoma"><b>COMMENTS</b><br><br>
    <textarea class="roundedge" name="cmnt" style=" width:560px;height:150px; color:#0066ff; font:bold 14px cambria;TEXT-INDENT:20PX" placeholder=" Your comments.."></textarea></td></tr>
             <tr><td align="right"><input type="submit" name="submit" value="SUBMIT"   style="border-radius: 8px; background-color:#158ece; color:#FFF; border:1px solid #697779; width:60px; height:30px"></td></tr></table><br><br>
             <input type="hidden" id="hrt" name="hrt">
   </form>
    <p class="brd"></p>
   <p class="footer"><a href="userhome.php">Home</a> | <a href="depot.php">Depots</a> | <a href="enquiry.php">Enquiry </a> | <a href="allnews.php">News</a> | <a href="aboutus.php">About</a> | <a href="feedback.php">Feedback</a></p>
  </div>
   <div class="foot">&copy; Copyright 2018 | MOCHA | All rights reserved.
    </div>
  <br class="spacer" />
</div>
</body>
</html>
