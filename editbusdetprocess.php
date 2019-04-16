<?php
if(isset($_POST["cancel"]))
{
	header ("location:busdetails.php");
}
$bid=$_POST["hbid"];
$regno=$_POST["regno"];
$btype=$_POST["bustype"];
$rname=$_POST["rname"];
$uid1=$_POST["huid1"];
$uid2=$_POST["huid2"];
$sn1=$_POST["hsn1"];
$sn2=$_POST["hsn2"];
include ("query.php");
$ob=new query();
$rid=$ob->checkroute($rname);
$res=$ob->editbusdet($bid,$regno,$btype,$rid);
$res=$ob->deleteroute($uid1);
$res=$ob->deleteroute($uid2);
//route1
for($i=1;$i<=$sn1;$i++)
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
	$res=$ob->addroute($stop,$time,$bid,$rid,$uid1);
	
	}
}
}
//route2
for($i=$sn1+1;$i<=$sn2;$i++)
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
	$res=$ob->addroute($stop,$time,$bid,$rid,$uid2);
	
	}
}
}
header ("location:busdetails.php");