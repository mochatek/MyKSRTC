<?php
$from=$_POST["from"];
$to=$_POST["to"];
$time=$_POST["time"];
include("query.php");
$ob=new query();
$rs=$ob->findbuses($from,$to,$time);
$rw=mysqli_num_rows($rs);
if ($rw<1)
{
echo "<p align='center' style='color:red; font:14px Tahoma'>NO BUSES FOUND !</p>";
}
else
{
	echo "<table align='center' bgcolor='#66CCFF' style='border:thin;color:#FFF; bordercolor:#CC99FF; font:bold 14px Tahoma;' width='416'>";
	echo "<tr><td width='184' align='center'>";echo "ROUTE";echo "</td>";
    echo "<td width='61' align='center'>";echo "DEPART";echo "</td>";
    echo "<td width='61' align='center'>";echo "ARRIVE";echo "</td></tr>";
	echo "</table>";
	//for each bus , print the corresponding details
	while($b=mysqli_fetch_array($rs))
	{   echo "<table align='center' border='1' style='border-collapse:collapse;border:thin;bordercolor:#CC99FF'  width='416' >";
		$rd=$ob->getbusdetails($from,$to,$b[0]);
		$r=mysqli_fetch_array($rd);
		echo "<tr bgcolor='#CCCCCC' style='font:14px Tahoma;'><td width='184'>";echo $r[0];echo "</td>";
		echo "<td width='61' align='center'>";echo date("g:i A", strtotime("$r[2]"));echo "</td>";
		echo "<td width='61' align='center'>";echo date("g:i A", strtotime("$r[3]"));echo "</td></tr>";
	    $s=$ob->showroutes($b[0]);
		$route=" ";
		while($rt=mysqli_fetch_array($s))
{
	$route=$route.$rt[0]." ";
}
		echo "<tr bgcolor='#FFFFFF' style='font:10px Tahoma;'><td colspan='3' align='left'>";echo "<font color='#FF3300'>".$r[4]."</font><font size='1px' color='#999999'face='Tahoma'> via".$route."</font><a href='details.php?uid=$b[0]' style='float:right; text-decoration:none; color:red; border:1px solid red; font:bold 8px Tahoma; padding:1px; cursor:pointer'>DETAILS</a>";echo "</td></tr>";
		echo "</table>";
		echo "<br>";
			}
			
}
?>