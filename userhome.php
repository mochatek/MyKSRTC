<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<script language="javascript" type="text/javascript">
function passdata(){
    // Create our XMLHttpRequest object
    var hr = new XMLHttpRequest();
    // Create some variables we need to send to our PHP file
    var url = "searchprocess.php";
    var from = document.getElementById("from").value;
    var to = document.getElementById("to").value;
	var time = document.getElementById("time").value;
    var vars = "from="+from+"&to="+to+"&time="+time;
    hr.open("POST", url, true);
    // Set content type header information for sending url encoded variables in the request
    hr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    // Access the onreadystatechange event for the XMLHttpRequest object
    hr.onreadystatechange = function() {
	    if(hr.readyState == 4 && hr.status == 200) {
		    var return_data = hr.responseText;
			document.getElementById("results").innerHTML = return_data;
	    }
    }
    // Send the data to PHP now... and wait for response to update the status div
    hr.send(vars); // Actually execute the request
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
    <li style="background-color:lightblue"><a href="userhome.php" style="font:bold 12px Tahoma; color:black">HOME</a> | </li>
    <li><a href="depot.php" style="font:bold 12px Tahoma">DEPOTS</a> |</li>
    <li><a href="enquiry.php" style="font:bold 12px Tahoma">ENQUIRY</a> |</li>
    <li><a href="allnews.php" style="font:bold 12px Tahoma">NEWS</a> |</li>
    <li><a href="aboutus.php" style="font:bold 12px Tahoma">ABOUT</a> |</li>
    <li><a href="feedback.php" style="font:bold 12px Tahoma">FEEDBACK</a> |</li>
  </ul>
  <h2 class="gallary">Kerala State Road Transport Corporation</h2>
  <div id="header"></div>
  <?php
  include ("query.php");
  $ob=new query();
  $rs=$ob->homenews();
  ?>
<marquee  direction="right" behavior="scroll" bgcolor="#f44336" style="text-align:center;height:20px;color:white;font:bold 14px Tahoma" onmouseover="this.stop()" onmouseout="this.start()"><?php
    while($r=mysqli_fetch_array($rs))
	{
		echo "<a style='color:white;text-decoration:none;text-transform:uppercase' href='allnews.php#".$r[0]."'><font size='-3'>".$r[1]."</font> : <u>".$r[2]."</u></a>";
		echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";

	}
  ?></marquee>
  <div id="body">
    <div class="left"> <img src="images/welcome.png" alt="" /><br />
      <p>This is <strong>KSRTC Online</strong> , a free site to manage your journey in a KSRTC bus. 
        This site let you search for KSRTC buses from a stop to destination. Search results can be filtered on the basis of the <b>Time</b> or <b>Bus Type</b> specified by the user.<br /><b>Bus details</b> and<b> Depot details</b> can be viewed by users. <b><a href="userregister.php">Registered users</a></b> can request for buses through any routes or adjustments in bus timings to the Depots. They can also register any <b>complaints</b> regarding buses or depots which are notified to the appropriate depots.<br><b><a href="about.php">Read more</a></b>...</p>
    
    </div>
    <form style=" background-color: transparent;" action="loginprocess.php" method="post" class="search">
 <p> <img src="images/userlogin.png" alt="" width="148" height="38" align="middle" class="head"  /></p>
<!--   <table width="312" height="101" border="0" align="center" cellpadding="0" cellspacing="0">
     <tr>
       <th width="156" height="42" scope="row">USERNAME</th>
       <td width="156"><input type="text" name="uname" id="uname" /></td>
       </tr>
     <tr>
       <th height="59" scope="row">PASSWORD</th>
       <td><input type="password" name="pswd" id="pswd" /></td>
       </tr>
       <tr>
         <td></td><td><input type="button" name="login" value="Login" align="middle" /></td></tr>
     </table>-->
   <p> <label>USERNAME</label>
        <label for="uname">
          <input type="text" name="uname" id="uname"  placeholder="username" style="height:20px;border-radius:5px;text-indent:20px" required="required"/>
        </label>
        <label>PASSWORD</label>
        <label for="pswd">
          <input type="password" name="pswd" id="pswd"  placeholder="password" style="height:20px;border-radius:5px;text-indent:20px" required="required"/>
        </label>
      </p>
        <p>
        <input type="submit"  style="width:315px; height:30px; margin:12px 0 0 30px; border-radius:8px; background-color:#4CAF50; font:bold 14px Tahoma; color:white" value="LOGIN" />
      </p>
     <p>
        <div style="width:315px; height:25px; margin:5px 0 0 30px; border-radius:8px; background-color:#2196F3;font:bold 14px Tahoma; text-align:center; "> <a href="userregister.php" style="text-align:center; text-decoration:none;color:white""> SIGNUP </a></div>
      </p>
    </form>
    <h3 class="tech"></h3>
 
      <table width="779" border="0" cellspacing="10" cellpadding="5" >
        <tr>
          <th width="350" ><img src="images/search.png" width="232" height="66"></th>
          <th rowspan="20"><div id="results"></div></th>
        </tr>
        <tr>
          <th align="center"><input type="text" id="from" name="from" size="30" placeholder="FROM"  style="height:30px; text-align:center"/></th>
        </tr>
        <tr>
          <th align="center"><input type="text" id="to" name="to" size="30" placeholder="TO"  style="height:30px; text-align:center"/></th>
        </tr>
        <tr>
          <th align="center"><select name="type" id="type" style="width:245px; height:30px; " ></select></th>
        </tr>
        <tr>
          <th align="center"><input type="time" name="time" id="time" style="width:245px; height:30px;" ></th>
        </tr>
        <tr>
          <th align="center" ><input type="submit" name="bsearch" value="SEARCH" style="color:white; font:bold 14px Tahoma; width:250px; height:30px;  border-radius:8px; background-color:#ff9800" onclick="passdata()"></th>
        </tr>
      </table>
   
    
    <p class="brd"></p>
   <p class="footer"><a href="userhome.php">Home</a> | <a href="depot.php">Depots</a> | <a href="enquiry.php">Enquiry </a> | <a href="allnews.php">News</a> | <a href="aboutus.php">About</a> | <a href="feedback.php">Feedback</a></p>
  </div>
  <div class="foot">&copy; Copyright 2018 | MOCHA | All rights reserved.
    </div>
  <br class="spacer" />
</div>
</body>
</html>
