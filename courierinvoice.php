<?php
$scnct=$_POST["scnct"];
$rcnct=$_POST["rcnct"];
$from=$_POST["from"];
$to=$_POST["to"];
$item=$_POST["items"];
$weight=$_POST["weight"];
$d=$_POST["delivery"];
$date=date("d/m/y");
if($weight<=100)
{if($d=="ndd")
$amnt=30;
elseif($d=="sdd")
$amnt=60;
}
elseif($weight>100&&$weight<250)
{if($d=="ndd")
$amnt=50;
elseif($d=="sdd")
$amnt=100;
}
elseif($weight>251&&$weight<=3000)
{if($d=="ndd")
$amnt=100;
elseif($d=="sdd")
$amnt=200;
}
elseif($weight>3000)
{if($d=="ndd")
$amnt=100+((($weight-3000)/1000)*25);
elseif($d=="sdd")
$amnt=200+((($weight-3000)/1000)*30);
}
include("query.php");
$ob=new query();
$f=$ob->getdepot($from);
$t=$ob->getdepot($to);
$id=$ob->getcourierid();
echo "<table align='center' border='1' cellspacing='0' width='750' style='font:12px Tahoma;border:2px solid'><tr><th colspan='4' bgcolor='black' style='color:white;font:bold 18px Tahoma'>INVOICE</th></tr>";
echo "<tr  bgcolor='#999999' style='color:black;font:bold 14px Tahoma'><th>C-ID</th><th>DATE</th><th>FROM</th><th>TO</th></tr>";
echo "<tr bgcolor='white' ><th align='center'>$id</th><th>$date</th><th>$f</th><th>$t</th></tr>";
echo "<tr><th colspan='4' bgcolor='666666' style='color:white;font:bold 14px Tahoma'>CONTACT</th></tr>";
echo "<tr  bgcolor='#999999' style='color:black;font:bold 14px Tahoma'><th colspan='2'>SENDER</th><th colspan='2'>RECIEVER</th>";
echo "<tr bgcolor='white'><th colspan='2' align='center'>$scnct</th><th colspan='2' align='center'>$rcnct</th>";
echo "<tr><th  bgcolor='666666' style='color:white;font:bold 14px Tahoma' colspan='2'>ITEM</th><th bgcolor='#999999' style='color:black;font:bold 14px Tahoma'>WEIGHT</th><th align='center' bgcolor='white'>$weight</th></tr>";
echo "<tr><th colspan='2' align='center' rowspan='2' bgcolor='white'>$item</th><th bgcolor='#999999' style='color:blck;font:bold 14px Tahoma'>DELIVERY</th><th style='text-transform:uppercase' align='center' bgcolor='white'>$d</th></tr>";
echo "<tr><th bgcolor='black' style='color:white;font:bold 14px Tahoma'>TOTAL</th><th bgcolor='white' style='font:18px Tahoma;color:red;border:2px solid red'>$amnt</th></tr></table>";
echo "<br><br><p align='center'><input type='submit' name='pay' value='CONFIRM AND PAY' style='width:360px; height:30px; border-radius:8px; background-color:#4CAF50; font:bold 14px Tahoma; color:white'>&nbsp;&nbsp;&nbsp;<input type='submit' name='cancel' value='CANCEL' style='width:360px; height:30px; border-radius:8px; background-color:red; font:bold 14px Tahoma; color:white'></p>
<input type='hidden' name='hamnt' value='$amnt'>
<br><br>";
?>
