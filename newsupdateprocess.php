<?php
if (isset($_POST["cancel"]))
{
header ("location:news.php");	
}
if (isset($_POST["update"]))
{
$nid=$_POST["hnid"];
$title=$_POST["ttl"];
$color=$_POST["clr"];
$body=$_POST["bdy"];
include ("query.php");
$ob=new query();
$rs=$ob->updatenews($nid,$title,$color,$body);
header ("location:news.php");
}
?>