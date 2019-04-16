<?php
$name=$_POST["name"];
$email=$_POST["email"];
$rating=$_POST["hrt"];
$cmnt=$_POST["cmnt"];
$date=date("d/m/y");
include ("query.php");
$ob=new query();
$rs=$ob->addfeedback($name,$email,$rating,$cmnt);
if($rs>0)
{
header("location:userhome.php");
}
?>