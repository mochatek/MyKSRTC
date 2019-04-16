<?php
if(isset($_POST["cancel"]))
{
header ("location:depothome.php");	
}
$lid=$_POST["lid"];
$dname=$_POST["dname"];
$contact=$_POST["contact"];
$email=$_POST["email"];
include ("query.php");
$ob=new query();
$rs=$ob->updatedepot($lid,$dname,$contact,$email);
if($rs>0)
{
header ("location:depothome.php?lid=$lid");
}
?>