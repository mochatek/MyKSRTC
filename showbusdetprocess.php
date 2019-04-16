<?php
$bid=$_POST["bid"];
if ($bid==0)
echo " ";
else
{
	include ("query.php");
	$ob=new query();
	$rs=$ob->showbus($bid);
	$r=mysqli_fetch_array($rs);
	echo "<table width='360' align='center' cellspacing='15'><tr><th width='180' style='color:#7A8282; font:bold 16px Tahoma;'>BUSTYPE</th><td align='center'><input type='text' name='btype' id='btype' value=' $r[0]' style='color:#333; font:12px Tahoma; text-align:center; font-weight:bold; height:20px; width:200px;border-radius:5px;
' readonly></td></tr>";
	echo "<tr><th style='color:#7A8282; font:bold 16px Tahoma;'>REG-NO</th><td><input style='color:#333; font:12px Tahoma; text-align:center; font-weight:bold; height:20px; width:200px;border-radius:5px;' type='text' name='regno' id='regno' value=' $r[1]' readonly></td></tr>";
	echo "<tr><th style='color:#7A8282; font:bold 16px Tahoma;'>ROUTE</th><td><input style='color:#333; font:12px Tahoma; text-align:center; font-weight:bold; height:20px; width:200px;border-radius:5px;' type='text' name='route' id='route' value=' $r[2]' readonly></td></tr>";
	echo "<tr><td colspan='2'><input type='submit' name='edit' value='EDIT' style='width:160px; height:20px;  color:white; font:bold 12px Tahoma; text-align:center;background:#2196F3;'>&nbsp;&nbsp;<input style='width:160px; height:20px;  color:white; font:bold 12px Tahoma; text-align:center;background:#f44336;' type='submit' name='delete' id='delete' value='DELETE' ></td></tr></table>";
	echo "<input type='hidden' name='bid' value='$bid'>";
	}
?>