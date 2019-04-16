<?php
session_start();
$did=$_SESSION["did"];
include ("query.php");
$bid=$_POST["hbid"];
$regno=$_POST["hrno"];
$bustype=$_POST["hbtp"];
$rname=$_POST["hrnm"];
$r=$_POST["hrw"];
$ob=new query();
$uid=$ob->getuid();
for($i=2;$i<$r;$i++)
{
	if(isset($_POST["sname".$i])&& isset($_POST["time".$i]))
{
	$stop=$_POST["sname".$i];
	$time=$_POST["time".$i];
	if (trim($stop)==""||trim($time)=="")
	{continue;
	}
	else
	{
	$rid=$ob->checkroute($rname);
	$res=$ob->addroute($stop,$time,$bid,$rid,$uid);
	
	}
}
}
	if(isset($_POST["sname1"])&& isset($_POST["time1"]))
{
	$stop=$_POST["sname1"];
	$time=$_POST["time1"];
	if (trim($stop)!=""||trim($time)!="")
	{$res=$ob->addroute($stop,$time,$bid,$rid,$uid);
	}
}
$res=$ob->addbusdet($bid,$bustype,$regno,$did,$rid);
header ("location:buses.php");
?>