<?php
if(isset($_POST["pay"]))
{
session_start();
$uid=$_SESSION["lid"];
$scnct=$_POST["scnct"];
$rcnct=$_POST["rcnct"];
$from=$_POST["from"];
$to=$_POST["to"];
$item=$_POST["item"];
$weight=$_POST["weight"];
$d=$_POST["delivery"];
$date=date("d/m/y");
$amnt=$_POST["hamnt"];
include("query.php");
$ob=new query();
$rs=$ob->addcourier($date,$scnct,$rcnct,$item,$weight,$d,$amnt,$from,$to,$uid);
if($rs>0)
{
	header("location:courierbooking.php");
}
}
if(isset($_POST["cancel"]))
{
	header("location:courierbooking.php");
}
?>