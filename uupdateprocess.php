<?php
if(isset($_POST["cancel"]))
{
header ("location:uhome.php");	
}
$lid=$_POST["lid"];
$uname=$_POST["uname"];
$contact=$_POST["contact"];
$email=$_POST["email"];
include ("query.php");
$ob=new query();
$rs=$ob->updateuser($lid,$uname,$contact,$email);
if($rs>0)
{
header ("location:uhome.php?lid=$lid");
}
?>