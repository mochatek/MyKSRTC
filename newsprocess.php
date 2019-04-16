<?php
session_start();
$did=$_SESSION["did"];
$title=$_POST["ttl"];
$body=$_POST["bdy"];
$clr=$_POST["clr"];
include ("query.php");
$ob=new query();
$rs=$ob->postnews($did,date("d/m/y"),$title,$clr,$body);
header ("location:news.php");
?>